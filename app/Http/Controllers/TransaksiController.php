<?php

namespace App\Http\Controllers;

use App\Transaksi;
use App\Debit;
use App\Kredit;
use App\User;
use App\KodeAkun;
use App\DetailTransaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
   
    public function all()
    {
        return response()->json(Transaksi::with('debits', 'kredits')->get(),200);
    }

    public function neracaSaldo(Request $request, $year, $month)
    {
        if($request->has('Id')){
            $getKredit = DB::table('transaksis')
                    ->join('kredits', 'transaksis.id', '=', 'kredits.transaksi_id')
                    ->join('kode_akuns', 'kredits.kode_akun_id','=', 'kode_akuns.id')
                    ->select('kredits.nominal', 'kode_akuns.nama_akun', 'kode_akuns.kode_akun')
                    ->whereYear('tanggal_transaksi', $year)
                    ->whereMonth('tanggal_transaksi', $month)
                    ->get();
            $getDebit = DB::table('transaksis')
                    ->join('debits', 'transaksis.id', '=', 'debits.transaksi_id')
                    ->join('kode_akuns', 'debits.kode_akun_id','=', 'kode_akuns.id')
                    ->select('debits.nominal', 'kode_akuns.nama_akun', 'kode_akuns.kode_akun')
                    ->whereYear('tanggal_transaksi', $year)
                    ->whereMonth('tanggal_transaksi', $month)
                    ->get();
            return response()->json([  
                                    'Kredit'=>$getKredit,
                                    'Debit'=>$getDebit,
                                    ],200);
        }
        return response()->json('Data Tidak Ditemukan', 404);
    }
    
    public function selectedTransaksi(Request $request, $year, $month)
    {
        if($request->has('Id')){
            return response()->json(
                Transaksi::with([
                    'debits:id,nominal,kode_akun_id,transaksi_id',
                    'debits.kodeakuns:id,kode_akun,nama_akun',
                    'kredits:id,nominal,kode_akun_id,transaksi_id',
                    'kredits.kodeakuns:id,kode_akun,nama_akun'
                    ])
                ->select('id','jenis_transaksi','keterangan_transaksi','tanggal_transaksi')
                ->whereYear('tanggal_transaksi', $year)
                ->whereMonth('tanggal_transaksi', $month)
                ->whereRaw('user_id', $request->input('Id'))
                ->get()
                ,200);
        }
        return response()->json('Data Tidak Ditemukan', 404);
    }

    public function test(Request $request, $year, $month)
    {
        if($request->has('Id')){
            $transaksi=DB::table('transaksis')
            ->join('users', 'users.id', '=', 'transaksis.user_id')
            ->join('debits', 'debits.transaksi_id', '=', 'transaksis.id')
            ->join('kredits', 'kredits.transaksi_id', '=', 'transaksis.id')
            ->join('kode_akuns','kode_akuns.id','=','debits.kode_akun_id')
            // ->join('kode_akuns','kodeakuns.id','=','kredits.kode_akun_id')            
            ->where('kode_akuns.kode_akun','LIKE', '4%')
            ->orWhere('kode_akuns.kode_akun','LIKE', '5%')
            ->whereYear('transaksis.tanggal_transaksi', $year)
            ->whereMonth('transaksis.tanggal_transaksi', $month)
            ->whereRaw('transaksis.user_id', $request->input('Id'))
            ->select('transaksis.id', 'debits.nominal','kode_akuns.kode_akun', 'kode_akuns.nama_akun')
            ->get();
            return $transaksi;
        }
    }

    public function labaRugi(Request $request, $year, $month)
    {
        if($request->has('Id')){
            // if($request->has($tanggal)){
                return response()->json(
                    Transaksi::with([
                        'debits:id,nominal,kode_akun_id,transaksi_id',
                        'debits.kodeakuns' => function($query) {
                            $query->where('kode_akun','LIKE','4%')
                                    ->orWhere('kode_akun','LIKE','5%');
                            $query->select('id','kode_akun','nama_akun');
                        },
                        'kredits:id,nominal,kode_akun_id,transaksi_id',
                        'kredits.kodeakuns' => function($query) {
                            $query->where('kode_akun','LIKE','4%')
                                    ->orWhere('kode_akun','LIKE','5%');
                            $query->select('id','kode_akun','nama_akun');
                        }
                        ])
                    ->select('id')
                    ->whereYear('tanggal_transaksi', $year)
                    ->whereMonth('tanggal_transaksi', $month)
                    ->whereRaw('user_id', $request->input('Id'))
                    ->get()
                    ,200);
            // }
        }
        return response()->json('Data Tidak Ditemukan', 404);
    }

    //API Transaksi - User Only
    public function transaksiUser(Request $request)
    {
        if($request->has('Id')){
            return response()->json(
                Transaksi::with([
                    'debits:id,nominal,kode_akun_id,transaksi_id',
                    'debits.kodeakuns:id,kode_akun,nama_akun',
                    'kredits:id,nominal,kode_akun_id,transaksi_id',
                    'kredits.kodeakuns:id,kode_akun,nama_akun'
                    ])
                ->select('id','jenis_transaksi','keterangan_transaksi','tanggal_transaksi')
                ->where('user_id', '=', $request->input('Id'))
                ->get()
                ,200);
        }
        return response()->json('Data Tidak Ditemukan', 404);
    }

    public function index()
    {
        return response()->json(Transaksi::all(),200);
    }

    
    public function store(Request $request)
    {
        $transaksi = null;
        DB::transaction(function() use($request, &$transaksi)
        {
            //create Transaksi
            $transaksi = Transaksi::create
            ([
                'jenis_transaksi' => $request->input('jenis_transaksi'),
                'keterangan_transaksi' => $request->input('keterangan_transaksi'),
                'tanggal_transaksi' => $request->input('tanggal_transaksi'),
                'user_id' => $request->input('user_id')
            ]);

            foreach ($request->input('debit') as $debitDetails){
             DetailTransaksi::create([
                'kode_akun_id' => $debitDetails['kode_akun_id'],
                'nominal' => $debitDetails['nominal'],
                'transaksi_id' => $transaksi->id,
                'is_debit' => true,
            ]);
            }
            
            foreach ($request->input('kredit') as $kreditDetails){
            DetailTransaksi::create
                ([
                    'kode_akun_id' => $kreditDetails['kode_akun_id'],
                    'nominal' => $kreditDetails['nominal'],
                    'transaksi_id' => $transaksi->id,
                    'is_debit' => false,
                ]);
            }

        },3);

        return response()->json
        ([
            'Status' => (bool) $transaksi,
            'Message' => $transaksi ? 'Berhasil Menambah Transaksi Baru' : 'Gagal Menambahkan Transaksi Baru'
        ]);
    }

    
    public function show(Transaksi $transaksi)
    {
        $status = Transaksi::with(['details'])
        ->find($transaksi);
        return response()->json($status->first(),200);
    }

    
    public function update(Request $request, Transaksi $transaksi)
    {
        DB::transaction(function() use($request, &$transaksi)
        {
            $status = $transaksi->update(
                $request->only(['jenis_transaksi','keterangan_transaksi','tanggal_transaksi'])
            );
            
            //Update Debit
            $status = $transaksi->debits()->update(
                $request->only(['akun_debit','nominal'])
            );

            //Update Kredit
            $status = $transaksi->kredits()->update(
                $request->only(['akun_kredit','nominal'])
            );

        },3);

        return response()->json
        ([
            'Status' => (bool) $transaksi,
            'Message' => $transaksi ? 'Berhasil Mengupdate Transaksi' : 'Gagal Mengupdate Transaksi'
        ]);

    }

    public function destroy(Transaksi $transaksi)
    {        
        $transaksi->debits()->delete();
        $transaksi->kredits()->delete();
        $transaksi->delete();
        
        return response()->json([
            'Status' => (bool) $transaksi,
            'Message' => $transaksi ? 'Jurnal Terhapus' : 'Gagal Menghapus Jurnal'
        ]);
    }

    public function deleteAll(User $user){
        $status = DB::transaction(function() use($user){
            $transakasi = DB::table('transaksis')->where('user_id',$user)->truncate();
            $transaksi = DB::table('kredits')->truncate();
            $transaksi = DB::table('transaksis')->truncate();
            $kodeakun =  KodeAkun::where('deleteable', true)->delete();          
        });
        return response()->json([
            'status' => $status,
            'message' => $status? 'Failed Wipe Data' : 'Wiped All'
        ]);
    }
}

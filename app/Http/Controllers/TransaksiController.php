<?php

namespace App\Http\Controllers;

use App\Transaksi;
use App\Debit;
use App\Kredit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
   
    public function all()
    {
        return response()->json(Transaksi::with('debits', 'kredits')->get(),200);
    }

    public function transaksiUser(Request $request)
    {
        if($request->has('Id')){
            return response()->json(
                Transaksi::with([
                    'debits:id,nominal_debit,kode_akun_id,transaksi_id',
                    'debits.kodeakuns:id,kode_akun,nama_akun',
                    'kredits:id,nominal_kredit,kode_akun_id,transaksi_id',
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
             Debit::create([
                'kode_akun_id' => $debitDetails['kode_akun_id'],
                'nominal_debit' => $debitDetails['nominal_debit'],
                'transaksi_id' => $transaksi->id,
            ]);
            }
            
            foreach ($request->input('kredit') as $kreditDetails){
            Kredit::create
                ([
                    'kode_akun_id' => $kreditDetails['kode_akun_id'],
                    'nominal_kredit' => $kreditDetails['nominal_kredit'],
                    'transaksi_id' => $transaksi->id,
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
        $status = Transaksi::with(['debits','kredits'])
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
                $request->only(['akun_debit','nominal_debit'])
            );

            //Update Kredit
            $status = $transaksi->kredits()->update(
                $request->only(['akun_kredit','nominal_kredit'])
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
}

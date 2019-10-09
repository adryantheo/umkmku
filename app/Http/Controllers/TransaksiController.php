<?php

namespace App\Http\Controllers;

use App\Transaksi;
use App\Debit;
use App\Kredit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
   
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
            ]);
            
            //create Debit
            $debit = Debit::create
            ([
                'akun_debit' => $request->input('akun_debit'),
                'nominal_debit' => $request->input('nominal_debit'),
                'transaksi_id' => $transaksi->id,
            ]);

            //create Kredit
            $kredit = Kredit::create
            ([
                'akun_kredit' => $request->input('akun_kredit'),
                'nominal_kredit' => $request->input('nominal_kredit'),
                'transaksi_id' => $transaksi->id,
            ]);

        },3);

        return response()->json
        ([
            'Status' => (bool) $transaksi,
            'Message' => $transaksi ? 'Berhasil Menambah Transaksi Baru' : 'Gagal Menambahkan Transaksi Baru'
        ]);
    }

    
    public function show(Transaksi $transaksi)
    {
        //
    }

    
    public function update(Request $request, Transaksi $transaksi)
    {
        //
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

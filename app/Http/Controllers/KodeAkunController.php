<?php

namespace App\Http\Controllers;

use App\KodeAkun;
use Illuminate\Http\Request;

class KodeAkunController extends Controller
{
   
    public function index()
    {
        return response()->json(KodeAkun::all(),200);
    }

    
    public function store(Request $request)
    {
        $kodeAkun = KodeAkun::create
        ([
            'kode_akun' => $request->kode_akun,
            'nama_akun'  => $request->nama_akun,
        ]);

        return response()->json
        ([
            'status' => (bool) $kodeAkun,
            'data' => $kodeAkun,
            'messege' => $kodeAkun ? 'Kode Akun Berhasil Ditambakan' : 'Gagal Menambahkan Kode Akun'
        ]);
    }

   
    public function show(KodeAkun $kodeAkun)
    {
        return response()->json($kodeAkun, 200);
    }

   
    public function update(Request $request, KodeAkun $kodeAkun)
    {
        if($kodeAkun)
        {
            $status = $kodeAkun->update
            (
                $request->only
                ([
                    'kode_akun',
                    'nama_akun'
                ])
            );

            return response()->json
            ([
                'status' => $status,
                'messege' => $status ? 'Kode Akun Berhasil Diupdate' : 'Kode Akun Gagal Diupdate'
            ]);
        }
        else
        {
            return response()->json('Data Tidak Ditemukan', 404);
        }
        
    }

    
    public function destroy(KodeAkun $kodeAkun)
    {
        $status = $kodeAkun->delete();

        return response()->json
        ([
            'status' => $status,
            'messege' => $status ? 'Kode Akun Berhasil Dihapus' : 'Gagal Menghapus Kode Akun'
        ]);
    }
}

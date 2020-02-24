<?php

namespace App\Http\Controllers;

use App\KodeAkun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KodeAkunController extends Controller
{
   
    public function index()
    {
        return response()->json(KodeAkun::with(['debits','kredits'])->get(),200);
    }

    
    public function store(Request $request)
    {
        $kodeAkun = KodeAkun::create
        ([
            'kode_akun' => $request->kode_akun,
            'nama_akun'  => $request->nama_akun,
            'user_id' => $request->user_id,
        ]);

        return response()->json
        ([
            'status' => (bool) $kodeAkun,
            'data' => $kodeAkun,
            'message' => $kodeAkun ? 'Kode Akun Berhasil Ditambakan' : 'Gagal Menambahkan Kode Akun'
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
                'message' => $status ? 'Kode Akun Berhasil Diupdate' : 'Kode Akun Gagal Diupdate'
            ]);
        }
        else
        {
            return response()->json('Data Tidak Ditemukan', 404);
        }
        
    }
    //Delete One by Id
    public function destroy(KodeAkun $kodeAkun)
    {
        $status = $kodeAkun->delete();
        return response()->json
        ([
            'status' => $status,
            'message' => $status ? 'Kode Akun Berhasil Dihapus' : 'Gagal Menghapus Kode Akun'
        ]);
    }
    
    //Delete All
    public function deleteAll(Request $request){
        $status = KodeAkun::where('deleteable', true)->where('user_id',$request->input('user_id'))->delete();
        return response()->json([
            'status' =>(bool) $status, 
            'message' => $status ? 'Wiped All' : 'Failed Wipe All Data'
        ]);
    }
}

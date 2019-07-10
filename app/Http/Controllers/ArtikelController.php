<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    
    public function index()
    {
        return response()->json(Artikel::all(),200);
    }

    public function store(Request $request)
    {
        $artikel = Artikel::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $this->uploadGambar($request),
        ]);
        
        return response()->json([
            'status' => (bool) $artikel,
            'data' => $artikel,
            'message' => $artikel ? 'Artikel Berhasil Ditambahkan!' : 'Error Menambahkan Artikel' 
        ]);
    }

    public function uploadGambar(Request $request, $name = null)
    {
        if($request->hasFile('gambar')){
            $image = $request->file('gambar');

            if (is_null($name)) {
                $name = time() . "_" . rand(1000, 1000000) . "." . $image->getClientOriginalExtension();
            }

            $image->move(public_path('images'), $name);

            return '/images/'.$name;
        }

        return '';
    }

    public function show(Artikel $artikel)
    {
        return response()->json($artikel,200);
    }

    public function update(Request $request, $artikel)
    {
        $status = Artikel::find($artikel);
        $status->judul = $request['judul'];
        $status->isi = $request['isi'];
        if($request->hasFile('gambar')){
            $status->gambar = $this->uploadGambar($request);
        }
        $status->update();
        
        return response()->json([
            'status' => $status,
            'message' => $status ? 'Artikel Diupdate!!' : 'Error Mengupdate Artikel'
        ]);

    }

    public function destroy(Artikel $artikel)
    {
        $status = $artikel->delete();

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Artikel Berhasil Dihapus' : 'Artikel Gagal Dihapus'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function tambah(Request $request){
        $request->validate([
            'gambar' => 'required',
            'nama' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'operasional' => 'required',
            'kategori' => 'required',
        ]);

        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('product'), $imageName);

        $pariwisata = new Wisata();
        $pariwisata->gambar = 'product/'.$imageName;
        $pariwisata->nama = $request->nama;
        $pariwisata->lokasi = $request->lokasi;
        $pariwisata->deskripsi = $request->deskripsi;
        $pariwisata->operasional = $request->operasional;
        $pariwisata->kategori_id = $request->kategori;
        $pariwisata->save();

        return redirect('/pariwisata');

    }

    public function edit(Request $request, $id){
        $request->validate([
            'gambar' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048,' ,
            'nama' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'operasional' => 'required',
            'kategori' => 'required',
        ]);

        $pariwisata = Wisata::find($id);
        $pariwisata->nama = $request->nama;
        $pariwisata->lokasi = $request->lokasi;
        $pariwisata->deskripsi = $request->deskripsi;
        $pariwisata->operasional = $request->operasional;
        $pariwisata->kategori_id = $request->kategori;

        if ($request->hasFile('gambar')) {
            if ($pariwisata->gambar && file_exists(public_path($pariwisata->gambar))) {
                unlink(public_path($pariwisata->gambar)); // Menghapus file dari direktori publik
            }

            $imageName = time() . '.' . $request->gambar->extension();

            $request->gambar->move(public_path('product'), $imageName);

            $pariwisata->gambar = 'product/' . $imageName;
        } else {
            unset($request->gambar);
        }
        $pariwisata->save();
        return redirect('/pariwisata'); 
    }

    public function show($id){
        $pariwisata = Wisata::find($id);
        return view('editpariwisata', [
            'pariwisata' => $pariwisata,
            'kategori' => Kategori::all()
        ]);
    }

    public function delete(Request $request){
        $pariwisata = Wisata::find($request->id);
        $pariwisata->delete();
        return redirect('/pariwisata');
    }

    public function showDetail($id) {
        $wisata = Wisata::with('kategori')->findOrFail($id);
        return view('detail', compact('wisata'));
    }

    public function filter(Request $request)
    {
        $category = $request->input('category');

        // Ambil data wisata berdasarkan kategori yang dipilih
        $data = Wisata::whereHas('kategori', function ($query) use ($category) {
            $query->where('nama', $category);
        })->get();

        // Kembalikan view dengan data yang difilter
        return view('destinasi', compact('data'));
    }

}

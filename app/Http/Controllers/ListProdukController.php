<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    /**
     * Menampilkan halaman daftar produk dengan harga > 1 juta
     */
    public function show()
    {
        $produk = Produk::where('harga', '>', 1000000)
            ->orderBy('created_at', 'desc')
            ->get();

        // Siapkan array untuk view
        $nama = [];
        $desc = [];
        $harga = [];
        $created = [];
        $id = [];

        foreach ($produk as $p) {
            $nama[]    = $p->nama;
            $desc[]    = $p->deskripsi ?? '-';
            $harga[]   = $p->harga;
            $created[] = $p->created_at;
            $id[]      = $p->id;
        }

        return view('list_produk', compact('nama', 'desc', 'harga', 'created', 'id'));
    }

    /**
     * Menyimpan produk baru
     */
    public function simpan(Request $request)
    {
        $request->validate([
            'nama'  => 'required|string|max:255',
            'harga' => 'required|numeric|min:1',
        ]);

        Produk::create([
            'nama'      => $request->nama,
            'harga'     => $request->harga,
            'deskripsi' => $request->deskripsi ?? null,
        ]);

        return redirect()->back()->with('success', 'Produk berhasil disimpan!');
    }

    /**
     * Menghapus produk
     */
    public function delete($id)
    {
        $produk = Produk::find($id);

        if ($produk) {
            $produk->delete();
            return redirect()->back()->with('success', 'Produk berhasil dihapus!');
        }

        return redirect()->back()->with('error', 'Produk tidak ditemukan.');
    }

   
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('edit_produk', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'  => 'required|string|max:255',
            'harga' => 'required|numeric|min:1',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update([
            'nama'      => $request->nama,
            'harga'     => $request->harga,
            'deskripsi' => $request->deskripsi ?? null,
        ]);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diupdate!');
    }
}

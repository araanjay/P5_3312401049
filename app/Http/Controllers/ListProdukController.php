<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    public function show()
    {
        // Ambil produk dengan harga > 1 juta dan urutkan dari yang terbaru
        $produk = Produk::where('harga', '>', 1000000)
            ->orderBy('created_at', 'desc')
            ->get();

        // Siapkan array untuk dikirim ke view
        foreach ($produk as $p) {
            $nama[] = $p->nama;
            $desc[] = $p->deskripsi;
            $harga[] = $p->harga;
            $created[] = $p->created_at;
        }

        // Kirim data ke view
        return view('list_produk', compact('nama', 'desc', 'harga', 'created'));
    }
    public function simpan(Request $request)
    {
        $produk = new Produk;
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->save();

        return redirect()->back(); // atau redirect ke halaman lain
    }
}

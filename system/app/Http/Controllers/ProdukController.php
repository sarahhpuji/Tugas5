<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller {
    function index2(){
        $data['list_produk'] = Produk::all();
        return view('/produk.index2', $data);
    }
    function create(){
        return view('/produk.create');
    }
    function store(){
        $Produk = new Produk;
        $Produk->nama = request('nama');
        $Produk->harga = request('harga');
        $Produk->berat = request('berat');
        $Produk->deskripsi = request('deskripsi');
        $Produk->stok = request('stok');
        $Produk->save();

        return redirect('produk')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(Produk $Produk){
        $data['Produk'] = $Produk;
        return view('Produk.show', $data);
    }
    function edit(Produk $Produk){
        $data['produk'] = $Produk;
        return view('produk.edit', $data);
    }
    function update(Produk $Produk){
        $Produk->nama = request('nama');
        $Produk->harga = request('harga');
        $Produk->berat = request('berat');
        $Produk->deskripsi = request('deskripsi');
        $Produk->stock = request('stock');
        $Produk->save();

        return redirect('produk')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Produk $Produk){
        $Produk->delete();

        return redirect('produk')->with('danger', 'Data Berhasil Dihapus');

    }
}
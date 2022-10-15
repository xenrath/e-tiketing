<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $listproduk = Produk::paginate(3);
        return view('back.produk.index', compact('listproduk'));
    }

    public function create(Produk $produk)
    {
        return view('back.produk.create', compact('produk'));
    }

    public function store(Request $request)
    {
        $data = new Produk;
        $data->id = $request->id;
        $data->category = $request->category;
        $data->jenis = $request->jenis;
        $data->model = $request->model;
        $data->save();
        return redirect('back.produk.index');
    }

    public function edit(Produk $produk)
    {
        return view('.back.produk.edit', compact('produk'));
    }


    public function update(Request $request, $id)
    {

        $data = Produk::find($id);
        $data->id = $request->id;
        $data->category = $request->category;
        $data->jenis = $request->jenis;
        $data->model = $request->model;
        $data->save();
        return redirect('back.produk.index')->with('status', 'Berhasil mengubah produk');
    }

    public function show(Produk $produk)
    {
        return view('.back.produk.detail', compact('produk'));
    }

    public function destroy($id)
    {
       $data = Produk::find($id);
       $data->delete();
       return redirect('back.produk.index');
    }
}

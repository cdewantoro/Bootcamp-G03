<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // menampilkan semua data
    public function index()
    {
        $products = Product::all();

        return response()->json([
            "message" => "Product berhasil diambil",
            "code" => 200,
            "data" => $products
        ]);
    }

    // menampilkan tapi berdasarkan id 
    public function show($id)
    {
        $products = Product::find($id);

        return response()->json([
            "message" => "Product berhasil diambil",
            "code" => 200,
            "data" => $products
        ]);
    }

    // menambahkan data
    public function add(Request $request)
    {
        $cek = $request->validate([
            "nama" => "required",
            "desc" => "required",
            "harga" => "required|numeric",
        ]);

        $products = Product::create($cek);

        return response()->json([
            "message" => "Product berhasil ditambahkan",
            "code" => 200,
            "data" => $products
        ]);
    }

    // edit or update

    public function edit(Request $request, $id)
    {
        $cek = $request->validate([
            "nama" => "required",
            "desc" => "required",
            "harga" => "required|numeric",
        ]);

        $products = Product::find($id);

        $products->nama = $cek['nama'];
        $products->desc = $cek['desc'];
        $products->harga = $cek['harga'];

        $products->save();

        return response()->json([
            "message" => "Product berhasil diupdate",
            "code" => 200,
            "data" => $products
        ]);
    }

    //  Hapus
    public function delete($id) {
     $products = Product::find($id);
     $products->delete();

     return response()->json([
        "message" => "Product berhasil dihapus",
        "code" => 200,
     ]);

    }


}

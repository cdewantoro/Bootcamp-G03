<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // show all products
    public function index() {
        $products = Product::all();

        return response()->json([
            'message' => 'Product Berhasil Diambil',
            'code' => 200,
            'data' => $products
        ]);
    }

    // show product
    public function show($id) {
        $products = Product::find($id);

        return response()->json([
            'message' => 'Product Berhasil Diambil',
            'code' => 200,
            'data' => $products
        ]);
    }

    // store new product
    public function store(Request $request)
    {
        $data = $request -> validate ([
            'nama' => 'required',
            'desc' => 'required',
            'foto' => 'required|image',
            'harga' => 'required|numeric',

        ]);

        if($request -> hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            $data['foto'] = $imageName;
        }
        $products = Product::create($data);

        return response()->json([
            'message' => 'Product Berhasil Disimpan',
            'code' => 200,
            'data' => $products
        ]);
    }

    // edit product
    public function edit(Request $request, $id)
    {
        $data = $request -> validate ([
            'nama' => 'required',
            'desc' => 'required',
            'foto' => 'required|image',
            'harga' => 'required|numeric',

        ]);

        $products = Product::find($id);

        if($request -> hasFile('foto')) {
            // cek dan hapus yang lama
            if(!empty($products->foto)) {
                $imagePath = public_path('images/'.$products->foto);

                if(file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $image = $request->file('foto');
            $imageName = time() . '_' . $image->getClientOriginalExtension();
            $image->move(public_path('images'),$imageName);

            $data['foto'] = $imageName;
        }

        $products->update($data);

        return response()->json([
            'message' => 'Product Berhasil Di update',
            'code' => 200,
            'data' => $products
        ]);
    }

    // delete product
    public function delete($id) {
        $products = Product::find($id);
        // cek ada foto nya atau tidak kalo ada di unlink
        if(!empty($products->foto)) {
            $imagePath = public_path('images/'.$products->foto);

            if(file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $products->delete();

        return response()->json([
            'message' => 'Product Berhasil Dihapus',
            'code' => 200,
            'data' => $products
        ]);
    }

    public function search($nama) {
        $result = Product::where('nama','LIKE', '%'.$nama.'%')->get();
        if (count($result)) {
            return response()->json([
                'message' => 'Product ditemukan',
                'code' => 200,
                'data' => $result
            ]);
        } else {
            return response()->json([
                'message' => 'Product tidak ditemukan',
                'code' => 200,
                'data' => $result
            ]);
        }
    }
}

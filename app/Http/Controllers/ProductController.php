<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();

        return view('product.index',[
            'products' => $data
        ]);
    }

    public function add()
    {
        return view('product.create');
    }

    public function create(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Detail' => 'required',
        ]);

        $product = new Product();
        $product->Name = request()->Name;
        $product->Detail = request()->Detail;
        $product->save();

        return redirect('/products')->with('info', 'A New Product Created !');
    }

    public function detail($id)
    {
        $data = Product::find($id);

        return view('product.show',[
            'product' => $data
        ]);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/products')->with('info', 'A Product Deleted !');
    }

    public function edit($id)
    {
        $data = Product::find($id);

        return view('product.edit',[
            'product' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Name' => "required",
            'Detail' => "required",
        ]);

        $product = Product::find($id);
        $product->Name = request()->get('Name');
        $product->Detail = request()->get('Detail');
        $product->save();

        return redirect('/products')->with('info', 'A Product Updated !');
    }

}

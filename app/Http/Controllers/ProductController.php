<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        $data = array();
        $data['products'] = Product::all();
        return view("products.products",$data);
    }

    public function create()
    {
        return view("products.create");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "name"=>"required",
            "qty"=>"required|numeric",
            "description"=>"nullable",
            "price"=>"required|decimal:0,2"
        ]);

        $new_product = Product::create($data);

        return redirect(route('product.index'));
    }

    public function edit(Product $product)
    {
        $data = array();
        $data['product'] = $product;
        return view("products.edit",$data);
    }

    public function update(Product $product,Request $request)
    {
        $data = $request->validate([
            "name"=>"required",
            "qty"=>"required|numeric",
            "description"=>"nullable",
            "price"=>"required|decimal:0,2"
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success','Product edited successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('product.index'))->with('success','Product deleted successfully');
    }
}

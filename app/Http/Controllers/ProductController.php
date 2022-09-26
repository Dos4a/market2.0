<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }

    public function create()
    {
        return view('productAdd');
    }


    public function store(Request $request)
    {
        Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image_id' => $request->image_id,
        ]);

        return redirect(route('product.index'));
    }

    public function edit($id)
    {
        $data = Product::find($id);

        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $products = Product::find('id', $id);

        $products->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image_id' => $request->image_id,
        ]);

        return redirect(route('product.index'));
    }

    public function destroy($id)
    {
        DB::table('products')->where('id', $id)->delete();

        return redirect(route('product.index'));
    }
}

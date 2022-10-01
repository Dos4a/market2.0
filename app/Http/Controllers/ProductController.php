<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('categories', 'comments')->orderBy('id')->paginate(15);

        return view('product.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create',[
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {

        $product = $request->validated();

        foreach($request->file('images') as $image) {
            $path = $image->store('/images/resource', ['disk' =>   'my_files']);
            $data[] = $path;
        }

        $product['images'] = json_encode($data);

        Product::create($product);

        return redirect()->route('product.index')->with('successCreate', 'You create successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        // $images = Storage::get(json_decode($product->images));

        // dd($images);

        return view('product.item', [
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('product.update', [
            'product' => $product,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        $data = $request->validated();

            foreach (json_decode($product->images) as $image) {
                $path = public_path($image);
                if (File::exists($path)) {
                    File::delete($path);
                }
            }

            if ($request->hasFile('images')) {
                foreach($request->file('images') as $image) {
                    $path = $image->store('/images/resource', ['disk' =>   'my_files']);
                    $images[] = $path;
                }
            }

            $data['images'] = json_encode($images);

        $product->update($data);

        return redirect()->route('product.index')->with('successUpdate', 'You update successfuly');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product->images != null and $product->images != '') {
            foreach (json_decode($product->images) as $image) {
                unlink(public_path($image));
            }
        }
        $product->delete();

        return redirect()->route('product.index')->with('successDelete', 'You delete successfuly');
    }
}

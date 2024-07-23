<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductsControllers extends Controller
{
    public function index() {
        $products = Product::with('category')->simplePaginate(7);

        return view('dashboard', [
            'products' => $products
        ]);
    }
    public function products() {
        $products = Product::simplePaginate(7);

        return view('products', ['products' => $products]);
    }
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:15',
            'description' => 'required',
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $file = $request->file('image');
        $name = $file->hashName();
        $extension = $file->extension();
        $fullName = time() . $name . '.' . $extension;

        $file->storeAs('public/images', $fullName);

        $path = Storage::url('public/images/' . $fullName);

        Product::create([
            'category_id' => $request['category_id'],
            'title' => $request['title'],
            'description' => $request['description'],
            'image_url' => $path
        ]);

        return redirect()->intended('/admin')->with('message', 'success added product!');
    }

    public function show(Product $product)
    {
        return view('edit-product', ['product' => $product]);
    }

    public function update(Request $request, Product $product): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:15',
            'description' => 'required',
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $file = $request->file('image');
        $name = $file->hashName();
        $extension = $file->extension();
        $fullName = time() . $name . '.' . $extension;

        $file->storeAs('public/images', $fullName);

        $path = Storage::url('public/images/' . $fullName);

        $product->category_id = $request['category_id'];
        $product->title = $request['title'];
        $product->description =  $request['description'];
        $product->image_url = $path;

        $product->save();

        return redirect()->intended('/admin')->with('message', 'successfully updated product');
    }

    public function admin() {
        $products = Product::simplePaginate(7);

        return view('admin', ['products' => $products]);
    }
    public function search(Request $request) {
        $products = Product::where('title', 'LIKE', "%$request->slug%")->simplePaginate(7);

        return view('search', ['products' => $products]);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        Storage::delete($product->image_url);

        return back()->with('message', 'successfuly delete product');
    }
}

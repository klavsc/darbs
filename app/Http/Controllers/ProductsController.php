<?php

namespace App\Http\Controllers;


use App\Models\Product;

class ProductsController extends Controller
{
    public function show(Product $product)
    {

        $product->load('deliveries');

        return view('products.show', [
            'product' => $product,
            'deliveries' => $product->deliveries()
        ]);
    }

    public function index()
    {
        $product = Product::all();
        $product->load('deliveries');

        return view('products.index',[
            'product' => $product
        ]);
    }

    public function create()
    {
        Product::create([
            'name' => $_POST['name'],
            'description' => $_POST['description'],
            'size' => $_POST['size'],
            'price' => $_POST['price'],
        ]);

        return redirect('/products');
    }

    public function update(Product $product)
    {
        $product->name = $_POST['name'];
        $product->description = $_POST['description'];
        $product->size = $_POST['size'];
        $product->price = $_POST['price'];

        $product->save();

        return redirect('/products');
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect('/products');
    }

}

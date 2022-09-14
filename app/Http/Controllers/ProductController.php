<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // dd($tasks);
        return view('layouts.product.index', compact('products'));
    }
    public function create()
    {
        return view('layouts.product.create');
    }
    public function store(Request $request)
    {
        // $create = $request->validate([
        //     'name' => 'required|string|max:30',
        //     'details' => 'required|string|max:255',
        //     'price' => 'required|numeric',
        //     'quantity' => 'required|numeric',
        // ]);

        // dd($create);
        $create = Product::create([
            'name' => $request->name,
            'details' => $request->details,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);
        $productModel = new Product;

        $abc = $productModel->setConnection('mysql_2');

        $create = $abc->create([
            'name' => $request->name,
            'details' => $request->details,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);


        return redirect()->route('home');
    }
}

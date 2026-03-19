<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class Day4DemoProductController extends Controller
{
    public function store()
    {
        $product = Product::create([
            'name' => 'iPhone',
            'price' => 30000
        ]);

        return response()->json($product);
    }

    public function index()
    {
        return response()->json(Product::all());
    }

    public function show($id)
    {
        return response()->json(Product::find($id));
    }
}

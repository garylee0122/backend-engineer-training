<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\Day5DemoStoreProductRequest;

class Day5DemoProductController extends Controller
{
    public function store(Day5DemoStoreProductRequest $request)
    {
        $product = Product::create($request->validated());

        return response()->json($product);
        //dd(get_class($request));
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

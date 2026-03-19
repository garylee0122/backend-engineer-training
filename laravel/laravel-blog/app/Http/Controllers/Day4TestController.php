<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class Day4TestController extends Controller
{
    public function create($name, $price)
    {
        $product = Product::create([
            'name' => $name,
            'price' => $price
        ]);

        return $this->success($product);
    }

    public function showall()
    {
        $product = Product::all();
        return $this->success($product);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return $this->success($product);
    }

    public function update($id, $name = null, $price = null)
    {
        $product = Product::find($id);
        if ($product) {
            $product->update([
                'name' => $name ?? $product->name,
                'price' => $price ?? (int)$product->price
            ]);
            return $this->success($product);
        }
        return response()->json(['status' => 'error', 'message' => 'Product not found'], 404);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return $this->success(null);
        }
        return response()->json(['status' => 'error', 'message' => 'Product not found'], 404);
    }

    public function success($data)
    {
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

}
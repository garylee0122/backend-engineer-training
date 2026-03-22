<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\Day5TestStoreProductRequest;

class Day5TestController extends Controller
{
    public function insert(Day5TestStoreProductRequest $request)
    {
        try 
        {
            $product = Product::create($request->validated());
            return $this->success($product);
        } 
        catch (\Illuminate\Database\QueryException $e) 
        {
            if ($e->getCode() == 23000) // Integrity constraint violation
            { 
                return $this->fail('the same product already exist');
            }
            throw $e; // Re-throw other exceptions
        }
    }

    public function showAll()
    {
        $products = Product::all();

        return $this->success($products);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        if (!$product) {
            return $this->fail('Product not found');
        }

        return $this->success($product);
    }

    private function success($data)
    {
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    private function fail($message)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message
        ]);
    }
}
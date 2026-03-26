<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function getProducts($request)
    {
        $query = Product::query();

        $query->when($request->filled('keyword'), function ($q) use ($request) {
            $q->where('name', 'like', '%' . $request->keyword . '%');
        });

        return $query->paginate(5);
    }

    public function createProduct(array $data)
    {
        return Product::create($data);
    }

    public function updateProduct($id, array $data)
    {
        $product = Product::findOrFail($id);
        $product->update($data);

        return $product;
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    }

    public function getProduct($id)
    {
        return Product::findOrFail($id);
    }
}
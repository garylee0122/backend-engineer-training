<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\Day6UpdateProductRequest;

class Day6TestController extends Controller
{
    public function update($id, Day6UpdateProductRequest $request)
    {
        $product = Product::findOrFail($id); // 找不到會自動丟出 404 錯誤

        $data = $request->validated(); // 這裡會自動驗證，如果驗證失敗會自動丟出 422 錯誤，並且回傳錯誤訊息；驗證成功會回傳驗證後的資料

        $product->update($data);

        return $this->success($product);
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Product deleted'
        ]);
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

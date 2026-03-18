<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Day3TestController extends Controller
{
    public function hello($name)
    {
        return $this->success([
            'message' => "Hello, $name"
        ]);
    }

    public function user($id)
    {
        return $this->success([
            'id' => $id,
            'name' => "User$id"
        ]);
    }

    public function product($id)
    {
        return $this->success([
            'id' => $id,
            'name' => "iPhone",
            'price' => 30000
        ]);
    }

    public function orders($id)
    {
        return $this->success([
            'id' => $id,
            'products' => [
                ['name' => 'iPhone', 'price' => 30000],
                ['name' => 'AirPods', 'price' => 6000]
            ]
        ]);
    }

    public function success($data)
    {
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }
}

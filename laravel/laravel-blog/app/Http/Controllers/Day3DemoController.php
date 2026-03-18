<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Day3DemoController extends Controller
{
    public function hello($name)
    {
        return response()->json([
            'message' => "Hello, $name"
        ]);
    }

    public function user($id, $name = null)
    {
        return response()->json([
            'id' => $id,
            'name' => $name ?? 'Test User'
        ]);
    }
}

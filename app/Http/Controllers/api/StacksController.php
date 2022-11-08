<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Stack;
use Illuminate\Http\Request;

class StacksController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => 200,
            'data' => Stack::all()
        ]);
    }
}

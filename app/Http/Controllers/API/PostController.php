<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;

class PostController extends Controller
{

    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Post::all()
        ], 200);
    }
}
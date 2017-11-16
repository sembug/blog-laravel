<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {
        $items = Post::all();
        return view('index', ['items' => $items]);
    }

    public function post($id)
    {
        $item = Post::find($id);
        return view('single', ['item' => $item]);
    }
}

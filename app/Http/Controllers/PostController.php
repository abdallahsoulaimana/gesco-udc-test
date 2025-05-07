<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\ViewController;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index()
    {
        return view('layouts.home', [
            'posts'=>Post::latest()->paginate('10'),
        ]);
    }

    public function show(Post $post): View
    {
        return view('layouts.show', [
            'post'=>$post,
        ]);
    }
}

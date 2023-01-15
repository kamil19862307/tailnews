<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        return view('login');
    }

    public function news()
    {
        $posts = Post::orderby('created_at', 'DESC')->limit(6)->get();

        return view('news', [
            'posts' => $posts,
        ]);
    }
}

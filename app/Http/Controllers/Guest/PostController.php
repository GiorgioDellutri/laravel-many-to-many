<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Post as Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('post_date', 'DESC')->paginate(20);
        return view('guest.posts.index', compact('posts'));
    }
}

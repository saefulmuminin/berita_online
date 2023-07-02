<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            'title' => 'all  blog',
            // 'post' => post::all()
            'post' => post::with(['user', 'category'])->latest()->get()
        ]);
    }
    public function show(post $post)
    {
        return view('post', [
            'title' => 'single post',
            'post' => $post
        ]);
    }
    public function authorPosts(User $user)
    {
        $post = $user->posts()->get();

        return view('blog', [
            'title' => "Post By Author: $user->name",
            'post' => $post->load('category', 'user'),
            'author' => $user
        ]);
    }
}

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
            'title' => 'blog',
            // 'post' => post::all()
            'post' => post::latest()->get()
        ]);
    }
    public function show(post $post)
    {
        return view('post', [
            'title' => 'post',
            'post' => $post
        ]);
    }
    public function authorPosts(User $user)
    {
        $posts = $user->posts()->get();

        return view('author', [
            'title' => 'Author Posts',
            'posts' => $posts,
            'author' => $user
        ]);
    }
}

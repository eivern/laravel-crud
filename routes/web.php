<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    // $post = Post::with(['author', 'category'])->get(); eiger load

    return view('posts', [
        'title' => 'Blogs',
        'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(6)->withQueryString()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('category', 'author'); lazy eiger load
    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('category', 'author'); lazy eiger load
    return view('posts', ['title' => count($category->posts) . ' Aticles in ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/table', function () {
    return view('table', ['title' => 'Alpine JS']);
});





<?php

use App\Models\post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');

// });


Route::get('/', function () {
    return view('home', [
        'title' => 'home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => 'about',
        'name' => "saeful mu'minin",
        'email' => 'saeful@gmail.com.',
        'image' => 'image/saeful.jpg'
    ]);
});
Route::get('/blog', [PostController::class, 'index']);
//halaman single post //
Route::get('/post/{post:slug}', [PostController::class, 'show']);


Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blog', [
        'title' => "Post By Category: $category->name",
        'post' => $category->post->load('category', 'user'),
    ]);
});

Route::get('/author/{user:username}', [PostController::class, 'authorPosts'])->name('author.posts');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.show');

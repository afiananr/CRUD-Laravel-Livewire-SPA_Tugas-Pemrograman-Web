<?php

use App\Models\Post;
use App\Http\Livewire\Post\Index;
use App\Http\Livewire\Post\Create;
use App\Http\Livewire\Post\Edit;

// Route::get('/', Index::class)->name('post.index');
// Route::get('/create', Create::class)->name('post.create');
// Route::get('/edit/{id}', Edit::class)->name('post.edit');

Route::get('/', function () {
    return view('posts.index'); // <-- ini harus punya <livewire:post.index />
})->name('post.index');;
Route::get('/create', function () {
    return view('posts.create');
})->name('post.create');

Route::get('/post/{id}/edit', function ($id) {
    $post = Post::findOrFail($id);
    return view('posts.edit', ['postId' => $post->id]);
})->name('post.edit');;

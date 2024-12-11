<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/signin', function () {
    return 'Signin Page';
});
Route::post('/signin', function () {
    return 'Signin Processed';
});

Route::get('/signup', function () {
    return 'Signup Page';
});
Route::post('/signup', function () {
    return 'Signup Processed';
});

Route::get('/', function () {
    return 'Home Page';
});

Route::get('/blog', function () {
    return 'Blog List';
});
Route::get('/blog/{slug}', function ($slug) {
    return "Blog Detail for slug: $slug";
});

Route::get('/blog-post/{blogId}', function ($blogId, Request $request) {
    $title = $request->query('title', 'Untitled');
    $content = $request->query('content', 'No content provided.');
    return "Blog ID: $blogId, Title: $title, Content: $content";
});


Route::get('/category/{slug}', function ($slug) {
    return "Category Page for slug: $slug";
});

Route::get('/author/{username}', function ($username) {
    return "Author Page for username: $username";
});

Route::get('/privacy-policy', function () {
    return 'Privacy Policy Page';
});

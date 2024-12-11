<?php

use Illuminate\Support\Facades\Route;

// Signin
Route::get('/signin', function () {
    return 'Form Signin';
});

Route::post('/signin', function () {
    return 'Process Signin Data';
});

// Signup
Route::get('/signup', function () {
    return 'Form Signup';
});

Route::post('/signup', function () {
    return 'Process Signup Data';
});

// Home
Route::get('/', function () {
    return 'Home Page';
});

// Blog
Route::get('/blog', function () {
    return 'List of Blog Articles';
});


// Route untuk Blog Post dengan parameter blogId, title, dan content
Route::get('/blog/{blogId}', function ($blogId) {
    // Ambil query string 'title' dan 'content' dari request (default jika tidak ada)
    $title = request()->query('title', 'Default Title');
    $content = request()->query('content', 'Default Content');
    
    // Return string gabungan parameter dan query
    return "Blog ID: $blogId, Title: $title, Content: $content";
});

Route::get('/blog/{slug}', function ($slug) {
    return "Blog Detail for Slug: $slug";
});

// Category
Route::get('/category/{slug}', function ($slug) {
    return "Articles in Category: $slug";
});

// Author
Route::get('/author/{username}', function ($username) {
    return "Articles by Author: $username";
});

// Privacy Policy
Route::get('/privacy-policy', function () {
    return 'Privacy Policy Page';
});

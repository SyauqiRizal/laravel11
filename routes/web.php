<?php

use illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title'=>'About', 'nama'=>'Asri Asrori']);
    //echo "Selamat Datang di halaman about";
});

Route::get('/posts', function () {
    return view('posts', ['title'=>'Blog', 'posts'=>[
        [
            'id'=>1,
            'slug'=>'Judul-Artikel-1',
            'title'=>'Judul Artikel 1',
            'author'=>'Asri Asrori',
            'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam, qui? Culpa reprehenderit a ad assumenda. Porro repellendus numquam placeat laboriosam, rem aperiam excepturi aliquid impedit fugiat sed dolorem voluptas ratione!'
        ],
        [
            'id'=>2,
            'slug'=>'judul-Artikel-2',
            'title'=>'Judul Artikel 2',
            'author'=>'Asri Asrori',
            'body'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero magni quaerat veniam quae provident, doloremque aperiam molestias quisquam quos autem dolores, fugiat at sequi nam animi deleniti eaque repudiandae quis!'
        ]
    ]]);
    //echo "Selamat Datang di halaman about";
});

Route::get('/posts/{id}', function ($id) {
    $posts = [
            [
            'id'=>1,
            'slug'=>'judul-Artikel-1',
            'title'=>'Judul Artikel 1',
            'author'=>'Asri Asrori',
            'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam, qui? Culpa reprehenderit a ad assumenda. Porro repellendus numquam placeat laboriosam, rem aperiam excepturi aliquid impedit fugiat sed dolorem voluptas ratione!'
            ],
            [
            'id'=>2,
            'slug'=>'judul-Artikel-2',
            'title'=>'Judul Artikel 2',
            'author'=>'Asri Asrori',
            'body'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero magni quaerat veniam quae provident, doloremque aperiam molestias quisquam quos autem dolores, fugiat at sequi nam animi deleniti eaque repudiandae quis!'
            ]
        ];
       
        $post = Arr::first($posts, function ($post) use ($id) {
            return $post['id'] == $id;
        });
       
       return view('post', ['title'=>'single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact',['title'=>'My Contact']);
    //echo "Selamat Datang di halaman about";
});



<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return "Products list";
});

Route::get('/products/{id}/{category?}', function ($id, $category = null) {
    if ($category != null){
        return "Detail product: " . $id . ". With Category: ". $category;
    }
    else{
        return "Detail product: " . $id;
    }
});

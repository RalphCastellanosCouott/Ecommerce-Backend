<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        return "Products list";
    }

    function detail($id, $category = null)
    {
        if ($category != null) {
            return "Detail product: " . $id . ". With Category: " . $category;
        } else {
            return "Detail product: " . $id;
        }
    }

    function create(){
        return "FORM FOR CREATE PRODUCTS";
    }
}

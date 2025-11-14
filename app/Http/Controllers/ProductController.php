<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        return view('products.index');
    }

    function detail($id, $category = null)
    {
        if ($category != null) {
            return view("products.detail", [
                'id' => $id,
                'category' => $category
            ]);
        } else {
            $category = "";
            return view("products.detail", compact('id', 'category'));
        }
    }

    function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('products.create', [
            'brands' => $brands,
            'categories' => $categories
        ]);
    }
}

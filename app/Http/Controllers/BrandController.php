<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        Brand::create([
            'name' => $request->get('name')
        ]);

        return redirect()->route('admin.brands.table');
    }

    public function table()
    {
        $brands = Brand::orderBy('id', 'asc')->paginate(10);
        return view('admin.brands.table', [
            'brands' => $brands
        ]);
    }
}

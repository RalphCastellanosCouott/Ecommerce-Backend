<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        Category::create([
            'name' => $request->get('name')
        ]);

        return redirect()->route('admin.categories.table');
    }

    public function table()
    {
        $categories = Category::orderBy('id', 'asc')->paginate(10);
        return view('admin.categories.table', [
            'categories' => $categories
        ]);
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        // Verificar si tiene productos asociados
        if ($category->products()->count() > 0) {
            return redirect()->route('admin.categories.table')
                ->with('error', 'No se puede eliminar esta marca porque tiene productos asociados.');
        }

        $category->delete();

        return redirect()->route('admin.categories.table')
            ->with('success', 'Marca eliminada correctamente.');
    }
}

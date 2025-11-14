<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\ImagesProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Obtener categorías
        $categories = Category::orderBy('name')->get();

        // Query con relación de imagen
        $query = Product::with(['category', 'images']);

        // Filtro por categoría
        if ($request->has('category') && $request->category != "") {
            $query->where('category_id', $request->category);
        }

        // Paginación
        $products = $query->paginate(12);

        return view('products.index', compact('products', 'categories'));
    }

    public function detail($id)
    {
        $product = Product::with(['brand', 'category', 'images'])->findOrFail($id);

        return view('products.detail', compact('product'));
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

    function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0|max:999999.99',
            'category' => 'required|exists:categories,id',
            'brand' => 'required|exists:brands,id'
        ]);
        $product = new Product();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->category_id = $request->get('category');
        $product->brand_id = $request->get('brand');

        $product->save();

        $imagenes = [
            'https://www.janus.com.co/cdn/shop/files/CXpri-M22-FALCONV930N.jpg?v=1760983129',
            'https://i.blogs.es/b332b0/xiaomi-tv-a-pro/650_1200.jpg',
            'https://luma.com.co/cdn/shop/files/image-Photoroom_67_8304b5c1-4e0a-45cf-83ea-ae180cdf4c60.png?v=1758641742',
            'https://exitocol.vtexassets.com/arquivos/ids/26384317/tablet-lenovo-m11-128gb-8gb-ram-lapiz-tap-pen-plus-folio-case.jpg?v=638727448724230000',
            'https://images-cdn.ubuy.co.in/653dca4638b3b6351c03b03e-smart-watch-for-android-and-iphone.jpg',
        ];

        // Escoger una imagen aleatoria
        $imagenUrl = $imagenes[array_rand($imagenes)];

        // Crear registro en images_product
        ImagesProduct::create([
            'product_id' => $product->id,
            'url' => $imagenUrl
        ]);

        return redirect()->route('admin.products.table');
    }

    public function table()
    {

        $products = Product::orderBy('id', 'asc')->paginate(10);
        return view('products.table', [
            'products' => $products
        ]);
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('admin.products.table')
            ->with('success', 'Producto eliminado correctamente.');
    }
}

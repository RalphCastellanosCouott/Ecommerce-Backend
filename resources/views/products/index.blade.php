@extends('layouts.app')

@section('content')
    <header>
        <h1>Productos Tecnológicos</h1>
    </header>

    {{-- =============== FILTRO POR CATEGORÍAS =============== --}}
    <div style="max-width: 400px; margin: 0 auto 40px;">
        <form method="GET" action="{{ url('/') }}">
            <select name="category" onchange="this.form.submit()">
                <option value="">Todas las categorías</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </form>
    </div>

    {{-- =============== LISTA DE PRODUCTOS =============== --}}
    <section class="product-list">

        @foreach ($products as $product)
            @php
                $img = optional($product->images->first())->url ?? 'https://via.placeholder.com/300';
            @endphp

            <a href="{{ url('products/' . $product->id) }}" class="product-card">
                <img src="{{ $img }}" alt="Producto">

                <h3>{{ $product->name }}</h3>

                <p><strong>Categoría:</strong> {{ $product->category->name }}</p>

                <p class="price">${{ number_format($product->price, 2) }}</p>
            </a>
        @endforeach

    </section>

    {{-- =============== PAGINACIÓN =============== --}}
    <div class="pagination-container">
        {{ $products->links() }}
    </div>
@endsection

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
</head>

</html>

@extends('layouts.app')

@section('content')
    <div class="product-detail-container" style="display: flex; gap: 40px; padding: 40px; max-width: 1100px; margin: auto;">

        <!-- Imagen del producto -->
        <div class="product-image" style="flex: 1;">
            <img src="{{ optional($product->images->first())->url ?? 'https://via.placeholder.com/400' }}"
                alt="{{ $product->name }}">
        </div>

        <!-- Información del producto -->
        <div class="product-info" style="flex: 1;">

            <h1 style="font-size: 32px; margin-bottom: 10px;">
                {{ $product->name }}
            </h1>

            <div class="brand-category" style="font-size: 16px; color: #555; margin-bottom: 10px;">
                Marca: <strong>{{ $product->brand->name }}</strong>
                &nbsp;|&nbsp;
                Categoría: <strong>{{ $product->category->name }}</strong>
            </div>

            <div class="availability" style="color: green; font-weight: bold; margin-bottom: 20px;">
                ✔ En stock
            </div>

            <div class="description" style="font-size: 17px; margin-bottom: 25px; line-height: 1.6;">
                {!! nl2br(e($product->description)) !!}
            </div>

            <div class="price" style="font-size: 28px; margin-bottom: 20px; font-weight: bold;">
                ${{ number_format($product->price, 2) }}
            </div>

            <div class="buttons" style="display: flex; gap: 15px;">
                <button class="buy-btn"
                    style="padding: 12px 20px; background: #1a73e8; border: none; color: white; border-radius: 8px; cursor: pointer;">
                    Comprar Ahora
                </button>

                <button class="add-to-cart-btn"
                    style="padding: 12px 20px; background: #34a853; border: none; color: white; border-radius: 8px; cursor: pointer;">
                    Agregar al Carrito
                </button>
            </div>

            <div style="margin-top: 25px;">
                <a href="{{ route('page') }}" style="text-decoration: none; color: #333;">
                    ⬅ Volver
                </a>
            </div>

        </div>
    </div>
@endsection
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto - Oppo Reno 12</title>

</head>

</html>

@extends('layouts.app')

@section('content')
    <header>
        <h1>Productos Tecnológicos</h1>
    </header>
    <section class="product-list">
        <div class="product-card">
            <img src="https://www.clevercel.co/cdn/shop/files/Caracteristica_capacidad_iphone_15_2024_1024x1024.png?v=1734104768"
                alt="Celular 1">
            <h3>iPhone 15</h3>
            <p class="price">$999.99</p>
        </div>

        <div class="product-card">
            <img src="https://images.samsung.com/is/image/samsung/p6pim/co/2401/gallery/co-galaxy-s24-ultra-clear-case-gp-fps928saatw-thumb-539255955"
                alt="Celular 2">
            <h3>Samsung Galaxy S24 Ultra</h3>
            <p class="price">$799.99</p>
        </div>

        <div class="product-card">
            <img src="https://www.oppo.com/content/dam/oppo/common/mkt/v2-2/reno-12-en/product/860-720-brown-silver.png"
                alt="Celular 3">
            <h3>Oppo Reno 12</h3>
            <p class="price">$649.99</p>
        </div>

        <div class="product-card">
            <img src="https://cdsassets.apple.com/live/7WUAS350/images/tech-specs/apple-watch-series-9.png"
                alt="Smartwatch 4">
            <h3>Apple Watch Series 9</h3>
            <p class="price">$199.99</p>
        </div>
    </section>
@endsection
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
</head>

</html>

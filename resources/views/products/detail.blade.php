@extends('layouts.app')

@section('content')
    <div class="product-detail-container">
        <!-- Imagen del producto -->
        <div class="product-image">
            <img src="https://www.oppo.com/content/dam/oppo/common/mkt/v2-2/reno-12-en/product/860-720-brown-silver.png"
                alt="Oppo Reno 12">
        </div>

        <!-- Información del producto -->
        <div class="product-info">
            <h1>Oppo Reno 12</h1>
            <div class="brand-category">
                Marca: <strong>Oppo</strong> &nbsp;|&nbsp; Categoría: <strong>Smartphone</strong> &nbsp;|&nbsp; Modelo:
                <strong>Reno 12</strong>
            </div>
            <div class="availability">✔ En stock</div>

            <div class="description">
                El <strong>Oppo Reno 12</strong> combina un diseño elegante con tecnología de vanguardia. Cuenta con una
                pantalla AMOLED de 6.7", cámara cuádruple con IA, y un potente procesador para un rendimiento fluido en
                todas tus aplicaciones favoritas.
            </div>

            <div class="specs">
                <ul>
                    <li><strong>Pantalla:</strong> 6.7" AMOLED, 120Hz</li>
                    <li><strong>Procesador:</strong> MediaTek Dimensity 8200</li>
                    <li><strong>RAM:</strong> 12 GB</li>
                    <li><strong>Almacenamiento:</strong> 256 GB</li>
                    <li><strong>Cámara:</strong> Triple trasera (50MP + 8MP + 2MP)</li>
                    <li><strong>Batería:</strong> 5000 mAh con carga rápida</li>
                    <li><strong>Sistema operativo:</strong> Android 14 con ColorOS</li>
                </ul>
            </div>

            <div class="price">$899.99</div>

            <div class="buttons">
                <button class="buy-btn">Comprar Ahora</button>
                <button class="add-to-cart-btn">Agregar al Carrito</button>
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

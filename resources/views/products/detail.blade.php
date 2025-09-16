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
@section('css')
    <style>
        /* Reset y estilos base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6e7fdb, #4d4d8f);
            color: #333;
            padding: 40px 20px;
        }

        /* Contenedor principal */
        .product-detail-container {
            max-width: 1200px;
            margin: 0 auto;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-wrap: wrap;
            padding: 30px;
            gap: 30px;
        }

        /* Imagen */
        .product-image {
            flex: 1 1 400px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-image img {
            width: 100%;
            max-width: 400px;
            border-radius: 12px;
            object-fit: contain;
        }

        /* Detalles */
        .product-info {
            flex: 1 1 500px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-info h1 {
            font-size: 2.2rem;
            margin-bottom: 10px;
        }

        .brand-category {
            font-size: 1rem;
            color: #666;
            margin-bottom: 10px;
        }

        .availability {
            font-size: 0.95rem;
            margin-bottom: 20px;
            color: green;
        }

        .description {
            font-size: 1.05rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .specs {
            background-color: #f0f2f5;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .specs ul {
            list-style: none;
        }

        .specs li {
            padding: 5px 0;
            font-size: 0.95rem;
        }

        .price {
            font-size: 1.8rem;
            font-weight: bold;
            color: #e74c3c;
            margin-bottom: 20px;
        }

        .buttons {
            display: flex;
            gap: 15px;
        }

        .buy-btn,
        .add-to-cart-btn {
            flex: 1;
            padding: 15px;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .buy-btn {
            background-color: #6e7fdb;
            color: #fff;
        }

        .buy-btn:hover {
            background-color: #4d4d8f;
        }

        .add-to-cart-btn {
            background-color: #f0f0f0;
            color: #333;
        }

        .add-to-cart-btn:hover {
            background-color: #ddd;
        }

        /* Responsividad */
        @media (max-width: 768px) {
            .product-detail-container {
                flex-direction: column;
                align-items: center;
            }

            .buttons {
                flex-direction: column;
            }

            .buy-btn,
            .add-to-cart-btn {
                width: 100%;
            }
        }
    </style>
@endsection

</html>

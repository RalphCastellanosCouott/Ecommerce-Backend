<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <style>
        /* Estilos generales */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6e7fdb, #4d4d8f);
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #fff;
            padding-top: 50px;
            /* Para separar el contenido del borde superior */
        }

        /* Encabezado */
        header {
            text-align: center;
            width: 100%;
            background-color: #333;
            padding: 20px 0;
            border-radius: 10px;
            margin-bottom: 40px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 3rem;
            font-weight: bold;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* Contenedor de los productos */
        .product-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            padding: 0 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Tarjetas de productos */
        .product-card {
            background-color: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            text-align: center;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transform: scale(1);
            height: 100%;
        }

        .product-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .product-card h3 {
            font-size: 1.5rem;
            color: #333;
            margin: 10px 0;
        }

        .product-card .price {
            font-size: 1.25rem;
            color: #e74c3c;
            font-weight: bold;
        }

        /* Efecto hover */
        .product-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Responsividad */
        @media (max-width: 1024px) {
            .product-list {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .product-list {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Productos Tecnológicos</h1>
    </header>

    <section class="product-list">
        <div class="product-card">
            <img src="https://png.monster/wp-content/uploads/2023/09/PNG.monsterapple-iphone-15-pro-photo%20png.png" alt="Celular 1">
            <h3>iPhone 15</h3>
            <p class="price">$999.99</p>
        </div>

        <div class="product-card">
            <img src="https://images.samsung.com/is/image/samsung/p6pim/co/2401/gallery/co-galaxy-s24-ultra-clear-case-gp-fps928saatw-thumb-539255955" alt="Celular 2">
            <h3>Samsung Galaxy S24 Ultra</h3>
            <p class="price">$799.99</p>
        </div>

        <div class="product-card">
            <img src="https://www.oppo.com/content/dam/oppo/common/mkt/v2-2/reno-12-en/product/860-720-brown-silver.png" alt="Celular 3">
            <h3>Oppo Reno 12</h3>
            <p class="price">$649.99</p>
        </div>

        <div class="product-card">
            <img src="https://cdsassets.apple.com/live/7WUAS350/images/tech-specs/apple-watch-series-9.png" alt="Smartwatch 4">
            <h3>Apple Watch Series 9</h3>
            <p class="price">$199.99</p>
        </div>
    </section>
</body>

</html>

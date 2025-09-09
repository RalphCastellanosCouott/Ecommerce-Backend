<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Producto</title>
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
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
            margin: 0;
        }

        .form-container {
            background-color: #fff;
            color: #333;
            width: 100%;
            max-width: 600px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 2rem;
            color: #4d4d8f;
            margin-bottom: 20px;
        }

        label {
            font-size: 1.1rem;
            margin-bottom: 8px;
            display: block;
            color: #4d4d8f;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: 2px solid #ddd;
            font-size: 1rem;
            outline: none;
            transition: border 0.3s ease;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: #6e7fdb;
        }

        textarea {
            resize: vertical;
            height: 150px;
        }

        .submit-btn {
            background-color: #6e7fdb;
            color: #fff;
            border: none;
            padding: 15px;
            font-size: 1.2rem;
            width: 100%;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #4d4d8f;
        }

        /* Responsividad */
        @media (max-width: 768px) {
            .form-container {
                padding: 20px;
            }

            h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Agregar Producto</h1>
        <form action="#" method="POST">
            <div>
                <label for="product-name">Nombre del Producto</label>
                <input type="text" id="product-name" name="product-name" required>
            </div>

            <div>
                <label for="price">Precio</label>
                <input type="number" id="price" name="price" required step="0.01">
            </div>

            <div>
                <label for="description">Descripción</label>
                <textarea id="description" name="description" required></textarea>
            </div>

            <div>
                <label for="brand">Marca</label>
                <input type="text" id="brand" name="brand" required>
            </div>

            <button type="submit" class="submit-btn">Enviar</button>
        </form>
    </div>
</body>

</html>

@extends('layouts.app')

@section('content')
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
@endsection

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Producto</title>
</head>


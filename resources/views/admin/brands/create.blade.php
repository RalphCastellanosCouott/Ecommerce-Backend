@extends('admin.layouts.app')

@section('content')
    <h2>New Brand</h2>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.brands.store') }}" method="POST">
                @csrf
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="input-group input-group-outline mb-4">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>
                <!-- Botón de Envío-->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Create Brand</button>
                </div>
            </form>
        </div>
    </div>
@endsection

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de Marca</title>
</head>

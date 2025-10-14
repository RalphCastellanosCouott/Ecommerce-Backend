@extends('layouts.app')

@section('content')
<!-- Estilos en la misma plantilla -->
<style>
    /* Altura estimada de la navbar; ajusta si tu navbar cambia */
    :root {
        --navbar-height: 70px;
    }

    /* Asegura que la navbar fija no tape el contenido */
    body {
        padding-top: var(--navbar-height);
        background: #ff9900;
    }

    /* Wrapper para centrar el contenido por pantalla disponible */
    .login-wrapper {
        min-height: calc(100vh - var(--navbar-height));
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 2rem 1rem;
        background: #ff9900; /* color de fondo suave; cámbialo o pon imagen aquí */
    }

    /* Card más estrecha y estética */
    .login-card {
        width: 100%;
        max-width: 440px;
        border-radius: 12px;
        box-shadow: 0 8px 30px rgba(0,0,0,0.08);
        overflow: hidden;
        margin-top: 20px;
    }

    .login-card .card-header {
        background: #6e7fdb;
        color: #fff;
        text-align: center;
        padding: 1.25rem;
        font-size: 1.125rem;
        font-weight: 600;
    }

    .login-card .card-body {
        padding: 1.5rem;
    }

    .btn-primary {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    /* Mejora visual de inputs (opcional) */
    .form-control:focus {
        box-shadow: 0 0 0 0.15rem rgba(0,123,255,0.15);
        border-color: #80bdff;
    }

    /* Pequeños ajustes responsivos */
    @media (max-width: 575.98px) {
        :root { --navbar-height: 64px; }
    }

    /* Estilos para la imagen del logo */
    .university-logo {
        max-width: 250px; /* Tamaño reducido del logo */
        width: 100%;
        height: auto;
        margin-bottom: 30px; /* Espacio entre el logo y la tarjeta */
    }
</style>

<div class="login-wrapper">
    <!-- Imagen del logo fuera de la tarjeta, centrada arriba -->
    <img src="https://fundacompucesco.org.co/wp-content/uploads/2022/03/logo_unabvirtual.png" alt="Logo de la Universidad" class="university-logo">

    <div class="card login-card">
        <div class="card-header">
            <span>{{ __('Registro') }}</span>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Nombre') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Correo electrónico') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                           name="password" required autocomplete="new-password">
                    @error('password')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password-confirm" class="form-label">{{ __('Confirmar Contraseña') }}</label>
                    <input id="password-confirm" type="password" class="form-control"
                           name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="d-grid mb-2">
                    <button type="submit" class="btn btn-primary btn-lg">
                        {{ __('Registrar') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


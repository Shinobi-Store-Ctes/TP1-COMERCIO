@extends('layout.app')

@section('title', 'Registro')

@section('content')
    <div id="register">
        <div class="container mb-5 text-center">
            <h2 class="mt-3 font-weight-bold">Registro</h2>
        </div>
        <div class="container" style="max-width: 500px; margin: 0 auto;">
            {{-- Mostrar error si existe --}}
            @if(session('feedback.message'))
                <div class="alert alert-success">
                    {{ session('feedback.message') }}
                </div>
            @endif
            <form method="POST" action="{{ route('auth.register.post') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirmar contraseña</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary mt-3">Registrarse</button>
                </div>
            </form>
        </div>
    </div>
@endsection

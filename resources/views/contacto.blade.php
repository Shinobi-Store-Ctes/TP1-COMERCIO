@extends('layout.app')

@section('title', 'Contacto')

@section('content')
<section class="container-fluid px-0 mt-5">
    <div class="row g-0">
        <!-- Columna izquierda: Formulario -->
        <div class="col-md-6 d-flex align-items-center justify-content-center bg-white">
            <div class="w-100 p-5 h-100 d-flex flex-column justify-content-center">
            <div class="title pt-3 pb-5">
                        <h2 class="position-relative d-inline-block ms-4">Contacto</h2>
                    </div>
                <p class="mb-4">¿Tenés alguna consulta, sugerencia o querés saber más sobre nuestros productos? Escribinos:</p>

                @if(session('feedback.message'))
                    <div class="alert alert-success">
                        {{ session('feedback.message') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('contacto.enviar') }}" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" value="{{ old('nombre') }}">
                        @error('nombre')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="tucorreo@ejemplo.com" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Escribí tu mensaje..." value="{{ old('mensaje') }}"></textarea>
                        @error('mensaje')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-detalles px-4">Enviar mensaje</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Columna derecha: Imagen -->
        <div class="col-md-6 d-flex align-items-center justify-content-center order-md-last mb-3 mb-md-0">
            <img src="{{ asset('images/productos/Estadio.jpg') }}" alt="Banner de contacto" class="img-fluid w-100 object-fit-cover rounded">
        </div>
    </div>
</section>
@endsection

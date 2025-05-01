@extends('layout.app')

@section('title', 'Productos')

@section('content')
<div id="productos">
    <h2 class="text-center">Nuestro catálogo</h2>
    <p class="pb-3 text-center subtitulo">Todo en indumentaria de River Plate</p>

    <!-- Botón de filtros -->
    <div class="d-flex justify-content-center">
        <button class="btn btn-outline-danger mb-4" type="button" data-bs-toggle="collapse" data-bs-target="#filtros" aria-expanded="false" aria-controls="filtros">
            Filtrar Productos
        </button>
    </div>

    <div class="collapse" id="filtros">
        <div class="card card-body">
            <form method="GET" action="#">
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoría</label>
                    <select class="form-control" id="categoria" name="categoria">
                        <option value="">Selecciona una categoría</option>
                        <option value="Camiseta de Futbol" {{ request('categoria') == 'Camiseta de Futbol' ? 'selected' : '' }}>Camisetas de Futbol</option>
                        <option value="Campera de Futbol" {{ request('categoria') == 'Campera de Futbol' ? 'selected' : '' }}>Camperas de Futbol</option>
                        <option value="Buzo de Futbol" {{ request('categoria') == 'Buzo de Futbol' ? 'selected' : '' }}>Buzos de Futbol</option>
                        <option value="Remera de Futbol" {{ request('categoria') == 'Remera de Futbol' ? 'selected' : '' }}>Remeras de Futbol</option>
                        <option value="Short de Futbol" {{ request('categoria') == 'Short de Futbol' ? 'selected' : '' }}>Shorts de Futbol</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Aplicar filtros</button>
            </form>
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        @foreach($articulos as $articulo)
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card border-0 text-center h-100">
                    <img class="img-original" src="{{ asset('images/productos/' . $articulo->imagen) }}" alt="{{ $articulo->nombre }}">
                    <img class="img-hover" src="{{ asset('images/productos/' . $articulo->imagen_hover) }}" alt="{{ $articulo->nombre }}">
                    <div class="p-5">
                        <div class="rating mt-3">
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                        </div>
                        <h3 class="card-title pb-2">{{ $articulo->nombre }}</h3>
                        <p class="card-text">{{ $articulo->descripcion }}</p>
                        <p class="text-success">${{ number_format($articulo->precio, 2, ',', '.') }} ARS</p>
                        <a href="{{ route('articulos.detalle', ['id' => $articulo->articulo_id]) }}" class="btn btn-detalles w-100">Ver Detalles</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection
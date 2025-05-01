<?php
/**
 * Detalle del producto
 *
 * @var \App\Models\Articulos $articulo
 */
?>

@extends('layout.app')

@section('title', 'Detalle del Producto')

@section('content')
<div id="detalle-producto" class="container py-5">
    <div class="row justify-content-center align-items-center g-4">
        <div class="col-lg-5 col-md-12 text-center">
            <div class="position-relative rounded shadow overflow-hidden">
                <img 
                    src="{{ asset('images/productos/' . $articulo->imagen) }}" 
                    alt="Imagen principal de {{ $articulo->nombre }}" 
                    class="img-fluid rounded img-original"
                    style="height: 100%; width: auto; max-width: 100%; object-fit: contain;"
                >
                <img 
                    src="{{ asset('images/productos/' . $articulo->imagen_hover) }}" 
                    alt="Imagen secundaria de {{ $articulo->nombre }}" 
                    class="img-fluid rounded img-hover position-absolute top-0 start-50 translate-middle-x"
                    style="height: 100%; width: auto; max-width: 100%; object-fit: contain;"
                >
            </div>
        </div>
        <div class="col-lg-7">
            <h1 class="fw-bold mb-3">{{ $articulo->nombre }}</h1>

            <h4 class="text-success mb-4">
                <i class="bi bi-currency-dollar me-2"></i>
                {{ number_format($articulo->precio, 2, ',', '.') }} ARS
            </h4>

            <ul class="list-unstyled fs-5">
                <li class="mb-3">
                    <i class="bi bi-info-circle-fill text-primary me-2"></i>
                    <strong>Descripción:</strong> {{ $articulo->descripcion }}
                </li>
                <li class="mb-3">
                    <i class="bi bi-aspect-ratio-fill text-secondary me-2"></i>
                    <strong>Talle:</strong> {{ $articulo->talles->talle }}
                </li>
                <li class="mb-3">
                    <i class="bi bi-tag-fill text-warning me-2"></i>
                    <strong>Categoría:</strong> {{ $articulo->categorias->categoria }}
                </li>
                <li class="mb-3">
                    <i class="bi bi-box-seam-fill text-info me-2"></i>
                    <strong>Stock:</strong> {{ $articulo->cantidad }} unidades
                </li>
                <li class="mb-3">
                    <i class="bi bi-calendar-fill text-danger me-2"></i>
                    <strong>Lanzamiento:</strong> {{ $articulo->fecha_creacion }}
                </li>
            </ul>

            <form method="POST" action="#" class="mt-4">
                @csrf
                <input type="hidden" name="producto_id" value="{{ $articulo->id }}">
                <input type="hidden" name="nombre" value="{{ $articulo->nombre }}">
                <input type="hidden" name="precio" value="{{ $articulo->precio }}">
                <input type="hidden" name="imagen" value="{{ $articulo->imagen }}">

                <button type="submit" class="btn btn-dark btn-lg px-4">
                    <i class="bi bi-cart-plus me-2"></i>Agregar al carrito
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
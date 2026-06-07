@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">

                    {{-- Cabecera: Título y Botón de Agregar al Carrito --}}
                    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
                        <h4 class="mb-0 fw-bold text-secondary">Detalle del Producto</h4>

                        {{-- Formulario para agregar al carrito --}}
                        {{-- Reemplaza 'cart.add' por el nombre de tu ruta del carrito más adelante --}}
                        <form action="#" method="POST" class="mb-0">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">

                            <button type="submit" class="btn btn-success btn-sm d-flex align-items-center">
                                <i class="bi bi-cart-plus me-1"></i> Agregar al carrito
                            </button>
                        </form>
                    </div>

                    {{-- Cuerpo: Información del Producto --}}
                    <div class="card-body py-4">
                        <h3 class="card-title text-dark mb-3">{{ $product->title }}</h3>

                        <p class="card-text text-muted fs-5 mb-4" style="white-space: pre-line;">
                            {{ $product->description }}
                        </p>

                        <div class="p-3 bg-light rounded-3 d-inline-block">
                            <span class="text-muted small d-block text-uppercase fw-bold">Precio Unitario</span>
                            <span class="fs-3 fw-bold text-primary">${{ number_format($product->price, 2) }}</span>
                        </div>
                    </div>

                    {{-- Pie de Tarjeta: Botón de regresar al listado --}}
                    <div class="card-footer bg-white py-3">
                        <a href="{{ route('products.index') }}" class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-arrow-left"></i> Volver al listado
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

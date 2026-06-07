@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-white fw-bold text-secondary">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="alert alert-info border-0 bg-light text-dark mb-4">
                            <i class="bi bi-person-check-fill me-1"></i> ¡Bienvenido de nuevo! Has iniciado sesión
                            correctamente.
                        </div>

                        <h5 class="mb-3 fw-bold text-dark">Accesos Rápidos del Sistema</h5>
                        <div class="row">
                            {{-- Tarjeta de Acceso al Módulo de Productos --}}
                            <div class="col-md-6">
                                <div class="card h-100 border-start border-primary border-4 shadow-sm">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div>
                                            <h5 class="card-title fw-bold text-primary mb-2">
                                                <i class="bi bi-box-seam me-1"></i> Módulo de Productos
                                            </h5>
                                            <p class="card-text text-muted small">
                                                Administra el catálogo de tu tienda. Desde aquí puedes dar de alta nuevos
                                                artículos, actualizar precios, descripciones o eliminar stock obsoleto.
                                            </p>
                                        </div>
                                        <div class="mt-3">
                                            <a href="{{ route('products.index') }}"
                                                class="btn btn-primary btn-sm w-100 d-flex align-items-center justify-content-center">
                                                Gestionar Productos <i class="bi bi-arrow-right-short ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Espacio para futuros módulos (ej. Órdenes, Clientes, etc.) --}}
                            <div class="col-md-6 mt-3 mt-md-0">
                                <div
                                    class="card h-100 border-light bg-light text-center d-flex align-items-center justify-content-center p-3">
                                    <span class="text-muted small">
                                        <i class="bi bi-plus-circle d-block fs-3 mb-2"></i> Próximamente más módulos
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

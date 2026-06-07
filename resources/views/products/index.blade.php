@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-12">

                {{-- Mensaje flash que aparecerá al eliminar y se borrará solo --}}
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card shadow-sm">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Listado de Productos</h4>
                        <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">
                            Crear nuevo producto
                        </a>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" class="ps-4">ID</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col" class="text-end pe-4">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $item)
                                        <tr>
                                            <th scope="row" class="ps-4 align-middle">{{ $item->id }}</th>
                                            <td class="align-middle fw-bold">{{ $item->title }}</td>
                                            <td class="align-middle text-muted">
                                                {{ \Illuminate\Support\Str::limit($item->description, 60) }}
                                            </td>
                                            <td class="align-middle">${{ number_format($item->price, 2) }}</td>
                                            <td class="text-end pe-4 align-middle">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    {{-- Botón Ver --}}
                                                    <a href="{{ route('products.show', $item->id) }}"
                                                        class="btn btn-sm btn-outline-info me-1">
                                                        Ver
                                                    </a>

                                                    @auth
                                                        {{-- Botón Editar --}}
                                                        <a href="{{ route('products.edit', $item->id) }}"
                                                            class="btn btn-sm btn-outline-secondary me-1">
                                                            Editar
                                                        </a>

                                                        {{-- Formulario Inline con Confirmación JS --}}
                                                        <form action="{{ route('products.destroy', $item->id) }}" method="POST"
                                                            class="d-inline mb-0"
                                                            onsubmit="return confirm('¿Estás seguro de que quieres eliminar el producto &quot;{{ $item->title }}&quot;?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                                Eliminar
                                                            </button>
                                                        </form>
                                                    @endauth
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center py-4 text-muted">
                                                No hay productos registrados en este momento.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    @if ($products->hasPages())
                        <div class="card-footer bg-white d-flex justify-content-end py-3"
                            style="margin-top: 1em; margin-bottom: 1em;">
                            {{ $products->links() }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    {{-- Script encargado del desvanecimiento automático --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var alert = document.getElementById('success-alert');
            if (alert) {
                setTimeout(function() {
                    // Quita la clase de Bootstrap para iniciar la animación visual
                    alert.classList.remove('show');

                    // Espera a que termine la animación y limpia el espacio del DOM por completo
                    setTimeout(function() {
                        alert.remove();
                    }, 500);
                }, 4000); // Se muestra durante 4 segundos
            }
        });
    </script>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-12">

                {{-- Mensaje de éxito si venimos de guardar un producto --}}
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card shadow-sm">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Listado de Productos</h4>
                        {{-- Botón para ir a crear un nuevo producto --}}
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
                                            {{-- <td class="align-middle text-muted">{{ Str::limit($item->description, 60) }} --}}
                                            <td class="align-middle text-muted">
                                                {{ \Illuminate\Support\Str::limit($item->description, 60) }}</td>
                                            </td>
                                            <td class="align-middle">${{ number_format($item->price, 2) }}</td>
                                            <td class="text-end pe-4 align-middle">
                                                {{-- Botones de acción (Editar / Ver) --}}
                                                <a href="{{ route('products.edit', $item->id) }}"
                                                    class="btn btn-sm btn-outline-secondary">
                                                    Editar
                                                </a>
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

                    {{-- Enlaces de paginación (si usas Product::paginate) --}}
                    @if ($products->hasPages())
                        <div class="card-footer bg-white d-flex justify-content-center">
                            {{ $products->links() }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection

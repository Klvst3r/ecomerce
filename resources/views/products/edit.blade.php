@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card padding">
                    <div class="card-header bg-white">
                        <h4 class="mb-0">Editar producto</h4>
                        <p>{{ $product->title }}</p>
                    </div>

                    <div class="card-body">
                        <!-- Aquí irá el formulario más adelante -->
                        <p class="text-muted">El contenedor de la vista se está renderizando correctamente debajo del menú de
                            navegación.</p>

                        <!-- Incluimos la vista parcial 'products.form' para crear un nuevo producto -->
                        @include('products.form')    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

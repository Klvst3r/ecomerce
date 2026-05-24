
<!-- {!! Form::open(['url' => '/productos', 'files' => 'app-form', 'method' => 'POST']) !!} -->
@if($product->id)
    {{-- Modo Edición: Forzamos la ruta update, el ID y el método PUT de forma explícita --}}
    {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT', 'files' => true]) !!}
@else
    {{-- Modo Creación: Usamos la ruta store y el método POST estándar --}}
    {!! Form::open(['route' => 'products.store', 'method' => 'POST', 'files' => true]) !!}
@endif

<div class="form-group mb-3">
    {!! Form::label('title', 'Nombre del producto') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group mb-3">
    {!! Form::label('description', 'Descripción del producto') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 4]) !!}
</div>

<div class="form-group mb-4">
    {!! Form::label('price', 'Precio del producto') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<div class="">
    <input type="submit" value="Guardar" class="btn btn-primary">
</div>

{!! Form::close() !!}
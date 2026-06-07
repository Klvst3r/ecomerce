{{-- <form action="/products" method="POST"> --}}
{{-- 1. La acción usa la función url() de tu modelo. Si es edición, le pasamos el ID --}}
<form action="{{ $product->id ? route($product->url(), $product->id) : route($product->url()) }}" method="POST">

    {{-- Token de seguridad obligatorio --}}
    @csrf

    {{-- Inyectamos el método oculto dinámicamente usando tu función del modelo --}}
    @if ($product->id)
        <input type="hidden" name="_method" value="{{ $product->method() }}">
    @endif

    <div class="form-group mb-3">
        <label for="title">Nombre del producto</label>
        {{-- Recomiendo usar old() para que no se borre si falla una validación --}}
        {{-- <input type="text" value="{{ $product->title ?? '' }}" name="title" class="form-control" id="title"> --}}
        <input type="text" value="{{ old('title', $product->title) }}" name="title" class="form-control"
            id="title">
    </div>

    <div class="form-group mb-3">
        <label for="description">Descripción</label>
        {{-- <textarea name="description" class="form-control" rows="4" id="description">{{ $product->description ?? '' }}</textarea> --}}
        <textarea name="description" class="form-control" rows="4" id="description">{{ old('description', $product->description) }}</textarea>
    </div>

    <div class="form-group mb-4">
        <label for="price">Precio</label>
        {{-- <input type="text" value="{{ $product->price ?? '' }}" name="price" class="form-control" id="price"> --}}
        <input type="text" value="{{ old('price', $product->price) }}" name="price" class="form-control"
            id="price">
    </div>

    {{-- <button type="submit" class="btn btn-primary">Guardar Producto</button> --}}
    <button type="submit" class="btn btn-primary">
        {{ $product->id ? 'Actualizar Producto' : 'Guardar Producto' }}
    </button>

</form>

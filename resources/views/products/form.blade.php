<form action="/products" method="POST">
    @csrf
    <div class="form-group mb-3">
        <label for="title">Nombre del producto</label>
        <input type="text" name="title" class="form-control" id="title">
    </div>

    <div class="form-group mb-3">
        <label for="description">Descripción</label>
        <textarea name="description" class="form-control" rows="4" id="description"></textarea>
    </div>

    <div class="form-group mb-4">
        <label for="price">Precio</label>
        <input type="text" name="price" class="form-control" id="price">
    </div>

    <button type="submit" class="btn btn-primary">Guardar Producto</button>
</form>

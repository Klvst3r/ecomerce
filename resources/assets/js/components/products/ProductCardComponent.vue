<template lang="html">
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <header class="bg-primary p-3">
                </header>
            <div class="card-body">
                <h3 class="card-title h5 font-weight-bold">{{ product.title }}</h3>
                <h4 class="card-subtitle mb-2 text-success">Precio: ${{ product.price }}</h4>
                <p class="card-text text-muted">{{ product.description }}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            product: {
                type: Object,
                required: true
            }
        }
    }
</script>
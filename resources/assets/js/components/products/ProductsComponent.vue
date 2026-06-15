<template lang="html">
    <div class="products-container">
        
        <p class="text-muted">Mi primer componente {{ name }}</p>
        
        <div v-for="product in products" :key="product.title" class="card padding mb-3 shadow-sm">
            <header class="bg-primary padding">
                </header>
            <div class="card-body">
                <h2 class="card-title">{{ product.title }}</h2>
                <h4 class="card-subtitle mb-2 text-muted">Precio: ${{ product.price }}</h4>
                <p class="card-text">{{ product.description }}</p>
            </div>
        </div>

    </div>
</template>

<script>
export default {
  data() {
    return {
      name: 'Products Component',
      products: [
        {title: 'Curso Ruby on Rails', price: 100, description: 'El mejor curso de Ruby on Rails'},
        {title: 'Curso Vue.js', price: 150, description: 'El mejor curso de Vue.js'},
        {title: 'Curso Laravel', price: 120, description: 'El mejor curso de Laravel'}
      ]
    }
  }
}  
</script>  

<style lang="css">
</style>
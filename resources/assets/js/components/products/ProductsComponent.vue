<template lang="html">
    <div class="products-container">
        
        <p class="text-muted">Mi primer componente {{ name }}</p>
        
       <div class="row">
        <product-card-component v-bind:product="product" v-for="product in products" :key="product.title">
          
        </product-card-component>
        
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
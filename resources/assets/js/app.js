/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';
window.Vue = Vue;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Registrar usando la forma clásica de Laravel Mix (Infallible para Vue 2)
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

//Registramos nuestro componente de ejemplo, tiene que obtener la configuración del componente
//Vue.component('products-component', require('./components/ProductsComponent.vue').default);
Vue.component('products-component', require('./components/products/ProductsComponent.vue').default);

//Regisramos el nuevo componente.
Vue.component('product-card-component', require('./components/products/ProductCardComponent.vue').default);


// Envolvemos la creación de la app de Vue para esperar al DOM
document.addEventListener('DOMContentLoaded', () => {
    const app = new Vue({
        el: '#app'
    });
});

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import VueSweetalert2 from 'vue-sweetalert2';
Vue.use(VueSweetalert2);

Vue.component('example', require('./components/Example.vue'));

Vue.component('usuarios', require('./components/Usuarios.vue'));

Vue.component('obras', require('./components/Obras.vue'));

Vue.component('requisicion', require('./components/Requisicion.vue'));
Vue.component('articulosrequisicion', require('./components/ArticulosRequisicion.vue'));

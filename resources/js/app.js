/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


Vue.component('formulario-component', require('./components/FormularioComponent.vue').default);
Vue.component('formulario2-component', require('./components/Formulario2Component.vue').default);
Vue.component('example1-component', require('./components/Example1Component.vue').default);
Vue.component('bucles-component', require('./components/BuclesComponent.vue').default);
Vue.component('condicional-component', require('./components/CondicionalComponent.vue').default);
Vue.component('input-component', require('./components/InputComponent.vue').default);
Vue.component('manejos-component', require('./components/ManejosComponent.vue').default);
Vue.component('primer-component', require('./components/PrimerComponent.vue').default);
Vue.component('test-component', require('./components/TestComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


const app1 = new Vue({
    el: '#app1',
});

const app2 = new Vue({
    el: '#app2',
});

const app3 = new Vue({
    el: '#app3',
});

const app4 = new Vue({
    el: '#app4',
});

const app5 = new Vue({
    el: '#app5',
});

const app6 = new Vue({
    el: '#app6',
});

const app7 = new Vue({
    el: '#app7',
});
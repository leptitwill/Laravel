
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app'
// });

bsCustomFileInput = require('bs-custom-file-input');

$(document).ready(function () {
    bsCustomFileInput.init()
})

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

/**
 * Au clique sur le bouton pour supprimer un film
 */
$(document).on('click', '#movie__delete', function(e){
    // Annule l'évenement de base
    e.preventDefault();
    // Fait l'appel AJAX pour le supprimer
    $.ajax({
        'url': '/~leptitwill/Laravel/public/movie/'+$(this).data('movie_id'),
        'type': 'DELETE',
        'success': function(result){
            window.location.replace('/~leptitwill/Laravel/public/movie');
        }
    })
})
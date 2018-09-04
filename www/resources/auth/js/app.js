/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from "vue";
Vue.use(require('vue-cookies'));

Vue.component('registration-form', require('../components/RegistrationForm.vue'));
Vue.component('auth-form', require('../components/AuthForm.vue'));

const app = new Vue({
    el: '#app'
});

// assets/js/modernizr.min.js"></script>
// assets/js/detect.js"></script>
// assets/js/fastclick.js"></script>
// assets/js/jquery.slimscroll.js"></script>
// assets/js/jquery.blockUI.js"></script>
// assets/js/waves.js"></script>
// assets/js/wow.min.js"></script>
// assets/js/jquery.nicescroll.js"></script>
// assets/js/jquery.scrollTo.min.js"></script>
//
// assets/js/app.js"></script>
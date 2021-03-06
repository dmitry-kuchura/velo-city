/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

require('./vendor/jquery.downCount');
require('./vendor/jquery-ui.min');
require('./vendor/fotorama');
require('./vendor/jquery.magnific-popup');
require('./vendor/owl.carousel.min');
require('./vendor/custom');

import Vue from "vue";
import Vuex from 'vuex';
import store from "./store";
import slider from 'vue-slider-component'

Vue.use(Vuex);

Vue.component('vue-slider', slider);
Vue.component('loader', require('./components/LoaderComponent.vue').default);
Vue.component('sortable', require('./components/SortableComponent.vue').default);
Vue.component('filter-component', require('./components/FilterComponent.vue').default);

Vue.component('wishlist', require('./components/WishlistTableComponent.vue').default);
Vue.component('cart', require('./components/CartComponent.vue').default);
Vue.component('cart-list', require('./components/CartTableComponent.vue').default);
Vue.component('cart-total', require('./components/CartTotalComponent.vue').default);
Vue.component('add-to-cart', require('./components/AddToCartComponent.vue').default);
Vue.component('add-to-cart-and-wishlist', require('./components/AddToCartAndWishlistComponent.vue').default);
Vue.component('checkout', require('./components/CheckoutComponent.vue').default);
Vue.component('contact-us-form', require('./components/ContactsFormComponent.vue').default);
Vue.component('subscribe-form', require('./components/SubscribeFormComponent.vue').default);
Vue.component('alert-messages', require('./components/MessagesComponent.vue').default);

new Vue({
    el: '#app',
    store: new Vuex.Store(store)
});

function notification(text, type) {
    new Noty({
        type: type,
        layout: 'topRight',
        text: text,
        animation: {
            open: function (promise) {
                let n = this;
                new Bounce()
                    .translate({
                        from: {x: 450, y: 0}, to: {x: 0, y: 0},
                        easing: "bounce",
                        duration: 1000,
                        bounces: 4,
                        stiffness: 3
                    })
                    .scale({
                        from: {x: 1.2, y: 1}, to: {x: 1, y: 1},
                        easing: "bounce",
                        duration: 1000,
                        delay: 100,
                        bounces: 4,
                        stiffness: 1
                    })
                    .scale({
                        from: {x: 1, y: 1.2}, to: {x: 1, y: 1},
                        easing: "bounce",
                        duration: 1000,
                        delay: 100,
                        bounces: 6,
                        stiffness: 1
                    })
                    .applyTo(n.barDom, {
                        onComplete: function () {
                            promise(function (resolve) {
                                resolve();
                            })
                        }
                    });
            },
            close: function (promise) {
                let n = this;
                new Bounce()
                    .translate({
                        from: {x: 0, y: 0}, to: {x: 450, y: 0},
                        easing: "bounce",
                        duration: 500,
                        bounces: 4,
                        stiffness: 1
                    })
                    .applyTo(n.barDom, {
                        onComplete: function () {
                            promise(function (resolve) {
                                resolve();
                            })
                        }
                    });
            }
        }
    }).show();
}

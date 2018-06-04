
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import * as VueGoogleMaps from "vue2-google-maps";

Vue.use(VueGoogleMaps, {
  load: {
    key: "AIzaSyCTDFEY5HeYhUNt25qj8kr94XYDHONoIbg",
    libraries: "places"
  }
});

Vue.component('maps', require('./components/GoogleMap.vue'));

const app = new Vue({
    el: '#app',
    data() {
    	return {
    		lat: 0,
    		lng: 0
    	}
    },
    methods: {
    	getLat: function(lat) {
    		this.lat = lat;
    	},
    	getLng: function(lng) {
    		this.lng = lng;
    	}
    }
});
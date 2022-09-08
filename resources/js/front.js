window.Vue = require('vue');

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// aggiungiamo l'import del file router.js
import router from "./router";
import shared from "./shared";

export default {
    data() {
        return{
            shared,
        }
    }
}

import App from './views/App.vue';

const app = new Vue({
    el: '#app',
    render: h => h(App),
    router
});

var button = document.querySelector('#submit-button');

braintree.dropin.create({
  authorization: 'sandbox_g42y39zw_348pk9cgf3bgyw2b',
  selector: '#dropin-container'
}, function (err, instance) {
  button.addEventListener('click', function () {
    instance.requestPaymentMethod(function (err, payload) {
      // Submit payload.nonce to your server
    });
  })
});
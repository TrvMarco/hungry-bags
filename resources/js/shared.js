window.Vue = require('vue');


export default Vue.observable({
    totalCartPrice: 0,
    myCart: [],
    count: 0,
    token: '',
});

// var button = document.querySelector('#submit-button');

// braintree.dropin.create({
//   authorization: this.token,
//   selector: '#dropin-container'
// }, function (err, instance) {
//   button.addEventListener('click', function () {
//     instance.requestPaymentMethod(function (err, payload) {
//       // Submit payload.nonce to your server
//     });
//   })
// });
<template>
  <div class="container">
    <h1>pagamento</h1>
    <v-braintree
        :authorization="token"
        @success="onSuccess"
        @error="onError"
    ></v-braintree>
  </div>
</template>

<script>
export default {
    name:'Checkout',
    data() {
        return {
            token:'',
        }
    },
    methods: {
    onSuccess (payload) {
        // console.log(payload)
    //   let token = payload.nonce;
      // Do something great with the nonce...
    },
    onError (error) {
        // console.log(error)
    //   let message = error.message;
      // Whoops, an error has occured while trying to get the nonce
    }
  },
  created() {
    axios.get('/api/payments')
    .then((response) => {
        this.token = response.data.token
    })
  }
}
</script>

<style>

</style>
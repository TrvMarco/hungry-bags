<template>
  <div class="container">
    <v-braintree 
        :authorization="tokenApi"
        @success="onSuccess"
        @error="onError"
    ></v-braintree>
  </div>
</template>

<script>
export default {
    name: 'Payment',
    data(){
        return {
            tokenApi:'',
        }
    },
    created(){
        axios.get('/api/payments')
        .then((response) => {
            this.tokenApi = response.data.token;
        })
    },
    methods: {
    onSuccess (payload) {
      let nonce = payload.nonce;
      // Do something great with the nonce...
    },
    onError (error) {
      let message = error.message;
      // Whoops, an error has occured while trying to get the nonce
    }
  }

}
</script>

<style>

</style>
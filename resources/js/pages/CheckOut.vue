<template>
    <main>
        <div class="container">
            <v-braintree 
                authorization="token"
                @success="onSuccess"
                @error="onError"
            ></v-braintree>
        </div>
    </main>
</template>

<script>
export default {
    name: 'CheckOut',
    data(){
        return{
            token: "",
        }
    },
    created(){
        axios.get('/api/payments')
        .then((response)=>{
            console.log(response.data)
            this.token = response.data.token
        })
    },
    methods: {
        onSuccess (payload) {
            let nonce = payload.nonce;
            console.log(nonce)
        },
        onError (error) {
            let message = error.message;
            console.log(message)
        }
    }
}
</script>

<style scoped>

</style>
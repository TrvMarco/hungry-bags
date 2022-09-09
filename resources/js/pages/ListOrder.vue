<template>
  <div class="container">
    <div class="col-12 ">
        <h1 class="text-center">Riepilogo Ordini</h1>
        <hr>
        <div>Gentile: {{orders.client_name}} {{orders.client_surname}}</div>
        <h2>Hai ordinato:</h2>
        <div>
            <ul>
                <li v-for="item,id in orders.items" :key="id">
                    <span>{{item.name}}</span>
                    <span>{{item.price}}€</span>
                </li>
            </ul>
        </div>
        <span>Prezzo totale: {{orders.total_price}}€</span>
    </div>
  </div>
</template>

<script>
export default {
    name: 'ListOrder',
    data(){
        return{
            orders: [],
        }
    },
    created(){
        axios.get('/api/orders')
        .then((response) => {
            this.orders = response.data
        })
    }
}
</script>

<style lang='scss' scoped>

</style>
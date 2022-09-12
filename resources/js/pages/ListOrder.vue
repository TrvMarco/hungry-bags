<template>
  <section class="order_list pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
        <div class="payment">
            <h1 class="text-center">Il pagamento è avvenuto con successo!!</h1>
        </div>
        <hr>
        <h2 class="text-center">Riepilogo Ordini</h2>
        <div class="font-weight-bold py-2">Gentile {{orders.client_name}} {{orders.client_surname}}</div>
        <h2>Hai ordinato:</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">N.</th>
                <th scope="col">Nome del piatto</th>
                <th scope="col">Prezzo</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item,id in orders.items" :key="id">
                <th scope="row">{{id + 1}}</th>
                <td>{{item.name}}</td>
                <td>{{item.price}} €</td>
                </tr>
                <tr class="grey">
                <th scope="row"></th>
                <td >Prezzo totale:</td>
                <td>{{orders.total_price}} €</td>
                </tr>
            </tbody>
        </table>
        <div class="text-center py-3">
            <router-link :to="{ name: 'home'}" class="btn btn-dark">Torna nella home</router-link>
        </div>
    </div>
        </div>
  </div>
  </section>
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

.container{
    background-color: beige;
}

.payment{
    padding: .9375rem;
}

h1{
    margin: 0;
}

.grey{
    background-color: lightgray;
}
</style>
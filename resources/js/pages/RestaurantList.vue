<template>
  <main>
    <div class="container pt-4">
        <div class="row">
            <div class="col-12">
                <h1>I nostri ristoranti</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4 pb-3" v-for="restaurant,id in restaurants" :key="id">
                <a href="">
                    <div class="restaurant_card">
                        <h1>{{restaurant.name}}</h1>
                    </div>
                </a>
            </div>
        </div>
    </div>
  </main>
</template>

<script>
export default {
    name: 'RestaurantList',
    data(){
        return{
            restaurants: []
        }
    },
    created(){
        axios.get(`/api/users/${this.$route.params.type}`) 
        .then((response) => {
            this.restaurants = response.data.users
            // console.log(response.data.users)
        })
    }
}
</script>

<style lang="scss" scoped>
    .restaurant_card{
        height: 12.5rem;
        background-color: aquamarine;
        border: 1px solid black;
    } 

    h1{
        font-weight: bold;
    }
</style>
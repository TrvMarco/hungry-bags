<template>
  <main>
    <div class="container pt-4">
        <div class="row">
            <div class="col-12">
                <h1>I nostri ristoranti</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-3 pb-3" v-for="restaurant,id in restaurants" :key="id">
                <div class="restaurant_card">
                    <router-link class="router_link" :to="{ name: 'single-restaurant', params: { user: restaurant.name} }">
                        <div class="restaurant_name">
                            <h1>{{restaurant.name}}</h1>
                        </div>
                        <img class="img-fluid" :src="`../storage/${restaurant.image}`" alt="">
                    </router-link>
                </div>
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
            console.log(response.data.users)
        })
    }
}
</script>

<style lang="scss" scoped>
    .restaurant_card{
        height: 12.5rem;
        // border: 1px solid black;
        overflow: hidden;
        position: relative;
        border-radius: 10px;

        &:hover{
            img{
                transform: scale(1.2);
            }
        }

        img{
            opacity: 0.9;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s;
        }
    } 

    .restaurant_name{
        position: absolute;
        z-index: 10;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: inherit;

        h1{
            text-decoration: none;
            color: #fff;
            text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
        }
    }

</style>
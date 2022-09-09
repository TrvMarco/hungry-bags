<template>
  <main>
    <div id="spinner" class="container">
        <LoadingSpinner/>
    </div>
    <div class="container pt-4">
        <div class="row">
            <div class="col-12 p-4 text-center">
                <h1>I nostri ristoranti</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-3 pb-3" v-for="restaurant,id in restaurants" :key="id">
                <div class="restaurant_card">
                    <router-link class="router_link" :to="{ name: 'single-restaurant', params: { user: restaurant.name} }">
                        <div class="restaurant_name">
                            <h1 class="restaurant_title text-center">{{restaurant.name}}</h1>
                        </div>
                        <img class="img-fluid" :src="`../storage/${restaurant.image}`" alt="">
                    </router-link>
                </div>
            </div>
        </div>
    </div>
    <!-- <div v-else>
        <div class="container pt-4">
            <div class="row text-center">
                <div class="col-12 p-5">
                    <h1>Al momento non ci sono ristoranti associati!</h1>
                </div>
            </div>
        </div>
    </div> -->
  </main>
</template>

<script>

import LoadingSpinner from '../components/singlecomponent/LoadingSpinner'

export default {
    name: 'RestaurantList',
    components:{
        LoadingSpinner
    },
    data(){
        return{
            restaurants: []
        }
    },
    created(){
        axios.get(`/api/users`) 
        .then((response) => {
            this.restaurants = response.data
        })
        .finally(() => {
            document.getElementById('spinner').style.display = 'none';
        });
    }
}
</script>

<style lang="scss" scoped>
    .restaurant_card{
        height: 12.5rem;
        // border: 1px solid black;
        overflow: hidden;
        position: relative;
        border-radius: .625rem;

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
            // background-color: rgba($color: #000000, $alpha: 0.3);
            text-decoration: none;
            color: #fff;
            text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
            border-radius: .625rem;
            // padding: .3125rem;
        }
    }

</style>
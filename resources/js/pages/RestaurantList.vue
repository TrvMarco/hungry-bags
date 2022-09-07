<template>
  <main>
    <div class="container pt-4" v-if="restaurants.length > 0">
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
                            <h1 class="restaurant_title text-center">{{restaurant.name}}</h1>
                        </div>
                        <img class="img-fluid" :src="`../storage/${restaurant.image}`" alt="">
                    </router-link>
                </div>
            </div>
        </div>
    </div>
    <div v-else>
        <div class="container pt-4">
            <div class="row text-center">
                <div class="col-12 p-5">
                    <h1>Al momento non ci sono ristoranti associati!</h1>
                </div>
            </div>
        </div>
    </div>
  </main>
</template>

<script>

import shared from '../shared'

export default {
    name: 'RestaurantList',
    data(){
        return{
            restaurants: [],
            shared,
            selectedRestaurants: []
        }
    },
    created(){
        axios.get(`/api/users`) 
        .then((response) => {
            this.restaurants = response.data
            // console.log(response.data.users)
        })

        // console.log(this.shared.typeChoose)
        this.restaurants.forEach(elm => {
            console.log(this.elm)
            for(let i = 0; i < this.shared.typeChoose.length - 1; i++){
                console.log(elm)
                // console.log(this.shared.typeChoose[i])
                // if(elm.types[0].name == this.shared.typeChoose[i]){
                //     array.push(elm)
                // }
            }
        });
    },
    // computed: {
    //     restaurantFilter(){
    //         let array = []
    //         this.restaurants.forEach(elm => {
    //             for(let i = 0; i < this.shared.typeChoose.length - 1; i++){
    //                 console.log(this.shared.typeChoose[i])
    //                 // if(elm.types.name == this.shared.typeChoose[i]){
    //                 //     this.array.push(elm)
    //                 // }
    //             }
    //         });
    //         return array;
    //     }
    // }
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
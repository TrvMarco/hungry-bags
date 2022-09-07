<template>
  <section class="type py-5"> 
    <div class="container">
        <div class="row pb-3 justify-content-center">
            <h3>Le scelte più appetitose</h3>
        </div>
        <div>
            <div v-if="types.length > 0">
                <div class="row justify-content-center">
                    <div v-for="type in types" :key="type.id">
                        <div class="col-2 d-flex p-2">
                            <div class="type_box transform">
                                <div class="box_img" @click="chooseType(type.name)">
                                    {{type.name}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Prova restaurants -->
                <div class="row justify-content-center pt-4">
                    <div class="col-6 col-md-2 pb-3" v-for="restaurant,id in restaurants" :key="id">
                        <div class="restaurant_card">
                            <router-link class="router_link" :to="{ name: 'single-restaurant', params: { user: restaurant.name} }">
                                <div class="restaurant_name">
                                    <h3 class="restaurant_title text-center">{{restaurant.name}}</h3>
                                </div>
                                <img class="img-fluid" :src="`../storage/${restaurant.image}`" alt="">
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
</template>

<script>

import shared from '../../shared'

export default {
    name: 'TypeSection',
    data() {
        return{
            shared,
            types : [],
            typeChoose : [],
            choose: false,
            restaurants: []
        };
    },
    created() {
        axios.get('/api/types')
        .then((response) => {
            this.types = response.data;
        })

        axios.get('/api/users')
        .then((response) => {
            this.restaurants = response.data;
            console.log(this.restaurants)
        })
    },
    methods: {
        // chooseType(){
        //     axios.post('/api/users', this.typeChoose)
        //     .then((resp) => {
        //         this.typeChoose = [];
        //         this.$router.push({name: 'restaurant-list'});
        //         console.log(resp)
        //     })

        // },
        // searchType(){

        // }
        chooseType(elm){
            if(!this.shared.typeChoose.includes(elm)){
                this.shared.typeChoose.push(elm);
            }else{
                // this.shared.typeChoose.splice(elm,1)
            }
        },
        getUsers(){
            axios.get('/api/users')
            .then((resp)=>{
                console.log(resp);
            })
        }
        
    }
}   
</script>

<style lang="scss" scoped>
    .type_box{
        background: #eee1b3;
        border-radius: 30px;
        transition: all 0.08s;

        .box_img{
            min-height: 35px;
            min-width: 50px;
            padding: 0px 15px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 30px;
        }
        img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .link-text {
            text-decoration:none;
            color: black; 
        }
    }

     .type_box:hover {
        transform: scale(1.1);
    }

    // PROVA RESTAURANTS
    
    .restaurant_card{
        height: 9.375rem;
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

        h3{
            // background-color: rgba($color: #000000, $alpha: 0.3);
            text-decoration: none;
            color: #fff;
            text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
            border-radius: .625rem;
            // padding: .3125rem;
        }
    }

</style>
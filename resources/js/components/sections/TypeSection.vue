<template>
  <section class="type py-5"> 
    <div class="container">
        <div class="row pb-3 justify-content-center">
            <h2>Le scelte più appetitose</h2>
        </div>
        <div>
            <div v-if="types.length > 0">
                <!-- <form @submit.prevent="chooseType()"> -->
                    <div class="row justify-content-center">
                        <div v-for="type in types" :key="type.id">
                            <div class="col-2 d-flex p-2">
                                <div class="type_box transform">
                                    <div class="box_img" @click="searchByType(type.name)">
                                        {{type.name}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div v-show="showBox == true">
                <!-- Prova restaurants -->
                <div v-if="restaurantByType.length > 0" class="row justify-content-center pt-4">
                        <div class="col-6 col-md-2 pb-3" v-for="restaurant,id in restaurantByType" :key="id">
                                <transition appear name="fade">
                            <div class="restaurant_card">
                                <router-link class="router_link" :to="{ name: 'single-restaurant', params: { user: restaurant.name} }">
                                    <div class="restaurant_name">
                                        <h3 class="restaurant_title text-center">{{restaurant.name}}</h3>
                                    </div>
                                    <img class="img-fluid" :src="`../storage/${restaurant.image}`" alt="">
                                </router-link>
                            </div>
                                </transition>
                        </div>
                </div>
                <div v-else class="row justify-content-center pt-4">
                    <transition appear name="fade">
                    <h5><i class="fa-regular fa-face-sad-tear"></i> Nessun ristorante associato a questa categoria</h5>
                    </transition>
                </div>
            </div>
        </div>
    </div>
  </section>
</template>

<script>

export default {
    name: 'TypeSection',
    data() {
        return{
            types : [],
            restaurants: [],
            restaurantByType: [],
            showBox: false,
        };
    },
    created() {
        axios.get('/api/types')
        .then((response) => {
            this.types = response.data
        })

        axios.get('/api/users')
        .then((response) => {
            this.restaurants = response.data;
        })
    },
    methods: {
        searchByType(payload){
            this.showBox = true;
            // this.restaurantByType = [];
            this.restaurants.forEach((elm)=>{
                // console.log(elm.types);
                let singleRestTypesArray = elm.types;
                singleRestTypesArray.forEach((singleElm)=>{
                    // console.log(singleElm.name)
                    if(singleElm.name === payload){
                        // console.log(`${payload} = ${elm.name}`)
                        if(!this.restaurantByType.includes(elm)){
                            this.restaurantByType.push(elm);
                        }else{
                            for (let i = 0; i < this.restaurantByType.length; i++) {
                                console.log(this.restaurantByType[i].types[0].name)
                                this.restaurantByType[i].types.map(ol => {
                                    if(payload == ol.name){
                                        this.restaurantByType.splice(i, 1)
                                    }
                                })
                                
                            }
                        }
                    }
                })
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

     .type_box:hover, .on_click{
        transform: scale(1.1);
        box-shadow: 5px 5px 15px 1px #111214;
    }

    .type{
        background-image: url('../../../../public/image/provabg.jpg');
        border-top: 1px solid #111214;
        border-bottom: 1px solid #111214;
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

    .fade-enter-active,
    .fade-leave-active {
        transition: opacity .5s
    }

    .fade-enter,
    .fade-leave-to {
        opacity: 0
    }
</style>
<template>
  <main>
    <div class="container pb-5">
        <div class="row py-5 align-items-center">
            <div class="col-2 d-flex">
                <img class="img-fluid" :src="`../storage/${user.image}`" alt="">
                </div>
            <div class="col-10 pt-3">
                <h2>{{user.name}}</h2>
            </div>
        </div>
        <div class="row gap">

            <!-- CARD ITEM -->
            <div v-for="item,id in items" :key="id" class="col-sm-12 col-md-6">
                <div class="menu_item_box d-flex p-2 flex-wrap">
                    <div class="item_box_description col-8">
                        <h4>{{item.name}}</h4>
                        <p>{{item.description}}</p>
                    </div>
                    <div class="item_box_image col-4">
                        <img class="img-fluid" :src="`../storage/${item.image}`" alt="">
                    </div>
                    <div class="col-12">
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div class="div"><strong>Prezzo:</strong> {{item.price.toFixed(2)}}&#8364;</div>
                            <div><i class="fa-solid fa-circle-plus add_cart_plus" @click="addToCart(item)"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </main>
</template>

<script>
import shared from '../shared'
export default {
    name: 'SingleRestaurant',
    data() {
        return {
            items: [],
            user:[],
            virtualCart:[],
            shared,
        }
    },
    created() {
        axios.get(`/api/items/${this.$route.params.user}`)
        .then((response) => {
            this.items = response.data.items;
            this.user = response.data;
            // console.log(localStorage.items)
            // console.log(response.data)
        })
    //    console.log(JSON.parse(localStorage.getItem('prodotto')).length)
         if(this.virtualCart.length === 0 && JSON.parse(localStorage.getItem('prodotto')) != null ){
                console.log('ci sei riuscito trimone a vento')
                this.virtualCart = JSON.parse(localStorage.getItem('prodotto'));
            }
        // if(JSON.parse(localStorage.getItem('prodotto')) != null){
        //     console.log('ok');
        // }
            

       
        
        
       
    },
    mounted() {
           
        
     
    },
    methods: {
        addToCart(item){
            this.virtualCart.push(item);
            localStorage.setItem('prodotto', JSON.stringify(this.virtualCart));
            console.log(JSON.parse(localStorage.getItem('prodotto')));
            // this.shared.count = JSON.parse(localStorage.getItem('prodotto')).length;
            
        }
    
    },

    computed:{
        
    }

    
}
</script>

<style lang="scss" scoped>
    .menu_item_box{
        min-height: 10.625rem;
        background-color: beige;
        border-radius: .625rem;
        box-shadow: 9px 6px 19px -7px #000000;

        .item_box_description{
            font-size: .8125rem;
        }

        .item_box_image{
            width: 9.375rem;
            height: 9.375rem;
            object-fit: cover;

            img{
                border-radius: .625rem;
                overflow: hidden;
            }
        }
    }

    .add_cart_plus{
        font-size: 1.25rem;
        color: rgba(62, 196, 184, 0.938);
        cursor: pointer;
        transition: all 0.5s;

        &:hover{
            transform: scale(1.5);
        }
    }

    .gap{
        row-gap: 1.875rem;
    }
</style>
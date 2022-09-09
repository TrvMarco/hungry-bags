<template>
  <main>
    <div class="container pb-5">
        <div class="row py-5 align-items-center">
            <div class="col-2 d-flex">
                <img class="img-fluid" :src="`../storage/${user.image}`" alt="">
                </div>
            <div class="col-10 pt-3">
                <h2>{{user.name}}</h2>
                <h5>{{user.address}}</h5>
            </div>
        </div>
        <div class="row gap">
            <div class="col-6">
            <div v-for="item,id in items" :key="id" class="col my-3">
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
                            <div class="cart_managemen d-flex ">
                                <!-- <div><i class="fa-solid fa-minus " @click="deleteItem(item)"></i></div> -->
                                <div>
                                    <i class="fa-solid fa-circle-plus add_cart_plus" @click="addToCart(item)"></i>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
          
            <!-- BOX TOTALE -->
            <div class="col my-3">
                <!-- CONFERMA ORDINE -->
                <div v-if="items.length > 0" class="menu_item_box p-2">
                    <h4 class="text-center pt-2"><i class="fa-solid fa-cart-shopping"></i> Il tuo carrello : </h4>
                    <hr>
                    <div v-if="virtualCart.length >0 " class="px-4">
                        
                        <div   class="d-flex justify-content-between align-items-center my-2" v-for="item,id in virtualCart" :key="id">
                            <span>{{item.name}}</span>
                            <div class="d-flex align-items-center">
                                <span class="mx-3">{{item.price.toFixed(2)}}&#8364;</span>
                                <span><i class="fa-solid fa-minus minus_class " @click="deleteItem(id)"></i></span>
                            </div>
                        </div>
                        <div id="myPopup" class="popup text-center">puoi fare ordini solo dallo stesso ristorante </div>
                    </div>
                    <div v-else class="text-center p-4">
                        <h5>Il carrello é momentaneamente vuoto!</h5> 
                    </div>
                </div>
            </div>
            
        </div>

        
        
        <div v-if="items.length == 0 " class="row text-center">
            <div class="col-12 p-5">
                <h1>Il ristoratore non ha ancora aggiunto il suo menù</h1>
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
            // prova con il count per carrello 
            // count : [],
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
                this.virtualCart = JSON.parse(localStorage.getItem('prodotto'));
                this.shared.count = this.virtualCart.length;

                // const count = {};

                // this.virtualCart.forEach(element => {
                // count[element.name] = (count[element.name] || 0) + 1;
                // console.log(element.id);
                // });

                // this.count.splice(0,1)
                // this.count.push(count);

            }
        // if(JSON.parse(localStorage.getItem('prodotto')) != null){
        //     console.log('ok');
        // }
        
        
        
       
    },
    mounted() {
           
        
     
    },
    methods: {
        addToCart(item){
            // se l'elemento che inserisco ha lo stesso user_id del primo elemento lo inserisce altrimenti esce un alert elemento non dello stesso ristorante 
            // console.log(this.virtualCart[0].user_id)
            if(this.virtualCart.length === 0 || item.user_id === this.virtualCart[0].user_id){
                    // se l'elemento non è contenuto nell'array pushalo , altrimenti aumenta la quantità di 1 
                this.virtualCart.push(item);
                localStorage.setItem('prodotto', JSON.stringify(this.virtualCart));
                console.log(JSON.parse(localStorage.getItem('prodotto')));
                this.shared.count = this.virtualCart.length;

                // const count = {};

                // this.virtualCart.forEach(element => {
                // count[element.name] = (count[element.name] || 0) + 1;
                // console.log(element.id);
                // });
                // this.count.splice(0,1)
                // this.count.push(count);
                // console.log(count);
                
                // 👇️ {one: 3, two: 2, three: 1}
                
                
            }else{ 
            
            
                let popup = document.getElementById("myPopup");
                popup.classList.add("show");
                setTimeout(function() { popup.classList.add("none");}, 3000);
                popup.classList.remove("none")
                // alert("elemento non dello stesso ristorante")
            } 
        },
        deleteItem(id){
            // console.log(id)
            
            // console.log(this.virtualCart);
            //elimino un elemento dall'array myCart
            this.virtualCart.splice(id,1); 
            // assegno nuovamente l'array allo storage 
            this.shared.count = this.virtualCart.length;
            localStorage.setItem('prodotto', JSON.stringify(this.virtualCart))
        
        
        },
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

    .minus_class{
        background-color:#b40404;
        padding: .1875rem;
        color: #ffff;
        border-radius: 50%;
    }

    .popup{
     
        display: none;
    }
    .show{
        text-transform: uppercase;
        color: #b40404;
        font-size: 1rem;
        display: block;
        padding: .9375rem 0px;
    }
    .none{
       
        display: none;
    } 
</style>
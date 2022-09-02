<template>
  <main>
    <div class="container pb-5">
        <div class="row p-4">
            <div class="col-12 text-center">
                <h1>Completa il tuo ordine!</h1>
            </div>
        </div>
        <div class="d-flex row">
            <div class="col-12 col-lg-6">
                <!-- BOX ITEM CARRELLO -->
                <div class="col-sm-12 align-self-start pb-3" v-for="item,id in myCart" :key="id">
                    <div class="menu_item_box d-flex p-2 flex-wrap">
                        <div class="item_box_description col-8">
                            <h3>{{item.name}}</h3>
                            <span>{{item.description}}</span>
                        </div>
                        <div class="item_box_image col-4">
                            <img class="img-fluid" :src="`../storage/${item.image}`" alt="">
                        </div>
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <div class="div"><strong>Prezzo:</strong> {{item.price.toFixed(2)}}&#8364;</div>
                            <button type="button" class="btn btn-sm btn-danger" @click="remove(item)">Rimuovi</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BOX TOTALE -->
            <div class="col-12 col-lg-6">
                <div class="menu_item_box p-2">
                    <h4 class="text-center pt-2">Confrema ordine:</h4>
                    <hr>
                    <div class="px-4">
                        <div class="d-flex justify-content-between" v-for="item,id in myCart" :key="id">
                            <span>{{item.name}}</span>
                            <span>{{item.price.toFixed(2)}}&#8364;</span>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between px-4">
                        <h5 class="text-uppercase">Totale</h5>
                        <span>{{totalCartPrice.toFixed(2)}}&#8364;</span>
                    </div>
                </div>
            </div>


        </div>
    </div>
  </main>
</template>

<script>
export default {
    name: 'Cart',
    data(){
        return{
            myCart: [],
            totalCartPrice,
        }
    },
    created(){
       this.myCart = JSON.parse(localStorage.getItem('prodotto'))

        let sum = 0;
        this.myCart.forEach(elm => {
                // console.log(elm.price);
                sum += elm.price
        })

       this.totalCartPrice = sum
        
    },
    methods: {
        totalCartPrice(){
            myCart.array.forEach(elm => {
                console.log(elm)
            });
        },
        removeItem(x) {
            this.myCart.splice(x, 1);
        },
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
    }

    .gap{
        row-gap: 1.875rem;
    }
</style>
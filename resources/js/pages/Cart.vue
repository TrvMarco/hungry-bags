<template>
  <main>
    <div v-if="myCart.length > 0" class="container pb-5">
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
                            <button type="button" class="btn btn-sm btn-danger" @click="deleteItem(id)">Rimuovi</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BOX TOTALE -->
            <div class="col-12 col-lg-6">
                <!-- CONFERMA ORDINE -->
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
                        <span v-show="totalCartPrice">{{sum}}&#8364;</span>
                    </div>
                </div>
                <!-- DATI CLIENTE -->
                <div class="menu_item_box p-2 mt-3">
                    <h4 class="text-center pt-2">Inserisci i tuoi dati</h4>
                    <hr>
                    <form class="px-4" @submit.prevent="addDataClient()">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="client_name">Nome *</label>
                                <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Inserisci il tuo nome"  v-model="Dataclient.client_name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="client_surname">Cognome *</label>
                                <input type="text" class="form-control" id="client_surname" name="client_surname" placeholder="Inserisci il tuo cognome" v-model="Dataclient.client_surname" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Indirizzo di consegna *</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="es: Milano, Via Roma 23" name="address" v-model="Dataclient.address" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Numero di telefono *</label>
                            <input type="text" class="form-control" id="phone" placeholder="+39 ..." name="phone" v-model="Dataclient.phone" required>
                        </div>
                        <button type="submit" class="btn btn-success">Checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div v-else class="col-12 text-center p-5">
        <h1>Il carrello è vuoto!</h1>
    </div>
  </main>
</template>

<script>
import shared from '../shared'
export default {
    name: 'Cart',
    data(){
        return{
            myCart: [],
            totalCartPrice: [],
            price: '',
            shared,
            Dataclient: {
                client_name: '',
                client_surname: '',
                address: '',
                phone: '',
                total_price: '',
                items: [],
            }
        }
    },
    created(){
        if( JSON.parse(localStorage.getItem('prodotto')) != null ){
            this.myCart = JSON.parse(localStorage.getItem('prodotto'))
        }
        // console.log(JSON.parse(localStorage.getItem('prodotto')).length)
    },
  
    methods: {
      
        deleteItem(id){
            console.log(id)
            //elimino un elemento dall'array myCart
            this.myCart.splice(id,1); 
            this.shared.count = this.myCart.length;
            // assegno nuovamente l'array allo storage 
            localStorage.setItem('prodotto', JSON.stringify(this.myCart))
        },

        addDataClient() {
            this.Dataclient.total_price = this.price
            this.Dataclient.items = this.myCart
            axios.post('/api/orders', this.Dataclient)
            .then((resp) => {
                this.Dataclient.client_name = '';
                this.Dataclient.client_surname = '';
                this.Dataclient.address = '';
                this.Dataclient.phone = '';
                this.Dataclient.items;
                console.log(this.Dataclient);
                localStorage.clear();
            })
            .catch((er) => {
                console.log(er);
            })
            window.location.href = '/payment';
        }

    },

    computed: {
        sum(){
            let sum = 0;
            this.myCart.forEach(elm => {
                    // console.log(elm.price);
                    sum += elm.price
            })
            
            this.price = sum.toFixed(2)
            // console.log(this.myCart)
            return this.shared.totalCartPrice = sum.toFixed(2)

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
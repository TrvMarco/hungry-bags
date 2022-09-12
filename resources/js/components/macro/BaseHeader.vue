<template>
    <header>
        <div class="container-fluid">
            <div class="row p-3 text-white">
                <div class="col-6 d-flex">
                    <!-- Qui andrà img e logo -->
                    <a href="/" class="link-default"><h1>HungryBags</h1></a>
                    <div class="logo pl-3">
                        <img class="logo img-fluid" src="../../../../public/image/logo.png" alt="">
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center">
                    <div class="mr-3">
                        <a href="/login" class="btn btn-sm reserved_area">Area Ristoratore</a>
                    </div>
                    <div class="cart">
                        <a href="/check-out" class="link-default cart"><i class="fa-solid fa-cart-shopping"></i></a>
                        <span class="items-count"><strong>{{shared.count}}</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<script>

import HeroSection from '../sections/HeroSection.vue';
import shared from '../../shared'

export default {
    name: 'BaseHeader',
    data(){
        return{
            shared,
        }
    },
    created() {

         if( JSON.parse(localStorage.getItem('prodotto')) != null ){
                this.shared.count  = JSON.parse(localStorage.getItem('prodotto')).length;
            }
        // if(JSON.parse(localStorage.getItem('prodotto')) != null){
        //     console.log('ok');
        // }
    },
    computed: {
         count(){
            if(JSON.parse(localStorage.getItem('prodotto')) != null){
                return shared.count = JSON.parse(localStorage.getItem('prodotto')).length;
            } else {
                return shared.count = 0;
            }
        }
    }
}

</script>

<style lang='scss' scoped>
    header{
        
        h1{
            margin-bottom: 0;
        }

        .logo{
            height: 3.125rem;
        }

        .container-fluid{
            background-color: #111214;

            .link-default{
                text-decoration: none;
                color: #eee1b3
            }

            .cart{
                position:relative;
                font-size: 1.5rem;
                .items-count{
                    position: absolute;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    top: -7px;
                    right: -12px;
                    color: #fff;
                    background-color: rgb(161, 9, 9);
                    width: 1.25rem;
                    height: 1.25rem;
                    border-radius: 30px;
                    font-size: .9375rem;
                    
                }
            }

            .reserved_area{
                background-color: #eee1b3;
                color: #111214;
            }
           
        }
    }
</style>
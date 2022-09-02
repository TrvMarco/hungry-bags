<template>
    <header>
        <div class="container-fluid">
            <div class="row p-3 text-white">
                <div class="col-6">
                    <!-- Qui andrà img e logo -->
                    <a href="/" class="link-default"><h1>HungryBags</h1></a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <!-- nav accedi lingua -->
                    <div class="cart">
                    <a href="/check-out" class="link-default cart"><i class="fa-solid fa-cart-shopping"></i></a>
                    ciao
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<script>

import HeroSection from '../sections/HeroSection.vue';

export default {
    name: 'BaseHeader',
}

</script>

<style lang='scss' scoped>
    header{
        .container-fluid{
            background-color: #111214;

            .link-default{
                text-decoration: none;
                color: white;
            }

            .cart{
                font-size: 1.25rem;
            }

            
           
        }
    }
</style>
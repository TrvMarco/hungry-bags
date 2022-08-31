<template>
    <header class="header">
        <div class="header__top">
            <!-- LOGO busta header -->
            <img class="logo-header" src="./img/logo-busta-blu.png" alt="">
            <!-- Scritta HB LOGO header -->
            <img class="name-header" src="./img/hb-text-logo.png" alt="">
            <!-- CARRELLO header -->
            <div class="cart-btn">
                <div class="circle-black">
                    <i class="cart-img fa-solid fa-cart-shopping container-fluid"></i>
                </div>
            </div>
        </div>
        <!-- Link menu blu Header bottom -->
        <div class="header__bottom">
            <a class="link" href="#">Chi siamo</a>
            <a class="link" href="#">Contattaci</a>
            <a class="link" href="/admin/home">Area Ristoratori</a>
            <router-link :to="{name:'restaurant-area'}">Area Ristoratori</router-link>
        </div>
    </header>
</template>

<script>
export default {
    name: 'BaseHeader'
}

</script>

<style lang='scss'>

    .header {
        min-height: 100px;

        .logo-header {
            width: 65px;
            margin-bottom: 10px;
            margin-left: 10px;
            cursor: pointer;
        }

        // Questo fa tremare la busta dell'header
        .logo-header:hover {
            animation: shake 0.5s;
            animation-iteration-count: infinite;
        }
        // Questo fa tremare la busta dell'header
        @keyframes shake {
            0% { transform: translate(1px, 1px) rotate(0deg); }
            10% { transform: translate(-1px, -2px) rotate(-1deg); }
            20% { transform: translate(-3px, 0px) rotate(1deg); }
            30% { transform: translate(3px, 2px) rotate(0deg); }
            40% { transform: translate(1px, -1px) rotate(1deg); }
            50% { transform: translate(-1px, 2px) rotate(-1deg); }
            60% { transform: translate(-3px, 1px) rotate(0deg); }
            70% { transform: translate(3px, 1px) rotate(-1deg); }
            80% { transform: translate(-1px, -1px) rotate(1deg); }
            90% { transform: translate(1px, 2px) rotate(0deg); }
            100% { transform: translate(1px, -2px) rotate(-1deg); }
        }

        .name-header {
            width: 43%;
            cursor: pointer;
        }

        .cart-btn{
            cursor: pointer;
            margin-right: 10px;

            .circle-black {
                background: black;
                width: 70px;
                height: 70px;
                border-radius: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin:0;
                cursor: pointer;
            }

            .cart-img {
                color: var(--secondary-color);
                font-size: 30px;
                margin: 3px 0px 0px 3px;
            }

            .cart-img:hover {
                color: rgb(255, 230, 0);
            }
        }

        &__top {
            height: 130px;
            width: 100%;
            background: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        &__bottom {
            min-height: 40px;
            width: 100%;
            background: var(--secondary-color);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;

            .link {
                color: black;
                font-size: 22px;
                text-decoration: none;
                color: inherit;
                margin: 5px 25px 0px 25px;
                border-bottom: 5px solid var(--secondary-color);
            }
            // Hover links header
            .link:hover {
                border-bottom: 5px solid var(--primary-color);
            }
        }
    };
</style>
<template>
    <main class="main">

        <!-- cuore -->
        <img class="cuore-img container" id="mainButton" src="../components/macro/img/cuore-posate.png" alt="">
        <!-- Cosa vuoi mangiare? -->
        <h1 class="question container">Cosa vuoi mangiare?</h1>
            <!-- Cerchi blu rossi con img food e scritta -->
        <div class="circle-list container">

            <div class="cerchio-e-scritta">
                <div class="circle-red">
                    <img class="food-img" src="../components/macro/img/indiano.png" alt="">
                </div>
                <p class="testo-food">Indiano</p>
            </div>

            <div class="cerchio-e-scritta">
                <div class="circle-blu">
                    <img class="food-img sushi-fix"  src="../components/macro/img/sushi.png" alt="">
                </div>
                <p class="testo-food">Sushi</p>
            </div>

            <div class="cerchio-e-scritta">
                <div class="circle-red">
                    <img class="food-img panino-fix" src="../components/macro/img/panino.png" alt="">
                </div>
                <p class="testo-food">Panino</p>
            </div>

            <div class="cerchio-e-scritta">
                <div class="circle-blu">
                    <img class="food-img pizza-fix" src="../components/macro/img/pizza.png" alt="">
                </div>
                <p class="testo-food">Pizza</p>
            </div>

            <div class="cerchio-e-scritta">
                <div class="circle-red">
                    <img class="food-img poke-fix" src="../components/macro/img/poke.png" alt="">
                </div>
                <p class="testo-food">Pokè</p>
            </div>

            <div class="cerchio-e-scritta">
                <div class="circle-blu">
                    <img class="food-img" src="../components/macro/img/pollo.png" alt="">
                </div>
                <p class="testo-food">Pollo</p>
            </div>

            <div class="cerchio-e-scritta">
                <div class="circle-red">
                    <img class="food-img" src="../components/macro/img/cinese.png" alt="">
                </div>
                <p class="testo-food">Cinese</p>
            </div>

            <div class="cerchio-e-scritta">
                <div class="circle-blu">
                    <img class="food-img carne-fix" src="../components/macro/img/carne.png" alt="">
                </div>
                <p class="testo-food">Carne</p>
            </div>

            <div class="cerchio-e-scritta">
                <div class="circle-red">
                    <img class="food-img" src="../components/macro/img/pesce2.png" alt="">
                </div>
                <p class="testo-food">Pesce</p>
            </div>
        </div>
        <!-- Immagine Raider -->
        <img class="raider-img container" src="../components/macro/img/raider-header.png" alt="">

        <div class="container flex margin-bottom-70px">
            <div class="imgs-left">
                <div class="img-top-left"></div> 
                <div class="container-left">
                    <div class="container-bottom-left"></div>
                    <div class="container-bottom-right">
                        <div class="top-right-bottom">
                            <img class="busta-rossa" src="../components/macro/img/logo-busta-solo-rossa.png" alt="">
                            <img class="busta-rossa" src="../components/macro/img/logo-busta-solo-rossa.png" alt="">
                            <img class="busta-rossa" src="../components/macro/img/logo-busta-solo-rossa.png" alt="">
                        </div>
                        <div class="bottom-right"></div>
                    </div>
                </div>
            </div>
            <div class="imgs-right">
            </div>
        </div>
    </main>
</template>
<script>
export default {
    name: 'Home',
}
</script>

<style lang='scss' scoped>

    .main {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        .imgs-left {
            width: 100%;
            height: 400px;
            display:flex;
            align-items: center;
            flex-direction: column;
            margin-right: 10px;

            .img-top-left {
                height: 100%;
                width: 100%;
                background: var(--primary-color);
                border-radius: 12px;
            }

            .container-left {
            display:flex;
            align-content: center;
            justify-content: space-between;
            width: 100%;
            padding-top: 10px;

                .top-right-bottom {
                    height: 55%;
                    width: 100%;
                    background: var(--secondary-color);
                    border-radius: 12px;

                }

                .bottom-right {
                    height: 40%;
                    width: 100%;
                    background: var(--primary-color);
                    border-radius: 12px;
                }

                .container-bottom-left {
                    height: 200px;
                    width: 50%;
                    background: var(--secondary-color);
                    border-radius: 12px;
                }

                .container-bottom-right {
                    display:flex;
                    width: 50%;
                    align-content: center;
                    justify-content: space-between;
                    flex-direction: column;
                    margin: 0px 0px 0px 10px;
                }
            }
        }
        .imgs-right {
            background: var(--secondary-color);
            border-radius: 12px;
            width: 45%;
            height: 400px;
        }

        .container-left {
            display:flex;
            align-content: center;
            justify-content: space-between;
            width: 100%;
            padding-top: 10px;

            .top-right-bottom {
                height: 55%;
                width: 100%;
                background: var(--secondary-color);
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: space-evenly;

                .busta-rossa {
                    max-width: 25%;
                    max-height: 70%;
                }
            }
            .bottom-right {
                height: 40%;
                width: 100%;
                background: var(--primary-color);
                border-radius: 12px;
            }
        }

        .flex {
            display:flex;
            align-items: center;
            justify-content: center;
        }

        .question {
            font-size: 70px;
            text-align: center;
        }

        .circle-list{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 10px;

            .circle-red {
                background: var(--primary-color);
                height: 100px;
                width: 100px;
                border-radius: 100px;
                margin: 5px;
                cursor: pointer;
                transition: transform .25s;
                display: flex;
                align-items: center;
                justify-content: center;

                .food-img {
                    width: 70%;
                }
            }

            .circle-red:hover {
                transform: scale(1.1);
            }

            .circle-blu {
                background: var(--secondary-color);
                height: 100px;
                width: 100px;
                border-radius: 100px;
                margin: 5px;
                cursor: pointer;
                transition: transform .25s;
                display: flex;
                align-items: center;
                justify-content: center;

                .food-img {
                    width: 70%;
                }
            }

            .circle-blu:hover {
                transform: scale(1.1);
            }
        }
        .cuore-img {
            margin: 18px 0px -3px 0px;
            width: 150px;
        }

        // Questo fa battere il cuore <3
        .cuore-img:hover {
            animation: zoom-in-zoom-out 1.5s ease-in infinite;
        }
        // Questo fa battere il cuore <3
        @keyframes zoom-in-zoom-out {
            0% {
            transform: scale(1, 1);
            }
            50% {
            transform: scale(1.1, 1.1);
            }
            100% {
            transform: scale(1, 1);
            }
        }

        .raider-img {
            margin: 25px 50px 25px 0px;
            max-width: 300px;
        }
        
        // FIX VARI PER CENTRARE I CIBI NEI CERCHI
        .sushi-fix {
            margin-left: 9px;
        }

        .panino-fix {
            margin: 0px 2px 2px 0px;
        }

        .pizza-fix {
            margin: 0px 1px 0px 0px
        }

        .poke-fix {
            padding: 7px;
        }

        .carne-fix {
            margin: 2px 0px 0px 5px;
        }

        .cerchio-e-scritta {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }


        .margin-bottom-70px {
            margin-bottom: 70px;
        }
    }
</style>
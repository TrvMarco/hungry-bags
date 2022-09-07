<template>
    <section class="hero text-white p-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 sx">
                    <div id="slider">
                        <figure>
                            <img src="https://cdn.pixabay.com/photo/2016/04/26/03/55/salmon-1353598_960_720.jpg">
                            <img src="https://cdn.pixabay.com/photo/2017/12/05/20/09/pizza-3000274_960_720.jpg">
                            <img src="https://cdn.pixabay.com/photo/2020/03/21/11/17/burger-4953465_960_720.jpg">
                            <img src="https://cdn.pixabay.com/photo/2017/01/16/17/45/pancake-1984716_960_720.jpg">
                            <img src="https://cdn.pixabay.com/photo/2016/04/26/03/55/salmon-1353598_960_720.jpg">
                        </figure>
                    </div>
                </div>
                <div class="col-12 col-md-6 p-5 dx" style="width:100%">
                    <h2>Hai fame?<br>
                    Su HungryBags puoi ordinare tutto il cibo che vuoi con consegna a domicilio!</h2>
                    <div class="input-container">
                        <div class="flag-container">
                            <i class="fa-regular fa-flag flag"></i>
                        </div>
                        <div class="text-container">
                            <input class="input-text" placeholder="Qual'è la tua posizione?" type="text">
                        </div>
                        <div class="position-container">
                            <div class="position">
                                <i class="fa-solid fa-location-dot position-icon"></i>
                                <span class="position-text">Posizione attuale</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
  name: "HeroSection",
 
};
</script>

<style lang="scss" scoped>
    .hero{
        background-color: #111214;

        img{
            box-shadow: 0px 0px 10px #000;
            // box-shadow: inset 0px 0px 50px 23px #000000;
        }

        .input-container {
            display: flex;
            max-width: 540px;
            width: 100%;
            font-size: 16px;
            align-items: center;
            height: 50px;
            margin: 25px 0px 0px 0px;

            .flag-container {
                background: #eee1b3;
                height: 40px;
                width: 40px;
                border-top-left-radius: 8px;
                border-bottom-left-radius: 8px;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;

                .flag {
                    color: black;
                }
            }
            // Questo rimuove il bordo input
            .input-text {
                border: none;
                height: 40px;
                padding: 3px 10px;
            }
            // Questo rimuove il bordo input al click
            .input-text:focus {
                outline: none 
            }

            .position-container {
                display: flex;
                cursor: pointer;

                .position {
                    background: #eee1b3;
                    height: 40px;
                    min-width: 40px;
                    border-top-right-radius: 8px;
                    border-bottom-right-radius: 8px;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    padding: 0px 10px;

                    .position-icon {
                        color: black;
                        margin: 0px 8px 0px 0px;
                        font-size: 20px;
                    }

                    .position-text {
                        color: black;
                    }
                }
            }
        }
    }

#slider figure img{
  height:300px;
  width:20%;
  float: left;
}

#slider{
    overflow: hidden;
}
#slider figure{
    position: relative;
    width: 500%;
    margin: 0;
    left: 0;
    animation: 25s slider infinite;
}
@keyframes slider{
    0%{
        left: 0;
    }
    20%{
        left: 0;
    }
    25%{
        left: -100%;
    }
    45%{
        left: -100%;
    }
    50%{
        left: -200%;
    }
    70%{
        left: -200%;
    }
    75%{
        left: -300%;
    }
    95%{
        left: -300%;
    }
    100%{
        left: -400%;
    }
}
</style>
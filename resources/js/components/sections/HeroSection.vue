<template>
    <section class="hero text-white p-4">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img class="img-fluid" src="https://wallpaperaccess.com/full/386420.jpg" alt="">
                </div>
                <div class="col-12 col-md-6 p-5">
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
    name: 'HeroSection',
}
</script>

<style lang="scss" scoped>
    .hero{
        // background-color: #111214;
        background: linear-gradient(#111214 50%,#eee1b3);

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
</style>
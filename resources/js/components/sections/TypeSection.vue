<template>
  <section class="type py-5"> 
    <div class="container">
        <div class="row">
            <h3>Le scelte più appetitose</h3>
        </div>
        <div>
            <div class="row">
                <div class="col-2 d-flex">
                    <div class="type_box">
                        <div class="box_img">
                            <img src="https://cdn.ilclubdellericette.it/wp-content/uploads/2018/02/ricetta-hamburger-640x480.jpg" alt="">
                        </div>
                        <div class="text-center"><small>Hamburger</small></div>
                    </div>
                </div>
                <div class="col-2 d-flex">
                    <div class="type_box">
                        <div class="box_img">
                            <img src="https://cdn.ilclubdellericette.it/wp-content/uploads/2018/02/ricetta-hamburger-640x480.jpg" alt="">
                        </div>
                        <div class="text-center"><small>Hamburger</small></div>
                    </div>
                </div>
                <div class="col-2 d-flex">
                    <div class="type_box">
                        <div class="box_img">
                            <img src="https://cdn.ilclubdellericette.it/wp-content/uploads/2018/02/ricetta-hamburger-640x480.jpg" alt="">
                        </div>
                        <div class="text-center"><small>Hamburger</small></div>
                    </div>
                </div>
                <div class="col-2 d-flex">
                    <div class="type_box">
                        <div class="box_img">
                            <img src="https://cdn.ilclubdellericette.it/wp-content/uploads/2018/02/ricetta-hamburger-640x480.jpg" alt="">
                        </div>
                        <div class="text-center"><small>Hamburger</small></div>
                    </div>
                </div>
                <div class="col-2 d-flex">
                    <div class="type_box">
                        <div class="box_img">
                            <img src="https://cdn.ilclubdellericette.it/wp-content/uploads/2018/02/ricetta-hamburger-640x480.jpg" alt="">
                        </div>
                        <div class="text-center"><small>Hamburger</small></div>
                    </div>
                </div>
                <div class="col-2 d-flex">
                    <div class="type_box">
                        <div class="box_img">
                            <img src="https://cdn.ilclubdellericette.it/wp-content/uploads/2018/02/ricetta-hamburger-640x480.jpg" alt="">
                        </div>
                        <div class="text-center"><small>Hamburger</small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
</template>

<script>
export default {
    name: 'TypeSection',
    data() {
        return{
            // tipologies: [
            //     {
            //         name: 'Hamburger',
            //         img: 'https://cdn.ilclubdellericette.it/wp-content/uploads/2018/02/ricetta-hamburger-640x480.jpg'
            //     },
            //     {
            //         name: 'Poke',
            //         img: 'https://www.risogallo.it/wp-content/uploads/2020/09/MG_POKE-RISO-SOSTENIBILE--1024x954.jpg'
            //     },
            //     {
            //         name: 'Sushi',
            //         img: 'https://static.cookist.it/wp-content/uploads/sites/21/2020/11/tipi-di-sushi-1.jpg'
            //     },
            //     {
            //         name: 'Hamburger',
            //         img: 'https://cdn.ilclubdellericette.it/wp-content/uploads/2018/02/ricetta-hamburger-640x480.jpg'
            //     },
            //     {
            //         name: 'Poke',
            //         img: 'https://www.risogallo.it/wp-content/uploads/2020/09/MG_POKE-RISO-SOSTENIBILE--1024x954.jpg'
            //     },
            //     {
            //         name: 'Sushi',
            //         img: 'https://static.cookist.it/wp-content/uploads/sites/21/2020/11/tipi-di-sushi-1.jpg'
            //     },
            // ]
        }
    }
}
</script>

<style lang="scss" scoped>
    .type_box{
        .box_img{
            height: 6.25rem;
            width: 6.25rem;
        }

        img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    }
</style>
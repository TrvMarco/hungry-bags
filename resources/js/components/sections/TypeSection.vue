<template>
  <section class="type py-5"> 
    <div class="container">
        <div class="row pb-3">
            <h3>Le scelte più appetitose</h3>
        </div>
        <div>
            <div class="row">
                <div v-for="type in types" :key="type.id">
                    <div class="col-2 d-flex">
                        <div class="type_box">
                            <div class="box_img">
                                <img src="https://cdn.ilclubdellericette.it/wp-content/uploads/2018/02/ricetta-hamburger-640x480.jpg" alt="">
                            </div>
                            <div class="text-center"><small>{{type.name}}</small></div>
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
    name: 'TypeSection',
    data() {
        return{
            types : [],
        };
    },
    created() {
        axios.get('/api/types')
        .then((response) => {
            this.types = response.data
        })
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
<template>
  <section class="type py-5"> 
    <div class="container">
        <div class="row pb-3">
            <h3>Le scelte più appetitose</h3>
        </div>
        <div>
            <div class="row">
                <!-- <form @submit.prevent="chooseType()"> -->
                    <div v-if="types.length > 0">
                        <div v-for="type in firstTypes" :key="type.id">
                            <div class="col-2 d-flex">
                                <div class="type_box">
                                    <div class="box_img">
                                        <!-- <img src="https://cdn.ilclubdellericette.it/wp-content/uploads/2018/02/ricetta-hamburger-640x480.jpg" alt=""> -->
                                        <router-link :to="{ name: 'restaurant-list', params: {type: type.name} }">{{type.name}}</router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- <button type="submit">Cerca</button> -->
                <!-- </form> -->
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
            typeChoose : [],
            choose: false,
        };
    },
    created() {
        axios.get('/api/types')
        .then((response) => {
            this.types = response.data
        })
    },
    computed: {
        firstTypes() {
            let arr = [];
            for (let i = 0; i < 8; i++) {
                arr.push(this.types[i]);
            }
            return arr;
        }
    },
    // methods: {
    //     chooseType(){
    //         axios.post('/api/users', this.typeChoose)
    //         .then((resp) => {
    //             this.typeChoose = [];
    //             this.$router.push({name: 'restaurant-list'});
    //         })
    //     }
    // }
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
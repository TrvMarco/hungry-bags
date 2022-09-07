<template>
  <section class="type py-5"> 
    <div class="container">
        <div class="row pb-3 justify-content-center">
            <h2>Le scelte più appetitose</h2>
        </div>
        <div>
            <div v-if="types.length > 0">
                <!-- <form @submit.prevent="chooseType()"> -->
                    <div class="row justify-content-center">
                        <div v-for="type in types" :key="type.id">
                            <div class="col-2 d-flex p-2">
                                <div class="type_box transform">
                                    <router-link class="link-text" :to="{ name: 'restaurant-list', params: {type: type.name} }">
                                        <div class="box_img">
                                            {{type.name}}
                                        </div>
                                    </router-link>
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
         // * Funzione per mostrare solamente 8 tipologie 
    //     firstTypes() {
    //         let arr = [];
    //         for (let i = 0; i < 8; i++) {
    //             arr.push(this.types[i]);
    //         }
    //         return arr;
    //     }
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
        background: #eee1b3;
        border-radius: 30px;
        transition: all 0.08s;

        .box_img{
            min-height: 35px;
            min-width: 50px;
            padding: 0px 15px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 30px;
        }
        img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .link-text {
            text-decoration:none;
            color: black; 
        }
    }

     .type_box:hover {
        transform: scale(1.1);
        box-shadow: 5px 5px 15px 1px #111214;
    }

    .type{
        background-image: url('../../../../public/image/provabg.jpg');
        border-top: 1px solid #111214;
        border-bottom: 1px solid #111214;
    }

</style>
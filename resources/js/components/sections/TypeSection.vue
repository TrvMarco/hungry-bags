<template>
  <section class="type py-5"> 
    <div class="container">
        <div class="row pb-3 justify-content-center">
            <h3>Le scelte più appetitose</h3>
        </div>
        <div>
            <div v-if="types.length > 0">
                <div class="row justify-content-center">
                    <div v-for="type in types" :key="type.id">
                        <div class="col-2 d-flex p-2">
                            <div class="type_box transform">
                                <div class="box_img" @click="chooseType(type.name)">
                                    {{type.name}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <router-link  class="btn btn-success" :to="{ name: 'restaurant-list' }">
                            Cerca
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
</template>

<script>

import shared from '../../shared'

export default {
    name: 'TypeSection',
    data() {
        return{
            shared,
            types : [],
            typeChoose : [],
            choose: false,
        };
    },
    created() {
        axios.get('/api/types')
        .then((response) => {
            this.types = response.data;
        })
    },
    methods: {
        // chooseType(){
        //     axios.post('/api/users', this.typeChoose)
        //     .then((resp) => {
        //         this.typeChoose = [];
        //         this.$router.push({name: 'restaurant-list'});
        //         console.log(resp)
        //     })

        // },
        // searchType(){

        // }
        chooseType(elm){
            if(!this.shared.typeChoose.includes(elm)){
                this.shared.typeChoose.push(elm);
            }else{
                // this.shared.typeChoose.splice(elm,1)
            }
        },
        getUsers(){
            axios.get('/api/users')
            .then((resp)=>{
                console.log(resp);
            })
        }
        
    }
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
    }
</style>
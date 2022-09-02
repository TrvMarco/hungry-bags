<template>
  <main>
    <div class="container pt-4">
        <div class="row">
            <div class="col-12">
                <h1>I nostri ristoranti</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <a href="">
                    <div class="restaurant_card"></div>
                </a>
            </div>
            <div class="col-4">
                <div class="restaurant_card"></div>
            </div>
            <div class="col-4">
                <div class="restaurant_card"></div>
            </div>
        </div>
    </div>
  </main>
</template>

<script>
export default {
    name: 'RestaurantList',
    data() {
        return {
            restaurant: [],
        }
    },
    created(){
        axios.get('/api/users')
        .then((response) => {
            this.restaurant = response.data;
        })
    }
}
</script>

<style lang="scss" scoped>
    .restaurant_card{
        height: 12.5rem;
        background-color: aquamarine;
        border: 1px solid black;
    } 

    h1{
        font-weight: bold;
    }
</style>
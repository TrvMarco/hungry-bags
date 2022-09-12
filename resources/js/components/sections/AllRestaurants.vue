<template>
  <section class="all_restaurants">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 p-5">
                <h3>Non sai cosa scegliere? Consulta la lista di tutti i nostri ristoranti!</h3>
            </div>
            <div class="col-6 text-center">
                 <router-link class="btn btn-dark" to="/restaurant-list">Vai ai ristoranti</router-link>
            </div>
        </div>
    </div>
  </section>
</template>

<script>
export default {
    name: 'AllRestaurants'
}
</script>

<style style="scss" scoped>
    h3{
      color: #eee1b3;
    }

    section{
      background-color: #111214;
    }
</style>
<template>
  
  <div class="main">
    <h2 class="text-register">Se sei già registrato:</h2>
    <div class="container accedi">
      <a class="link" href="/login">
        Accedi
      </a>

    </div>
    
    <h1>Altrimenti:</h1>
    <div class="container registrati">

      <a class="link" href="/register">
        Registrati
      </a>

    </div>

  </div>

</template>

<script>
export default {
  name: 'RestaurantArea'
}
</script>

<style lang='scss' scoped>

  .main {

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    .accedi, .registrati {
      margin: 10px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .accedi{
      background: var(--primary-color);
    }

    .registrati {
      background: var(--secondary-color);
    }

    .link {
      text-decoration: none;
      color: inherit;
      width: 100%;
      text-align: center;
    }

    .text-register {
      margin: 50px 0px 0px 0px;
    }

  }

</style>
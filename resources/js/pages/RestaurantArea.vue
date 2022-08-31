<template>
  
  <div class="main">


      <div class="container accedi">
        <a class="link" href="/login">LOGIN</a>
      </div>


      <div class="container registrati">
        <a class="link" href="/register">REGISTRATI</a>
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

    .container{
      background: var(--primary-color);
    }

    .accedi, .registrati {
      margin: 10px;
      height: 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      
    }

    .accedi {
      margin-top: 30px;
    }

    .registrati {
      background: var(--secondary-color);
      
    }

    .link {
      text-decoration: none;
      color: inherit;
    }
  }

</style>
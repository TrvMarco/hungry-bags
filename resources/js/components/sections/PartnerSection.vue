<template>
  <section class="partner ">
    <div class="container d-flex justify-content-end align-items-center">
      <div class="box-partner d-flex flex-column justify-content-center align-items-center">
        <p class="px-4 text-center font-italic">Diventa partner di HungryBags e raggiungi sempre più clienti. Ci occupiamo noi della consegna, così che la tua unica preoccupazione sia continuare a preparare il miglior cibo. </p>
        
        <a href="/register"><button  class="partner-button"><strong>diventa partner</strong></button></a>
      </div>
    </div>
  </section>
</template>

<script>
export default {
    name:'PartnerSection'
}
</script>

<style lang="scss" scoped>
  .partner{
    background-image: url("../macro/img/partner-img-jpg.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 31.25rem;
    width: 100%;
     
    .container{
      height: 100%;
    }
    .box-partner{
      width: 50%;
      height: 25rem;
      background-color: rgba(0, 0, 0, 0.8);
      box-shadow: -1px 1px 6px 6px rgba(238, 225, 179, 0.4);
      border-radius: 30px;
      transition-duration: 0.4s;

      p{
        color: #eee1b3;
        // text-transform: uppercase;
      }
     
      .partner-button{
        margin-top: 3.125rem;
        text-transform: uppercase;
        padding: .625rem 1.875rem;
        border: none;
        border-radius: 1.875rem;
        transition-duration: 0.4s;
        
      }

       .partner-button:hover{
        background-color: #eee1b3;
        box-shadow: 0px 15px 20px rgba(238, 225, 179, 0.4);
        // color: #fff;
        transform: translateY(-7px)
      }

    }

    .box-partner:hover{
      box-shadow: -1px 1px 6px 6px rgba(255, 255, 255, 0.55);
    }


  }

</style>
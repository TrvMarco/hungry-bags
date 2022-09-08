<template>
  <section>
    <div class="partner">
    <div class="container d-flex justify-content-end align-items-center">
      <div class="box-partner d-flex flex-column justify-content-center align-items-center">
        <p class="px-4 text-center font-italic">Diventa partner di HungryBags e raggiungi sempre più clienti. Ci occupiamo noi della consegna, così che la tua unica preoccupazione sia continuare a preparare il miglior cibo. </p>
        
        <a href="/register"><button  class="partner-button"><strong>diventa partner</strong></button></a>
      </div>
    </div>
    </div>
    <div class="color">
      <div class="container">
        <div class="work row align-items-center">
          <div class="col-6 p-5">
            <h3>Oppure decidi di lavorare con noi! Tante opportunità ti aspetano:</h3>
          </div>
          <div class="jobs col-6">
            <div>
              <img src="https://www.gflegal.it/images/articoli_immagini/2020_immagini/GF_Legal_riders_food_delivery.jpg" alt="rider">
              <a href="#"><h5>Diventa un nostro Rider!</h5></a>
            </div>
            <div>
              <img src="https://as1.ftcdn.net/v2/jpg/02/20/26/82/1000_F_220268298_cnU7kMMfkAaEbLO1zwLowduYcqWrer17.jpg" alt="work place">
              <a href="#"><h5>Aiutaci a crescere!</h5></a>
            </div>
          </div>
        </div>
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
  .work{
    display: flex;
    flex-wrap: wrap;
    height: 18.75rem;
  }
  .jobs{ 
    display: flex;
    justify-content: space-around;}
    
    .jobs img{
    width: 10.625rem;
    height: 10.625rem;
    border-radius: 50%;
  }
.color{
  background: url("https://img.freepik.com/free-vector/cute-minimal-background-simple-cream-design-vector_53876-157711.jpg");
  height: 18.75rem;
  background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.jobs div a{
  color: black;
}
</style>
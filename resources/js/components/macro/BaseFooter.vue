<template>
    <footer class="p-4">
        <div class="container">
        <div class="row list">
            <ul class="col ">
                <h2>Uniamo le forze</h2>
                <li v-for="link in linksForce" :key="link.text" class="my-2">
                  <a :href="link.url">{{link.text}}</a>
                </li>
            </ul>
            <ul class="col">
                <h2>Link di interesse</h2>
                <li v-for="link in linksInt" :key="link.text" class="my-2">
                  <a :href="link.url">{{link.text}}</a>
                </li>
            </ul>
        
            <ul class="col">
                <li v-for="link in linksAbout" :key="link.text" class="my-2">
                  <a :href="link.url">{{link.text}}</a>
                </li>
            </ul>
            <div class="apps">
              <a href="#"><img src="./img/play.png" style="height:50px"  alt=""></a>
              <a href="#"><img src="./img/store.png" style="height:58px"  alt=""></a>
            </div>
        </div>
        <div class="brands-list ">
            <h2>I brand più richiesti al momento</h2>
            <ul class="row brands">
                <li>McDonalds</li>
                <li>Burger King</li>
                <li>Kfc</li>
                <li>Starbucks</li>
            </ul>
        </div>
        <div class="bottom">
        <div class="social">
            <ul class="wrapper">
                <li class="icon facebook">
                    <span class="tooltip">Facebook</span>
                    <span><i class="fab fa-facebook-f"></i></span>
                </li>
                <li class="icon twitter">
                    <span class="tooltip">Twitter</span>
                    <span><i class="fab fa-twitter"></i></span>
                </li>
                <li class="icon instagram">
                    <span class="tooltip">Instagram</span>
                    <span><i class="fab fa-instagram"></i></span>
                </li>
            </ul>
        </div>
        <div class="lang-select">
          <label for="lang">Scegli una lingua </label>
            <select onchange="document.getElementById('preview').src = this.value" class="lang">
              <option value="https://upload.wikimedia.org/wikipedia/commons/0/03/Flag_of_Italy.svg">Italiano</option>
              <option value="https://upload.wikimedia.org/wikipedia/commons/4/42/Flag_of_the_United_Kingdom.png">Inglese </option>
              <option value="https://upload.wikimedia.org/wikipedia/commons/9/9a/Flag_of_Spain.svg">Spagnolo </option>
              <option value="https://upload.wikimedia.org/wikipedia/commons/b/ba/Flag_of_Germany.svg">Tedesco</option>
            </select>
            <img id="preview" height="20px">
        </div>
        </div>
        </div>
    </footer>
   
</template>

<script>
export default {
    name: 'BaseFooter',
    data(){
      return{
        linksForce: [
        {text: "Lavora con noi",
         url: "",},
         {text: "HungryBags per i partner",
         url: "",},
         {text: "Corrieri",
         url: "",},
         {text: "HungryBags Business",
         url: "",},
      ],
      linksInt: [
        {text: "Chi siamo",
         url: "",},
         {text: "FAQ",
         url: "",},
         {text: "Blog",
         url: "",},
         {text: "Contattaci",
         url: "",},
         {text: "Sicurezza",
         url: "",},
      ],
      linksAbout: [
        {text: "Termini e condizioni",
         url: "",},
         {text: "Politica sulla privacy",
         url: "",},
         {text: "politica sui cookie",
         url: "",},
      ]
      
      }

    }
};

</script>

<style lang='scss' scoped>
footer{
    background-color: #111214;
    color: white;
}
footer .container{
    
    padding-top: 3.125rem;
}
ul {
    list-style: none;
    line-height: 30px;
}
.brands li{
    display: flex;
    padding-right: 1.875rem;
    margin-left: 0px;

}
.list ul li a {
  position: relative;
  color: #ffffff;
  text-decoration: none;
}

a::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 2px;
    border-radius: 2px;
    background-color: #ffffff;
    bottom: 0;
    left: 0;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform .3s ease-in-out;
  }

a:hover::before {
  transform-origin: left;
  transform: scaleX(1);
}
.wrapper {
  display: inline-flex;
  list-style: none;
}

.wrapper .icon {
  position: relative;
  background: #ffffff;
  border-radius: 50%;
  padding: 15px;
  margin: 10px;
  width: 50px;
  height: 50px;
  font-size: 18px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  color: #111214;
}

.wrapper .tooltip {
  position: absolute;
  top: 0;
  font-size: 14px;
  background: #ffffff;
  color: #ffffff;
  padding: 5px 8px;
  border-radius: 5px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip::before {
  position: absolute;
  content: "";
  height: 8px;
  width: 8px;
  background: #ffffff;
  bottom: -3px;
  left: 50%;
  transform: translate(-50%) rotate(45deg);
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .icon:hover .tooltip {
  top: -45px;
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
}

.wrapper .icon:hover span,
.wrapper .icon:hover .tooltip {
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
}

.wrapper .facebook:hover,
.wrapper .facebook:hover .tooltip,
.wrapper .facebook:hover .tooltip::before {
  background: #1877F2;
  color: #ffffff;
}

.wrapper .twitter:hover,
.wrapper .twitter:hover .tooltip,
.wrapper .twitter:hover .tooltip::before {
  background: #1DA1F2;
  color: #ffffff;
}

.wrapper .instagram:hover,
.wrapper .instagram:hover .tooltip,
.wrapper .instagram:hover .tooltip::before {
  background: #E4405F;
  color: #ffffff;
}
.brands-list{
    padding-top: 2.5rem;
}
.social{
    display: flex;
    justify-content: flex-end;
}

.flag{
  width: 1.875rem;
  height: 1.25rem;
}
.apps{
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
}
.lang-select{
  padding-top: 1.25rem;
}
.lang{
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}
.bottom{
  display: flex;
  flex-direction: row-reverse;
  justify-content: space-between;
}

</style>


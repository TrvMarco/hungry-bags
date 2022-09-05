<template>

  <div id="app">
    <BaseHeader/>
    <BaseMain/>
    <BaseFooter/>
  </div>

</template>

<script>
 
import BaseHeader from '../components/macro/BaseHeader.vue'
import BaseMain from '../components/macro/BaseMain.vue'
import BaseFooter from '../components/macro/BaseFooter.vue'
import shared from '../shared'

export default {
  name: 'App',
  components: {
    BaseHeader,
    BaseMain,
    BaseFooter,
  },
  data(){
        return{
            shared,
        }
    },
    
}
</script>

<style lang="scss">

// @import './assets/style/global.scss';
// @import'~bootstrap/dist/css/bootstrap.css';

</style>
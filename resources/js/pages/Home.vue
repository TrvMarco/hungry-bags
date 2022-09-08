<template>
    <main>
        <hero-section/>
        <type-section/>
        <all-restaurants/>
        <partner-section/>
    </main>
</template>

<script>
import TypeSection from '../components/sections/TypeSection.vue'
import AllRestaurants from '../components/sections/AllRestaurants'
import PartnerSection from '../components/sections/PartnerSection.vue'
import HeroSection from '../components/sections/HeroSection.vue'

export default {
  components: { 
        HeroSection,
        TypeSection,
        AllRestaurants,
        PartnerSection,
    },
    name: 'Home',
}
</script>

<style lang='scss' scoped>

</style>
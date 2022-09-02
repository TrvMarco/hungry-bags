<template>
    <main>
        <hero-section/>
        <type-section/>
        <partner-section/>
    </main>
</template>

<script>
import TypeSection from '../components/sections/TypeSection.vue'
import PartnerSection from '../components/sections/PartnerSection.vue'
import HeroSection from '../components/sections/HeroSection.vue'

export default {
  components: { 
        HeroSection,
        TypeSection,
        PartnerSection,
    },
    name: 'Home',
}
</script>

<style lang='scss' scoped>

</style>
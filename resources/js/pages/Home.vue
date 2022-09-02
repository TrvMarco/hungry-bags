<template>
    <main>
        <type-section/>
        <partner-section/>
    </main>
</template>

<script>
import TypeSection from '../components/sections/TypeSection.vue'
import PartnerSection from '../components/sections/PartnerSection.vue'

export default {
  components: { 
        TypeSection,
        PartnerSection
    },
    name: 'Home',
}
</script>

<style lang='scss' scoped>

</style>
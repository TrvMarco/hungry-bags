<template>
    <header>
        <div class="container-fluid">
            <div class="row p-3 text-white">
                <div class="col-6">
                    <!-- Qui andrà img e logo -->
                    <h1>HungryBags</h1>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <!-- nav accedi lingua -->
                    <span>Area riservata</span>
                    <span>Selezione lingua</span>
                </div>
            </div>
        </div>
        <HeroSection/>
    </header>
</template>

<script>

import HeroSection from '../sections/HeroSection.vue';

export default {
    name: 'BaseHeader',
     components: {
        HeroSection,
    }
}

</script>

<style lang='scss' scoped>
    header{
        .container-fluid{
            background-color: #111214;
        }
    }
</style>
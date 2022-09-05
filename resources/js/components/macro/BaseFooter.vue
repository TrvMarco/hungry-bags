<template>
    <footer class="p-4 container">
        <div class="row ">
            <ul class="col ">
                <h2>Uniamo le forze</h2>
                <li>Lavora con noi</li>
                <li>HungryBags con i partner</li>
                <li>Corrieri</li>
                <li>HungryBags business</li>
            </ul>
            <ul class="col">
                <h2>Link di interesse</h2>
                <li>Chi siamo</li>
                <li>FAQ</li>
                <li>Blog</li>
                <li>Contattaci</li>
                <li>Sicurezza</li>
            </ul>
            <ul class="col">
                <h2>Seguici</h2>
                <li>Twitter</li>
                <li>Instagram</li>
                <li>Facebook</li>
            </ul>
            <ul class="col">
                <li>Termini e condizioni</li>
                <li>Politica sulla privacy</li>
                <li>Politica sui cookie</li>
            </ul>
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
    </footer>
</template>

<script>
export default {
    name: 'BaseFooter'
}
</script>

<style lang='scss'>
ul {
    list-style: none;
    line-height: 30px;
}
.brands li{
    display: flex;
    margin-right: 1.875rem;

}


</style>
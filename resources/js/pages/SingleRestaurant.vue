<template>
  <main>
    <div class="container">
        <div class="row py-5 align-items-center">
            <div class="col-2 d-flex"><img src="https://via.placeholder.com/150" alt=""></div>
            <div class="col-10 pt-3">
                <h2>Nome ristorante</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="menu_item_box d-flex p-2 flex-wrap">
                    <div class="item_box_description col-8">
                        <h4>Nome item</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum deserunt temporibus sint aliquid, eveniet exercitationem veritatis et esse dolores numquam nam id est facere asperiores. Error perferendis minima voluptate voluptatum!</p>
                    </div>
                    <div class="item_box_image col-4">
                        <img class="img-fluid" src="https://www.mcdonalds.it/sites/default/files/product_category/thumb/thumb_menu_panini_300.png" alt="">
                    </div>
                    <div class="col-12">
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div class="div"><strong>Prezzo:</strong> 10$</div>
                            <div><i class="fa-solid fa-circle-plus add_cart_plus"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </main>
</template>

<script>
export default {
    name: 'SingleRestaurant'
}
</script>

<style lang="scss" scoped>
    .menu_item_box{
        min-height: 10.625rem;
        background-color: beige;
        border-radius: .625rem;
        box-shadow: 9px 6px 19px -7px #000000;

        .item_box_description{
            font-size: .8125rem;
        }

        .item_box_image{
            width: 9.375rem;
            height: 9.375rem;
            object-fit: cover;

            img{
                border-radius: .625rem;
                overflow: hidden;
            }
        }
    }

    .add_cart_plus{
        font-size: 1.25rem;
        color: rgba(62, 196, 184, 0.938);
        cursor: pointer;
    }

</style>
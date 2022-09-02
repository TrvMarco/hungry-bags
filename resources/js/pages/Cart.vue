<template>
  <main>
    <div class="container">
        <div class="row p-4">
            <div class="col-12 text-center">
                <h1>Completa il tuo ordine!</h1>
            </div>
        </div>
        <div class="d-flex row">
            <div class="col-12 col-lg-6">
                <!-- BOX ITEM CARRELLO -->
                <div class="col-sm-12 align-self-start pb-3">
                    <div class="menu_item_box d-flex p-2 flex-wrap">
                        <div class="item_box_description col-8">
                            <h3>Nome item</h3>
                            <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum deserunt temporibus sint aliquid, eveniet exercitationem veritatis et esse dolores numquam nam id est facere asperiores. Error perferendis minima voluptate voluptatum!</span>
                        </div>
                        <div class="item_box_image col-4">
                            <img class="img-fluid" src="https://www.mcdonalds.it/sites/default/files/product_category/thumb/thumb_menu_panini_300.png" alt="">
                        </div>
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <div class="div"><strong>Prezzo:</strong> 10$</div>
                            <button type="button" class="btn btn-sm btn-danger">Rimuovi</button>
                        </div>
                    </div>
                </div>
                <!-- BOX ITEM CARRELLO -->
                <div class="col-sm-12 align-self-start pb-3">
                    <div class="menu_item_box d-flex p-2 flex-wrap">
                        <div class="item_box_description col-8">
                            <h3>Nome item</h3>
                            <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum deserunt temporibus sint aliquid, eveniet exercitationem veritatis et esse dolores numquam nam id est facere asperiores. Error perferendis minima voluptate voluptatum!</span>
                        </div>
                        <div class="item_box_image col-4">
                            <img class="img-fluid" src="https://www.mcdonalds.it/sites/default/files/product_category/thumb/thumb_menu_panini_300.png" alt="">
                        </div>
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <div class="div"><strong>Prezzo:</strong> 10$</div>
                            <button type="button" class="btn btn-sm btn-danger">Rimuovi</button>
                        </div>
                    </div>
                </div>


                <!-- BOX ITEM CARRELLO -->
                <div class="col-sm-12 align-self-start pb-3">
                    <div class="menu_item_box d-flex p-2 flex-wrap">
                        <div class="item_box_description col-8">
                            <h3>Nome item</h3>
                            <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum deserunt temporibus sint aliquid, eveniet exercitationem veritatis et esse dolores numquam nam id est facere asperiores. Error perferendis minima voluptate voluptatum!</span>
                        </div>
                        <div class="item_box_image col-4">
                            <img class="img-fluid" src="https://www.mcdonalds.it/sites/default/files/product_category/thumb/thumb_menu_panini_300.png" alt="">
                        </div>
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <div class="div"><strong>Prezzo:</strong> 10$</div>
                            <button type="button" class="btn btn-sm btn-danger">Rimuovi</button>
                        </div>
                    </div>
                </div>
                <!-- BOX ITEM CARRELLO -->
                <div class="col-sm-12 align-self-start pb-3">
                    <div class="menu_item_box d-flex p-2 flex-wrap">
                        <div class="item_box_description col-8">
                            <h3>Nome item</h3>
                            <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum deserunt temporibus sint aliquid, eveniet exercitationem veritatis et esse dolores numquam nam id est facere asperiores. Error perferendis minima voluptate voluptatum!</span>
                        </div>
                        <div class="item_box_image col-4">
                            <img class="img-fluid" src="https://www.mcdonalds.it/sites/default/files/product_category/thumb/thumb_menu_panini_300.png" alt="">
                        </div>
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <div class="div"><strong>Prezzo:</strong> 10$</div>
                            <button type="button" class="btn btn-sm btn-danger">Rimuovi</button>
                        </div>
                    </div>
                </div>


            </div>

            <!-- BOX TOTALE -->
            <div class="col-12 col-lg-6">
                <div class="menu_item_box p-2">
                    <h4 class="text-center pt-2">Confrema ordine:</h4>
                    <hr>
                    <div class="px-4">
                        <div class="d-flex justify-content-between">
                            <span>Nome Item</span>
                            <span>10$</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Nome Item</span>
                            <span>10$</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Nome Item</span>
                            <span>10$</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Nome Item</span>
                            <span>10$</span>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between px-4">
                        <h5 class="text-uppercase">Totale</h5>
                        <span>40$</span>
                    </div>
                </div>
            </div>


        </div>
    </div>
  </main>
</template>

<script>
export default {
    name: 'Cart'
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

    .gap{
        row-gap: 1.875rem;
    }
</style>
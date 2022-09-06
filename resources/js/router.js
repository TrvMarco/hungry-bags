import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./pages/Home";
import RestaurantArea from "./pages/RestaurantArea";
import RestaurantList from "./pages/RestaurantList";
import SingleRestaurant from './pages/SingleRestaurant';
import Cart from './pages/Cart';

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        {
            path: "/restaurant-area",
            name: "restaurant-area",
            component: RestaurantArea
        },
        {
            path: "/restaurant-list",
            name: "restaurant-list",
            component: RestaurantList
        },
        {
            path: "/restaurant/:user",
            name: "single-restaurant",
            component: SingleRestaurant
        },
        {
            path: "/check-out",
            name: "cart",
            component: Cart
        }
        // {
        //     // path: "/*",
        //     // name: "page-404",
        //     // component: Page404
        // },
    ]
});

export default router;
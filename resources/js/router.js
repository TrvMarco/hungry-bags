import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./pages/Home";
import RestaurantArea from "./pages/RestaurantArea";

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
        // {
        //     path: "/about",
        //     name: "about",
        //     component: About
        // },
        {
            path: "/*",
            name: "page-404",
            component: Page404
        },
    ]
});

export default router;
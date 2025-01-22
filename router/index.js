import { createRouter, createWebHistory } from "vue-router";
import Welcome from "../resources/js/components/Welcome.vue";

const routes = [
    {
        path: "/",
        name: "Welcome",
        component: Welcome,
    },
    {
        path: "/championships",
        name: "Championships",
        component: () => import("../resources/js/components/Championships.vue"),
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;

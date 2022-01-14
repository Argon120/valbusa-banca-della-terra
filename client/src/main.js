import Vue from "vue";
import App from "./App.vue";
import VueRouter from "vue-router";
import Crea from "@/components/Crea.vue";
import Lista from "@/components/Lista.vue";

Vue.use(VueRouter);

Vue.config.productionTip = false;

const routes = [
  {
    path: "",
    redirect: "lista",
  },
  {
    path: "/lista",
    name: "lista",
    component: Lista,
  },
  {
    path: "/crea",
    name: "crea",
    component: Crea,
  },
];

const router = new VueRouter({
  mode: "history",
  routes,
});

new Vue({
  router,
  render: (h) => h(App),
}).$mount("#app");

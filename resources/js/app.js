require('./bootstrap');
import { RemoteTail } from './terminal';
window.Vue = require("vue")
import BootstrapVue from "bootstrap-vue" //Importing
Vue.use(BootstrapVue) // Teslling Vue to use this whole application
const app = new Vue({
    el: "#app"
})

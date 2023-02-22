import './bootstrap';
import { createApp } from 'vue'
import router from './router'
import Home from './component/Home'
import store from './store/store'
import Swal from 'sweetalert2'

window.Vue = require('vue');
import moment from 'moment'
window.swal = Swal;

/** Sweet alert start */
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: false,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})
window.toast = Toast;
/** Sweet alert End */


const app = createApp({})

/**components */
app.component('home-view', Home)
/**end component */

app.use(store)
app.use(router)
app.mount('#app')




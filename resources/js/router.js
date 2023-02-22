import { createWebHistory, createRouter } from "vue-router"
import Home from './component/Home'
import store from './store/store'



const routes = [
    { path: '/home', name:'home', component: Home },
  ]

  const router = createRouter({
    history: createWebHistory(),
    // linkActiveClass: "active", 
    // linkExactActiveClass: "active",
    // mode: 'history'
    routes
  })
  router.beforeEach((to, from, next) => {
  
    if (to.matched.some(record => record.meta.requiresAuth)) {
      if (!store.getters.loggedIn) {
        next({
          name: 'home',
        })
        } else {
          next()
        }
      } else if (to.matched.some(record => record.meta.requiresVisitor)) {
      if (store.getters.loggedIn) {
        next({
          name: 'myaccount',
        })
      } else {
        next()
      }
    } else {
      next()
    }
  })


  export default router
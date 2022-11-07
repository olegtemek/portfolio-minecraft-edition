import { createRouter, createWebHistory } from 'vue-router'

const routes = [
  {
    path: '/',
    component: () => import('@/views/home/Index.vue'),
    name: "home.index"
  },
  {
    path: '/projects',
    component: () => import('@/views/projects/Index.vue'),
    name: "projects.index"
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
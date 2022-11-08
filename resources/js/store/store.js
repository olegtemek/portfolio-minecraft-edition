import { createStore } from "vuex"
import clickStore from '@/store/modules/clickStore.js'
import projectsStore from '@/store/modules/projectsStore.js'
import stacksStore from '@/store/modules/stacksStore.js'
const store = createStore({
  modules: {
    clickStore, projectsStore, stacksStore
  }
})

export default store
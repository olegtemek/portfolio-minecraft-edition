import { createStore } from "vuex"
import clickStore from '@/store/modules/clickStore.js'
const store = createStore({
  modules: {
    clickStore
  }
})

export default store
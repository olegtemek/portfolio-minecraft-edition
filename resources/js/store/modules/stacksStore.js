import axios from "axios"

export default {
  state: {
    stacks: null
  },
  actions: {
    async fetchStacks(ctx) {
      let res = await axios.get('/api/get-stacks')
      if (res.status == 200) {
        ctx.commit('storeStacks', res.data.data)
      }
    }
  },
  mutations: {
    storeStacks(state, stacks) {
      state.stacks = stacks
    }
  },

  getters: {
    getStacks(state, stacks) {
      return state.stacks
    }
  }
}
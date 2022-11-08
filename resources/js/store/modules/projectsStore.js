import axios from "axios"

export default {
  state: {
    projects: null
  },
  actions: {
    async fetchProjects(ctx) {
      let res = await axios.get('/api/get-projects')
      if (res.status == 200) {
        ctx.commit('storeProjects', res.data.data)
      }
    }
  },
  mutations: {
    storeProjects(state, projects) {
      state.projects = projects
    }
  },

  getters: {
    getProjects(state, projects) {
      return state.projects
    }
  }
}
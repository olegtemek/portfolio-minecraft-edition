<template>
  <div class="projects">
    <div class="container">
      <div class="projects__title">
        <h1>Select project</h1>
      </div>
      <div class="projects__list">
        <router-link to="/projects" class="project__item"> hi </router-link>
      </div>
      <div class="projects__buttons">
        <MyButton
          :title="'Back'"
          :type="'router'"
          :link="{ name: 'home.index' }"
        />
        <MyButton
          :title="'See more on github'"
          :type="'link'"
          :link="'https://github.com/olegtemek'"
        />
      </div>
    </div>
  </div>
</template>




<style lang="scss" scoped>
.projects {
  min-height: 100vh;
  background-image: url("@assets/projects-bg.jpg");
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: flex-start;

  &__title {
    font-size: 42px;
    text-align: center;
    padding-top: 120px;
  }

  &__list {
    margin-top: 110px;
    width: 100%;
    height: 480px;
    border: 1px solid $white;
  }

  &__buttons {
    margin-top: 80px;
    display: flex;
    justify-content: space-between;
    width: 100%;
    > a {
      width: 45%;
    }
  }
}
</style>
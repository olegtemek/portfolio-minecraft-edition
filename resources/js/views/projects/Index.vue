<template>
  <div class="projects">
    <div class="container">
      <div class="projects__title">
        <h1>Select project</h1>
      </div>
      <ProjectsListComponent @loading="loading" />
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


<script setup>
import ProjectsListComponent from "@/views/components/ProjectsListComponent.vue";
const emits = defineEmits(["loading"]);
const loading = () => {
  emits("loading");
};
</script>




<style lang="scss" scoped>
.projects {
  min-height: 100vh;
  background-image: url("@assets/projects-stack-bg.jpg");
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: flex-start;

  &__title {
    font-size: 42px;
    text-align: center;
    padding-top: 120px;
    @media (max-width: 600px) {
      font-size: 28px;
    }
  }

  &__buttons {
    margin-top: 80px;
    display: flex;
    justify-content: space-between;
    width: 100%;
    > a {
      width: 45%;
      @media (max-width: 820px) {
        padding: 14px 10px 4px 10px;
        box-sizing: border-box;
      }
    }
  }
}
</style>
<template>
  <div class="stack__list">
    <div class="stack__item" v-for="stack of stacks" :key="stack.id">
      <img :src="stack.image" :alt="stack.title" />
      <h3>{{ stack.title }}</h3>
    </div>
  </div>
</template>



<script setup>
import { computed, onMounted } from "@vue/runtime-core";
import { useStore } from "vuex";

const store = useStore();

onMounted(() => {
  store.dispatch("fetchStacks");
});
const stacks = computed(() => {
  return store.getters.getStacks;
});
</script>

<style lang="scss" scoped>
.stack {
  &__list {
    margin-top: 110px;
    width: 100%;
    height: 460px;
    overflow-y: scroll;
    padding: 10px;

    &::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba($white, 0.3);
      background-color: $black;
    }

    &::-webkit-scrollbar {
      width: 10px;
      background-color: $black;
    }

    &::-webkit-scrollbar-thumb {
      background-color: $white;
      border: 2px solid $gray;
    }
  }

  &__item {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    flex-direction: row;
    width: 100%;
    margin-bottom: 20px;
    &:last-child {
      margin-bottom: 0;
    }
    img {
      width: 60px;
      height: 60px;
    }
    h3 {
      padding-top: 20px;
      padding-left: 20px;
      font-size: 24px;
      @media (max-width: 820px) {
        font-size: 20px;
      }
      @media (max-width: 520px) {
        font-size: 16px;
      }
    }
  }
}
</style>
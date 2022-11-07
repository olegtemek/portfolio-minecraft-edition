<template>
  <a
    v-if="props.type == 'link'"
    :href="props.link"
    target="_blank"
    @click="click"
    >{{ props.title }}</a
  >
  <router-link
    @click="click"
    :to="props.link"
    v-else-if="props.type == 'router'"
    >{{ props.title }}</router-link
  >
  <button v-else @click="click">{{ props.text }}</button>
</template>



<script>
export default {
  name: "MyButton",
};
</script>
<script setup>
import { useStore } from "vuex";
const store = useStore();
const props = defineProps({
  link: [String, Object],
  type: {
    type: [String],
    default: "button",
  },
  title: [String],
});

const click = () => {
  store.dispatch("clickSound");
};
</script>

<style lang="scss" scoped>
a,
button {
  background-color: $gray;
  color: $white;
  width: 100%;
  padding: 20px 0 10px 0;
  margin-bottom: 34px;
  text-shadow: 2px 2px 0 rgba($black, 0.8);
  font-size: 16px;
  border: 2px solid $black;
  box-shadow: inset 3px 3px 0 rgba($white, 0.5),
    inset -3px -3px 0 rgba(0, 0, 0, 0.5);
  cursor: pointer;
  text-align: center;

  &:hover {
    background-color: $blue;
  }
}
</style>
<template>
  <div class="menu">
    <MyButton
      :title="'My projects'"
      :type="'router'"
      :link="{ name: 'projects.index' }"
    />
    <MyButton
      :title="'Stack'"
      :type="'router'"
      :link="{ name: 'home.index' }"
    />

    <MyButton
      :title="'Github'"
      :type="'link'"
      :link="'https://github.com/olegtemek'"
    />
    <div class="menu__row">
      <MyButton
        :title="'Email'"
        :type="'link'"
        :link="'mailto:olegtemek@gmail.com'"
      />
      <MyButton
        :title="'Telegram'"
        :type="'link'"
        :link="'https://t.me/olegtemek'"
      />
    </div>
  </div>
</template>



<script setup>
import { useStore } from "vuex";
const store = useStore();
const click = () => {
  store.dispatch("clickSound");
};
</script>


<style lang="scss" scoped>
.menu {
  margin-top: 80px;
  display: flex;
  flex-direction: column;
  width: 100%;

  &__row {
    display: flex;
    justify-content: space-between;
    > a {
      width: 45%;
    }
  }
}
</style>
<template>
  <div>
    <button class="sound btn" @click="play">
      <img :src="played ? sound_on : sound_off" alt="" />
    </button>
    <router-view :key="$route.path" @loading="loading" />
    <!-- <MyLoading v-if="loaded == false" /> -->
  </div>
</template>



<script setup>
import sound_on from "@assets/sound-on.svg";
import sound_off from "@assets/sound-off.svg";
import sound_bg from "@assets/bg_sound.mp3";
import { ref } from "@vue/reactivity";
import { useStore } from "vuex";
const store = useStore();

const played = ref(false);
const bg_audio = ref(null);
const play = () => {
  played.value = !played.value;

  store.dispatch("clickSound");

  if (bg_audio.value) {
    bg_audio.value.pause();
  }

  if (played.value) {
    bg_audio.value = new Audio(sound_bg);
    bg_audio.value.play();
    bg_audio.value.addEventListener("ended", function () {
      this.currentTime = 0;
      this.play();
    });
  }
};

const loaded = ref(false);

const loading = () => {
  setTimeout(() => {
    loaded.value = true;
  }, 1000);
};
</script>

<style lang="scss" scoped>
.sound {
  position: absolute;
  right: 40px;
  top: 40px;
  width: 40px;
  height: 40px;
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 2;
  background-color: $gray;
  color: $white;
  text-shadow: 2px 2px 0 rgba($black, 0.8);
  font-size: 16px;
  border: 2px solid $black;
  box-shadow: inset 3px 3px 0 rgba($white, 0.5),
    inset -3px -3px 0 rgba(0, 0, 0, 0.5);
  cursor: pointer;
  img {
    width: 30px;
    height: 30px;
    object-fit: cover;
  }

  @media (max-width: 560px) {
    top: 20px;
    right: 20px;
  }

  &:hover {
    background-color: $blue;
  }
}
</style>
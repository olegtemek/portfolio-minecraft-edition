<template>
  <div class="home">
    <div class="video">
      <video
        autoplay
        muted
        loop
        @loadeddata="loadedVideo"
        playsinline=""
        webkit-playinginline=""
        preload="auto"
        no-controls=""
      >
        <source src="@assets/main.mp4" />
      </video>
    </div>

    <div class="container">
      <TheHeader />
      <TheMenu />
    </div>
  </div>
</template>



<script setup>
import TheHeader from "@/views/components/TheHeader.vue";
import TheMenu from "@/views/components/TheMenu.vue";
import { ref } from "@vue/reactivity";
const loaded = ref(false);
const emits = defineEmits(["loading"]);
const loadedVideo = () => {
  setTimeout(() => {
    emits("loading");
    loaded.value = true;
  }, 300);
};
</script>

<style lang="scss" scoped>
.home {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  .video {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    overflow: hidden;

    &::after {
      position: absolute;
      content: "";
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: $black;
      opacity: 0.4;
    }
    > video,
    img {
      pointer-events: none;
      position: absolute;
      z-index: -1;
      width: 100%;
      object-fit: cover;
      height: 100%;
    }
  }
  .container {
    position: relative;
    z-index: 2;
  }
}
</style>
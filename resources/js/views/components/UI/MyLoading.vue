<template>
  <div class="loading"></div>
</template>

<script>
export default {
  name: "MyLoading",
};
</script>
<style lang="scss" scoped>
.loading {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 999;
  background-image: url("@assets/poster-bg.png");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
</style>
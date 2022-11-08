<template>
  <div class="loading">
    <div class="loading__spin"></div>
  </div>
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
  &::after {
    content: "";
    position: absolute;
    background-color: $black;
    opacity: 0.8;
    width: 100%;
    height: 100%;
  }
  &__spin {
    position: relative;
    z-index: 2;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    border: 10px solid #ccc;
    border-bottom-color: $blue;
    animation: spin 1.5s linear infinite;
  }
  @keyframes spin {
    from {
      transform: rotate(0);
    }
    to {
      transform: rotate(360deg);
    }
  }
}
</style>
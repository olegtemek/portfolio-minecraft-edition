<template>
  <header class="header">
    <div class="header__wrapper">
      <h1><img src="@assets/main-logo.svg" alt="OLEGTEMEK" /></h1>
      <span>Hello world!</span>
    </div>
  </header>
</template>



<script setup>
</script>

<style lang="scss" scoped>
.header {
  &__wrapper {
    position: relative;
    h1 {
      text-align: center;
      img {
        width: 100%;
        @media (max-width: 570px) {
          width: 90%;
        }
      }
    }
    span {
      font-size: 24px;
      position: absolute;
      right: -70px;
      top: 70%;
      transform: translateY(-70%) rotate(-35deg);
      color: $yellow;
      text-shadow: 0px 3px 0px rgba(150, 153, 16, 0.4);
      animation: anim $tr alternate-reverse infinite;

      @media (max-width: 820px) {
        font-size: 16px;
        top: 80%;
      }
      @media (max-width: 570px) {
        right: -20px;
      }
      @media (max-width: 414px) {
        font-size: 12px;
      }

      @keyframes anim {
        0% {
          transform: translateY(-70%) rotate(-35deg) scale(1);
        }
        100% {
          transform: translateY(-70%) rotate(-35deg) scale(1.1);
        }
      }
    }
  }
}
</style>
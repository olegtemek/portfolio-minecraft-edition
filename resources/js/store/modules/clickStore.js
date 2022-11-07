import sound_click from "@assets/click.mp3";
export default {
  actions: {
    async clickSound() {
      let click_sound = new Audio(sound_click);
      click_sound.currentTime = 0.3;
      click_sound.play();
    }
  }
}
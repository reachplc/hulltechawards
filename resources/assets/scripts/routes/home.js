/* eslint-disable */

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    const scroll = document.getElementById('scroll');

    particlesJS.load('particlelayer', '/wp-content/themes/sage/resources/assets/partconfig.json', () => {});

    scroll.addEventListener('click', () => {
      // window.scrollTo(0, 155);
    });

  }
};

/* eslint-disable */

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    const scroll = document.getElementById('scroll');


    particlesJS.load('particlelayer', '/wp-content/themes/sage/resources/assets/partconfig.json', () => {});

    scroll.addEventListener('click', () => {
      window.scrollTo(0, 40);
    });

    window.addEventListener('scroll', (e) => {
      e.preventDefault();
      e.stopPropagation();
      if (!pageYOffset > 10) {
        e.preventDefault();
        window.scrollTo(0, 40);
      }
    });
  }
};

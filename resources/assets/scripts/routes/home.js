import lottie from 'lottie-web';

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    const animation = lottie.loadAnimation({
      container: document.getElementById('anim-logo'),
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path: '/wp-content/themes/hulltechawards/resources/assets/anims/logo.json',
    })
    console.log(animation);
  },
};

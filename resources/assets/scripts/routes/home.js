/* eslint-disable */

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    const scroll = document.getElementById("scroll");
    const pageBody = document.getElementsByTagName('body')[0];
    const wrap = document.querySelector('.wrap');

    particlesJS.load(
      "particlelayer",
      "/wp-content/themes/sage/resources/assets/partconfig.json",
      () => {}
    );

    window.addEventListener('scroll', function() {
      console.log(pageYOffset)

      if(pageYOffset > 10) {

        if(!pageBody.classList.contains('scrolled')) {
          pageBody.classList.add('scrolled');

          setTimeout(() => {
            wrap.style.marginTop = pageYOffset + 155 + 'px';
          }, 300)
        }

      } else {
        pageBody.classList.remove('scrolled');
        wrap.style.marginTop = 100  + 'vh';
      }

    });


    scroll.addEventListener("click", () => {
      document.getElementsByTagName("body")[0].classList.add("scrolled");
      wrap.style.marginTop = pageYOffset + 155 + 'px';
    });
  }
};

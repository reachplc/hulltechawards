export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    const pageBody = document.getElementsByTagName('body')[0];
    const nav = document.querySelector('.nav-primary');

    window.addEventListener('scroll', () => {
      console.log(pageYOffset)

      if (pageYOffset > nav.offsetTop) {
        pageBody.classList.add('scrolled');
        pageBody.classList.add('scrolled');
      } else {
        pageBody.classList.remove('scrolled');
      }

      setTimeout(() => {
        pageBody.classList.add('loaded');
      }, 500);
    })

    $('.opennav').on('click', () => {
      $('.navbar').toggleClass('mob-open');
      $('.opennav').toggleClass('open');
    })

    // $('.mob-open .opennav').on('click', () => {
    //   $('.navbar').removeClass('mob-open');
    // });
  },
};

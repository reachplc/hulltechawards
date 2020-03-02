export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    const pageBody = document.getElementsByTagName('body')[0];
    let position = 0;

    window.addEventListener('scroll', () => {

      if (position < pageYOffset) {

        console.log('PageTop: before', pageYOffset);
        pageBody.classList.add('scrolled');
        // position = pageYOffset;

      } else {

        console.log('PageTop: after', pageYOffset);
        pageBody.classList.remove('scrolled');
        // position = 0;

      }

      console.log(position);

    //   setTimeout(() => {
    //     pageBody.classList.add('loaded');
    //   }, 500);
    })

    // $('.opennav').on('click', () => {
    //   $('.navbar').toggleClass('mob-open');
    //   $('.opennav').toggleClass('open');
    // })

    // $('.mob-open .opennav').on('click', () => {
    //   $('.navbar').removeClass('mob-open');
    // });
  },
};

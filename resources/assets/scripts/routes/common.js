export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $('.opennav').on('click', () => {
      $('.navbar').toggleClass('mob-open');
      $('.opennav').toggleClass('open');
    })

    // $('.mob-open .opennav').on('click', () => {
    //   $('.navbar').removeClass('mob-open');
    // });
  },
};

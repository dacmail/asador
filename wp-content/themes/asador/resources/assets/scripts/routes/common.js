export default {
  setupSuperMenu: function () {
    $('.header__menu-toggle').on('click', function (event) {
      event.preventDefault();
      event.stopPropagation();
      $('.header__menu-toggle').toggleClass('is-active');
      $('body').toggleClass('is-open-menu');
      $('.nav-primary').toggleClass('is-open');
    });
  },
  setupSlideshow() {
    $('.slide').owlCarousel({
      items: 1,
      autoplay: true,
      autoplayTimeout: 2500,
      loop: true,
      dots: false,
    });
  },
  init() {
    // JavaScript to be fired on all pages
    this.setupSuperMenu();
    this.setupSlideshow();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

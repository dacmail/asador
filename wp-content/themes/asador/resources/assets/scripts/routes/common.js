import 'lightgallery';
import * as markerimage from '../../images/one.png';

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
    $('.js-slide').owlCarousel({
      items: 1,
      animateOut: 'fadeOut',
      autoplay: true,
      autoplayTimeout: 2500,
      nav: false,
      loop: true,
      dots: false,
      mouseDrag: false,
      touchDrag: false,
    });
  },
  setupGalleries() {
    $('.js-content').lightGallery({
      selector: '.js-gallery',
      download: false,
    });
  },
  setupMap() {
    if ($('#map').length) {
      // eslint-disable-next-line no-undef
      const latlng = new google.maps.LatLng($('#map').data('lat'), $('#map').data('lng'));

      // eslint-disable-next-line no-undef
      const map = new google.maps.Map(document.getElementById('map'), {
        styles: [
          {
            featureType: 'administrative',
            elementType: 'all',
            stylers: [
              {
                saturation: '-100',
              },
            ],
          },
          {
            featureType: 'administrative.province',
            elementType: 'all',
            stylers: [
              {
                visibility: 'off',
              },
            ],
          },
          {
            featureType: 'landscape',
            elementType: 'all',
            stylers: [
              {
                saturation: -100,
              },
              {
                lightness: 65,
              },
              {
                visibility: 'on',
              },
            ],
          },
          {
            featureType: 'poi',
            elementType: 'all',
            stylers: [
              {
                saturation: -100,
              },
              {
                lightness: '50',
              },
              {
                visibility: 'simplified',
              },
            ],
          },
          {
            featureType: 'road',
            elementType: 'all',
            stylers: [
              {
                saturation: '-100',
              },
            ],
          },
          {
            featureType: 'road.highway',
            elementType: 'all',
            stylers: [
              {
                visibility: 'simplified',
              },
            ],
          },
          {
            featureType: 'road.arterial',
            elementType: 'all',
            stylers: [
              {
                lightness: '30',
              },
            ],
          },
          {
            featureType: 'road.local',
            elementType: 'all',
            stylers: [
              {
                lightness: '40',
              },
            ],
          },
          {
            featureType: 'transit',
            elementType: 'all',
            stylers: [
              {
                saturation: -100,
              },
              {
                visibility: 'simplified',
              },
            ],
          },
          {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [
              {
                hue: '#ffff00',
              },
              {
                lightness: -25,
              },
              {
                saturation: -97,
              },
            ],
          },
          {
            featureType: 'water',
            elementType: 'labels',
            stylers: [
              {
                lightness: -25,
              },
              {
                saturation: -100,
              },
            ],
          },
        ],
        zoom: 15,
        center: latlng,
      });

      // eslint-disable-next-line no-undef
      new google.maps.Marker({
        // eslint-disable-next-line no-undef
        position: new google.maps.LatLng($('#map').data('lat'), $('#map').data('lng')),
        map: map,
        // eslint-disable-next-line no-undef
        icon: markerimage,
      });
    }
  },
  init() {
    // JavaScript to be fired on all pages
    this.setupSuperMenu();
    this.setupSlideshow();
    this.setupGalleries();
    this.setupMap();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

const sliderWWDoing = document.querySelector('[data-slider="wwdoing-slider"]');
let swiperWWDoing;

const initWWDoingSlider = () => {
  if (!sliderWWDoing) {
    return;
  }
  // eslint-disable-next-line no-unused-vars
  swiperWWDoing = new Swiper(sliderWWDoing, {
    slidesPerView: 'auto',
    spaceBetween: 0,
    autoHeight: true,
    observer: true,
    loop: false,
    speed: 800,
    navigation: {
      nextEl: '.wwdoing-slider__button-next',
      prevEl: '.wwdoing-slider__button-prev',
      clickable: true,
    },
    breakpoints: {
      // when window width is >= 767px
      0: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // when window width is >= 768px
      768: {
        slidesPerView: 'auto',
        spaceBetween: 0,
      },
    },
  });
};

export {initWWDoingSlider};

const sliderIntro = document.querySelector('[data-slider="intro-slider"]');
let swiperIntro;

const initIntroSlider = () => {
  if (!sliderIntro) {
    return;
  }
  // eslint-disable-next-line no-unused-vars
  swiperIntro = new Swiper(sliderIntro, {
    slidesPerView: 1,
    spaceBetween: 0,
    autoHeight: true,
    observer: true,
    loop: true,
    autoplay: {
      delay: 2800,
      stopOnLastSlide: false,
      disableOnInteraction: true,
    },
    speed: 800,
    pagination: {
      el: '.intro-slider__pagination',
      type: 'bullets',
      clickable: true,
    },
  });
};

export {initIntroSlider};

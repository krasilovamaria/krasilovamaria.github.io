'use strict';

var sliderTrainers = document.querySelector('.slider');
var sliderComments = document.querySelector('.comments__slider');

$(document).ready(function () {
  if (sliderTrainers.classList.contains('multiple-items')) {
    $('.multiple-items').slick({
      arrows: true,
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 4,
      speed: 1000,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            initialSlide: 2
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            initialSlide: 2
          }
        }
      ]
    });
  }
  if (sliderComments.classList.contains('multiple-comments')) {
    $('.multiple-comments').slick({
      arrows: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 1000
    });
  }
});

/* Плавный скролл */

var linkNav = document.querySelectorAll('[href^="#"]');
var rate = 0.5;
for (var i = 0; i < linkNav.length; i++) {
  linkNav[i].addEventListener('click', function (e) {
    e.preventDefault();
    var heightScroll = window.pageYOffset;
    var hash = e.currentTarget.href.replace(/[^#]*(.*)/, '$1');
    var position = document.querySelector(hash).getBoundingClientRect().top;
    var start = null;
    requestAnimationFrame(step);
    function step(time) {
      if (start === null) {
        start = time;
      }
      var progress = time - start;
      var resultPosition = (position < 0 ? Math.max(heightScroll - progress / rate, heightScroll + position) : Math.min(heightScroll + progress / rate, heightScroll + position));
      window.scrollTo(0, resultPosition);
      if (resultPosition !== heightScroll + position) {
        requestAnimationFrame(step);
      } else {
        location.hash = hash;
      }
    }
  }, false);
}

/* Маска для формы */

$('input[type=tel]').mask('+ 7 (999) 999-9999');

/* Переключение контента в карточках */

var tabBtn = document.querySelectorAll('.cards__button');
var tabContent = document.querySelectorAll('.cards__content');

Object.keys(tabBtn).forEach(function (index) {
  tabBtn[index].addEventListener('click', function (ev) {

    for (var l = 0; l < tabBtn.length; l++) {
      tabBtn[l].classList.remove('cards__button--active');
      tabContent[l].classList.remove('cards__content--active');
    }

    ev.target.classList.add('cards__button--active');
    tabContent[index].classList.add('cards__content--active');
  });
});

/* Удаляет активный класс карточки при tab */

var cardActive = document.querySelectorAll('.cards__card');
var spanActive = document.querySelectorAll('.cards__link');

document.addEventListener('keydown', function (event) {
  if (event.keyCode === 9) {
    for (var n = 0; n < cardActive.length; n++) {
      if (cardActive[n].classList.contains('cards__card--active')) {
        cardActive[n].classList.remove('cards__card--active');
        spanActive[n].classList.remove('cards__link--active');
      }
    }
  }
});

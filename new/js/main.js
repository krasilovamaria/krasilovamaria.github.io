import {iosVhFix} from './utils/ios-vh-fix';

import {initModals} from './modules/modals/init-modals';

import {initBurgerAction} from './modules/toggle-burger';
import {initIntroSlider} from './modules/init-intro-slider';
import {initWWDoingSlider} from './modules/init-wwdoing-slider';

import {initSearch} from './modules/init-search';
import {initAccordion} from './modules/accordion';

// ---------------------------------

window.addEventListener('DOMContentLoaded', () => {

  // Utils
  // ---------------------------------

  iosVhFix();

  // Modules
  // ---------------------------------

  initBurgerAction();
  initIntroSlider();
  initWWDoingSlider();
  initSearch();

  // все скрипты должны быть в обработчике 'DOMContentLoaded', но не все в 'load'
  // в load следует добавить скрипты, не участвующие в работе первого экрана
  window.addEventListener('load', () => {
    initModals();
    initAccordion();
  });
});

// ---------------------------------

// используйте .closest(el)

// для адаптивного JS используейтся matchMedia и addListener
// const breakpoint = window.matchMedia(`(min-width:1024px)`);
// const breakpointChecker = () => {
//   if (breakpoint.matches) {
//   } else {
//   }
// };
// breakpoint.addListener(breakpointChecker);
// breakpointChecker();

// привязывайте js не на бэм, а на data-cookie

// выносим все в data-attr - url до пинов карты, настройки автопрокрутки, url к json и т.д.


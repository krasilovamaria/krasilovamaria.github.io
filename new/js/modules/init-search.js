import {closeSearchBlock, onAddressClick} from './search';

const searchBlock = document.querySelector('[data-search="searchForm"]');
const searchInput = document.querySelector('input');

const initSearch = () => {
  if (searchBlock) {
    const searchForm = searchBlock.querySelector('form');

    searchForm.addEventListener('change', () => {
      if (searchInput.value) {
        searchBlock.classList.add('is-choice');
        searchBlock.classList.remove('no-choice');
      } else {
        searchBlock.classList.add('no-choice');
        searchBlock.classList.remove('is-choice');
      }
    });
  }

  window.addEventListener('keydown', (e) => {
    if (e.key === 27 || e.key === 'Escape') {
      closeSearchBlock(searchBlock, searchInput);
    }
  });

  window.addEventListener('click', () => {
    if (searchBlock) {
      const addressBlock = searchBlock.querySelector('.search-form__result');
      onAddressClick(addressBlock, searchBlock, searchInput, 'A');
    }
  });
};

export {initSearch};

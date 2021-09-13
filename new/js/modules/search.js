const closeSearchBlock = (formParent) => {
  if (formParent.classList.contains('is-choice') || formParent.classList.contains('no-choice')) {
    formParent.classList.remove('is-choice', 'no-choice');
  }
};

const onAddressClick = (list, formParent, input, tag) => {
  if (list) {
    list.addEventListener('click', (e) => {
      let target = e.target;
      if (target.tagName === tag) {
        input.value = target.innerHTML;
        formParent.classList.remove('is-choice');
      }
    });
  } else {
    closeSearchBlock(formParent);
  }
};

export {closeSearchBlock, onAddressClick};

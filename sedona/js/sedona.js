var link = document.querySelector(".search-btn");
var searchform = document.querySelector(".search");

 document.addEventListener("DOMContentLoaded", function() {
    searchform.classList.remove("js-form");
  });

link.addEventListener("click", function (evt) {
  evt.preventDefault();
  searchform.classList.toggle("search-open");
});

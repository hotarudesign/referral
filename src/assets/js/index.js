"use strict";

// ハンバーガーメニュー
const toggleBtn = document.getElementById("toggleBtn");
const slideMenu = document.getElementById("slideMenu");
const body = document.querySelector("body");
const anchor = document.querySelectorAll(".g-nav__item a");

let headerHeight;
let scrollPos;

toggleBtn.addEventListener("click", () => {
  body.classList.toggle("is-menuOpen");
  toggleBtn.classList.toggle("is-active");
  slideMenu.classList.toggle("is-show");
});

//アンカーリンク
for (let i = 0; i < anchor.length; i++) {
  anchor[i].addEventListener("click", (e) => {
    e.preventDefault;
    body.classList.remove("is-menuOpen");
    toggleBtn.classList.remove("is-active");
    slideMenu.classList.remove("is-show");
  });
}

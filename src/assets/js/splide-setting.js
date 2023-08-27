"use strict";
// splide1 interview
new Splide(".splide1", {
  type: "loop",
  autoplay: true,
  interval: 5000,
  perPage: 3,
  gap: 38,
  pagination: false,
  destroy: false,
  breakpoints: {
    577: {
      perPage: 1,
      destroy: true,
    },
  },
}).mount();

// splide2 news
new Splide(".splide2", {
  type: "loop",
  autoplay: true,
  interval: 5000,
  perPage: 3,
  gap: 38,
  pagination: false,
  breakpoints: {
    577: {
      perPage: 1,
    },
  },
}).mount();

// splide3 mv
const target = ".splide3";
const target_options = {
  type: "fade",
  rewind: true,
  autoplay: true,
  arrows: false,
  pagination: false,
  interval: 4000,
  speed: 2000,
};

const mySplide = new Splide(target, target_options);
mySplide.mount();

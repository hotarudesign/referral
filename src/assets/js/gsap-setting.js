"use strict";
gsap.registerPlugin(ScrollTrigger);

let mm = gsap.matchMedia();
mm.add("(min-width: 576px)", () => {
  gsap.set(".history__item", {
    opacity: 0,
  });
  gsap.to(".history__item", {
    opacity: 1,
    duration: 1,
    stagger: 0.5,
    scrollTrigger: {
      trigger: ".history",
      start: "center center",
    },
  });
});
mm.add("(max-width: 576px)", () => {
  gsap.set(".history__item-sp", {
    opacity: 0,
  });
  gsap.to(".history__item-sp", {
    opacity: 1,
    duration: 1,
    stagger: 0.5,
    scrollTrigger: {
      trigger: ".history",
      start: "top bottom",
    },
  });
});
const shape = document.querySelector(".circle__line");
let angle = 0;
function drawCircle() {
  //角度が365°未満のとき
  if (angle < 365) {
    //角度を2°ずつ増やす
    angle += 1;
    //角度をconic-gradientの角度に代入
    shape.style.backgroundImage = `conic-gradient(black ${angle}deg, transparent ${angle}deg)`;
    //requestAnimationFrameを再度呼び出す
    requestAnimationFrame(drawCircle);
  }
}

gsap.set(".circle__line", {
  opacity: 0,
});
gsap.to(".circle__line", {
  onComplete: drawCircle,
  scrollTrigger: {
    trigger: ".circle",
    start: "top center",
  },
  opacity: 1,
});

gsap.set(".jsCircleItem", {
  opacity: 0,
});
gsap.to(".jsCircleItem", {
  opacity: 1,
  stagger: 0.6,
  scrollTrigger: {
    trigger: ".circle",
    start: "top center",
  },
});

mm.add("(min-width: 578px)", () => {
  const futureItem = gsap.timeline({
    repeat: -1,
    scrollTrigger: {
      trigger: ".future__list",
      start: "top center",
    },
  });
  futureItem.to(".future__item01", {
    keyframes: [
      { backgroundColor: "#1670E4", scale: 1.2, duration: 2 }, //このアニメーションが終わったら下のアニメーションが起こる
      { backgroundColor: "#fff", scale: 1, duration: 2 },
    ],
  });
  futureItem.to(".future__item02", {
    keyframes: [
      { backgroundColor: "#1670E4", scale: 1.2, duration: 2 }, //このアニメーションが終わったら下のアニメーションが起こる
      { backgroundColor: "#fff", scale: 1, duration: 2 },
    ],
  });

  futureItem.to(".future__item03", {
    keyframes: [
      { backgroundColor: "#1670E4", scale: 1.2, duration: 2 }, //このアニメーションが終わったら下のアニメーションが起こる
      { backgroundColor: "#fff", scale: 1, duration: 2 },
    ],
  });
});
mm.add("(max-width: 576px)", () => {
  const futureItem = gsap.timeline({
    repeat: -1,
    scrollTrigger: {
      trigger: ".future__list",
      start: "top center",
    },
  });
  futureItem.to(".future__item01", {
    keyframes: [
      { backgroundColor: "#1670E4", duration: 2 }, //このアニメーションが終わったら下のアニメーションが起こる
      { backgroundColor: "#fff", duration: 2 },
    ],
  });
  futureItem.to(".future__item02", {
    keyframes: [
      { backgroundColor: "#1670E4", duration: 2 }, //このアニメーションが終わったら下のアニメーションが起こる
      { backgroundColor: "#fff", duration: 2 },
    ],
  });

  futureItem.to(".future__item03", {
    keyframes: [
      { backgroundColor: "#1670E4", duration: 2 }, //このアニメーションが終わったら下のアニメーションが起こる
      { backgroundColor: "#fff", duration: 2 },
    ],
  });
});

const futureColor = gsap.timeline({
  repeat: -1,
  scrollTrigger: {
    trigger: ".future__list",
    start: "top center",
  },
});
futureColor.to([".js-future-head01", ".js-future-label01"], {
  keyframes: [
    { color: "#fff", duration: 2 },
    { color: "#166594", duration: 2 },
  ],
});
futureColor.to([".js-future-head02", ".js-future-label02"], {
  keyframes: [
    { color: "#fff", duration: 2 },
    { color: "#166594", duration: 2 },
  ],
});
futureColor.to([".js-future-head03", ".js-future-label03"], {
  keyframes: [
    { color: "#fff", duration: 2 },
    { color: "#166594", duration: 2 },
  ],
});

const futureDesc = gsap.timeline({
  repeat: -1,
  repeat: -1,
  scrollTrigger: {
    trigger: ".future__list",
    start: "top center",
  },
});
futureDesc.to(".js-future-desc01", {
  keyframes: [
    { color: "#fff", duration: 2 },
    { color: "#2e2e2e", duration: 2 },
  ],
});
futureDesc.to(".js-future-desc02", {
  keyframes: [
    { color: "#fff", duration: 2 },
    { color: "#2e2e2e", duration: 2 },
  ],
});
futureDesc.to(".js-future-desc03", {
  keyframes: [
    { color: "#fff", duration: 2 },
    { color: "#2e2e2e", duration: 2 },
  ],
});

const flowNum = gsap.timeline({
  repeat: -1,
  scrollTrigger: {
    trigger: ".flow",
    start: "top center",
  },
});
flowNum.to(".jsFlowNum01", {
  keyframes: [
    { backgroundColor: "#2A3F51", color: "#fff", duration: 2 },
    { backgroundColor: "#fff", color: "#2A3F51", duration: 2 },
  ],
});
flowNum.to(".jsFlowNum02", {
  keyframes: [
    { backgroundColor: "#2A3F51", color: "#fff", duration: 2 },
    { backgroundColor: "#fff", color: "#2A3F51", duration: 2 },
  ],
});
flowNum.to(".jsFlowNum03", {
  keyframes: [
    { backgroundColor: "#2A3F51", color: "#fff", duration: 2 },
    { backgroundColor: "#fff", color: "#2A3F51", duration: 2 },
  ],
});
flowNum.to(".jsFlowNum04", {
  keyframes: [
    { backgroundColor: "#2A3F51", color: "#fff", duration: 2 },
    { backgroundColor: "#fff", color: "#2A3F51", duration: 2 },
  ],
});
flowNum.to(".jsFlowNum05", {
  keyframes: [
    { backgroundColor: "#2A3F51", color: "#fff", duration: 2 },
    { backgroundColor: "#fff", color: "#2A3F51", duration: 2 },
  ],
});

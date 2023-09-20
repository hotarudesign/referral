"use strict";
gsap.registerPlugin(ScrollTrigger);

// 会社沿革のアニメーション
let mm = gsap.matchMedia();
mm.add("(min-width: 576px)", () => {
  gsap.set(".history__item", {
    opacity: 0,
  });
  gsap.to(".history__item", {
    opacity: 1,
    duration: 1,
    stagger: 0.3,
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

// Businessのサークルアニメーション
const shape = document.querySelector(".circle__line");
let angle = 0;
function drawCircle() {
  //角度が365°未満のとき
  if (angle < 201) {
    //角度を2°ずつ増やす
    angle += 1.2;
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
  stagger: 0.4,
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
      { backgroundColor: "#1670E4", scale: 1.2, duration: 1 }, //このアニメーションが終わったら下のアニメーションが起こる
      { backgroundColor: "#fff", scale: 1, duration: 1 },
    ],
  });
  futureItem.to(".future__item02", {
    keyframes: [
      { backgroundColor: "#1670E4", scale: 1.2, duration: 1 }, //このアニメーションが終わったら下のアニメーションが起こる
      { backgroundColor: "#fff", scale: 1, duration: 1 },
    ],
  });

  futureItem.to(".future__item03", {
    keyframes: [
      { backgroundColor: "#1670E4", scale: 1.2, duration: 1 }, //このアニメーションが終わったら下のアニメーションが起こる
      { backgroundColor: "#fff", scale: 1, duration: 1 },
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
      { backgroundColor: "#1670E4", duration: 1 }, //このアニメーションが終わったら下のアニメーションが起こる
      { backgroundColor: "#fff", duration: 1 },
    ],
  });
  futureItem.to(".future__item02", {
    keyframes: [
      { backgroundColor: "#1670E4", duration: 1 }, //このアニメーションが終わったら下のアニメーションが起こる
      { backgroundColor: "#fff", duration: 1 },
    ],
  });

  futureItem.to(".future__item03", {
    keyframes: [
      { backgroundColor: "#1670E4", duration: 1 }, //このアニメーションが終わったら下のアニメーションが起こる
      { backgroundColor: "#fff", duration: 1 },
    ],
  });
});

const futureInitialImg = gsap.timeline({
  repeat: -1,
  scrollTrigger: {
    trigger: ".future__list",
    start: "top center",
  },
});

futureInitialImg.to(".initialImg01", {
  keyframes: [
    { opacity: 0, duration: 1 },
    { opacity: 1, duration: 1 },
  ],
});
futureInitialImg.to(".initialImg02", {
  keyframes: [
    { opacity: 0, duration: 1 },
    { opacity: 1, duration: 1 },
  ],
});
futureInitialImg.to(".initialImg03", {
  keyframes: [
    { opacity: 0, duration: 1 },
    { opacity: 1, duration: 1 },
  ],
});
const futureChangeImg = gsap.timeline({
  repeat: -1,
  scrollTrigger: {
    trigger: ".future__list",
    start: "top center",
  },
});
futureChangeImg.to(".changeImg01", {
  keyframes: [
    { opacity: 1, duration: 1 },
    { opacity: 0, duration: 1 },
  ],
});
futureChangeImg.to(".changeImg02", {
  keyframes: [
    { opacity: 1, duration: 1 },
    { opacity: 0, duration: 1 },
  ],
});
futureChangeImg.to(".changeImg03", {
  keyframes: [
    { opacity: 1, duration: 1 },
    { opacity: 0, duration: 1 },
  ],
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
    { color: "#fff", duration: 1 },
    { color: "#166594", duration: 1 },
  ],
});
futureColor.to([".js-future-head02", ".js-future-label02"], {
  keyframes: [
    { color: "#fff", duration: 1 },
    { color: "#166594", duration: 1 },
  ],
});
futureColor.to([".js-future-head03", ".js-future-label03"], {
  keyframes: [
    { color: "#fff", duration: 1 },
    { color: "#166594", duration: 1 },
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
    { color: "#fff", duration: 1 },
    { color: "#2e2e2e", duration: 1 },
  ],
});
futureDesc.to(".js-future-desc02", {
  keyframes: [
    { color: "#fff", duration: 1 },
    { color: "#2e2e2e", duration: 1 },
  ],
});
futureDesc.to(".js-future-desc03", {
  keyframes: [
    { color: "#fff", duration: 1 },
    { color: "#2e2e2e", duration: 1 },
  ],
});

const changeFlow = gsap.timeline({
  repeat: -1,
  scrollTrigger: {
    trigger: ".flow",
    start: "top center",
  },
});
changeFlow.to([".jsFlowNum01", ".jsCircleMain01"], {
  keyframes: [
    {
      backgroundColor: "#2A3F51",
      color: "#fff",
      duration: 1,
    },
    {
      backgroundColor: "#fff",
      color: "#2A3F51",
      duration: 1,
    },
  ],
});
changeFlow.to([".jsFlowNum02", ".jsCircleMain02"], {
  keyframes: [
    { backgroundColor: "#2A3F51", color: "#fff", duration: 1 },
    { backgroundColor: "#fff", color: "#2A3F51", duration: 1 },
  ],
});
changeFlow.to([".jsFlowNum03", ".jsCircleMain03"], {
  keyframes: [
    { backgroundColor: "#2A3F51", color: "#fff", duration: 1 },
    { backgroundColor: "#fff", color: "#2A3F51", duration: 1 },
  ],
});
changeFlow.to([".jsFlowNum04", ".jsCircleMain04"], {
  keyframes: [
    { backgroundColor: "#2A3F51", color: "#fff", duration: 1 },
    { backgroundColor: "#fff", color: "#2A3F51", duration: 1 },
  ],
});
changeFlow.to([".jsFlowNum05", ".jsCircleMain05"], {
  keyframes: [
    { backgroundColor: "#2A3F51", color: "#fff", duration: 1 },
    { backgroundColor: "#fff", color: "#2A3F51", duration: 1 },
  ],
});
const changeFlowBody = gsap.timeline({
  repeat: -1,
  scrollTrigger: {
    trigger: ".flow",
    start: "top center",
  },
});
changeFlowBody.to(".jsCircleBody01", {
  keyframes: [
    { color: "#fff", duration: 1 },
    { color: "#2A3F51", duration: 1 },
  ],
});
changeFlowBody.to(".jsCircleBody02", {
  keyframes: [
    { color: "#fff", duration: 1 },
    { color: "#2A3F51", duration: 1 },
  ],
});
changeFlowBody.to(".jsCircleBody03", {
  keyframes: [
    { color: "#fff", duration: 1 },
    { color: "#2A3F51", duration: 1 },
  ],
});
changeFlowBody.to(".jsCircleBody04", {
  keyframes: [
    { color: "#fff", duration: 1 },
    { color: "#2A3F51", duration: 1 },
  ],
});
changeFlowBody.to(".jsCircleBody05", {
  keyframes: [
    { color: "#fff", duration: 1 },
    { color: "#2A3F51", duration: 1 },
  ],
});

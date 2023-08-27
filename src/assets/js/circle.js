"use strict";
document.addEventListener("DOMContentLoaded", function () {
  //要素の表示、円周上に表示させる
  let circle = document.querySelectorAll(".jsCircleItem");
  //HTMLから取得
  let line = document.querySelector(".circle__line");
  /*円形に並べる手順*/
  let item_length = circle.length;
  //rouletteの半径を計算
  let r = line.clientWidth / 2;
  //360度÷配置要素数
  let deg = 360.0 / item_length;
  //さっきの角度をラジアンに変更
  let rad = (deg * Math.PI) / 180.0;
  let radians90 = (90 * Math.PI) / 180.0;
  //要素追加して表示させる
  for (let i = 0; i < circle.length; i++) {
    //div要素の追加
    const x = Math.cos(rad * i - radians90) * r + r;
    const y = Math.sin(rad * i - radians90) * r + r;
    circle[i].style.left = x + "px";
    circle[i].style.top = y + "px";
  }
});

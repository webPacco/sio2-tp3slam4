const image = document.querySelector("img");

let margin = 5;

setInterval(() => {
  //en dessous de 217
  //au dessus de 1000
  if (image.getBoundingClientRect().left < 1000) {
    margin = margin + 1;
  } else if (image.getBoundingClientRect().left < 217) {
    margin = margin - 1;
  }
  image.style.marginLeft = `${margin}px`;
  // console.log(image.style.marginLeft);
}, 10);

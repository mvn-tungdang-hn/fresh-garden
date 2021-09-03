import "@fancyapps/ui/dist/fancybox.css";
import { Fancybox } from "@fancyapps/ui";

Fancybox.bind('[data-fancybox="gallery"]', {
  dragToClose: false,

  Toolbar: false,
  closeButton: "top",

  Image: {
    zoom: false
  },

  on: {
    initCarousel: (fancybox) => {
      const slide = fancybox.Carousel.slides[fancybox.Carousel.page];

      fancybox.$container.style.setProperty(
        "--bg-image",
        `url("${slide.$thumb.src}")`
      );
    },
    "Carousel.change": (fancybox, carousel, to, from) => {
      const slide = carousel.slides[to];

      fancybox.$container.style.setProperty(
        "--bg-image",
        `url("${slide.$thumb.src}")`
      );
    }
  }
});

const btnPlus = document.querySelector("#btn-plus"),
  btnDash = document.querySelector("#btn-dash"),
  qty = document.querySelector("#qty");

const updateQty = (value) => {
  const oldValue = Number(qty.textContent);
  if (oldValue === 1 && value < 0) {
    return;
  }
  qty.textContent = oldValue + value;
};

btnPlus.addEventListener("click", () => updateQty(1));
btnDash.addEventListener("click", () => updateQty(-1));
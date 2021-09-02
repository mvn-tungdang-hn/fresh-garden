import "./main.js";

import "../scss/product.scss";

import "swiper/css/bundle";
import Swiper from "swiper";

new Swiper(".category", {
  slidesPerView: 4,
  autoHeight: true,
  autoplay: {
    delay: 3000
  }
});

import "./main.js";

import "swiper/css/bundle";
import Swiper from "swiper";

new Swiper("#banner", {
  loop: true,
  effect: "fade",
  autoplay: {
    delay: 3000
  }
});

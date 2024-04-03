<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slider</title>
    <style>
.wiper-track {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  column-gap: 1.5rem;
  margin: 0 auto;

}
.wiper-item {
  width: 250px;
  height: 300px;
  position: relative;
  transition: scale 0.2s linear;

}
.wiper-button img {
  height: 100%;
  width: 100%;
  object-fit:cover;
}
.wiper {
  max-width: 960px;
  position: relative;
  margin: 0 auto;
}
.active-swipe {
  transform: scale(1.1);
  
}
.wiper-button {
  margin: 0 1rem;
  height: 70px;
  width: 45px;
  position: absolute;
  top: 50%;
  background: transparent;
  border: none;
  transform: translateY(-50%);
  z-index: 1;
}
.wiper-button__left {
  right: 0;
}
.wiper-button__right{
transform: translateY(-50%) rotate(180deg);
}
.wiper__image-button {
  right: 50%;
  top: 50%;
  position: absolute;
  padding: 0.8rem 1rem;
  border-radius: 3px;
  background-color: white;
  border: none;
  font-size: 1.4rem;
  transform: translateY(-50%) translateX(50%);
  cursor: pointer;
}
.wiper-wrapper {
  max-width: 830px;
  width: 100%; 
  height: 400px; 
  overflow: hidden;
  padding: 2rem 0.5rem;
  margin: 0 auto;
  display: flex; 
  flex-direction: column; 
  justify-content: center; 
  align-items: center;
}
.swiper__image-button {
  right: 50%;
  top: 50%;
  position: absolute;
  padding: 0.8rem 1rem;
  border-radius: 3px;
  background-color: white;
  border: none;
  font-size: 1rem;
  transform: translateY(-50%) translateX(50%);
  cursor: pointer;
}
.swiper__image-button:hover {
  color: red;
}
.wiper__image{
  height:100%;
  width:100%;
  object-fit: cover;
  border-radius:30px;
}
.is-hidden{
  display:none;
}

    </style>
</head>
<body>
    <div class="wiper">
        <button class="wiper-button wiper-button__right">
            <img src="svg_icon/1904671-.png" alt="left" style="height:40px;width:40px;background: #27a776;border-radius:30px;"/>
        </button>
        <div class="wiper-wrapper">
            <ul class="wiper-track">
                <li class="wiper-item" style="">
                    <img class="wiper__image"
                        src="https://assets.adidas.com/images/w_1880,f_auto,q_auto/6762a332a8df4f4895aeaf2c0093904b_9366/IC7640_21_model.jpg"
                        alt="background-image" />
                    <button class="swiper__image-button">MAD 120</button>
                </li>
                <li class="wiper-item active-swipe">
                    <img class="wiper__image"
                        src="https://contents.mediadecathlon.com/p1962363/k$8221dddd52ee031463ec655e322a64ae/t-shirt-coton-extensible-fitness-slim-blanc.jpg?&f=452x452"
                        alt="background-image" />
                    <button class="swiper__image-button">MAD 120</button>
                </li>
                <li class="wiper-item">
                    <img class="wiper__image"
                        src="https://dynamic.zacdn.com/SrWMQqjBt-558I_SowwnPE1cvcY=/filters:quality(70):format(webp):proportion(0.2)/https://static-ph.zacdn.com/p/mango-man-0618-5813023-1.jpg"
                        alt="background-image" />
                    <button class="swiper__image-button">MAD 120</button>
                </li>
                <li class="wiper-item">
                    <img class="wiper__image"
                        src="https://www.gluestore.com.au/cdn/shop/products/20221020-IMG_7796_1600x.jpg?v=1666317739"
                        alt="background-image" />
                    <button class="swiper__image-button">MAD 120</button>
                </li>
                <li class="wiper-item">
                    <img class="wiper__image"
                        src="https://media.boohoo.com/i/boohoo/mzz52998_sage%20silver_xl/masculin-sage%20silver-t-shirt-oversize-ras-du-cou/?w=900&qlt=default&fmt.jp2.qlt=70&fmt=auto&sm=fit"
                        alt="background-image" />
                    <button class="swiper__image-button">MAD 120</button>
                </li>
            </ul>
        </div>
        <button class="wiper-button wiper-button__left">
            <img src="svg_icon/1904671-.png" alt="right"style="height:40px;width:40px;background: #27a776;border-radius:30px;" />
        </button>
    </div>
    <div style="height: 20px"></div>

    <script>
        const wiperTrack = document.querySelector(".wiper-track");
        const wipes = Array.from(wiperTrack.children);
        const wipePrevBtn = document.querySelector(".wiper-button__right");
        const wipeNextBtn = document.querySelector(".wiper-button__left");
        const wipeWidth = wipes[0].getBoundingClientRect().width;
        
        const arrowsBehaviour = (wipePrevBtn, wipeNextBtn, index) => {
          if (index === 0) {
            wipePrevBtn.classList.add("is-hidden");
            wipeNextBtn.classList.remove("is-hidden");
          } else if (index === wipes.length-1) {
            wipePrevBtn.classList.remove("is-hidden");
            wipeNextBtn.classList.add("is-hidden");
          } else {
            wipePrevBtn.classList.remove("is-hidden");
            wipeNextBtn.classList.remove("is-hidden");
          }
        };
        
        const wipeSlide = (wiperTrack, activeSlide, nextSlide, targetIndex) => {
          wiperTrack.style.transform =
            "translateX(-" + (wipeWidth + 24) * (targetIndex - 1) + "px)";
          activeSlide.classList.remove("active-swipe");
          activeSlide.style.transform = "scale(1)";
          nextSlide.classList.add("active-swipe");
          nextSlide.style.transform = "scale(1.1)";
        };
        
        wipeNextBtn.addEventListener("click", (e) => {
          const activeSlide = wiperTrack.querySelector(".active-swipe");
          const nextSlide = activeSlide.nextElementSibling;
          const targetIndex = wipes.findIndex((slide) => slide === nextSlide);
          wipeSlide(wiperTrack, activeSlide, nextSlide, targetIndex);
          arrowsBehaviour(wipePrevBtn, wipeNextBtn, targetIndex);
        });
        wipePrevBtn.addEventListener("click", (e) => {
          const activeSlide = wiperTrack.querySelector(".active-swipe");
          const nextSlide = activeSlide.previousElementSibling;
          const targetIndex = wipes.findIndex((slide) => slide === nextSlide);
          wipeSlide(wiperTrack, activeSlide, nextSlide, targetIndex);
          arrowsBehaviour(wipePrevBtn, wipeNextBtn, targetIndex);
        });
        </script>
</body>

</html>

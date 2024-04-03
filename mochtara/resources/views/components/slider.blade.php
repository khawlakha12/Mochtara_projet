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
  transition: transform 0.4s ease-in;
  padding: 0 1rem;
}
.wiper-item {
  width: 200px;
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
  transform: translateY(-50%) rotate(180deg);
  color: #ffff;
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
  max-width: 660px;
  overflow: hidden;
  padding: 2rem 0.5rem;
  margin: 0 auto;
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
            <img src="https://www.iconpacks.net/icons/2/free-arrow-left-icon-3099-thumb.png" alt="left" />
        </button>
        <div class="wiper-wrapper">
            <ul class="wiper-track">
                <li class="wiper-item">
                    <img class="wiper__image"
                        src="https://images.pexels.com/photos/19682307/pexels-photo-19682307/free-photo-of-pink-flowers-on-a-shrub.jpeg"
                        alt="background-image" />
                    <button class="swiper__image-button">Click me</button>
                </li>
                <li class="wiper-item active-swipe">
                    <img class="wiper__image"
                        src="https://images.pexels.com/photos/17617625/pexels-photo-17617625/free-photo-of-pink-chrysanthemum-flowers.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load"
                        alt="background-image" />
                    <button class="swiper__image-button">Click me</button>
                </li>
                <li class="wiper-item">
                    <img class="wiper__image"
                        src="https://images.pexels.com/photos/19598202/pexels-photo-19598202/free-photo-of-pink-hyndrangea-flowers.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load"
                        alt="background-image" />
                    <button class="swiper__image-button">Click me</button>
                </li>
                <li class="wiper-item">
                    <img class="wiper__image"
                        src="https://images.pexels.com/photos/17024197/pexels-photo-17024197/free-photo-of-a-pink-anemone-on-a-white-background.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load"
                        alt="background-image" />
                    <button class="swiper__image-button">Click me</button>
                </li>
                <li class="wiper-item">
                    <img class="wiper__image"
                        src="https://images.pexels.com/photos/19682307/pexels-photo-19682307/free-photo-of-pink-flowers-on-a-shrub.jpeg"
                        alt="background-image" />
                    <button class="swiper__image-button">Click me</button>
                </li>
                <li class="wiper-item">
                    <img class="wiper__image"
                        src="https://images.pexels.com/photos/17617625/pexels-photo-17617625/free-photo-of-pink-chrysanthemum-flowers.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load"
                        alt="background-image" />
                    <button class="swiper__image-button">Click me</button>
                </li>
            </ul>
        </div>
        <button class="wiper-button wiper-button__left">
            <img src="https://www.iconpacks.net/icons/2/free-arrow-left-icon-3099-thumb.png" alt="right" />
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

import mobileHeader from "./modules/mobile-header";
import stepsSlider from "./modules/steps-slider";
import logosSlider from "./modules/logos-slider";

window.addEventListener('DOMContentLoaded', () => {

    mobileHeader();

    if(document.querySelector('.steps-block__slider')){
        stepsSlider();
    }

    if(document.querySelector('.logo-slider__slider')){
        logosSlider();
    }

});
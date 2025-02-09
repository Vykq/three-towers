import mobileHeader from "./modules/mobile-header";
import stepsSlider from "./modules/steps-slider";

window.addEventListener('DOMContentLoaded', () => {

    mobileHeader();

    if(document.querySelector('.steps-block__slider')){
        stepsSlider();
    }
});
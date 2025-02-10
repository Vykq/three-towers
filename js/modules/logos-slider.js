
const logosSlider = () => {

    const splide = new Splide('.logo-slider__slider', {
        type: 'loop',
        perPage: 2,
        pagination: false,
        gap: '1.2rem',
        arrows: false,
        padding:{
            right: '6rem'
        },
    }).mount();


    const nextArrow = document.querySelector('.logo-slider__arrow--next');
    const backArrow = document.querySelector('.logo-slider__arrow--prev');


    nextArrow.addEventListener('click',(e) =>{
        splide.go( '+1' );
    })

    backArrow.addEventListener('click',(e) =>{
        splide.go( '-1' );
    })

    function setHeight(){
        const sliderHeight = document.querySelector('.logo-slider__slider').clientHeight;
        const sliderParentElement = document.querySelector('.logo-slider__content');

        sliderParentElement.style.height = 'calc(2rem + ' + sliderHeight + 'px)';
    }


    setHeight()

    window.addEventListener('resize', () =>{
        console.log('swx');
    })


}

export default logosSlider;
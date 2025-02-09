const stepsSlider = () => {


    new Splide('.steps-block__slider', {
        type: 'loop',
        perPage: 3,
        pagination: false,
        gap: '1.2rem',
        arrows: false,
        padding:{
            right: '8.75rem'
        }
    }).mount();


}

export default stepsSlider;
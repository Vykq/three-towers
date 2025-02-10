const stepsSlider = () => {

    const splide = new Splide('.steps-block__slider', {
        type: 'loop',
        perPage: 3,
        pagination: false,
        gap: '1.2rem',
        arrows: false,
        padding:{
            right: '8.75rem'
        },
        breakpoints:{
            1600 : {
                padding:{
                    right: '17.5rem'
                },
            },
            1280 : {
                perPage: 2,
                padding:{
                    right: '13.125rem'
                },
            },
            1024 : {
                perPage: 2,
                padding:{
                    right: '0'
                },
            },
            768 : {
                perPage: 1,
                padding:{
                    right: '0'
                },
            },
        }
    }).mount();


    const nextArrow = document.querySelector('.steps-block__arrow--next');
    const backArrow = document.querySelector('.steps-block__arrow--prev');


    nextArrow.addEventListener('click',(e) =>{
        splide.go( '+1' );
    })

    backArrow.addEventListener('click',(e) =>{
        splide.go( '-1' );
    })

    function setHeight(){
        const sliderHeight = document.querySelector('.steps-block__slider').clientHeight;
        const sliderParentElement = document.querySelector('.steps-block__bottom--slider-area');

        sliderParentElement.style.height = 'calc(2rem + ' + sliderHeight + 'px)';
    }


    setHeight()

    window.addEventListener('resize', () =>{
        console.log('swx');
    })


}

export default stepsSlider;
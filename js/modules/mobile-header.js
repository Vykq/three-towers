const mobileHeader = () => {
    const headerMenuBtn = document.querySelector('.header__mobile-menu-button');
    const modalMenu = document.querySelector('.header__mobile-modal');
    const body = document.querySelector('body');

    function closeMenu() {
        body.classList.remove('modal-is-open');
        modalMenu.classList.remove('modal-active');
        headerMenuBtn.classList.remove('active');
    }

    headerMenuBtn.addEventListener('click', () => {
        if (modalMenu.classList.contains('modal-active')) {
            closeMenu();
            return
        }
        body.classList.add('modal-is-open');
        modalMenu.classList.add('modal-active');
        headerMenuBtn.classList.add('active');
    })


    window.addEventListener('keyup', function (e) {
        if (e.keyCode == 27) {
            closeMenu();
        }
    });

}

export default mobileHeader;

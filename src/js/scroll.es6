(() => {
    "use strict";
    let menubar;

    window.addEventListener('load', () => {
        init();

    });

    const init = () => {
        menubar = document.querySelector('.navigation__menuItemsContainer');

        window.addEventListener('scroll', scrollHandler);

        let links = document.querySelectorAll('.navigation__menuItem');
        for (let x = 0; x < links.length; x++) {
            links[x].addEventListener('click', clickHandler);
        }
    };

    const scrollHandler = () => {
        if (document.documentElement.scrollTop > 0) {
            menubar.classList.add('stick-navi');
        } else {
            menubar.classList.remove('stick-navi');
        }
    }

    const clickHandler = (event) => {
        event.preventDefault();
        console.log(event.currentTarget);
        let target = event.currentTarget.dataset.scroll;

        document.querySelector('#' + target).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    };
})();
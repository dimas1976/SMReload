(() => {
    "use strict";
    let menubar;
    let menulist;
    let mediaSM;//small devices
    let mediaXS;//extra small
    window.addEventListener('load', () => {
        init();

    });

    const init = () => {
        menubar = document.querySelector('.navigation__menuItemsContainer');
        menulist = document.querySelector('.menu-list');
        mediaXS = window.matchMedia('(max-width: 36em)');
        mediaSM = window.matchMedia('(min-width:36.1em) and (max-width: 47.9em)');
        window.addEventListener('scroll', scrollHandler);

        let links = document.querySelectorAll('.navigation__menuItem');
        for (let x = 0; x < links.length; x++) {
            links[x].addEventListener('click', clickHandler);
        }
    };

    const scrollHandler = () => {
        if (document.documentElement.scrollTop > 0) {
            menubar.classList.add('stick-navi');
        } else if(document.documentElement.scrollTop == 0){
            menubar.classList.remove('stick-navi');
        }
    }

    const clickHandler = (event) => {
        event.preventDefault();
        let target = event.currentTarget.dataset.scroll;
        let el = document.querySelector('#' + target);
/*        el.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });*/
        window.location.href = '#' + target;
        if(mediaXS.matches || mediaSM.matches) {
            menulist.style.left = '-50%';
        }
    };
})();
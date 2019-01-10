/**
 * Created by Dima on 30.11.2018.
 */
(() => {
    window.addEventListener('load', function () {
        "use strict";
        let icon = document.querySelector('.hamburger__icon');
        let hamburger = document.querySelector('.hamburger');
        let list = document.querySelector('.menu-list');
        let button = document.querySelector('.button-mobile');
        let interval = window.setInterval(setTimer, 8000);
        let body = document.querySelector('body');
        let flag = 0;
        let angle = 90;
        icon.addEventListener('click', function () {
            if(flag==0) {
                flag++;
                icon.style.transform = 'rotate(' + angle + 'deg)';
                angle += 90;
                list.style.left = '0';
            } else {
                flag = 0;
                list.style.left = '-20em';
            }
        });
        body.addEventListener('touchstart', touchHandler);

        function setTimer (){
            console.log('timer');
            hamburger.classList.add('fadeOutNavi');
            button.classList.add('fadeOutNavi');
            window.clearInterval(interval);
        }
        function touchHandler (){
            hamburger.classList.remove('fadeOutNavi');
            button.classList.remove('fadeOutNavi');
            interval = window.setInterval(setTimer, 8000);
        }
    })
})();
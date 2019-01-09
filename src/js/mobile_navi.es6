/**
 * Created by Dima on 30.11.2018.
 */
(() => {
    window.addEventListener('load', function () {
        "use strict";
        let icon = document.querySelector('.hamburger__icon');
        let list = document.querySelector('.menu-list');
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
        })
    })
})();
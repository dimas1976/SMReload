/**
 * Created by Dima on 30.11.2018.
 */
window.addEventListener('load', function(){
    "use strict";
    let icon = document.querySelector('.hamburger__icon');
    let list = document.querySelector('.menu-list');
    let items = document.querySelectorAll('.navigation__menuItem');
    let itemStyle= "visibility: visible; opacity: 1";
    let angle = 90;
    icon.addEventListener('click', function() {
       icon.style.transform = 'rotate(' + angle +'deg)';
        angle+=90;
        list.style.left = '0';
       // addItemStyle();
    })

    const addItemStyle = ()=> {
        for (let x=0; x < items.length; x++) {
            items[x].style.cssText = itemStyle;
        }
    }
})
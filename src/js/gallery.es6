/**
 * Created by Dima on 15.11.2018.
 */
let imgContainer;
let imgContainerWidth;
let screenwidth;

let requestID = undefined;
let startTime = undefined;

window.addEventListener('load', function(event) {
    initialize();
    getImageContainerWidth();
    getScreenWidth();
    //animate();
    setAnimationRules();
});

const initialize = ()=> {
    imgContainer = document.querySelector('.imgContainer');
    imgContainerWidth = 0;
};

const getImageContainerWidth = ()=> {
    "use strict";
    let pictures = document.querySelectorAll('.imgContainer .imgContainer__picture');
    for(let i = 0; i < pictures.length; i++) {
        let imgWidth = window.getComputedStyle(pictures[i], null).getPropertyValue('width');
        imgWidth = parseInt(imgWidth);
        imgContainerWidth += imgWidth;
    }
};

const getScreenWidth = ()=> {
    "use strict";
    let screen = document.querySelector('.gallery__screen');
    screenwidth = parseInt(window.getComputedStyle(screen, null).getPropertyValue('width'));
};


const setAnimationRules = ()=> {
/*    let css = document.styleSheets;

    let moveCSSRule = '@keyframes slider' +
        '{ ' +
        '100%' +
        '{ transform: translateX(' + (-imgContainerWidth + screenwidth-30) + 'px ) }' +
        '}';
    css[1].insertRule(moveCSSRule, 0);*/
/*    document.head.innerHTML =
        "<style>" +
        "@keyframes slider { " +
        "100% {transform: translateX(" + (-imgContainerWidth + screenwidth-30) + "px) }" +
        "}" +
        "</style>";*/
/*    let head = document.querySelector('head');
    let styleElement = document.createElement('style');
    let cssText = '@keyframes slider { 100% {transform: translateX(-1366px);}}';
    styleElement.setAttribute('type', 'text/css');
    styleElement.appendChild(document.createTextNode(cssText));
    //styleElement.setAttribute('href', 'data:text/css;charset=UTF-8,' + encodeURIComponent('@keyframes slider { 100% {transform: translateX(' + (-imgContainerWidth + screenwidth-30) + 'px)}}'));
    head.appendChild(styleElement);
    console.log('head ', head);*/

};

const animate = () => {
    "use strict";
    render();
    requestID = requestAnimationFrame(animate);
}

const render = (time) => {
    "use strict";
    if (time === undefined) {
        time = Date.now();
    }
    if (startTime === undefined) {
        startTime = time;
    }

    imgContainer.style.transform = 'translateX(' + -(time-startTime / 14000) % (imgContainerWidth - screenwidth+30) + 'px )';

    /*   console.log(Number((window.getComputedStyle(elem, null).getPropertyValue('left')).match(/\d+/)));*/
}
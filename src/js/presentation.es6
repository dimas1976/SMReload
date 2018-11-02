
    "use strict";
    const iFrame = document.querySelector('.iframe');
    const btToYT = document.querySelector('.btToYT');
    btToYT.addEventListener('click', function () {
        iFrame.setAttribute('style', 'display: block');
        console.log('click');
    });


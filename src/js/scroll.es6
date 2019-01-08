(() => {
    "use strict";
    let menubar;
    let menulist;
    let mediaSM;//small devices
    let mediaXS;//extra small

    let header;
    let headerYPosition;

    let menuItems;

    let tv;
    let presentation;
    let tvScreen;
    let tvButton;
    let buttonTitle;

    let aBg;
    let aBgYPosition;
    let aCloud;
    let aAvatar;
    let aCloudTxt;

    let nBg;
    let nBgYPosition;
    let nCloud;
    let nAvatar;
    let nCloudTxt;

    let vBg;
    let vBgYPosition;
    let vCloud;
    let vAvatar;
    let vCloudTxt;

    window.addEventListener('load', () => {
        init();
        animation(window.pageYOffset);
    });

    const init = () => {
        menubar = document.querySelector('.navigation__menuItemsContainer');
        menulist = document.querySelector('.menu-list');
        header = document.querySelector('.header__container');
        headerYPosition = header.offsetTop;
        menuItems = document.querySelectorAll('.menu-item-image');
        presentation = document.querySelector('#presentation');
        tv = document.querySelector('.presentation__items');
        tvScreen = document.querySelector('video');
        tvButton = document.querySelector('.button__image');
        buttonTitle = document.querySelector('#presentation .button__title');

        aBg = document.querySelector('.aboutUs__container:first-child');
        aBgYPosition = aBg.offsetTop;
        aCloud = document.querySelector('.cloud--anna');
        aAvatar = document.querySelector('.cloud--anna + .avatar');
        aCloudTxt = document.querySelector('.cloud__text--anna');

        nBg = document.querySelector('.aboutUs__container:nth-child(2)');
        nBgYPosition = nBg.offsetTop;
        nCloud = document.querySelector('.cloud--nadja');
        nAvatar = document.querySelector('.cloud--nadja + .avatar');
        nCloudTxt = document.querySelector('.cloud__text--nadja');

        vBg = document.querySelector('.aboutUs__container:nth-child(3)');
        vBgYPosition = vBg.offsetTop;
        vCloud = document.querySelector('.cloud--vika');
        vAvatar = document.querySelector('.cloud--vika + .avatar');
        vCloudTxt = document.querySelector('.cloud__text--vika');

        mediaXS = window.matchMedia('(max-width: 36em)');
        mediaSM = window.matchMedia('(min-width:36.1em) and (max-width: 47.9em)');

        window.addEventListener('scroll', scrollHandler);

        let links = document.querySelectorAll('.navigation__menuItem');
        for (let x = 0; x < links.length; x++) {
            links[x].addEventListener('click', clickHandler);
        }
    };

    const scrollHandler = () => {
        let scrollTop = window.pageYOffset;
        scrollTop > 0 ? menubar.classList.add('stick-navi') : menubar.classList.remove('stick-navi');
        animation(scrollTop);
    }

    const clickHandler = (event) => {
        event.preventDefault();
        let target = event.currentTarget.dataset.scroll;
        window.location.href = '#' + target;
        if(mediaXS.matches || mediaSM.matches) {
            menulist.style.left = '-50%';
        }
    };

   const animation = (windowTopPosition)=> {
       if(windowTopPosition >= headerYPosition){
           header.style.animation = 'fadeHeader .5s linear forwards';
           runInMenuItems();
           animatePresentation();
       }
       if(windowTopPosition >= aBgYPosition) {
           animateASection();
       }
       if(windowTopPosition >=nBgYPosition) {
           animateNSection();
       }
       if(windowTopPosition >=vBgYPosition) {
           animateVSection();
       }
    };

   const runInMenuItems = ()=> {
       for (let menuItem of menuItems) {
           menuItem.style.animation = 'runInMenu .5s linear forwards';
       }
   }
   const animatePresentation = ()=> {
       presentation.style.animation = 'showPresentationBg .5s linear forwards';
       tv.style.animation = 'fadeInTV .5s linear .5s forwards';
       tvScreen.style.animation = 'fadeInScreen .5s linear 1s forwards'
       tvButton.style.animation = 'animateTvBt .5s linear 1.5s forwards';
       buttonTitle.style.animation = 'animateBtTitle .5s linear 2s forwards';
   }
   const animateASection = ()=> {
       aBg.style.animation = 'animateAboutBg .5s linear forwards';
       aAvatar.style.animation = 'animateAvatar .5s cubic-bezier(0.440, 0.010, 0.235, 1.005) .5s forwards';
       aCloud.style.animation = 'animateCloud .5s linear 1.5s forwards';
       aCloudTxt.style.animation = 'fadeInCldTxt .5s linear 2s forwards';
   }
   const animateNSection = ()=> {
       nBg.style.animation = 'animateAboutBg .5s linear forwards';
       nAvatar.style.animation = 'animateAvatar .5s cubic-bezier(0.440, 0.010, 0.235, 1.005) 1s forwards';
       nCloud.style.animation  = 'animateCloud .5s linear 1.5s forwards';
       nCloudTxt.style.animation = 'fadeInCldTxt .5s linear 2s forwards';
   }
   const animateVSection = ()=> {
       vBg.style.animation = 'animateAboutBg .5s linear forwards';
       vAvatar.style.animation = 'animateAvatar .5s cubic-bezier(0.440, 0.010, 0.235, 1.005) 1s forwards';
       vCloud.style.animation = 'animateCloud .5s linear 1.5s forwards';
       vCloudTxt.style.animation = 'fadeInCldTxt .5s linear 2s forwards';
   }

})();
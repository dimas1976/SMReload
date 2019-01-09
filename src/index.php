<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|PT+Mono|Montserrat&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="/SMReload/dist/css/main.css">
    <link rel="stylesheet" href="/SMReload/dist/css/normalize.css">
</head>
<body>
<?php include_once('img/svg/svg_defs.svg') ?>
<!--[if lte IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->
<!-- Add your site or application content here -->
<header id="header">
    <div class="container header__container"></div>
</header>
<div class="hamburger">
    <svg class="hamburger__icon" version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1160 1280"
         preserveAspectRatio="xMidYMid meet">
        <use xlink:href="#lenkrad"></use>
    </svg>
    <span class="hamburger__title">Меню</span>
</div>
<div class="button button-mobile">
    <a href="https://www.youtube.com/watch?v=OrpoZ8U3-D4&t=1s">
        <svg viewBox="0 0 20 20" preserveAspectRatio="xMidYMin meet" class="button-mobile__image">
            <use xlink:href="#btToYT"></use>
        </svg>
        <span class="button__title">Проиграть видео</span>
    </a>
</div>
<nav id="navigation">
    <div class="container navigation__menuItemsContainer">
        <ul class="menu-list">
            <li class="navigation__menuItem" data-scroll="aboutUs">
                <a href="#">
                    <svg viewBox="0 0 380 370" preserveAspectRatio="xMinYMin meet" class="menu-item-image aboutUs-icon">
                        <use xlink:href="#aboutUs-symbol"></use>
                    </svg>
                    <span class="menu-item-title menu-item-title--about">О НАС</span>
                </a>
            </li>
            <li class="navigation__menuItem" data-scroll="news">
                <a href="#">
                    <svg viewBox="0 0 470 330" preserveAspectRatio="xMinYMin meet" class="menu-item-image news-icon">
                        <use xlink:href="#news-symbol"></use>
                    </svg>
                    <span class="menu-item-title menu-item-title--news">НОВОСТИ</span>
                </a>
            </li>
            <li class="navigation__menuItem" data-scroll="gallery">
                <a href="#">
                    <svg viewBox="0 0 119 143" preserveAspectRatio="xMidYMin meet" class="menu-item-image gallery-icon">
                        <use xlink:href="#gallery-symbol"></use>
                    </svg>
                    <span class="menu-item-title menu-item-title--gallery">ГАЛЛЕРЕЯ</span>
                </a>
            </li>
            <li class="navigation__menuItem" data-scroll="contact">
                <a href="#">
                    <svg data-scroll="contact" viewBox="0 0 600 246" preserveAspectRatio="xMidYMin meet"
                         class="menu-item-image contact-icon">
                        <use xlink:href="#contact-symbol"></use>
                    </svg>
                    <span class="menu-item-title menu-item-title--contact">КОНТАКТ</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<main class="content">
    <div id="presentation" class="container">
        <div class="presentation__items">
            <div class="video">
                <video autoplay loop muted>
                    <source src="video/headerclip_test.mp4" type="video/mp4"/>
                </video>
                <div class="video__button button">
                    <svg viewBox="0 0 20 20" preserveAspectRatio="xMidYMin meet" class="button__image">
                        <use xlink:href="#btToYT"></use>
                    </svg>
                    <span class="button__title">Проиграть видео</span>
                </div>
            </div>
            <div class="iframe">
                <iframe name="smIFrame" src="https://www.youtube.com/embed/OrpoZ8U3-D4" width="100%" height="100%"
                        frameborder="0"
                        allow="autoplay; encrypted-media"></iframe>
            </div>
        </div>
    </div>
    <div id="aboutUs">
        <div class="aboutUs__container aboutUs__container--greenBG container">
            <div class="cloud cloud--anna right-side">
                <p class="cloud__text cloud__text--anna">
                    Анна Бурдина (окончила С.-Петербургский университет им. Герцена, опыт работы с детьми более 16 лет)
                    проводит занятия по развитию речи на основе художественного слова и изображения. Дети слушают
                    сказки, истории и смотрят картинки, иллюстрирующие содержание рассказов, сами лепят и рисуют,
                    "комментируя" таким образом тексты и вместе со своими мамами, папами произносят слова, предложения,
                    передающие смысл услышанного и увиденного. А кто посмелей, может и сказку пересказать.
                </p>
            </div>
            <div class="avatar left-side">
                <img class="avatar__image" src="img/content/teachers/anna.jpg"
                     alt="Анна Бурдина-учитель русского языка">
            </div>
        </div>
        <div class="aboutUs__container aboutUs__container--greenPurpleBG container">
            <div class="cloud cloud--nadja left-side">
                <p class="cloud__text cloud__text--nadja">
                    Надежда Крювель- дипломированый педагог по хореографии. Вот уже 30 лет, как после окончания школы ,
                    мастер спорта международного класса по бальным танцам начала сама преподавать детям ритмику и танец
                    в Областном дворце культуры г.Владимира. Там же она окончила колледж культуры по отделению
                    хореографии и параллельно с ним психологический факультет педагогического университета. Два года в
                    одной из частных танцевальных школ в Болгарии преподавала для малышей основы хореографии, а для
                    детей постарше-спортивный бальный танец. С 2010 года ведет театр в русской школе выходного дня
                    "Азбука" в нашем городе. Несколько лет назад стала преподавать основы раннего танцевального развития
                    и в Школе мамы.
                </p>
            </div>
            <div class="avatar right-side">
                <img class="avatar__image" src="img/content/teachers/anna.jpg"
                     alt="Надежда Кровель-дипломированый педагог по хореографии">
            </div>
        </div>
        <div class="aboutUs__container aboutUs__container--purpleGreenBG container">
            <div class="cloud cloud--vika right-side">
                <p class="cloud__text cloud__text--vika">
                    Виктория Аронова
                    (окончила Луганский<br> педагогический институт, продолжает образование в Гамбурском университете,
                    опыт
                    работы с детьми более 15 лет) проводит игры,способствующие развитию логического и образного,
                    ассоциативного мышления. При помощи специальных пособий и заданий на уроке формируются элементарные
                    математические представления, закрепляется понятие о цвете, форме и величине.
                </p>
            </div>
            <div class="avatar left-side">
                <img class="avatar__image" src="img/content/teachers/vika.jpg"
                     alt="Виктория Аронова развивает логику и образное мышление у детей">
            </div>
        </div>
        <!--        <div class="aboutUs__container aboutUs__container--greenPurpleBG">
                    <div class="cloud cloud--xenia left-side">
                        <div class="cloud__text cloud__text--xenia">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab doloribus ea eius illo in laudantium
                                modi mollitia natus, quam quidem quos recusandae reiciendis voluptate? Nihil quaerat sequi unde
                                voluptatem. Aut commodi cupiditate, debitis delectus eveniet fuga modi mollitia porro
                                praesentium quidem, rem sit suscipit ullam velit voluptas? Aut, dolorem, excepturi.</p>
                        </div>
                    </div>
                    <div class="avatar right-side">
                        <img class="avatar__image" src="img/content/teachers/anna.jpg"
                             alt="Анна Бурдина-учитель русского языка">
                    </div>
                </div>
                <div class="aboutUs__container aboutUs__container--purpleGreenBG">
                    <div class="cloud cloud--tanja right-side">
                        <div class="cloud__text cloud__text--nadja">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur culpa dolorem earum
                                eos quas quod rem. Accusamus aspernatur beatae commodi dolore error eveniet excepturi facilis
                                incidunt iure minus mollitia nisi nostrum nulla odio odit omnis optio placeat, porro qui quos
                                rem repellendus, sapiente sequi suscipit totam veritatis voluptatem voluptatibus!</p>
                        </div>
                    </div>
                    <div class="avatar left-side">
                        <img class="avatar__image" src="img/content/teachers/anna.jpg"
                             alt="Анна Бурдина-учитель русского языка">
                    </div>
                </div>-->
    </div>
    <section id="news">
        <div class="news__container container">
            <h2 class="headline--big">НОВОСТИ</h2>
            <hr class="underline">
            <div class="messagesContainer">
                <div class="messagesContainer__message">
                    <p class="date">13.11.2018</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                        <a href="#" class="more" role="button">читать далее</a>
                    </p>
                </div>
                <div class="messagesContainer__message">
                    <p class="date">13.11.2018</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                        <a href="#" class="more" role="button">читать далее</a>
                    </p>
                </div>
                <div class="messagesContainer__message">
                    <p class="date">13.11.2018</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                        <a href="#" class="more" role="button">читать далее</a>
                    </p>
                </div>
                <a class="archiveLink" href="#">Перейти к архиву новостей</a>
            </div>
        </div>
    </section>
    <section id="gallery">
        <div class="gallery__container container">
            <h2 class="headline--big">ГАЛЛЕРЕЯ</h2>
            <hr class="underline">
            <div class="gallery__slider">
                <div class="gallery__screen">
                    <div class="imgContainer">
                        <img class="imgContainer__picture" src="img/content/gallery/pictures/2.jpg" alt="">
                        <img class="imgContainer__picture" src="img/content/gallery/pictures/3.jpg" alt="">
                        <img class="imgContainer__picture" src="img/content/gallery/pictures/4.jpg" alt="">
                        <img class="imgContainer__picture" src="img/content/gallery/pictures/5.jpg" alt="">
                        <img class="imgContainer__picture" src="img/content/gallery/pictures/6.jpg" alt="">
                        <img class="imgContainer__picture" src="img/content/gallery/pictures/7.jpg" alt="">
                        <img class="imgContainer__picture" src="img/content/gallery/pictures/2.jpg" alt="">
                        <img class="imgContainer__picture" src="img/content/gallery/pictures/3.jpg" alt="">
                        <img class="imgContainer__picture" src="img/content/gallery/pictures/4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="contact__container container">
            <h2 class="headline--big">КОНТАКТ</h2>
            <hr class="underline">
            <form class="contact__form" action="">
                <div class="pInputs">
                    <div>
                        <label for="pname">Имя родителя<br><input class="contact__form--fieldBorder" type="text"
                                                                  id="pname" name="pname"></label>
                    </div>
                    <div>
                        <label for="psurname">Фамилия родителя <br><input class="contact__form--fieldBorder" type="text"
                                                                          id="psurname" name="psurname"></label>
                    </div>
                    <div>
                        <label for="tel">Телефон <br><input class="contact__form--fieldBorder" type="tel" id="tel"
                                                            name="tel"></label>
                    </div>
                    <div>
                        <label for="email">Электронный адрес <br> <input class="contact__form--fieldBorder" type="email"
                                                                         id="email" name="email"></label>
                    </div>
                </div>
                <div class="chInputs">
                    <div>
                        <label for="chname">Имя ребёнка<br><input class="contact__form--fieldBorder" type="text"
                                                                  id="chname" name="chname"></label>
                    </div>
                    <div>
                        <label for="chsurname">Фамилия ребёнка<br><input class="contact__form--fieldBorder" type="text"
                                                                         id="chsurname" name="chsurname"></label>
                    </div>
                    <div>
                        <label for="bday">Дата рождения ребёнка<br><input class="contact__form--fieldBorder" type="дате"
                                                                          id="bday" name="bday"></label>
                    </div>
                </div>
                <div class="selectGroup">
                    <div>
                        <label for="visit">В настоящий момент ребёнок посещает</label>
                        <br>
                        <select class="contact__form--fieldBorder" name="visit" id="visit">
                            <option selected value="nursery">детский сад</option>
                            <option value="school">школу</option>
                            <option value="nothing">ничего не посещает</option>
                        </select>
                    </div>
                    <div>
                        <label for="ruLangSkill">Уровень владения ребёнка русским языком</label>
                        <br>
                        <select class="contact__form--fieldBorder" name="ruLangSkill" id="ruLangSkill">
                            <option selected value="understand">понимает</option>
                            <option value="speak-understand">говорит - понимает</option>
                            <option value="0-0">не говорит - не понимает</option>
                            <option value="0">не говорит</option>
                        </select>
                    </div>
                    <div>
                        <label for="information">Информация о семье</label>
                        <br>
                        <select class="contact__form--fieldBorder" name="information" id="information">
                            <option selected value="mono">одноязычная семья</option>
                            <option value="poly">Многоязычная семья</option>
                        </select>
                    </div>
                </div>
                <div class="annotation">
                    <label for="annotationField">Примечание / пожелание родителей:</label>
                    <br>
                    <textarea class="contact__form--fieldBorder" name="annotationField" id="annotationField"></textarea>
                </div>
                <div class="contactButton">
                    <button>Отправить</button>
                </div>
            </form>
        </div>
    </section>
</main>
<footer id="footer">
    <div class="footer-container container">
        <h3 class="headline--small">Часы работы:</h3>
        <div class="footer-container__items">
            <div class="friday">
                <span class="day">по пятницам</span><br>
                Kulturpunkt <br>
                (Barmbek Basch)<br>
                Wohldorfer Str.30<br>
                с 15:45 до 17:15
            </div>
            <div class="saturday">
                <span class="day">по субботам</span><br>
                Wohlwillstr. 46<br>
                с 09:00 до 10:30
            </div>
        </div>
    </div>
    <div class="footer-note">
        <ul class="footer-note__list">
            <li>контакт</li>
            <li>|</li>
            <li>импрессум</li>
        </ul>
    </div>
</footer>

<!--<script src="js/vendor/modernizr-{{MODERNIZR_VERSION}}.min.js"></script>
<script src="https://code.jquery.com/jquery-{{JQUERY_VERSION}}.min.js" integrity="{{JQUERY_SRI_HASH}}" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/ven^^dor/jquery-{{JQUERY_VERSION}}.min.js"><\/script>')</script>
<script src="/SMReload/dist/js/plugins.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.6.15/browser-polyfill.min.js"></script>
<script src="/SMReload/dist/js/bundle.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
</html>
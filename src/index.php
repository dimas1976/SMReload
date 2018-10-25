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
    <link rel="stylesheet" href="/SMReload/dist/css/normalize.css">
    <link rel="stylesheet" href="/SMReload/dist/css/main.css">


</head>

<body>
<?php include_once ('img/svg/svg_defs.svg')?>
<!--[if lte IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<!-- Add your site or application content here -->
<header id="header">
    <div class="header__container">
</header>
<nav id="navigation">
    <ul class="menu-list navigation__menuItems-container">
        <li class="navigation__menuItem">
            <svg viewBox="0 0 500 375" preserveAspectRatio="xMidYMid meet" class="menu-item-image aboutUs-icon">
                <use xlink:href="#aboutUs"></use>
                <span class="menu-item-title">О НАС</span>
            </svg>
        </li>
        <li class="navigation__menuItem">
            <svg viewBox="0 0 570 330" preserveAspectRatio="xMidYMid meet" class="menu-item-image news-icon">
                <use xlink:href="#news"></use>
                <span class="menu-item-title">НОВОСТИ</span>
            </svg>
        </li>
        <li class="navigation__menuItem">
            <svg viewBox="0 0 119 143" preserveAspectRatio="xMidYMid meet" class="menu-item-image gallery-icon">
                <use xlink:href="#gallery"></use>
                <span class="menu-item-title">ГАЛЛЕРЕЯ</span>
            </svg>
        </li>
        <li class="navigation__menuItem">
            <svg viewBox="0 0 600 246" preserveAspectRatio="xMidYMid meet" class="menu-item-image contact-icon">
                <use xlink:href="#contact"></use>
                <span class="menu-item-title">КОНТАКТ</span>
            </svg>
        </li>
    </ul>
</nav>
<main id="content">
    <div class="presentation">
<!--        <div class="presentation__video">
            <video src="video/headerclip.mp4" autoplay loop></video>
        </div>-->
        <div class="presentation__image">
            <svg viewBox="0 0 152 110" preserveAspectRatio="xMidYMin meet" class="display">
                <use xlink:href="#tv"></use>
            </svg>
        </div>
    </div>
</main>
<script src="js/vendor/modernizr-{{MODERNIZR_VERSION}}.min.js"></script>
<script src="https://code.jquery.com/jquery-{{JQUERY_VERSION}}.min.js" integrity="{{JQUERY_SRI_HASH}}" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-{{JQUERY_VERSION}}.min.js"><\/script>')</script>
<script src="/SMReload/dist/js/plugins.js"></script>
<script src="/SMReload/dist/js/bundle.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
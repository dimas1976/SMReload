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

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
<?php include_once ('img/svg/svg_defs.svg')?>
<!--[if lte IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<!-- Add your site or application content here -->
<header class="page-line header">
    <img class="header__image" src="img/header/logo.png" alt="Logo Schkola Mama">
</header>
<nav class="page-line navigation">
    <ul class="menu-list navigation__menuItems-container">
        <li class="navigation__menuItem">
            <svg viewBox="0 0 700 700" class="aboutUs-icon">
                <use href="#aboutUs"></use>
            </svg>
        </li>
        <li class="navigation__menuItem">
            <svg viewBox="0 0 700 600" class="news-icon">
                <use href="#news"></use>
            </svg>
        </li>
        <li class="navigation__menuItem">

            <svg viewBox="0 0 700 700" class="gallery-icon">
                <use href="#gallery"></use>
            </svg>
        </li>
        <li class="navigation__menuItem"></li>
    </ul>
</nav>

<script src="js/vendor/modernizr-{{MODERNIZR_VERSION}}.min.js"></script>
<script src="https://code.jquery.com/jquery-{{JQUERY_VERSION}}.min.js" integrity="{{JQUERY_SRI_HASH}}" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-{{JQUERY_VERSION}}.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
<?php
session_start();
if (!isset($_SESSION['lan'])){
    $_SESSION['lan'] = 'CN';
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<meta content="text/html;charset=utf-8" http-equiv="content-type"/>
<head>

    <meta content="text/html; charset=utf-8" http-equiv="content-type"/>
    <meta content="Pindonnay" name="author"/>

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Noto+Serif:400,700&amp;display=swap"
          rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="css/dark.css" rel="stylesheet" type="text/css"/>

    <link href="css/font-icons.css" rel="stylesheet" type="text/css"/>
    <link href="css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/>

    <link href="css/custom.css" rel="stylesheet" type="text/css"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>

    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link href="include/rs-plugin/css/settings.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="include/rs-plugin/css/layers.css" rel="stylesheet" type="text/css">
    <link href="include/rs-plugin/css/navigation.css" rel="stylesheet" type="text/css">

    <!-- ADD-ONS CSS FILES -->
    <link href="include/rs-plugin/css/addons/revolution.addon.liquideffect.css" rel="stylesheet" type="text/css">

    <!--  Recipes Demo Specific Stylesheet -->
    <link href="css/colors5533.css?color=267DF4" rel="stylesheet" type="text/css"/> <!-- Theme Color -->
    <link href="demos/recipes/css/fonts.css" rel="stylesheet" type="text/css"/> <!-- Theme Font -->
    <link href="demos/recipes/recipes.css" rel="stylesheet" type="text/css"/> <!-- Theme Custom CSS -->

    <style>
        .dt-shadow {
            text-shadow: 0px 10px 30px rgba(0, 0, 0, 1)
        }

        #rev_slider_131_1 .uranus.tparrows {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0)
        }

        #rev_slider_131_1 .uranus.tparrows:before {
            width: 50px;
            height: 50px;
            line-height: 50px;
            font-size: 40px;
            transition: all 0.3s;
            -webkit-transition: all 0.3s
        }

        #rev_slider_131_1 .uranus.tparrows:hover:before {
            opacity: 0.75
        }

        .slotholder canvas {
            height: 100% !important;
        }
    </style>
    <!-- / -->

    <!-- Document Title
    ============================================= -->
    <title>Pindonnay Wine Ltd Pindonnay Wine Ltd</title>


</head>

<body class="stretched">

<!--<div id="preloader">
    <iframe src="https://giphy.com/embed/Bn0JzrZxWfTKU" width="480" height="361" frameBorder="0" class="giphy-embed"
            allowFullScreen></iframe>
    <p><a href="https://giphy.com/gifs/computer-transparent-film-Bn0JzrZxWfTKU">via GIPHY</a></p>
</div>-->


<!-- Document Wrapper
============================================= -->
<div class="clearfix" id="wrapper">

    <!-- Header
    ============================================= -->
    <header class="transparent-header" data-sticky-shrink="false" id="header">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a class="standard-logo" data-dark-logo="demos/recipes/images/logo.png"
                           data-sticky-logo="demos/recipes/images/logo.png" href="index.php">
                            <img alt="" id="logonew" src="demos/recipes/images/logo.png">
                        </a>
                        <a class="retina-logo" href="index.php">
                            <img alt="" src="demos/recipes/images/logo.png">
                        </a>
                    </div><!-- #logo end -->


                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100">
                            <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                            <path d="m 30,50 h 40"></path>
                            <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                        </svg>
                    </div>

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav class="primary-menu">

                        <ul class="menu-container">
                            <li class="menu-item current">
                                <a class="menu-link" href="index.php">
                                    <div><?php
                                        if($_SESSION['lan'] == 'EN')
                                            echo 'Home';
                                        elseif ($_SESSION['lan'] == 'FR')
                                            echo 'Maison';
                                        elseif ($_SESSION['lan'] == 'CN')
                                            echo '主页';
                                        ?></div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="about_us.php">
                                    <div><?php
                                        if($_SESSION['lan'] == 'EN')
                                            echo 'About Us';
                                        elseif ($_SESSION['lan'] == 'FR')
                                            echo 'À propos de nous';
                                        elseif ($_SESSION['lan'] == 'CN')
                                            echo '关于我们';
                                        ?></div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="video.php">
                                    <div><?php
                                        if($_SESSION['lan'] == 'EN')
                                            echo 'Videos';
                                        elseif ($_SESSION['lan'] == 'FR')
                                            echo 'Vidéos';
                                        elseif ($_SESSION['lan'] == 'CN')
                                            echo '视频';
                                        ?></div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="#">
                                    <div><?php
                                        if($_SESSION['lan'] == 'EN')
                                            echo 'News';
                                        elseif ($_SESSION['lan'] == 'FR')
                                            echo 'Actualités';
                                        elseif ($_SESSION['lan'] == 'CN')
                                            echo '新闻';
                                        ?></div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="#">
                                    <div>
                                        <img src="<?php
                                        if ($_SESSION['lan'] == 'CN')
                                            echo "images/flag/hong-kong.png";
                                        elseif ($_SESSION['lan'] == 'EN')
                                            echo "images/flag/united-kingdom.png";
                                        elseif ($_SESSION['lan'] == 'FR')
                                            echo "images/flag/france.png";

                                        ?>"
                                             style="height: 25px; width: 25px;">
                                        <i class="icon-angle-down1 d-none d-lg-inline-block"></i>
                                    </div>
                                </a>
                                <ul class="sub-menu-container rounded-bottom">
                                    <div class="dropdown-divider my-0"></div>
                                    <li class="menu-item"><a class="menu-link" href="language.php?lan=CN">
                                        <div>
                                            <img src="images/flag/hong-kong.png" style="height: 40px; width: 40px;">
                                        </div>
                                    </a></li>
                                    <li class="menu-item"><a class="menu-link" href="language.php?lan=EN">
                                        <div><img src="images/flag/united-kingdom.png"
                                                  style="height: 40px; width: 40px;"></div>
                                    </a></li>
                                    <li class="menu-item"><a class="menu-link" href="language.php?lan=FR">
                                        <div><img src="images/flag/france.png" style="height: 40px; width: 40px;"></div>
                                    </a></li>
                                </ul>
                            </li>
                        </ul>

                    </nav><!-- #primary-menu end -->

                    <form action="#" class="top-search-form"
                          method="get">
                        <input autocomplete="off" class="form-control" name="q" placeholder="Type &amp; Hit Enter.."
                               type="text"
                               value="">
                    </form>

                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>
    </header>
    <!-- #header end -->

    <!-- Slider
    ============================================= -->
    <section class="slider-element min-vh-60 min-vh-md-100 include-header" id="slider">
        <div class="slider-inner">

            <div class="rev_slider_wrapper fullscreen-container" data-alias="distortion-addon"
                 data-source="gallery" id="rev_slider_2_1_wrapper"
                 style="padding:0px; background: url('images/UntitledProject.gif'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
                <div class="rev_slider fullscreenbanner" data-version="5.4.8.1" id="rev_slider_2_1"
                     style="display:none;">
                    <div class="tp-bannertimer" style="height: 6px; background: rgba(255,255,255,0.15);"></div>
                </div>
            </div><!-- END REVOLUTION SLIDER -->

        </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap pb-0" style="overflow: visible;">

            <div class="section mt-2 bg-transparent">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2 center">
                            <p style="font-size: 17px;">
                            <div>
                                <?php
                                if($_SESSION['lan'] == 'EN')
                                    echo 'The enchantment of Burgundy is not in the 33 Grand Cru but in the 3577 domains and 1247 Climats.';
                                elseif ($_SESSION['lan'] == 'FR')
                                    echo 'Le fascination de la Bourgogne ne réside pas dans les 33 grands crus, mais dans les 3577 domaines et 1247 climats.';
                                elseif ($_SESSION['lan'] == 'CN')
                                    echo '勃艮第的迷人不在於33個特級園，在於3577間domaines和1247個climats。';
                                ?></div>
                            </p>
                            <div class="row">
                                <div class="col-6 text-right">
                                    <img alt="Sign" class="mt-3" src="images/signature/sign-1.png" width="150">
                                </div>
                                <div class="col-6 text-left">
                                    <img alt="Sign" class="mt-3" src="images/signature/sign-2.png" width="150">
                                </div>
                            </div>

                        </div>
                        <div class="col-12 mt-5 mb-3">
                            <div class="recipe-categories justify-content-center">
                                <a class="recipe-category" data-animate="fadeInUp" href="category-1.php"
                                   style="background-image: url('images/categories/1.png');">
                                </a>

                                <a class="recipe-category" data-animate="fadeInUp" data-delay="100"
                                   href="#"
                                   style="background-image: url('images/categories/2.png');">
                                </a>

                                <a class="recipe-category" data-animate="fadeInUp" data-delay="200"
                                   href="#"
                                   style="background-image: url('images/categories/3.png');">
                                </a>

                                <a class="recipe-category" data-animate="fadeInUp" data-delay="300"
                                   href="#"
                                   style="background-image: url('images/categories/4.png');">
                                </a>

                                <a class="recipe-category" data-animate="fadeInUp" data-delay="400"
                                   href="#"
                                   style="background-image: url('images/categories/5.png');">
                                </a>

                                <a class="recipe-category" data-animate="fadeInUp" data-delay="500"
                                   href="#"
                                   style="background-image: url('images/categories/6.png');">
                                </a>

                                <a class="recipe-category" data-animate="fadeInUp" data-delay="600"
                                   href="#"
                                   style="background-image: url('images/categories/7.png');">
                                </a>

                                <a class="recipe-category" data-animate="fadeInUp" data-delay="600"
                                   href="#"
                                   style="background-image: url('images/categories/8.png');">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="section recipe-items p-0" style="overflow: visible;background-color: #f9f9f9">
                <div class="row align-items-stretch align-content-stretch no-gutters">
                    <div class="col-lg-4 dark">
                        <div class="position-sticky min-vh-60 min-vh-md-100 d-flex flex-column align-items-center center justify-content-center"
                             style="top:0; background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.5)), url('images/Highlight-article.png') center center / cover;">
                            <a class="button button-large button-light button-white button-circle m-0 px-5"
                               href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row no-gutters">


                            <!-- Item 1 -->
                            <div class="col-sm-4 col-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img alt="image" src="demos/recipes/images/popular/1.png">
                                        <h3 class="card-title mt-3"><a class="stretched-link"
                                                                       href="bottol1.php">Côte de l’exploration</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="col-sm-4 col-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img alt="image" src="demos/recipes/images/popular/2.png">
                                        <h3 class="card-title mt-3"><a class="stretched-link"
                                                                       href="bottol2.php">L’Yonne</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="col-sm-4 col-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <img alt="image" src="demos/recipes/images/popular/3.png">
                                        <h3 class="card-title mt-3"><a class="stretched-link"
                                                                       href="bottol3.php">Côte de Nuits</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="col-sm-4 col-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img alt="image" src="demos/recipes/images/popular/4.png">
                                        <h3 class="card-title mt-3"><a class="stretched-link"
                                                                       href="bottol4.php">Côte de Beaune</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="col-sm-4 col-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img alt="image" src="demos/recipes/images/popular/5.png">
                                        <h3 class="card-title mt-3"><a class="stretched-link"
                                                                       href="bottol5.php">Côte Chalonnaise</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="col-sm-4 col-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img alt="image" src="demos/recipes/images/popular/6.png">
                                        <h3 class="card-title mt-3"><a class="stretched-link"
                                                                       href="bottol6.php">Mâconnais</a></h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="section bg-transparent" style="padding: 100px 0">
                <div class="container">
                    <div class="owl-carousel carousel-widget" data-items="1" data-margin="0" data-nav="true"
                         data-pagi="false" id="recipes-carousel">
                        <div class="row no-gutters align-items-stretch rounded shadow">
                            <div class="col-lg-12 d-flex justify-content-center flex-column rounded-right"
                                 style="padding: 80px 50px">
                                <h3><?php
                                    if($_SESSION['lan'] == 'EN')
                                        echo 'What to do about global warming, as expressed by Domaine Comte Armand';
                                    elseif ($_SESSION['lan'] == 'FR')
                                        echo 'Que faire face au réchauffement climatique, tel qu\'exprimé par le Domaine Comte Armand.';
                                    elseif ($_SESSION['lan'] == 'CN')
                                        echo '关于全球变暖，Domaine Comte Armand 的表达是什么？';
                                    ?></h3>
                                <p><?php
                                    if($_SESSION['lan'] == 'EN')
                                        echo 'It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters.';
                                    elseif ($_SESSION['lan'] == 'FR')
                                        echo 'Il est un fait établi de longue date que le lecteur sera distrait par le contenu lisible d\'une page lorsqu\'il regarde sa mise en page. Le but d\'utiliser Lorem Ipsum est qu\'il a une distribution de lettres plus ou moins normale.';
                                    elseif ($_SESSION['lan'] == 'CN')
                                        echo '长期以来，有一个已经确立的事实是，读者在查看页面布局时会被可读内容所分散注意力。使用Lorem Ipsum的目的是它具有或多或少的正常字母分布。';
                                    ?>
                                </p>
                                <iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen frameborder="0"
                                        height="105" src="https://www.youtube.com/embed/aY_7dOuQbbc"
                                        title="YouTube video player"
                                        width="300"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section mb-0" style="padding: 100px 0">
                <div class="container">
                    <div class="clear"></div>
                    <div class="row clearfix">
                        <div class="col-md-4 mt-4">
                            <div class="card border-0 shadow-sm">
                                <h3 class="text-center mb-3 pt-3"><?php
                                    if($_SESSION['lan'] == 'EN')
                                        echo 'The View from the Vineyard';
                                    elseif ($_SESSION['lan'] == 'FR')
                                        echo 'La vue depuis le vignoble';
                                    elseif ($_SESSION['lan'] == 'CN')
                                        echo '葡萄园的景色';
                                    ?>
                                </h3>
                                <a href="https://www.youtube.com/embed/fWzimfoosMo" target="_blank">
                                    <iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen frameborder="0"
                                            height="383" src="https://www.youtube.com/embed/fWzimfoosMo"
                                            title="YouTube video player"
                                            width="410"></iframe>
                                </a>
                                <div class="card-body" style="padding: 40px">
                                    <h4 class="card-title mb-3"><?php
                                        if($_SESSION['lan'] == 'EN')
                                            echo 'How to Make Paper Piping-Bag';
                                        elseif ($_SESSION['lan'] == 'FR')
                                            echo 'Comment fabriquer une poche à douille en papier';
                                        elseif ($_SESSION['lan'] == 'CN')
                                            echo '如何制作纸质裱花袋';
                                        ?></h4>
                                    <p class="card-text"><?php
                                        if($_SESSION['lan'] == 'EN')
                                            echo 'Authoritatively productize 24/7 platforms authoritatively
                                        rather than enterprise customer service.';
                                        elseif ($_SESSION['lan'] == 'FR')
                                            echo 'Produire de manière autoritaire des plateformes 24/7 plutôt qu\'un service client d\'entreprise.';
                                        elseif ($_SESSION['lan'] == 'CN')
                                            echo '权威地使产品化24/7平台，而不是企业客户服务。';
                                        ?></p>
                                    <a class="card-link stretched-link" href="#"><?php
                                        if($_SESSION['lan'] == 'EN')
                                            echo 'Learn More';
                                        elseif ($_SESSION['lan'] == 'FR')
                                            echo 'En savoir plus';
                                        elseif ($_SESSION['lan'] == 'CN')
                                            echo '了解更多';
                                        ?><i
                                            class="icon-angle-right position-relative ml-2" style="top: 2px"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-4">
                            <div class="card border-0 shadow-sm">
                                <h3 class="text-center pt-3 mb-3"><?php
                                    if($_SESSION['lan'] == 'EN')
                                        echo 'Discover Bourgogne';
                                    elseif ($_SESSION['lan'] == 'FR')
                                        echo 'Découvrir la Bourgogne';
                                    elseif ($_SESSION['lan'] == 'CN')
                                        echo '探索勃艮第';
                                    ?>

                                </h3>
                                <img alt="Image" class="card-img-top" src="images/discover.png">
                                <div class="card-body" style="padding: 40px">
                                    <h4 class="card-title mb-3"><?php
                                        if($_SESSION['lan'] == 'EN')
                                            echo 'TroisGros';
                                        elseif ($_SESSION['lan'] == 'FR')
                                            echo 'TroisGros';
                                        elseif ($_SESSION['lan'] == 'CN')
                                            echo '特瓦格罗';
                                        ?></h4>
                                    <p class="card-text"><?php
                                        if($_SESSION['lan'] == 'EN')
                                            echo 'As soon as you enter from afar, the \'Leafless Wood appears
                                        mysterious\': could it be an enchanted forest? Appearances,';
                                        elseif ($_SESSION['lan'] == 'FR')
                                            echo 'Se laissant apercevoir dès l\'entrée dans le lointain, le \'Bois sans feuilles paraît mystérieux\': ne s\'agirait-il pas d\'un bois enchanté?Apparitions, ';
                                        elseif ($_SESSION['lan'] == 'CN')
                                            echo '一进门就让人眼前一亮，“无叶林似有玄机”：莫非是被施了魔法的森林？出现，消失，';
                                        ?></p>
                                    <a class="card-link stretched-link" href="#"><?php
                                        if($_SESSION['lan'] == 'EN')
                                            echo 'Learn More';
                                        elseif ($_SESSION['lan'] == 'FR')
                                            echo 'En savoir plus';
                                        elseif ($_SESSION['lan'] == 'CN')
                                            echo '了解更多';
                                        ?><i
                                            class="icon-angle-right position-relative ml-2" style="top: 2px"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-4">
                            <div class="card border-0 shadow-sm">
                                <h3 class="text-center pt-3 mb-3"><?php
                                    if($_SESSION['lan'] == 'EN')
                                        echo 'Wine Tourism';
                                    elseif ($_SESSION['lan'] == 'FR')
                                        echo 'Tourisme viticole';
                                    elseif ($_SESSION['lan'] == 'CN')
                                        echo '葡萄酒旅游';
                                    ?></h3>
                                <img alt="Image" class="card-img-top" src="images/Ttourisme.png">
                                <div class="card-body" style="padding: 40px">
                                    <h4 class="card-title mb-3"><?php
                                        if($_SESSION['lan'] == 'EN')
                                            echo 'Wine Tourism';
                                        elseif ($_SESSION['lan'] == 'FR')
                                            echo 'Tourisme viticole';
                                        elseif ($_SESSION['lan'] == 'CN')
                                            echo '葡萄酒旅游';
                                        ?></h4>
                                    <p class="card-text"><?php
                                        if($_SESSION['lan'] == 'EN')
                                            echo 'Burgundy is the land of wine, where the top-notch wines make
                                        all the wine connoisseurs swoon. Furthermore';

                                        elseif ($_SESSION['lan'] == 'FR')
                                            echo 'La Bourgogne est la terre du vin, un lieu qui attire tous les amateurs de vin grâce à ses réputations prestigieuses. De plus';

                                        elseif ($_SESSION['lan'] == 'CN')
                                            echo '勃艮第是葡萄酒之鄉，這裡有著讓所有葡萄酒愛好者都傾慕的頂級葡萄酒，同時';
                                        ?></p>
                                    <a class="card-link stretched-link" href="#"><?php
                                        if($_SESSION['lan'] == 'EN')
                                            echo 'Learn More';
                                        elseif ($_SESSION['lan'] == 'FR')
                                            echo 'En savoir plus';
                                        elseif ($_SESSION['lan'] == 'CN')
                                            echo '了解更多';
                                        ?><i
                                            class="icon-angle-right position-relative ml-2" style="top: 2px"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section m-0"
                 style="background: url('images/Picture4.png') no-repeat center center / cover; min-height: 300px; padding: 120px 0">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 mt-4 mt-sm-0 subscribe-widget" data-loader="button">
                            <img alt="Enmail Icon" class="mb-4" src="demos/recipes/images/icons/email.svg" width="60">
                            <div class="heading-block border-bottom-0 mb-5 text-white">
                                <h2 class="nott ls0 mb-1" style="color: #ffffff;">Stay Updated!</h2>
                                <p class="lead" style="color: #ffffff;">Access to the most up to date Burgundy news</p>
                            </div>
                            <div class="widget-subscribe-form-result"></div>
                            <form action="#"
                                  class="mb-0" id="widget-subscribe-form"
                                  method="post" role="form">
                                <div class="input-group input-group-lg">
                                    <input class="form-control required" name="widget-subscribe-form-email"
                                           placeholder="Enter Your Email Address.."
                                           type="email">
                                    <div class="input-group-append">
                                        <button class="btn text-white bg-color px-4" id="inputGroup-sizing-lg"
                                                type="submit">Subscribe
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer class="bg-white border-0" id="footer">

        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap">

                <div class="row">
                    <div class="col-lg-4 text-left">
                        <div class="widget clearfix">
                            <h4 class="ls0 nott"><?php
                                if($_SESSION['lan'] == 'EN')
                                    echo 'Support';
                                elseif ($_SESSION['lan'] == 'FR')
                                    echo 'Soutien';
                                elseif ($_SESSION['lan'] == 'CN')
                                    echo '支持';
                                ?></h4>
                            <ul class="list-unstyled ml-0">
                                <li class="mb-2"><a class="text-black-50" href="#"><?php
                                        if($_SESSION['lan'] == 'EN')
                                            echo 'Home';
                                        elseif ($_SESSION['lan'] == 'FR')
                                            echo 'Maison';
                                        elseif ($_SESSION['lan'] == 'CN')
                                            echo '主页';
                                        ?></a></li>
                                <li class="mb-2"><a class="text-black-50" href="#"><?php
                                        if($_SESSION['lan'] == 'EN')
                                            echo 'About';
                                        elseif ($_SESSION['lan'] == 'FR')
                                            echo 'À propos de" or "Sur';
                                        elseif ($_SESSION['lan'] == 'CN')
                                            echo '关于';
                                        ?></a></li>
                                <li class="mb-2"><a class="text-black-50" href="#"><?php
                                        if($_SESSION['lan'] == 'EN')
                                            echo 'FAQs';
                                        elseif ($_SESSION['lan'] == 'FR')
                                            echo 'Questions fréquemment posées';
                                        elseif ($_SESSION['lan'] == 'CN')
                                            echo '常见问题';
                                        ?></a></li>
                                <li class="mb-2"><a class="text-black-50" href="#"><?php
                                        if($_SESSION['lan'] == 'EN')
                                            echo 'Support';
                                        elseif ($_SESSION['lan'] == 'FR')
                                            echo 'Soutien';
                                        elseif ($_SESSION['lan'] == 'CN')
                                            echo '支持';
                                        ?></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 text-left">
                        <div class="widget clearfix">
                            <h4 class="ls0 nott"><?php
                                if($_SESSION['lan'] == 'EN')
                                    echo 'Contact';
                                elseif ($_SESSION['lan'] == 'FR')
                                    echo 'Contacter';
                                elseif ($_SESSION['lan'] == 'CN')
                                    echo '联系';
                                ?></h4>
                            <ul class="list-unstyled ml-0">
                                <li class="mb-2"><span class="icon-gmail" style="margin-right: 10px;"></span><a
                                        href="mailto:noreply@canvas.com">info@pindonnay.com</a></li>
                                <li class="mb-2"><span class="icon-phone" style="margin-right: 10px;"></span><a
                                        href="tel:+85256408956">(+852) 56408956</a></li>
                            </ul>
                        </div>
                        <div class="clearfix" id="instagram">
                            <a href="#"><img alt="App Link" src="demos/recipes/images/whatsapp.jpg"
                                             style="height: 92px;width: 92px;"></a>
                            <a href="#"><img alt="App Link" class="mt-2"
                                             src="demos/recipes/images/wechat.jpg"
                                             style="height: 92px;width: 92px;"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-left">
                        <div class="widget clearfix text-center">
                            <h4 class="ls0 nott"><?php
                                if($_SESSION['lan'] == 'EN')
                                    echo 'Social Media';
                                elseif ($_SESSION['lan'] == 'FR')
                                    echo 'Médias sociaux';
                                elseif ($_SESSION['lan'] == 'CN')
                                    echo '社交媒体';
                                ?></h4>
                            <a href="https://www.facebook.com/profile.php?id=100093621810139">
                                <span class="icon-facebook" style="margin-right: 15px;"></span>
                            </a>
                            <a href="https://www.instagram.com/pindonnaywine/">
                                <span class="icon-instagram" style="margin-right: 15px;"></span>
                            </a>
                            <a href="https://www.youtube.com/channel/UC9BZqgdg3hLHgapjSvYh7Xw">
                                <span class="icon-youtube" style="margin-right: 15px;"></span>
                            </a>
                        </div>
                    </div>
                </div>


            </div>

        </div>

        <!-- Copyrights
        ============================================= -->
        <div class="" id="copyrights">

            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-sm-4 d-flex justify-content-sm-start mb-3 mb-sm-0" style="color: white">
                        Copyrights &copy; 2023 All Rights Reserved by Pindonnay.
                    </div>
                    <div class="col-sm-4 d-flex justify-content-sm-center mb-3 mb-sm-0" style="color: white">
                        <span class="icon-map-marker-alt" style="margin-right: 10px;"></span> Shanghai,
                        Hong Kong, Dijon.
                    </div>
                    <div class="col-sm-4 d-flex justify-content-sm-end">
                        <div class="copyright-links"><a href="#">Terms of Use /</a> <a href="#">Privacy Policy</a></div>
                    </div>
                </div>
            </div>

        </div><!-- #copyrights end -->

    </footer>
    <!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div class="icon-angle-up" id="gotoTop"></div>

<!-- JavaScripts
============================================= -->
<script src="js/jquery.js"></script>
<script src="js/plugins.min.js"></script>

<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- ADD-ONS JS FILES -->
<script src="include/rs-plugin/js/pixi.min.js"></script>
<script src="include/rs-plugin/js/addons/revolution.addon.liquideffect.min.js"></script>

<!-- SLIDER REVOLUTION EXTENSIONS  -->
<script src="include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="js/functions.js"></script>

<script>
    var revapi2,
        tpj;
    var $ = jQuery.noConflict();
    (function () {
        if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad); else onLoad();

        function onLoad() {
            if (tpj === undefined) {
                tpj = jQuery;
                if ("off" == "on") tpj.noConflict();
            }

            if (tpj("#rev_slider_2_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_2_1");
            } else {
                revapi2 = tpj("#rev_slider_2_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "include/rs-plugin/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 80,
                                v_offset: 30
                            },
                            right: {
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 20,
                                v_offset: 30
                            }
                        }
                    },
                    responsiveLevels: [1200, 992, 768, 576],
                    visibilityLevels: [1200, 992, 768, 576],
                    gridwidth: [1200, 992, 768, 576],
                    gridheight: [868, 768, 960, 720],
                    lazyType: "all",
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "on",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "0",
                    fullScreenOffset: "",
                    disableProgressBar: "off",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
            ; /* END OF revapi call */

            RsLiquideffectAddOn(tpj, revapi2);

            if (typeof ExplodingLayersAddOn !== "undefined") ExplodingLayersAddOn(tpj, revapi2);
        }; /* END OF ON LOAD FUNCTION */
    }()); /* END OF WRAPPING FUNCTION */
</script>

<script>

    window.addEventListener("load", function () {
        var preloader = document.getElementById("preloader");
        preloader.style.display = "none";
    });


</script>

</body>

</html>

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
    <link rel="stylesheet" href="demos/music/music.css" type="text/css"/>
    <link rel="stylesheet" href="demos/music/css/fonts.css" type="text/css"/>
    <link rel="stylesheet" href="demos/music/css/mediaelement/mediaelementplayer.css">
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

    <!-- Content
    ============================================= -->
    <section style="background-color: #f9f9f9;">
        <div class="container">
            <div class="content-wrap" style="overflow: visible;">
                <div class="row">
                    <div class="col-lg-8 col-12" style="text-align: justify; height: 600px; overflow-y: scroll;">
                        <p style="font-size: 17px;">2022 may be a good year, or at the very least a year filled with
                            anticipation for the Burgundy winegrowers. After enduring two consecutive years of poor
                            harvests in 2020 and 2021, particularly the sharp production decline caused by the severe
                            frost of 2021, Burgundy's winegrowers are in desperate need of a good vintage to replenish
                            their losses of the past two years.</p>
                        <p style="font-size: 17px;">Marsannay village, the closest wine village to Dijon, is also the
                            northernmost village in Côtes de Nuits. Should wine enthusiasts be asked to name the finest
                            winery in Marsannay, undoubtedly Domaine Bruno Claire will be among the most mentioned.</p>
                        <p style="font-size: 17px;">In the scorching heat of May in Burgundy, a few days before visiting
                            the winery, I coincidentally encountered Edouard (Bruno Claire's son) while shooting a video
                            in the premier cru of Clos St Jacques, where he is responsible for vineyard management.
                            Although our conversation in the vineyard was brief, Edouard was gracious and patiently
                            explained the details of their vineyard management.</p>
                        <p style="font-size: 17px;">On the day of the visit, Arthur (another son of Bruno Claire
                            responsible for the cellar management) led us to the underground cellar for a barrel-side
                            Dégustation. During this visit, we tasted many wines that we had not tasted before, such as
                            La Dominode from Savigny les Beaune, Premier Cru, which left a deep impression on me. As
                            always, with a high degree of recognition, regardless of which wine from Domaine Bruno
                            Claire, they all exhibit the characteristics of delicacy, elegance and lightness, which is
                            why they are highly favored by Asian wine enthusiasts.</p>
                        <p style="font-size: 17px;">When we tasted Les Longeroies, Arthur introduced it by saying,
                            "Although the upgrading process is not yet complete, in our hearts, this vineyard in
                            Marsannay has already reached the level of a premier cru vineyard. In fact, before this
                            visit, I had already tasted other vintages from Bruno Claire's vineyard, so I completely
                            agree with Arthur's statement."</p>
                        <p style="font-size: 17px;">Although Marsannay is not classified as a first-class vineyard
                            according to regulations, the vineyards owned by Bruno Claire, such as Les Grasses Têtes and
                            Les Longeroies, are definitely two of the vineyards that should be upgraded to premier cru
                            .</p>
                        <p style="font-size: 17px;">Apart from possessing exceptional vineyards, Arthur has recently
                            leased a number of vineyards such as the premier field Les Charmes in Chambolle-Musigny.
                            Arthur has left his personal mark on this premier field and it has exhibited a remarkable
                            performance under his hand. It is an impressive and outstanding Burgundy wine that leaves a
                            lasting impression.</p>
                        <p style="font-size: 17px;">Many Asian consumers consider Clos de bèze to be the most
                            representative wine of Domaine Bruno Claire. However, after tasting the Bonne Mares Grand
                            Cru, I was completely conquered by the wine's depth, elegance, calmness, and perfectly
                            balanced exuberance. Its complex aroma of red fruits, herbs, licorice, slight smokiness,
                            unbelievable acidity, delicate yet textured tannins, grand structure paired with a light
                            body and a lingering finish. Even though it is still maturing in barrels, its astounding
                            potential can already be felt. It is unfortunate that we drank it a bit too early. If tasted
                            again after 20 years, it will surely be an unbelievable top-tier wine.</p>
                        <p style="font-size: 17px;">In the cellar, I had the complete pleasure of tasting Bruno Clair's
                            series of wines along with Arthur's detailed explanations, allowing me to gain a deeper
                            understanding of Bruno Clair's wines and inspiring all supporters of this vineyard. Under
                            the management of Edouard and Arthur, we eagerly anticipate Domaine Bruno Clair's ability to
                            bring us more heart-stirring wines.</p>
                    </div>
                    <div class="col-lg-4 col-12 mx-auto">
                        <div class="image-container d-flex justify-content-center">
                            <img src="images/bottol/1.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #content end -->

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

<script src="demos/music/js/mediaelement/mediaelement-and-player.js"></script>

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

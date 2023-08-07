<?php
session_start();
if (!isset($_SESSION['lan'])) {
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

    <!-- Content
    ============================================= -->
    <section id="content" style="background-color: #f9f9f9;">
        <div class="content-wrap pb-0" style="overflow: visible;">

            <div class="section mt-2 bg-transparent">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-12">
                            <img src="images/about_us/Logo.png" class="img-fluid" alt="logo">
                        </div>
                    </div>
                    <div class="row" style="text-align: justify">
                        <div class="col-12">
                            <?php
                            if ($_SESSION['lan'] == 'EN')
                                echo '<p> Vincent Palloti was among the noble in Spain, his youthful age marked with appointment as a deacon by Valerius who 
                                        served as Bishop of Saragosse and was a notable figure on the Council of Elvira in those times. Subsequently, Vincent was promoted to an archdeacon and given the 
                                        responsibility of overseeing the diocese of Saragosse. It was in the fateful year of 304 when the Roman Emperor Diocletian unleashed a terrible persecution against 
                                        the Christians that Vincent, along with his bishop, became an early martyr.He finally died on January 22nd of that year, supposedly crushed to death under a grape press.
                                        </p>
                                        <p> Saint Vincent is famous as the god of wine and is also regarded as the protector of every winegrower, watching over their vineyards from generation to generation. The 
                                        most widespread theory comes from the play on words Vincent, Vincent, which means both wine and blood, the blood of the vine or referring to the Church tradition that the 
                                        wine of divine service recalled the blood of Christ.Furthermore, there is a story of Saint Vincent in the vineyards. According to legend, one day Saint Vincent stopped to 
                                        talk to a vineyard worker as he passed by a vineyard, during which his donkey ate the young vine shoots on the side.</P>
                                        <P>However, during the following harvest, the vineyard worker 
                                        found that the vine eaten by Saint Vincent\'s donkey yielded more than the other vines that had not been eaten, so the vineyard worker dedicated Saint Vincent\'s donkey as the 
                                        inventor of vine pruning.The pruning of Burgundy vineyards is strictly carried out in accordance with the decree of February 8, 1946 and the orders of March 15, 1944 and September 17, 
                                        1956, which establish the regulatory periods provided for this task. Therefore, no vine pruning will be carried out before the feast of Saint Vincent (January 22nd). However, 
                                        these legal provisions were not established with reference to the legend of Saint Vincent, but based on the production cycles of the vine.During the 20th century, the secularization 
                                        of French society nearly caused the disappearance of the feast of Saint Vincent. Only a few villages in Burgundy maintained this tradition, simply celebrating the feast during the 
                                        end-of-year pig roast. 
                                        </p>
                                        <p> On January 22, 1938, the Brotherhood of the Knights of the Tastevin restored the procession of Saint Vincent in Chambolle-Musigny. Today, more than 
                                        85 Winegrowers\' Societies participate in the Saint Vincent Tournante every last weekend of January.This festival has become a major annual event in the wine circle of Burgundy 
                                        attracting tens of thousands of local and international visitors each year to participate in this grand celebration. 
                                        </p>
                                        <p> Outside of Burgundy in other wine regions of France as well as in the Spanish wine regions of Rioja Navarre and Penedès parades and celebrations of Saint Vincent are also organized. 
                                        However, Saint Vincent celebrations in other regions cannot in any way compete with the Saint Vincent Tournante of Burgundy in terms of renown and size.
                                        </p>';
                            elseif ($_SESSION['lan'] == 'FR')
                                echo '<p> Vincent PALLOTI est né dans une famille noble en Espagne, et à un très jeune âge, il a été nommé diacre par Valerius, évêque de Saragosse, qui était alors membre du concile d’Elvira (300-330), puis est devenu archidiacre, responsable de l’administration des biens du diocèse de Saragosse.</p>
                                     <p> En l \'an 304, l\'empereur romain Dioclétien lança une grande persécution contre les chrétiens. Vincent PALLOTI fut l/un des premiers chrétiens martyrisés avec son évêque. Il mourut finalement le 22 janvier de cette année-là, supposément écrasé à mort sous un pressoir à raisins. </p>
                                        <p> Saint Vincent est célèbre en tant que dieu du vin et est également considéré comme le protecteur de chaque vigneron, veillant sur ses vignobles de génération en génération. La théorie la plus répandue vienton jeu de mots Vincent, Vincent, signifiant à la fois « vin » et « sang », le sang de la vigne ou se référant à la tradition de l’Église comme quoi le vin de l’office divin rappelait le sang du Christ.</p>
                                           <p> En outre, il y a une histoire de Saint Vincent dans les vignes. Selon la légende, un jour Saint Vincent s’arrêta pour parler au vigneron lorsqu’il passa devant un vignoble, au cours duquel son âne mangea les jeunes sarments des vignes sur le côté. Cependant, lors des vendanges suivantes, le vigneron a constaté que la vigne mangée par l’âne de Saint-Vincent donnait plus que les autres vignes qui n’avaient pas été mangées, de sorte que le vigneron a consacré l’âne de Saint-Vincent comme l’inventeur de la taille de la vigne.</p>
                                              <p> La taille des vignes de Bourgogne est effectuée strictement conformément au décret du 8 février 1946 et aux arrêtés des 15 mars 1944 et 17 septembre 1956, qui établissent les périodes réglementaires prévues pour cette tâche. Ainsi, aucune taille de vigne ne sera effectuée avant la fête de Saint Vincent (le 22 janvier). Cependant, ces dispositions légales n \'ont pas été établies en référence à la légende de Saint Vincent, mais sur la base des cycles de production de la vigne.</p>
                                                 <p> Au cours du 20ème siècle, la laïcisation de la société en France a failli faire disparaître la fête de Saint Vincent. Seules quelques villages de Bourgogne ont maintenu cette tradition, en célébrant simplement la fête lors du repas de cochon en fin d\'année.</p>
                                                    <p> Le 22 janvier 1938, la confrérie des chevaliers du Tastevin a rétabli la procession de Saint Vincent à Chambolle-Musigny. Aujourd\'hui, plus de 85 Sociétés des vignerons participent à la Saint Vincent Tournante chaque dernier week-end de janvier. Cette fête est devenue l\'événement annuel majeur dans le cercle viticole de Bourgogne, attirant des dizaines de milliers de visiteurs locaux et internationaux chaque année pour participer à cette célébration grandiose.</p>
                                                    <p>En dehors de la Bourgogne, dans d\'autres régions viticoles de France, ainsi que dans les régions viticoles espagnoles de Rioja, Navarre et Penedès, des défilés et célébrations de saint Vincent sont également organisés. Cependant, les célébrations de saint Vincent dans les autres régions ne peuvent en aucun cas rivaliser avec la Saint Vincent Tournante de Bourgogne en termes de renommée et de taille.</p>
                                        ';
                            elseif ($_SESSION['lan'] == 'CN')
                                echo '<p>Vincent PALLOTI 出生於西班牙的貴族主页庭，在很年輕的時候，他就被萨拉戈萨主教瓦勒里乌斯（Valerius）任命为执事，當時他是埃尔维拉会议（300-330）的成员之一，然后更成為大执事，负责管理萨拉戈萨教区的财产。</p>
                                        <p>304年，羅馬帝國皇帝戴克里先對基督徒展開了大規模的迫害，Vincent PALLOTI是第一批隨著主教而受害的基督徒之一，最終在當年的1月22日逝世，相傳是被壓在葡萄壓榨機上折磨致死。</p>
                                       
                                        <p> Saint Vincent 被譽為葡萄酒的酒神，也是每一位葡萄酒農的守護神，世代守護著他們的葡萄園。最廣為流傳的一個說法是來自他一語雙關的名字 vincent，意指 vin sang，教會認為葡萄酒是耶穌基督的血。</p>
                                        
                                        <p> 此外，在葡萄園方面也流傳著一個和saint vincent有關的故事。相傳，有一天saint vincent路過一處葡萄園，便停下來和酒農交談了幾句，在此期間，他的驢子把傍邊的葡萄樹嫩芽吃掉。然而在下一年採收的時候，葡萄酒農發現被saint vincent驢子吃過的葡萄樹，它的產量比其他沒有吃過的葡萄樹更大，因此，葡萄酒農把saint vincent的驢子奉為葡萄樹修剪（taille）發明者。</p>
                                       <p>勃根地的葡萄園剪枝（taille）嚴格遵照1946年2月8號的法令（décret）和1944年3月15日和1956年9月17日的決議（arrêtés） 所規定的時間進行，也就是在saint vincent節（1月22日）前不會進行任何的葡萄園剪枝。然而這些法令卻不是基於saint vincent的傳說而頒布的，而是根據葡萄樹的生產週期而作出的規範。</p> 
                                       <p> 20世紀，法國大規模的世俗主義推行（la laïcisation de la société）幾乎讓saint Vincent 這個節日消失，當時僅有幾條勃根地的村子保留著這個節日，而且還只是在年尾的殺豬宴（repas de cochon）上舉行簡單的慶祝。
                                           1938年的1月22日， 勃根地騎士會（la confrérie des chavaliers du Tastevin）在Chambolle-Musigny村重新復辦了Saint vincent 巡遊。時至今日，勃根地已經有超過85個葡萄酒組織（la Société des vignerons ）參與每年1月最後一個週末舉行的saint Vincent Tournante，這個節日已經成為了勃根地葡萄酒圈中的年度盛事，每一年吸引著數以萬計的外地以及海外遊客到勃根地參加這個盛大的節慶活動。
                                             除勃根地之外，在法國其他的葡萄酒產區，以及西班牙的Rioja, Navarra ，Penedès等的葡萄酒產區也會舉行saint vinvent遊行和慶祝活動。然而其他產區的saint vincent慶祝活動無論從知名度上還是規模上都無法和勃根地的 saint Vincent tournante相提並論。
                                     </p>';
                            ?>

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

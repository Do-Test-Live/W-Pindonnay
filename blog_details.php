<?php
session_start();
if (!isset($_SESSION['lan'])){
    $_SESSION['lan'] = 'CN';
}
include('include/dbController.php');
$db_handle = new DBController();
$blog_id = $_GET['id'];
$blog_details = $db_handle->runQuery("select * from blog where id = '$blog_id'");
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&amp;display=swap"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" href="css/dark.css" type="text/css"/>
    <link rel="stylesheet" href="css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css"/>
    <link rel="stylesheet" href="css/custom.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>Blog Details - Pindonnay Wine Ltd Pindonnay Wine Ltd</title>
</head>
<body class="stretched">

<div id="wrapper" class="clearfix">

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
                                            echo '家';
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

    <section id="page-title">
        <div class="container clearfix">
            <h1></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog Single</li>
            </ol>
        </div>
    </section>

    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="single-post mb-0">

                    <div class="entry clearfix">

                        <div class="entry-title">
                            <h2><?php echo $blog_details[0]['title']; ?></h2>
                        </div>

                        <div class="entry-image bottommargin">
                            <a href="#"><img src="<?php echo $blog_details[0]['image']; ?>" alt="Blog Single"></a>
                        </div>

                        <div class="entry-content mt-0">
                            <?php echo $blog_details[0]['description']; ?>

                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="line"></div>

                    <h4>Related Posts:</h4>
                    <div class="related-posts row posts-md col-mb-30">
                    <?php
                        $fetch_blog = $db_handle->runQuery("SELECT * FROM `blog` WHERE STATUS = '1' ORDER BY id DESC limit 5");
                        $fetch_blog_no = $db_handle->numRows("SELECT * FROM `blog` WHERE STATUS = '1' ORDER BY id DESC limit 5");
                        for($i = 0; $i < $fetch_blog_no; $i++){
                            ?>
                            <div class="entry col-12 col-md-6">
                                <div class="grid-inner row align-items-center gutter-20">
                                    <div class="col-4 col-xl-5">
                                        <div class="entry-image">
                                            <a href="blog_details.php?id=<?php echo $fetch_blog[$i]['id'];?>"><img src="<?php echo $fetch_blog[$i]['image'];?>" alt="Blog Single"></a>
                                        </div>
                                    </div>
                                    <div class="col-8 col-xl-7">
                                        <div class="entry-title title-xs nott">
                                            <h3><a href="blog_details.php?id=<?php echo $fetch_blog[$i]['id'];?>"><?php echo $fetch_blog[$i]['title'];?></a></h3>
                                        </div>
                                        <div class="entry-content d-none d-xl-block">
                                            <?php echo substr($fetch_blog[$i]['description'], 0, 200);?> ...
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                            echo '家';
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
</div>

<div id="gotoTop" class="icon-angle-up"></div>

<script src="js/jquery.js"></script>
<script src="js/plugins.min.js"></script>

<script src="js/functions.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"76343320ae124dc2","token":"0627f0b8b73941069bc19139e63db853","version":"2022.10.3","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from blog-single-full.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2022 11:26:16 GMT -->
</html>

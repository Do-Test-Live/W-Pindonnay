<?php
session_start();
if (!isset($_SESSION['lan'])){
    $_SESSION['lan'] = 'CN';
}
include('include/dbController.php');
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&amp;display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/custom.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="demos/modern-blog/modern-blog.css" type="text/css"/>
    <link rel="stylesheet" href="demos/modern-blog/css/fonts.css" type="text/css"/>
    <!-- Document Title
    ============================================= -->
    <title>Blog-Pindonnay Wine Ltd Pindonnay Wine Ltd</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

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

    <!-- Content
    ============================================= -->
    <section id="slider" class="slider-element min-vh-60 min-vh-md-100">
        <div class="fslider h-100 position-absolute" data-speed="1800" data-pause="5000" data-animation="fade"
             data-arrows="true" data-pagi="false">
            <div class="flexslider">
                <div class="slider-wrap">

                    <div class="slide text-center"
                         style="background: url('images/blog/img11.jpg') center center; background-size: cover;">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content align-items-end">
                                <div class="slide-caption px-4 pb-4 dark">
                                    <h3 class="mb-2 h1"><a href="#" class="text-white"></a>
                                    </h3>
                                    <p class="h5"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slide text-center"
                         style="background: url('images/blog/img12.jpg') center center; background-size: cover;">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content align-items-end">
                                <div class="slide-caption px-4 pb-4 dark">
                                    <h3 class="mb-2 h1"><a href="#" class="text-white"></a>
                                    </h3>
                                    <p class="h5"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content" class="bg-light">
        <div class="content-wrap pt-lg-0 pt-xl-0 pb-0">
            <div class="container clearfix">
                <div class="heading-block border-bottom-0 center pt-4 mb-3">
                </div>

                <div class="row grid-container infinity-wrapper clearfix">
                    <?php
                    $fetch_blog = $db_handle->runQuery("SELECT * FROM `blog` WHERE STATUS = '1' ORDER BY id DESC");
                    $fetch_blog_no = $db_handle->numRows("SELECT * FROM `blog` WHERE STATUS = '1' ORDER BY id DESC");
                    if($fetch_blog_no > 0){
                        for ($i = 0; $i < $fetch_blog_no; $i++){
                            ?>
                            <div class="col-md-6 p-3">
                                <div class="entry mb-1 clearfix">
                                    <div class="entry-image mb-3">
                                        <a href="<?php echo $fetch_blog[$i]['image'];?>" data-lightbox="image"
                                           style="background: url('<?php echo $fetch_blog[$i]['image'];?>') no-repeat center center; background-size: cover; height: 278px;"></a>
                                    </div>
                                    <div class="entry-title">
                                        <h3><a href="blog_details.php?id=<?php echo $fetch_blog[$i]['id'];?>"><?php echo $fetch_blog[$i]['title'];?></a></h3>
                                    </div>
                                    <div class="entry-content">
                                        <p> <?php echo substr($fetch_blog[$i]['description'], 0, 200);?> ...</p>
                                    </div>
                                    <div class="entry-meta no-separator nohover">
                                        <ul class="justify-content-between mx-0">
                                            <li><?php echo $fetch_blog[$i]['meta_keywords'];?></li>
                                        </ul>
                                    </div>
                                    <div class="entry-meta no-separator hover">
                                        <ul class="mx-0">
                                            <li><a href="blog_details.php?id=<?php echo $fetch_blog[$i]['id'];?>">View More &rarr;</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>

                <div class="text-center">
                    <div class="page-load-status hovering-load-status">
                        <div class="css3-spinner infinite-scroll-request">
                            <div class="css3-spinner-ball-pulse-sync">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="alert alert-warning center infinite-scroll-last mx-auto" style="max-width: 20rem;">
                            End of content
                        </div>
                        <div class="alert alert-warning center infinite-scroll-error mx-auto" style="max-width: 20rem;">
                            No more pages to load
                        </div>
                    </div>
                </div>
                <div class="center d-none">
                    <a href="demo-modern-blog-2.html" class="load-next-posts"></a>
                </div>
            </div>
            <div class="section bg-white pt-4 pb-0 topmargin-sm mb-0">
                <div class="container">
                    <div class="heading-block d-flex justify-content-center center border-bottom-0 mb-4">
                        <img src="demos/modern-blog/images/instagram.png" class="align-self-center" alt="Image"
                             height="28">
                        <h3 class="ms-2 text-capitalize ls0 align-self-center">Instagram Feed</h3>
                    </div>
                </div>
                <div class="instagram-button position-relative">
                    <div id="instagram-photos" class="instagram-photos masonry-thumbs grid-container grid-6"
                         data-user="blog.canvastemplate"></div>
                    <a href="#" class="button bg-white button-light button-rounded text-dark m-0 clearfix">Follow us on
                        Instagram</a>
                </div>
            </div>
        </div>
        <footer>

            <div id="copyrights" class="">

                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-4 d-flex justify-content-sm-start mb-3 mb-sm-0" style="color: white">
                            Copyrights &copy; 2023 All Rights Reserved by Pindonnay.
                        </div>
                        <div class="col-sm-4 d-flex justify-content-sm-center mb-3 mb-sm-0">
                            <a href="#" target="_blank"
                               class="social-icon si-small si-colored si-facebook" title="Facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="#" target="_blank"
                               class="social-icon si-small si-colored si-youtube" title="youtube">
                                <i class="icon-youtube"></i>
                                <i class="icon-youtube"></i>
                            </a>
                            <a href="#" target="_blank"
                               class="social-icon si-small si-colored si-instagram" title="instagram">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                            </a>
                        </div>
                        <div class="col-sm-4 d-flex justify-content-sm-end">
                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
    </section>
    <!-- #content end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- JavaScripts
============================================= -->
<script src="js/jquery.js"></script>
<script src="js/plugins.min.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="js/functions.js"></script>

</body>

</html>
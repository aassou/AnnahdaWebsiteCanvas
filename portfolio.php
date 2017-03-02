<?php
    //classes loading begin
    function classLoad ($myClass) {
        if(file_exists('admin/model/'.$myClass.'.php')){
            include('admin/model/'.$myClass.'.php');
        }
        elseif(file_exists('admin/controller/'.$myClass.'.php')){
            include('admin/controller/'.$myClass.'.php');
        }
    }
    spl_autoload_register("classLoad");
    //classes loading end
    //session_start();
    include('include/config.php');
    //class managers
    $projetManager = new ProjetManager($pdo);
    $imageManager = new ImageManager($pdo);
    //class and vars
    $projets = $projetManager->getProjets();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>

    <!-- Document Title
    ============================================= -->
    <title>Groupe Annahda | Nos projets</title>
</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <?php
        include('include/header.php');
        ?>
        <!-- #header end -->

        <!-- Page Sub Menu
        ============================================= -->
        <div id="page-menu" class="no-sticky">

            <div id="page-menu-wrap">

                <div class="container clearfix">

                    <div class="menu-title">Nos <span>Projets</span></div>

                    <!--nav>
                        <ul>
                            <li class="current"><a href="portfolio.html">With Margin</a></li>
                            <li><a href="portfolio-nomargin.html">No Margin</a></li>
                            <li><a href="portfolio-notitle.html">No Title</a></li>
                            <li><a href="portfolio-title-overlay.html">Title Overlay</a></li>
                            <li><a href="portfolio-fullwidth.html">Full Width</a></li>
                            <li><a href="portfolio-fullwidth-notitle.html">Full Width - No Title</a></li>
                        </ul>
                    </nav-->

                <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

                </div>

            </div>

        </div><!-- #page-menu end -->

        <!-- Page Title
        ============================================= -->
        <!--section id="page-title">

            <div class="container clearfix">
                <h1>Portfolio</h1>
                <span>Showcase of Our Awesome Works in 4 Columns</span>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Portfolio</li>
                </ol>
            </div>

        </section--><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Portfolio Filter
                    ============================================= -->
                    <!--ul id="portfolio-filter" class="clearfix">

                        <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
                        <li><a href="#" data-filter=".pf-icons">Icons</a></li>
                        <li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>
                        <li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>
                        <li><a href="#" data-filter=".pf-media">Media</a></li>
                        <li><a href="#" data-filter=".pf-graphics">Graphics</a></li>

                    </ul--><!-- #portfolio-filter end -->

                    <!--div id="portfolio-shuffle">
                        <i class="icon-random"></i>
                    </div-->

                    <div class="clear"></div>

                    <!-- Portfolio Items
                    ============================================= -->
                    <div id="portfolio" class="clearfix">
                        <?php
                        foreach ( $projets as $projet ) {
                            $image = "";
                            if ( $imageManager->getImageNumberByIdProjet($projet->id()) >= 1 ) {
                                $image = $imageManager->getFirstImageByIdProjet($projet->id());
                                $image = '<img src="'.$image->url().'" />';    
                            }
                            else {
                                $image = '<img src="images/logo_white.jpg" />'; 
                            }
                        ?>
                        <article class="portfolio-item pf-media pf-icons">
                            <div class="portfolio-image">
                                <a href="/project/<?= $projet->id() ?>">
                                    <?= $image ?>
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="/project/<?= $projet->id() ?>" class="left-icon"><i class="icon-line-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="/project/<?= $projet->id() ?>"><?= $projet->name() ?></a></h3>
                                <!--span><a href="#">Media</a>, <a href="#">Icons</a></span-->
                            </div>
                        </article>
                        <?php
                        }
                        ?>
                        <!--article class="portfolio-item pf-illustrations">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="images/portfolio/4/2.jpg" alt="Locked Steel Gate">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="images/portfolio/full/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
                                <span><a href="#">Illustrations</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-graphics pf-uielements">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                    <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                                <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-icons pf-illustrations">
                            <div class="portfolio-image">
                                <div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/4.jpg" alt="Morning Dew"></a></div>
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/4-1.jpg" alt="Morning Dew"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-overlay" data-lightbox="gallery">
                                    <a href="images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                    <a href="images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                    <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
                                <span><a href="#"><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-uielements pf-media">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="images/portfolio/4/5.jpg" alt="Console Activity">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="images/portfolio/full/5.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Console Activity</a></h3>
                                <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-graphics pf-illustrations">
                            <div class="portfolio-image">
                                <div class="fslider" data-arrows="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/6.jpg" alt="Shake It"></a></div>
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/6-1.jpg" alt="Shake It"></a></div>
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/6-2.jpg" alt="Shake It"></a></div>
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/6-3.jpg" alt="Shake It"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-overlay" data-lightbox="gallery">
                                    <a href="images/portfolio/full/6.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                    <a href="images/portfolio/full/6-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                    <a href="images/portfolio/full/6-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                    <a href="images/portfolio/full/6-3.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                    <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
                                <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-uielements pf-icons">
                            <div class="portfolio-image">
                                <a href="portfolio-single-video.html">
                                    <img src="images/portfolio/4/7.jpg" alt="Backpack Contents">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="http://www.youtube.com/watch?v=kuceVNBTJio" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                    <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
                                <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-graphics">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="images/portfolio/4/8.jpg" alt="Sunset Bulb Glow">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="images/portfolio/full/8.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
                                <span><a href="#">Graphics</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-illustrations pf-icons">
                            <div class="portfolio-image">
                                <div class="fslider" data-arrows="false" data-speed="650" data-pause="3500" data-animation="fade">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/9.jpg" alt="Bridge Side"></a></div>
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/9-1.jpg" alt="Bridge Side"></a></div>
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/9-2.jpg" alt="Bridge Side"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-overlay" data-lightbox="gallery">
                                    <a href="images/portfolio/full/9.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                    <a href="images/portfolio/full/9-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                    <a href="images/portfolio/full/9-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                    <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Bridge Side</a></h3>
                                <span><a href="#">Illustrations</a>, <a href="#">Icons</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-graphics pf-media pf-uielements">
                            <div class="portfolio-image">
                                <a href="portfolio-single-video.html">
                                    <img src="images/portfolio/4/10.jpg" alt="Study Table">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="http://vimeo.com/91973305" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                    <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-video.html">Study Table</a></h3>
                                <span><a href="#">Graphics</a>, <a href="#">Media</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-media pf-icons">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="images/portfolio/4/11.jpg" alt="Workspace Stuff">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="images/portfolio/full/11.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Workspace Stuff</a></h3>
                                <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-illustrations pf-graphics">
                            <div class="portfolio-image">
                                <div class="fslider" data-arrows="false" data-speed="700" data-pause="7000">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/12.jpg" alt="Fixed Aperture"></a></div>
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/12-1.jpg" alt="Fixed Aperture"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-overlay" data-lightbox="gallery">
                                    <a href="images/portfolio/full/12.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                    <a href="images/portfolio/full/12-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                    <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-gallery.html">Fixed Aperture</a></h3>
                                <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                            </div>
                        </article-->

                    </div><!-- #portfolio end -->

                    <!-- Portfolio Script
                    ============================================= -->
                    <script type="text/javascript">

                        jQuery(window).load(function(){

                            var $container = $('#portfolio');

                            $container.isotope({ transitionDuration: '0.65s' });

                            $('#portfolio-filter a').click(function(){
                                $('#portfolio-filter li').removeClass('activeFilter');
                                $(this).parent('li').addClass('activeFilter');
                                var selector = $(this).attr('data-filter');
                                $container.isotope({ filter: selector });
                                return false;
                            });

                            $('#portfolio-shuffle').click(function(){
                                $container.isotope('updateSortData').isotope({
                                    sortBy: 'random'
                                });
                            });

                            $(window).resize(function() {
                                $container.isotope('layout');
                            });

                        });

                    </script><!-- Portfolio Script End -->

                </div>

            </div>

        </section><!-- #content end -->

        <!-- Footer
        ============================================= -->
        <?php
        include('include/footer.php');
        ?>
        <!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="js/functions.js"></script>
</body>
</html>
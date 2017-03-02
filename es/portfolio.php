<?php
    //classes loading begin
    function classLoad ($myClass) {
        if(file_exists('../admin/model/'.$myClass.'.php')){
            include('../admin/model/'.$myClass.'.php');
        }
        elseif(file_exists('../admin/controller/'.$myClass.'.php')){
            include('../admin/controller/'.$myClass.'.php');
        }
    }
    spl_autoload_register("classLoad");
    //classes loading end
    //session_start();
    include('../include/config.php');
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
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="../style.css" type="text/css" />
    <link rel="stylesheet" href="../css/dark.css" type="text/css" />
    <link rel="stylesheet" href="../css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="../css/animate.css" type="text/css" />
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="../css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/plugins.js"></script>
    <!-- Document Title
    ============================================= -->
    <title>Grupo Annahda | Nuestros Proyectos</title>
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

                    <div class="menu-title">Nuestros <span>Proyectos</span></div>

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
                                $image = '<img src="../images/logo_white.jpg" />'; 
                            }
                        ?>
                        <article class="portfolio-item pf-media pf-icons">
                            <div class="portfolio-image">
                                <a href="portfolio-single-gallery.php?idProjet=<?= $projet->id() ?>">
                                    <?= $image ?>
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="portfolio-single-gallery.php?idProjet=<?= $projet->id() ?>" class="left-icon"><i class="icon-line-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-gallery.php?idProjet=<?= $projet->id() ?>">Residencia <?= $projet->name() ?></a></h3>
                                <!--span><a href="#">Media</a>, <a href="#">Icons</a></span-->
                            </div>
                        </article>
                        <?php
                        }
                        ?>
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
    <script type="text/javascript" src="../js/functions.js"></script>
</body>
</html>
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
    $idProjet = $_GET['idProjet'];
    //class managers
    $projetManager = new ProjetManager($pdo);
    $imageManager = new ImageManager($pdo);
    $videoManager = new VideoManager($pdo);
    //class and vars
    $projets = $projetManager->getProjets();
    $projet = $projetManager->getProjetById($idProjet);
    $images = $imageManager->getImagesByProjet($idProjet);
    $videos = $videoManager->getVideosByProjet($idProjet);
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
    <title>Groep Annahda | <?= $projet->name() ?></title>
    <!-- Piwik -->
    <script type="text/javascript">
      var _paq = _paq || [];
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//costetics.esy.es/admin/piwik/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', 1]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <noscript><p><img src="//costetics.esy.es/admin/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
    <!-- End Piwik Code -->
</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <?php include('include/header.php'); ?>
        <!-- #header end -->

        <!-- Page Title
        ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1><?= $projet->name() ?></h1>
                <!--div id="portfolio-navigation">
                    <a href="#"><i class="icon-angle-left"></i></a>
                    <a href="#"><i class="icon-line-grid"></i></a>
                    <a href="#"><i class="icon-angle-right"></i></a>
                </div-->
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">
                <!-- Portfolio Single Gallery
                ============================================= -->
                <div class="container clearfix">
                    <div class="col_two_third portfolio-single-image nobottommargin">
                        <div class="fslider" data-arrows="false" data-thumbs="true" data-animation="fade">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    <?php
                                    foreach ( $images as $image ) {
                                    ?>
                                    <div class="slide" data-thumb="<?= $image->url() ?>">
                                        <a href="#">
                                            <img style="width:750px; height:550px;" src="<?= $image->url() ?>" alt="<?= $image->name() ?>">
                                        </a>
                                    </div>
                                    <?php  
                                    }
                                    ?>
                                    <!--div class="slide" data-thumb="images/portfolio/single/slider-thumbs/7.jpg"><a href="#"><img src="images/portfolio/single/7.jpg" alt=""></a></div>
                                    <div class="slide" data-thumb="images/portfolio/single/slider-thumbs/10.jpg"><a href="#"><img src="images/portfolio/single/10.jpg" alt=""></a></div-->
                                </div>
                            </div>
                        </div>
                    </div><!-- .portfolio-single-image end -->

                    <!-- Portfolio Single Content
                    ============================================= -->
                    <div class="col_one_third portfolio-single-content col_last nobottommargin">

                        <!-- Portfolio Single - Description
                        ============================================= -->
                        <div class="fancy-title title-bottom-border">
                            <h2>Beschrijving:</h2>
                        </div>
                        <p><?= $projet->description() ?></p>
                        <!-- Portfolio Single - Description End -->

                        <ul class="skills">
                            <li data-percent="<?= $projet->avancementConstruction() ?>">
                                <span>Bouwwerkzaamheden</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="<?= $projet->avancementConstruction() ?>" data-refresh-interval="30" data-speed="1000"></span>%</div></div>
                                </div>
                            </li>
                            <li data-percent="<?= $projet->avancementFinition() ?>">
                                <span>Bijwerken</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="<?= $projet->avancementFinition() ?>" data-refresh-interval="30" data-speed="1000"></span>%</div></div>
                                </div>
                            </li>
                            <!--li data-percent="90">
                                <span>HTML5</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="90" data-refresh-interval="30" data-speed="1000"></span>%</div></div>
                                </div>
                            </li-->
                            <!--li data-percent="70">
                                <span>jQuery</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="70" data-refresh-interval="30" data-speed="1000"></span>%</div></div>
                                </div>
                            </li-->
                        </ul>

                        <div class="line"></div>

                        <!-- Portfolio Single - Meta
                        ============================================= -->
                        <ul class="portfolio-meta bottommargin">
                            <li><span><i class="icon-user"></i>Gemaakt door</span> Annahda groep</li>
                            <li><span><i class="icon-calendar3"></i>Lanceerdatum</span> <?= date('d/m/Y', strtotime($projet->dateCreation())) ?></li>
                            <li><span><i class="icon-map-marker2"></i>Adres</span> <a><?= $projet->adresse() ?></a></li>
                        </ul>
                        <!-- Portfolio Single - Meta End -->

                        <!-- Portfolio Single - Share
                        ============================================= -->
                        <div class="si-share clearfix">
                            <span>Share:</span>
                            <div>
                                <a href="#" class="social-icon si-borderless si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <!--a href="#" class="social-icon si-borderless si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="#" class="social-icon si-borderless si-pinterest">
                                    <i class="icon-pinterest"></i>
                                    <i class="icon-pinterest"></i>
                                </a>
                                <a href="#" class="social-icon si-borderless si-gplus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>
                                <a href="#" class="social-icon si-borderless si-rss">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                                <a href="#" class="social-icon si-borderless si-email3">
                                    <i class="icon-email3"></i>
                                    <i class="icon-email3"></i>
                                </a-->
                            </div>
                        </div>
                        <!-- Portfolio Single - Share End -->

                    </div><!-- .portfolio-single-content end -->

                    <div class="clear"></div>

                    <div class="divider divider-center"><i class="icon-circle"></i></div>
                    <h1>Videos</h1>
                    <!--div class="container clearfix">
                        <div class="col_two_third portfolio-single-image nobottommargin">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php //$video->url() ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div-->
                    
                    <div id="portfolio" class="portfolio-notitle clearfix" style="position: relative;">
                    <?php 
                    foreach ( $videos as $video ) {
                    ?>
                    <article class="portfolio-item pf-uielements pf-icons" >
                        <div class="portfolio-image">
                            <a>
                                <img src="http://img.youtube.com/vi/<?= $video->url() ?>/hqdefault.jpg" alt="Backpack Contents" style="display: block; visibility: visible; opacity: 1;">
                            </a>
                            <div class="portfolio-overlay">
                                <a href="http://www.youtube.com/watch?v=<?= $video->url() ?>" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                <!--a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a-->
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a><?= $video->name() ?></a></h3>
                            <span><a><?= $video->description() ?></a></span>
                        </div>
                    </article>
                    <?php 
                    }
                    ?>
                    </div>
                    
                    
                    <div class="clear"></div>

                    <div class="divider divider-center"><i class="icon-circle"></i></div>
                    
                    <!-- Related Portfolio Items
                    ============================================= -->
                    <h4>Soortgelijke projecten:</h4>

                    <div id="related-portfolio" class="owl-carousel portfolio-carousel">
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
                        <div class="oc-item">
                            <div class="iportfolio">
                                <div class="portfolio-image">
                                    <a href="portfolio-single-gallery.php?idProjet=<?= $projet->id() ?>">
                                        <?= $image ?>"
                                    </a>
                                    <div class="portfolio-overlay">
                                        <!--a href="images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a-->
                                        <a href="portfolio-single-gallery.php?idProjet=<?= $projet->id() ?>" class="right-icon"><i class="icon-line-plus"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-gallery.php?idProjet=<?= $projet->id() ?>">Residentie<?= $projet->name() ?></a></h3>
                                    <!--span><a href="#">Media</a>, <a href="#">Icons</a></span-->
                                </div>
                            </div>
                        </div>
                        <?php
                        } 
                        ?>
                        <!--div class="oc-item">
                            <div class="iportfolio">
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
                            </div>
                        </div>
                        <div class="oc-item">
                            <div class="iportfolio">
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
                            </div>
                        </div>
                        <div class="oc-item">
                            <div class="iportfolio">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="images/portfolio/4/4.jpg" alt="Mac Sunglasses">
                                    </a>
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
                            </div>
                        </div>
                        <div class="oc-item">
                            <div class="iportfolio">
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
                            </div>
                        </div>
                        <div class="oc-item">
                            <div class="iportfolio">
                                <div class="portfolio-image">
                                    <a href="portfolio-single-gallery.html">
                                        <img src="images/portfolio/4/6.jpg" alt="Shake It!">
                                    </a>
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
                            </div>
                        </div>
                        <div class="oc-item">
                            <div class="iportfolio">
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
                            </div>
                        </div>
                        <div class="oc-item">
                            <div class="iportfolio">
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
                            </div>
                        </div>
                        <div class="oc-item">
                            <div class="iportfolio">
                                <div class="portfolio-image">
                                    <a href="portfolio-single.html">
                                        <img src="images/portfolio/4/9.jpg" alt="Bridge Side">
                                    </a>
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
                            </div>
                        </div>
                        <div class="oc-item">
                            <div class="iportfolio">
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
                            </div>
                        </div-->

                    </div><!-- .portfolio-carousel end -->

                    <script type="text/javascript">

                        jQuery(document).ready(function($) {

                            var relatedPortfolio = $("#related-portfolio");

                            relatedPortfolio.owlCarousel({
                                margin: 30,
                                nav: true,
                                dots:false,
                                navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                                autoplay: true,
                                autoplayHoverPause: true,
                                responsive:{
                                    0:{ items:1 },
                                    480:{ items:2 },
                                    768:{ items:3 },
                                    992: { items:4 }
                                }
                            });

                        });

                    </script>

                </div>

            </div>

        </section><!-- #content end -->

        <!-- Footer
        ============================================= -->
        <?php include('include/footer.php'); ?>
        <!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="../js/functions.js"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript" src="../js/tawkto.js"></script>
    <!--End of Tawk.to Script-->
</body>
</html>
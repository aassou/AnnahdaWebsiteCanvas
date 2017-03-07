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
    <meta name="author" content="Groupe Annahda Lil Iaamar" />
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/style.css" type="text/css" />
    <link rel="stylesheet" href="/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="/css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/plugins.js"></script>
    <title>Gruppe Annahda | <?= $projet->name() ?></title>
</head>
<body class="stretched">
    <div id="wrapper" class="clearfix">
        <?php include('include/header.php'); ?>
        <section id="page-title">
            <div class="container clearfix">
                <h1>Residenz <?= $projet->name() ?></h1>
            </div>
        </section>
        <section id="content">
            <div class="content-wrap">
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
                    </div>
                    <div class="col_one_third portfolio-single-content col_last nobottommargin">
                        <div class="fancy-title title-bottom-border">
                            <h2>Beschreibung:</h2>
                        </div>
                        <p><?= $projet->description() ?></p>
                        <ul class="skills">
                            <li data-percent="<?= $projet->avancementConstruction() ?>">
                                <span>Bauarbeiten</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="<?= $projet->avancementConstruction() ?>" data-refresh-interval="30" data-speed="1000"></span>%</div></div>
                                </div>
                            </li>
                            <li data-percent="<?= $projet->avancementFinition() ?>">
                                <span>Nacharbeiten</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="<?= $projet->avancementFinition() ?>" data-refresh-interval="30" data-speed="1000"></span>%</div></div>
                                </div>
                            </li>
                        </ul>
                        <div class="line"></div>
                        <ul class="portfolio-meta bottommargin">
                            <li><span><i class="icon-user"></i>Erstellt von</span> Unternehmen Groupe Annahda</li>
                            <li><span><i class="icon-calendar3"></i>Auflegungsdatum</span> <?= date('d/m/Y', strtotime($projet->dateCreation())) ?></li>
                            <li><span><i class="icon-map-marker2"></i>Adresse</span> <a><?= $projet->adresse() ?></a></li>
                        </ul>
                        <div class="si-share clearfix">
                            <span>Teilen auf:</span>
                            <div>
                                <a href="#" class="social-icon si-borderless si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                            </div>
                        </div>
                    </div>
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
                    <h4>Ähnliche Projekte:</h4>
                    <div id="related-portfolio" class="owl-carousel portfolio-carousel">
                        <?php
                        foreach ( $projets as $projet ) {
                            $image = "";
                            if ( $imageManager->getImageNumberByIdProjet($projet->id()) >= 1 ) {
                                $image = $imageManager->getFirstImageByIdProjet($projet->id());
                                $image = '<img src="'.$image->url().'-/resize/476x460/" />';    
                            }
                            else {
                                $image = '<img src="images/logo_white.jpg" />'; 
                            }
                        ?>
                        <div class="oc-item">
                            <div class="iportfolio">
                                <div class="portfolio-image">
                                    <a href="/project/<?= $projet->id() ?>">
                                        <?= $image ?>"
                                    </a>
                                    <div class="portfolio-overlay">
                                        <!--a href="images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a-->
                                        <a href="/project/<?= $projet->id() ?>" class="right-icon"><i class="icon-line-plus"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="/project/<?= $projet->id() ?>">Residenz<?= $projet->name() ?></a></h3>
                                    <!--span><a href="#">Media</a>, <a href="#">Icons</a></span-->
                                </div>
                            </div>
                        </div>
                        <?php
                        } 
                        ?>
                    </div>
                    <script type="text/javascript">jQuery(document).ready(function($) {var relatedPortfolio = $("#related-portfolio");relatedPortfolio.owlCarousel({margin: 30,nav: true,dots:false,navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],autoplay: true,autoplayHoverPause: true,responsive:{0:{ items:1 },480:{ items:2 },768:{ items:3 },992: { items:4 }}});});</script>
                </div>
            </div>
        </section>
        <?php include('include/footer.php'); ?>
    </div>
    <div id="gotoTop" class="icon-angle-up"></div>
    <script type="text/javascript" src="/js/functions.js"></script>
</body>
</html>
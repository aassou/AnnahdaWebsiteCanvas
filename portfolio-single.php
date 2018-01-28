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
    $idProjet = $_GET['idProjet'];
    //class managers
    $projetManager = new ProjetManager($pdo);
    $imageManager = new ImageManager($pdo);
    //class and vars
    $projet = $projetManager->getProjetById($idProjet);
    $images = $imageManager->getImagesByProjet($idProjet);
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
    <title>Groupe Annahda | <?= $projet->name() ?></title>
</head>
<body class="stretched">
    <div id="wrapper" class="clearfix">
        <?php include('include/header.php'); ?>
        <section id="page-title">
            <div class="container clearfix">
                <h1><?= $projet->name() ?></h1>
            </div>
        </section>
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="col_two_third portfolio-single-image nobottommargin">
                        <a><img src="<?= $images[0]->url() ?>" alt="<?= $images[0]->name() ?>"></a>
                    </div>
                    <div class="col_one_third portfolio-single-content col_last nobottommargin">
                        <div class="fancy-title title-bottom-border">
                            <h2>Description:</h2>
                        </div>
                        <p><?= $projet->description() ?></p>
                        <div class="line"></div>
                        <ul class="portfolio-meta bottommargin">
                            <li><span><i class="icon-user"></i>Crée par:</span> Groupe Annahda</li>
                            <li><span><i class="icon-calendar3"></i>Date de lancement:</span> <?= date('d/m/Y', strtotime($projet->dateCreation())) ?></li>
                            <li><span><i class="icon-map-marker2"></i>Adresse:</span> <a><?= $projet->adresse() ?></a></li>
                        </ul>
                        <div class="si-share clearfix">
                            <span>Partager:</span>
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
                    </div>
                    <div class="clear"></div>
                    <div class="divider divider-center"><i class="icon-circle"></i></div>
                    <h4>La gallery du projet:</h4>
                    <div id="related-portfolio" class="owl-carousel portfolio-carousel">
                    <?php
                    foreach ( $images as $image ) {
                    ?>
                        <div class="oc-item">
                            <div class="iportfolio">
                                <div class="portfolio-image">
                                    <a href="<?= $image->url() ?>">
                                        <img style="width: 300px; height: 200px;" src="<?= $image->url() ?>" alt="<?= $image->name() ?>">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="<?= $image->url() ?>" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <!--h3><a href="portfolio-single.html"></a></h3-->
                                    <!--span><a href="#">Media</a>, <a href="#">Icons</a></span-->
                                </div>
                            </div>
                        </div>
                    <?php  
                    }
                    ?>
                    </div>
                    <script type="text/javascript">jQuery(document).ready(function($) {var relatedPortfolio = $("#related-portfolio");relatedPortfolio.owlCarousel({margin: 20,nav: false,dots:true,autoplay: true,autoplayHoverPause: true,responsive:{0:{ items:1 },480:{ items:2 },768:{ items:3 },992: { items:4 }}});});</script>
                </div>
            </div>
        </section>
        <?php include('include/footer.php'); ?>
    </div>
    <div id="gotoTop" class="icon-angle-up"></div>
    <script type="text/javascript" src="js/functions.js"></script>
</body>
</html>
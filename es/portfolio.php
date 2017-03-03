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
    <meta name="author" content="Groupe Annahda Lil Iaamar" />
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
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/plugins.js"></script>
    <title>Grupo Annahda | Nuestros Proyectos</title>
</head>
<body class="stretched">
    <div id="wrapper" class="clearfix">
        <?php include('include/header.php'); ?>
        <div id="page-menu" class="no-sticky">
            <div id="page-menu-wrap">
                <div class="container clearfix">
                    <div class="menu-title">Nuestros <span>Proyectos</span></div>
                </div>
            </div>
        </div>
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="clear"></div>
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
                                <a href="/es/project/<?= $projet->id() ?>">
                                    <?= $image ?>
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="/es/project/<?= $projet->id() ?>" class="left-icon"><i class="icon-line-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="/es/project/<?= $projet->id() ?>">Residencia <?= $projet->name() ?></a></h3>
                                <!--span><a href="#">Media</a>, <a href="#">Icons</a></span-->
                            </div>
                        </article>
                        <?php
                        }
                        ?>
                    </div>
                    <script type="text/javascript">jQuery(window).load(function(){var $container = $('#portfolio');$container.isotope({ transitionDuration: '0.65s' });$('#portfolio-filter a').click(function(){$('#portfolio-filter li').removeClass('activeFilter');$(this).parent('li').addClass('activeFilter');var selector = $(this).attr('data-filter');$container.isotope({ filter: selector });return false;});$('#portfolio-shuffle').click(function(){$container.isotope('updateSortData').isotope({sortBy: 'random'});});$(window).resize(function() {$container.isotope('layout');});});</script>
                </div>
            </div>
        </section>
        <?php include('include/footer.php'); ?>
    </div>
    <div id="gotoTop" class="icon-angle-up"></div>
    <script type="text/javascript" src="../js/functions.js"></script>
</body>
</html>
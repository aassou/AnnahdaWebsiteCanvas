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
    include('../include/config.php');
    //classes loading end
    //class managers
    $sliderImageManager = new SliderImageManager($pdo);
    $sliderVideoManager = new SliderVideoManager($pdo);
    $configManager = new ConfigManager($pdo);
    $projetManager = new ProjetManager($pdo);
    $imageManager = new ImageManager($pdo);
    //classes
    $projets = $projetManager->getProjets();
    $sliderImages = $sliderImageManager->getSliderImages();
    $sliderVideos = $sliderVideoManager->getSliderVideos();
    $config = $configManager->getConfig();
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
    <link rel="stylesheet" href="../css/dark.min.css" type="text/css" />
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
    <title>Grupo Annahda</title>
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
        <?php
            include("include/header.php"); 
        ?>
        <!-- #header end -->
        <!-- #slider begin -->
        <?php 
        if ( $config->sliderType() == 1 ) {
            include("../include/slider-video.php");
        }
        else {
            include("../include/slider-images.php");
        }     
        ?>
        <!-- #slider end -->
        <!-- Content
        ============================================= -->
        <?php
        //if the value of indexContent is 0, this means that our page index is composed of slider and content
        if ( $config->indexContent() == 0 ) {
            include('include/index-content.php');
        }
        //if the value of indexContent is 2, this means that our page index is composed of slider and minimal content
        else if ( $config->indexContent() == 2 ) {
            include('include/index-content-min.php');
        }
        ?>
        <!-- #content end -->

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
    <!--Start of Tawk.to Script-->
    <script type="text/javascript" src="../js/tawkto.js"></script>
    <!--End of Tawk.to Script-->
</body>
</html>
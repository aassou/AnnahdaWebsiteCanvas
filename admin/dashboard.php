<?php
//classes loading begin
    function classLoad ($myClass) {
        if(file_exists('model/'.$myClass.'.php')){
            include('model/'.$myClass.'.php');
        }
        elseif(file_exists('controller/'.$myClass.'.php')){
            include('controller/'.$myClass.'.php');
        }
    }
    spl_autoload_register("classLoad"); 
    include('../include/config.php');
    //classes loading end
    session_start();
    if( isset($_SESSION['userAnnahdaSite']) ){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('include/head.php') ?>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- TOP NAVBAR -->
    <?php include('include/navbar.php'); ?>
    <!-- /END OF TOP NAVBAR -->

    <!-- SIDE MENU -->
    <?php include('include/sidebar.php'); ?>
    <!-- END OF SIDE MENU -->
    <!--  PAPER WRAP -->
    <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">
            <!-- CONTENT -->
            <!--TITLE -->
            <div class="row">
                <div id="paper-top">
                    <div class="col-sm-3">
                        <h2 class="tittle-content-header">
                            <i class="icon-window"></i> 
                            <span>Accueil
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
            <!--/ TITLE -->
            <!-- BREADCRUMB -->
            <ul id="breadcrumb">
                <li><a href="#" title="Sample page 1">Accueil</a></li>
            </ul>
            <!-- END OF BREADCRUMB -->
            <!--div id="paper-middle">
                <div id="mapContainer"></div>
            </div-->

            <!--  DEVICE MANAGER -->
            <div class="content-wrap">
                <div class="row">
                    <a href="projets.php">
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-facebook">
                                <span class="entypo-home middle-social"></span>
                            </div>
                            <div class="panel-body">
                                <p class="lead">Les Projets</p>
                                <!--p class="social-follower">120k Followers, 900 Posts</p-->

                                <!--p>
                                    <img src="http://api.randomuser.me/portraits/thumb/men/14.jpg" alt="" class="social-pic img-circle">
                                    <img src="http://api.randomuser.me/portraits/thumb/women/15.jpg" alt="" class="social-pic img-circle">

                                    <a href="#" class="link-social">
                                        <span class="entypo-link"></span>
                                    </a>
                                    <a href="#" class="link-social">
                                        <span class="entypo-mail"></span>
                                    </a>

                                </p-->
                            </div>
                        </div>
                    </div>
                    </a>
                    
                    <!--/col-->
                    <a href="media.php">
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-instagram">
                                <span class="entypo-instagrem middle-social"></span>
                            </div>
                            <div class="panel-body">
                                <p class="lead">Les Medias</p>
                                <!--p>19k Followers, 789 Posts</p-->

                                <!--p>
                                    <img src="http://api.randomuser.me/portraits/thumb/men/18.jpg" alt="" class="social-pic img-circle">
                                    <img src="http://api.randomuser.me/portraits/thumb/women/19.jpg" alt="" class="social-pic img-circle">

                                    <a href="#" class="link-social">
                                        <span class="entypo-link"></span>
                                    </a>
                                    <a href="#" class="link-social">
                                        <span class="entypo-mail"></span>
                                    </a>
                                </p-->
                            </div>
                        </div>
                    </div>
                    </a>
                    <!--/col-->
                    <a href="">
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-google">
                                <span class="entypo-chat middle-social"></span>
                            </div>
                            <div class="panel-body">
                                <p class="lead">Les Emails</p>
                                <!--p>902 Followers, 88 Posts</p-->

                                <!--p>
                                    <img src="http://api.randomuser.me/portraits/thumb/men/20.jpg" alt="" class="social-pic img-circle">
                                    <img src="http://api.randomuser.me/portraits/thumb/women/21.jpg" alt="" class="social-pic img-circle">

                                    <a href="#" class="link-social">
                                        <span class="entypo-link"></span>
                                    </a>
                                    <a href="#" class="link-social">
                                        <span class="entypo-mail"></span>
                                    </a>
                                </p-->
                            </div>
                        </div>
                    </div>
                    </a>
                    <!--/col-->
                    <a href="configuration.php">
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-twitter">
                                <span class="entypo-cog middle-social"></span>
                            </div>
                            <div class="panel-body">
                                <p class="lead">Paramètrages</p>
                                <!--p>902 Followers, 88 Posts</p-->

                                <!--p>
                                    <img src="http://api.randomuser.me/portraits/thumb/men/16.jpg" alt="" class="social-pic img-circle">
                                    <img src="http://api.randomuser.me/portraits/thumb/women/17.jpg" alt="" class="social-pic img-circle">

                                    <a href="#" class="link-social">
                                        <span class="entypo-link"></span>
                                    </a>
                                    <a href="#" class="link-social">
                                        <span class="entypo-mail"></span>
                                    </a>
                                </p-->
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <!--  / DEVICE MANAGER -->
            <!-- FOOTER -->
            <?php include('include/footer.php') ?>
            <!-- / END OF FOOTER -->
        </div>
    </div>
    <!--  END OF PAPER WRAP -->
    <!-- RIGHT SLIDER CONTENT -->
    <?php include('include/right-slider.php'); ?>
    <!-- END OF RIGHT SLIDER CONTENT-->
    <?php include('include/scripts.php'); ?>
</body>
</html>
<?php
    }
    else {
        header('index.php');    
    }
?>
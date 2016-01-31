<?php
session_start();
if ( isset($_SESSION['userAnnahdaSite']) ) {
    header('Location:dashboard.php');
}
else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Groupe Annahda | Admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
   <!--  <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/loader-style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/signin.css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/minus.png">
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <div class="container">
        <div class="" id="login-wrapper">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div id="logo-login">
                        <h1>Groupe Annahda
                            <span>v1.0</span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="account-box">
                        <?php 
                        if( isset($_SESSION['user-action-message']) 
                        and isset($_SESSION['user-type-message']) ) { 
                            $message = $_SESSION['user-action-message'];
                            $typeMessage = $_SESSION['user-type-message'];
                        ?>
                        <div class="alert alert-<?= $typeMessage ?>">
                            <button data-dismiss="alert" class="close" type="button">×</button>
                            <span class="entypo-attention"></span>
                            <?= $message ?>
                        </div>
                        <?php 
                        } 
                        unset($_SESSION['user-action-message']);
                        unset($_SESSION['user-type-message']);
                        ?>
                        <form id="loginForm" role="form" action="controller/UserActionController.php" method="post" >
                            <div class="form-group">
                                <!--a href="#" class="pull-right label-forgot">Forgot email?</a-->
                                <label for="inputUsernameEmail">Login</label>
                                <input required type="text" name="login" id="inputUsernameEmail" class="form-control">
                            </div>
                            <div class="form-group">
                                <!--a href="#" class="pull-right label-forgot">Forgot password?</a-->
                                <label for="inputPassword">Mot de passe</label>
                                <input required type="password" name="password" id="inputPassword" class="form-control">
                            </div>
                            <!--div class="checkbox pull-left">
                                <label>
                                    <input type="checkbox">Remember me</label>
                            </div-->
                            <input type="hidden" name="action" value="signin" />
                            <button class="btn btn btn-primary pull-right" type="submit">
                                Se connecter
                            </button>
                        </form>
                        <!--a class="forgotLnk" href="index.html"></a-->
                        <!--div class="or-box">
                            <center><span class="text-center login-with">Login or <b>Sign Up</b></span></center>
                            <div class="row">
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-facebook btn-block">
                                        <span class="entypo-facebook space-icon"></span>Facebook</a>
                                </div>
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-twitter btn-block">
                                        <span class="entypo-twitter space-icon"></span>Twitter</a>
                                </div>
                            </div>
                            <div style="margin-top:25px" class="row">
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-google btn-block"><span class="entypo-gplus space-icon"></span>Google +</a>
                                </div>
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-instagram btn-block"><span class="entypo-instagrem space-icon"></span>Instagram</a>
                                </div>

                            </div>
                        </div-->
                        <br><br>
                        <!--div class="row-block">
                            <div class="row">
                                <div class="col-md-12 row-block">
                                    <a href="index.html" class="btn btn-primary btn-block">Create New Account</a>
                                </div>
                            </div>
                        </div-->
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align:center;margin:0 auto;">
            <h6 style="color:#fff;">Groupe Annahda SARL © Tous droits reservés 2016</h6>
        </div>
    </div>
    <!--div id="test1" class="gmap3"></div-->
    <!--  END OF PAPER WRAP -->
    <!-- MAIN EFFECT -->
    <script type="text/javascript" src="assets/js/preloader.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/load.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/validate/jquery.validate.js"></script>
    <script type="text/javascript">
        //var form = $( "#loginForm" );
        $("#loginForm").validate({
            errorClass: "error-class",
            validClass: "valid-class"  
        });
    </script>
    <!--script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/map/gmap3.js"></script>
    <script type="text/javascript">
    $(function() {

        $("#test1").gmap3({
            marker: {
                latLng: [-7.782893, 110.402645],
                options: {
                    draggable: true
                },
                events: {
                    dragend: function(marker) {
                        $(this).gmap3({
                            getaddress: {
                                latLng: marker.getPosition(),
                                callback: function(results) {
                                    var map = $(this).gmap3("get"),
                                        infowindow = $(this).gmap3({
                                            get: "infowindow"
                                        }),
                                        content = results && results[1] ? results && results[1].formatted_address : "no address";
                                    if (infowindow) {
                                        infowindow.open(map, marker);
                                        infowindow.setContent(content);
                                    } else {
                                        $(this).gmap3({
                                            infowindow: {
                                                anchor: marker,
                                                options: {
                                                    content: content
                                                }
                                            }
                                        });
                                    }
                                }
                            }
                        });
                    }
                }
            },
            map: {
                options: {
                    zoom: 15
                }
            }
        });

    });
    </script-->
</body>
</html>
<?php
}
?>
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
        //class managers
        $configManager = new ConfigManager($pdo);
        $config = $configManager->getConfig();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/head.php'); ?>    
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
                            <i class="icon-cogs"></i> 
                            <span>Paramètrages
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
            <!--/ TITLE -->
            <!-- BREADCRUMB -->
            <ul id="breadcrumb">
                </li>
                <li><a href="dashboard.php">Accueil</a></li>
                <li><i class="fa fa-lg fa-angle-right"></i></li>
                <li><a>Paramètrages</a></li>
            </ul>
            <!-- END OF BREADCRUMB -->
            <!--div id="paper-middle">
                <div id="mapContainer"></div>
            </div-->
            <!--  DEVICE MANAGER -->
            <div class="content-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <?php 
                        if( isset($_SESSION['config-action-message']) 
                        and isset($_SESSION['config-type-message']) ) { 
                            $message = $_SESSION['config-action-message'];
                            $typeMessage = $_SESSION['config-type-message'];
                        ?>
                        <div class="alert alert-<?= $typeMessage ?>">
                            <button data-dismiss="alert" class="close" type="button">×</button>
                            <span class="entypo-attention"></span>
                            <?= $message ?>
                        </div>
                        <?php 
                        } 
                        unset($_SESSION['config-action-message']);
                        unset($_SESSION['config-type-message']);
                        ?>
                        <?php 
                        $indexContentCheckedFullPage = "";
                        $indexContentCheckedNormalPage = "";
                        $indexContentCheckedMinimalPage = "";
                        
                        if ( $config->indexContent() == 1 ) {
                            $indexContentCheckedFullPage = "checked";
                            $indexContentCheckedNormalPage = "";
                            $indexContentCheckedMinimalPage = "";    
                        }
                        else if ( $config->indexContent() == 2 ) {
                            $indexContentCheckedFullPage = "";
                            $indexContentCheckedNormalPage = "";
                            $indexContentCheckedMinimalPage = "checked";
                        }
                        else {
                            $indexContentCheckedFullPage = "";
                            $indexContentCheckedNormalPage = "checked";
                            $indexContentCheckedMinimalPage = "";
                        }
                        ?>
                        <h3>Page d'accueil</h3>
                        <form action="controller/ConfigActionController.php" method="post">
                            <div class="skin skin-flat">
                                <ul class="list">
                                    <li>
                                        <input tabindex="11" type="radio" id="square-radio-1" name="indexContent" value="1" <?= $indexContentCheckedFullPage ?> >
                                        <label for="square-radio-1">Slider plein écran</label>
                                    </li>
                                    <li>
                                        <input tabindex="12" type="radio" id="square-radio-2" name="indexContent" value="0" <?= $indexContentCheckedNormalPage ?> >
                                        <label for="square-radio-2">Page d'accueil Complete</label>
                                    </li>
                                     <li>
                                        <input tabindex="13" type="radio" id="square-radio-3" name="indexContent" value="2" <?= $indexContentCheckedMinimalPage ?> >
                                        <label for="square-radio-3">Page d'accueil Minimal</label>
                                    </li>
                                </ul>
                                <div style="clear:both;"></div>
                            </div>
                            <input type="hidden" name="action" value="changeIndexContent">
                            <input value="Enregistrer" type="submit" class="btn btn-primary" />
                        </form>
                        <?php 
                        $typeSliderCheckedVideo = "";
                        $typeSliderCheckedImage = "";  
                        if ( $config->sliderType() == 1 ) {
                            $typeSliderCheckedVideo = "checked";
                            $typeSliderCheckedImage = "";    
                        }
                        else {
                            $typeSliderCheckedVideo = "";
                            $typeSliderCheckedImage = "checked";
                        }
                        ?>
                        <h3>Type Slider</h3>
                        <form action="controller/ConfigActionController.php" method="post">
                            <div class="skin skin-flat">
                                <ul class="list">
                                    <li>
                                        <input tabindex="11" type="radio" id="square-radio-3" name="sliderType" value="1" <?= $typeSliderCheckedVideo ?> >
                                        <label for="square-radio-3">Slider Video</label>
                                    </li>
                                    <li>
                                        <input tabindex="12" type="radio" id="square-radio-4" name="sliderType" value="0" <?= $typeSliderCheckedImage ?> >
                                        <label for="square-radio-4">Slider Image</label>
                                    </li>
                                </ul>
                                <div style="clear:both;"></div>
                            </div>
                            <input type="hidden" name="action" value="changeSliderType">
                            <input value="Enregistrer" type="submit" class="btn btn-primary" />
                        </form>
                    </div>              
                </div>     
            </div>
            <!-- FOOTER -->
            <?php include('include/footer.php') ?>
            <!-- / END OF FOOTER -->
        </div>
    </div>
    <!--  END OF PAPER WRAP -->
    <?php include('include/scripts.php'); ?>
    <script type="text/javascript" src="assets/js/iCheck/jquery.icheck.js"></script>
    <script type="text/javascript" src="assets/js/switch/bootstrap-switch.js"></script>

    <!--  PLUGIN -->
    <script>
    $(document).ready(function() {
        //CHECKBOX PRETTYFY
        $('.skin-flat input').iCheck({
            checkboxClass: 'icheckbox_flat-red',
            radioClass: 'iradio_flat-red'
        });
        $('.skin-line input').each(function() {
            var self = $(this),
                label = self.next(),
                label_text = label.text();

            label.remove();
            self.iCheck({
                checkboxClass: 'icheckbox_line-blue',
                radioClass: 'iradio_line-blue',
                insert: '<div class="icheck_line-icon"></div>' + label_text
            });
        });
        //Switch Button

        $('.make-switch').bootstrapSwitch('setSizeClass', 'switch-small');
    });
    </script>
</body>
</html>
<?php
    }
    else {
        header('index.php');    
    }
?>
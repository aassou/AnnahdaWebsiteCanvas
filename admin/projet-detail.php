<?php
//classes loading begin
    function classLoad ($myClass) {
        if(file_exists('model/'.$myClass.'.php')){
            include('model/'.$myClass.'.php');
        }
        if(file_exists('controller/'.$myClass.'.php')){
            include('controller/'.$myClass.'.php');
        }
    }
    spl_autoload_register("classLoad"); 
    include('../include/config.php');
    require('../vendor/autoload.php');
    use \Uploadcare\Api;
    //classes loading end
    session_start();
    if( isset($_SESSION['userAnnahdaSite']) ){
        $idProjet = $_GET['idProjet'];
        //class managers
        $projetManager = new ProjetManager($pdo);
        $imageManager = new ImageManager($pdo);
        $videoManager = new VideoManager($pdo);
        //classes
        $projets = $projetManager->getProjets();
        $projet = $projetManager->getProjetById($idProjet);
        $images = $imageManager->getImagesByProjet($idProjet);
        $videos = $videoManager->getVideosByProjet($idProjet);
        //uploadcare API
        $api = new \Uploadcare\Api('a4fcbce4f6985e0b0ddc', '8fefa950371952d6bf60');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/head.php'); ?>
    <?php echo $api->widget->getScriptTag(); ?>    
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
                            <i class="icon-home"></i> 
                            <span><?= $projet->name() ?>
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
            <!--/ TITLE -->
            <!-- BREADCRUMB -->
            <ul id="breadcrumb">
                </li>
                <li><a href="dashboard.php" title="Sample page 1">Accueil</a></li>
                <li><i class="fa fa-lg fa-angle-right"></i></li>
                <li><a href="projets.php" title="Sample page 1">Les projets</a></li>
                <li><i class="fa fa-lg fa-angle-right"></i></li>
                <li><a title="Sample page 1"><?= $projet->name() ?></a></li>
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
                        if( isset($_SESSION['image-action-message']) 
                        and isset($_SESSION['image-type-message']) ) { 
                            $message = $_SESSION['image-action-message'];
                            $typeMessage = $_SESSION['image-type-message'];
                        ?>
                        <div class="alert alert-<?= $typeMessage ?>">
                            <button data-dismiss="alert" class="close" type="button">×</button>
                            <span class="entypo-attention"></span>
                            <?= $message ?>
                        </div>
                        <?php 
                        } 
                        unset($_SESSION['image-action-message']);
                        unset($_SESSION['image-type-message']);
                        ?>
                    </div>
                    <div class="col-sm-3">
                        <br>
                        <div class="btn btn-info btn-lg" data-toggle="modal" data-target="#addImage">
                            <i class="entypo-plus-circled"></i>&nbsp;&nbsp;Nouvelle Image
                        </div>
                        <div class="modal fade" id="addImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel">Nouvelle Image</h4>
                              </div>
                              <form action="controller/ImageActionController.php" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                  <div class="form-group">
                                    <input type="file" id="image" name="image" class="m-wrap" />
                                    <label for="image" class="control-label">Image</label>
                                  </div>
                                  <div class="form-group">
                                    <input type="text" id="name" name="name" class="m-wrap" />
                                    <label for="name" class="control-label">Nom</label>
                                  </div>
                                  <div class="form-group">
                                    <textarea id="description" name="description" class="m-wrap"></textarea>
                                    <label for="description" class="control-label">Description</label>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="action" value="add">
                                    <input type="hidden" name="idProjet" value="<?= $projet->id() ?>">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                    <input value="Enregistrer" type="submit" class="btn btn-primary" />
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <h3>Liste des images</h3>                     
                    </div>                
                </div>                
                <br>
                <div class="row" id="images">
                    <?php
                    foreach ( $images as $image ) {
                    ?>
                    <a>
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-facebook">    
                                <img style="width: 200px; height:150px;" src="<?= $image->url() ?>" />
                            </div>
                            <div class="panel-body">
                                <p><?php //$image->name() ?>
                                    <a href="#updateProject<?= $image->id() ?>" data-toggle="modal" data-id="<?= $image->id() ?>" class="link-social" title="Modifier">
                                        <span class="entypo-pencil"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    </a>
                    <?php
                    }
                    ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <?php 
                        if( isset($_SESSION['video-action-message']) 
                        and isset($_SESSION['video-type-message']) ) { 
                            $message = $_SESSION['video-action-message'];
                            $typeMessage = $_SESSION['video-type-message'];
                        ?>
                        <div class="alert alert-<?= $typeMessage ?>">
                            <button data-dismiss="alert" class="close" type="button">×</button>
                            <span class="entypo-attention"></span>
                            <?= $message ?>
                        </div>
                        <?php 
                        } 
                        unset($_SESSION['video-action-message']);
                        unset($_SESSION['video-type-message']);
                        ?>
                    </div>
                    <div class="col-sm-3">
                        <br>
                        <div class="btn btn-info btn-lg" data-toggle="modal" data-target="#addVideo">
                            <i class="entypo-plus-circled"></i>&nbsp;&nbsp;Nouvelle Video
                        </div>
                        <div class="modal fade" id="addVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel">Nouvelle Video</h4>
                              </div>
                              <div class="modal-body">
                                <form action="controller/VideoActionController.php" method="post">
                                  <div class="form-group">
                                    <label for="recipient-name" class="control-label">Nom</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                  </div>
                                  <div class="form-group">
                                    <label for="recipient-name" class="control-label">Lien</label>
                                    <input type="text" class="form-control" id="url" name="url">
                                  </div>
                                  <div class="form-group">
                                    <label for="message-text" class="control-label">Description</label>
                                    <textarea class="form-control" name="description" id="description"></textarea>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <input type="hidden" name="action" value="add">
                                <input type="hidden" name="idProjet" value="<?= $projet->id() ?>">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                <input value="Enregistrer" type="submit" class="btn btn-primary" />
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>  
                        <h3>Liste des vidéos</h3>                     
                    </div>
                </div>                
                <br>
                <div class="row-fluid" id="videos">
                    <?php
                    foreach ( $videos as $video ) {
                    ?>
                    <div class="col-md-4">
                        <div class="well-media">
                            <div class="vendor">
                                <div class="fluid-width-video-wrapper"><iframe src="https://www.youtube.com/embed/<?= $video->url() ?>" frameborder="0" allowfullscreen="" id="fitvid419839"></iframe></div>
                            </div>
                            <div class="video-text">
                                <h2><?= $video->name() ?></h2>
                                <p><?= $video->description() ?></p>
                            </div>
                            <!--div class="tag-nest">
                                <i>angel</i><i>dark</i><i>mistic</i>
                            </div-->
                            <div class="video-category-bg">
                                <h3>Video</h3>
                                <a class="link-media pull-right" href="#">
                                    <span class="fontawesome-film"></span>
                                </a>
                                <div class="triangle-white"></div>
                                <div class="triangle-video-right"></div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <!-- FOOTER -->
            <?php include('include/footer.php') ?>
            <!-- / END OF FOOTER -->
        </div>
    </div>
    <!--  END OF PAPER WRAP -->
    <?php include('include/scripts.php'); ?>
</body>
</html>
<?php
    }
    else {
        header('index.php');    
    }
?>
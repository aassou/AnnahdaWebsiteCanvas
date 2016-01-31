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
        $projetManager = new ProjetManager($pdo);
        $imageManager = new ImageManager($pdo);
        //classes
        $projets = $projetManager->getProjets();
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
                            <i class="icon-home"></i> 
                            <span>Les projets
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
                <li><a title="Sample page 1">Les projets</a></li>
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
                        if( isset($_SESSION['projet-action-message']) 
                        and isset($_SESSION['projet-type-message']) ) { 
                            $message = $_SESSION['projet-action-message'];
                            $typeMessage = $_SESSION['projet-type-message'];
                        ?>
                        <div class="alert alert-<?= $typeMessage ?>">
                            <button data-dismiss="alert" class="close" type="button">×</button>
                            <span class="entypo-attention"></span>
                            <?= $message ?>
                        </div>
                        <?php 
                        } 
                        unset($_SESSION['projet-action-message']);
                        unset($_SESSION['projet-type-message']);
                        ?>
                    </div>
                    <div class="col-sm-3">
                        <br>
                        <div class="btn btn-info btn-lg" data-toggle="modal" data-target="#addProject">
                            <i class="entypo-plus-circled"></i>&nbsp;&nbsp;Nouveau Projet
                        </div>
                        <div class="modal fade" id="addProject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel">Nouveau Projet</h4>
                              </div>
                              <div class="modal-body">
                                <form action="controller/ProjetActionController.php" method="post">
                                  <div class="form-group">
                                    <label for="recipient-name" class="control-label">Nom</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                  </div>
                                  <div class="form-group">
                                    <label for="recipient-name" class="control-label">Adresse</label>
                                    <input type="text" class="form-control" id="adresse" name="adresse">
                                  </div>
                                  <div class="form-group">
                                    <label for="recipient-name" class="control-label">Date de création</label>
                                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" id="dpYears" class="input-group date">
                                        <input type="text" name="dateCreation" value="12-02-2012" class="form-control" id="ssn2">
                                        <span class="input-group-addon add-on entypo-calendar "></span>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="message-text" class="control-label">Description</label>
                                    <textarea class="form-control" name="description" id="message-text"></textarea>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <input type="hidden" name="action" value="add">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                <input value="Enregistrer" type="submit" class="btn btn-primary" />
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>                     
                    </div>                
                </div>                
                <br>
                <div class="row">
                    <?php
                    foreach ( $projets as $projet ) {
                        $image = "";
                        if ( $imageManager->getImageNumberByIdProjet($projet->id()) >= 1 ) {
                            $image = $imageManager->getFirstImageByIdProjet($projet->id());
                            $image = '<img style="width: 200px; height:150px;" src="'.$image->url().'" />';    
                        }
                        else {
                            $image = '<span class="entypo-home middle-social"></span>';
                        }
                    ?>
                    <a href="projet-detail.php?idProjet=<?= $projet->id() ?>">
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-facebook">
                                <?= $image ?>    
                            </div>
                            <div class="panel-body">
                                <p><?= $projet->name() ?>
                                    <a href="#updateProject<?= $projet->id() ?>" data-toggle="modal" data-id="<?= $projet->id() ?>" class="link-social" title="Modifier">
                                        <span class="entypo-pencil"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="modal fade" id="updateProject<?= $projet->id() ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel">Modifier Projet</h4>
                          </div>
                          <div class="modal-body">
                            <form action="controller/ProjetActionController.php" method="post">
                              <div class="form-group">
                                <label for="recipient-name" class="control-label">Nom</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= $projet->name() ?>">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="control-label">Adresse</label>
                                <input type="text" class="form-control" id="adresse" name="adresse" value="<?= $projet->adresse() ?>">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="control-label">Date de création</label>
                                <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" id="dpYears" class="input-group date">
                                    <input type="text" name="dateCreation" value="<?= $projet->dateCreation() ?>" class="form-control" id="ssn2">
                                    <span class="input-group-addon add-on entypo-calendar "></span>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="message-text" class="control-label">Description</label>
                                <textarea class="form-control" name="description" id="message-text"><?= $projet->description() ?></textarea>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <input type="hidden" name="action" value="update">
                            <input type="hidden" name="idProjet" value="<?= $projet->id() ?>">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                            <input value="Enregistrer" type="submit" class="btn btn-primary" />
                          </div>
                          </form>
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
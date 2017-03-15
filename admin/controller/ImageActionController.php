<?php

    //classes loading begin
    function classLoad ($myClass) {
        if(file_exists('../model/'.$myClass.'.php')){
            include('../model/'.$myClass.'.php');
        }
        elseif(file_exists('../controller/'.$myClass.'.php')){
            include('../controller/'.$myClass.'.php');
        }
    }
    spl_autoload_register("classLoad"); 
    include('../../include/config.php');  
    include('../lib/image-processing.php');
    //include('../lib/image-processing.php');
    //classes loading end
    session_start();
    
    //post input processing
    $action = htmlentities($_POST['action']);
    //This var contains result message of CRUD action
    $actionMessage = "";
    $typeMessage = "";
    $idProjet = htmlentities($_POST['idProjet']);
    //Component Class Manager

    $imageManager = new ImageManager($pdo);
	//Action Add Processing Begin
    if($action == "add"){
        if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])) {
			$name = htmlentities($_POST['name']);
			//$url = htmlentities($_POST['qs-file']);
			$description = htmlentities($_POST['description']);
			$createdBy = $_SESSION['userAnnahdaSite']->login();
            $created = date('Y-m-d h:i:s');
            $imageUrl = imageProcessing($_FILES['image'], '/images/projects/');
            //create object
            $image = new Image(array(
				'name' => $name,
				'url' => $imageUrl,
				'description' => $description,
				'idProjet' => $idProjet,
				'created' => $created,
            	'createdBy' => $createdBy
			));
            //add it to db
            $imageManager->add($image);
            $actionMessage = "<strong>Opération Valide</strong> : Image Ajouté(e) avec succès.";  
            $typeMessage = "success";
        }
        else{
            $actionMessage = "<strong>Erreur Ajout Image</strong> : Vous devez séléctionnez une image.";
            $typeMessage = "danger";
        }
    }
    //Action Add Processing End
    //Action Update Processing Begin
    else if($action == "update"){
        $idImage = htmlentities($_POST['idImage']);
        if(!empty($_POST['name'])){
			$name = htmlentities($_POST['name']);
			$url = htmlentities($_POST['url']);
			$description = htmlentities($_POST['description']);
			$idProjet = htmlentities($_POST['idProjet']);
			$updatedBy = $_SESSION['userAnnahdaSite']->login();
            $updated = date('Y-m-d h:i:s');
            $image = new Image(array(
				'id' => $idImage,
				'name' => $name,
				'url' => $url,
				'description' => $description,
				'idProjet' => $idProjet,
				'updated' => $updated,
            	'updatedBy' => $updatedBy
			));
            $imageManager->update($image);
            $actionMessage = "<strong>Opération Valide</strong> : Image Modifié(e) avec succès.";
            $typeMessage = "success";
        }
        else{
            $actionMessage = "<strong>Erreur Modification Image</strong> : Vous devez remplir le champ 'name'.";
            $typeMessage = "danger";
        }
    }
    //Action Update Processing End
    //Action Delete Processing Begin
    else if($action == "delete"){
        $idImage = htmlentities($_POST['idImage']);
        $imageManager->delete($idImage);
        $actionMessage = "<strong>Opération Valide</strong> : Image supprimé(e) avec succès.";
        $typeMessage = "success";
    }
    //Action Delete Processing End
    $_SESSION['image-action-message'] = $actionMessage;
    $_SESSION['image-type-message'] = $typeMessage;
    header('Location:../projet-detail.php?idProjet='.$idProjet.'#images');


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

    $videoManager = new VideoManager($pdo);
	//Action Add Processing Begin
    if($action == "add"){
        if( !empty($_POST['name']) ){
			$name = htmlentities($_POST['name']);
			$url = htmlentities($_POST['url']);
			$description = htmlentities($_POST['description']);
			$createdBy = $_SESSION['userAnnahdaSite']->login();
            $created = date('Y-m-d h:i:s');
            //create object
            $video = new Video(array(
				'name' => $name,
				'url' => $url,
				'description' => $description,
				'idProjet' => $idProjet,
				'created' => $created,
            	'createdBy' => $createdBy
			));
            //add it to db
            $videoManager->add($video);
            $actionMessage = "<strong>Opération Valide</strong> : Video Ajouté(e) avec succès.";  
            $typeMessage = "success";
        }
        else{
            $actionMessage = "<strong>Erreur Ajout Video</strong> : Vous devez remplir le champ 'Lien'.";
            $typeMessage = "danger";
        }
    }
    //Action Add Processing End
    //Action Update Processing Begin
    else if($action == "update"){
        $idVideo = htmlentities($_POST['idVideo']);
        if(!empty($_POST['name'])){
			$name = htmlentities($_POST['name']);
			$url = htmlentities($_POST['url']);
			$description = htmlentities($_POST['description']);
			$idProjet = htmlentities($_POST['idProjet']);
			$updatedBy = $_SESSION['userAnnahdaSite']->login();
            $updated = date('Y-m-d h:i:s');
            $video = new Video(array(
				'id' => $idVideo,
				'name' => $name,
				'url' => $url,
				'description' => $description,
				'idProjet' => $idProjet,
				'updated' => $updated,
            	'updatedBy' => $updatedBy
			));
            $videoManager->update($video);
            $actionMessage = "<strong>Opération Valide</strong> : Video Modifié(e) avec succès.";
            $typeMessage = "success";
        }
        else{
            $actionMessage = "<strong>Erreur Modification Video</strong> : Vous devez remplir le champ 'name'.";
            $typeMessage = "danger";
        }
    }
    //Action Update Processing End
    //Action Delete Processing Begin
    else if($action == "delete"){
        $idVideo = htmlentities($_POST['idVideo']);
        $videoManager->delete($idVideo);
        $actionMessage = "<strong>Opération Valide</strong> : Video supprimé(e) avec succès.";
        $typeMessage = "success";
    }
    //Action Delete Processing End
    $_SESSION['video-action-message'] = $actionMessage;
    $_SESSION['video-type-message'] = $typeMessage;
    header('Location:../projet-detail.php?idProjet='.$idProjet.'#videos');


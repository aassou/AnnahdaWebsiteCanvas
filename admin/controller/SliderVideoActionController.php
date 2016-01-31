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

    //Component Class Manager

    $sliderVideoManager = new SliderVideoManager($pdo);
	//Action Add Processing Begin
    	if($action == "add"){
        if( !empty($_POST['name']) ){
			$name = htmlentities($_POST['name']);
			$url = htmlentities($_POST['url']);
			$description = htmlentities($_POST['description']);
			$createdBy = $_SESSION['userAnnahdaSite']->login();
            $created = date('Y-m-d h:i:s');
            //create object
            $sliderVideo = new SliderVideo(array(
				'name' => $name,
				'url' => $url,
				'description' => $description,
				'created' => $created,
            	'createdBy' => $createdBy
			));
            //add it to db
            $sliderVideoManager->add($sliderVideo);
            $actionMessage = "Opération Valide : SliderVideo Ajouté(e) avec succès.";  
            $typeMessage = "success";
        }
        else{
            $actionMessage = "Erreur Ajout sliderVideo : Vous devez remplir le champ 'name'.";
            $typeMessage = "error";
        }
    }
    //Action Add Processing End
    //Action Update Processing Begin
    else if($action == "update"){
        $idSliderVideo = htmlentities($_POST['idSliderVideo']);
        if(!empty($_POST['name'])){
			$name = htmlentities($_POST['name']);
			$url = htmlentities($_POST['url']);
			$description = htmlentities($_POST['description']);
			$updatedBy = $_SESSION['userAnnahdaSite']->login();
            $updated = date('Y-m-d h:i:s');
            			$sliderVideo = new SliderVideo(array(
				'id' => $idSliderVideo,
				'name' => $name,
				'url' => $url,
				'description' => $description,
				'updated' => $updated,
            	'updatedBy' => $updatedBy
			));
            $sliderVideoManager->update($sliderVideo);
            $actionMessage = "Opération Valide : SliderVideo Modifié(e) avec succès.";
            $typeMessage = "success";
        }
        else{
            $actionMessage = "Erreur Modification SliderVideo : Vous devez remplir le champ 'name'.";
            $typeMessage = "error";
        }
    }
    //Action Update Processing End
    //Action Delete Processing Begin
    else if($action == "delete"){
        $idSliderVideo = htmlentities($_POST['idSliderVideo']);
        $sliderVideoManager->delete($idSliderVideo);
        $actionMessage = "Opération Valide : SliderVideo supprimé(e) avec succès.";
        $typeMessage = "success";
    }
    //Action Delete Processing End
    $_SESSION['sliderVideo-action-message'] = $actionMessage;
    $_SESSION['sliderVideo-type-message'] = $typeMessage;
    header('Location:../media.php#videos');


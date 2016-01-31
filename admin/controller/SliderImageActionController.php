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

    $sliderImageManager = new SliderImageManager($pdo);
	//Action Add Processing Begin
    if($action == "add"){
        if( !empty($_POST['name']) ){
			$name = htmlentities($_POST['name']);
			$url = htmlentities($_POST['url']);
			$description = htmlentities($_POST['description']);
			$createdBy = $_SESSION['userAnnahdaSite']->login();
            $created = date('Y-m-d h:i:s');
            //create object
            $sliderImage = new SliderImage(array(
				'name' => $name,
				'url' => $url,
				'description' => $description,
				'created' => $created,
            	'createdBy' => $createdBy
			));
            //add it to db
            $sliderImageManager->add($sliderImage);
            $actionMessage = "<strong>Opération Valide</strong> : Slider Image Ajouté(e) avec succès.";  
            $typeMessage = "success";
        }
        else{
            $actionMessage = "<strong>Erreur Ajout Slider Image</strong> : Vous devez remplir le champ 'name'.";
            $typeMessage = "danger";
        }
    }
    //Action Add Processing End
    //Action Update Processing Begin
    else if($action == "update"){
        $idSliderImage = htmlentities($_POST['idSliderImage']);
        if(!empty($_POST['name'])){
			$name = htmlentities($_POST['name']);
			$url = htmlentities($_POST['url']);
			$description = htmlentities($_POST['description']);
			$updatedBy = $_SESSION['userAnnahdaSite']->login();
            $updated = date('Y-m-d h:i:s');
            $sliderImage = new SliderImage(array(
				'id' => $idSliderImage,
				'name' => $name,
				'url' => $url,
				'description' => $description,
				'updated' => $updated,
            	'updatedBy' => $updatedBy
			));
            $sliderImageManager->update($sliderImage);
            $actionMessage = "<strong>Opération Valide</strong> : Slider Image Modifié(e) avec succès.";
            $typeMessage = "success";
        }
        else{
            $actionMessage = "<strong>Erreur Modification Slider Image</strong> : Vous devez remplir le champ 'name'.";
            $typeMessage = "danger";
        }
    }
    //Action Update Processing End
    //Action Delete Processing Begin
    else if($action == "delete"){
        $idSliderImage = htmlentities($_POST['idSliderImage']);
        $sliderImageManager->delete($idSliderImage);
        $actionMessage = "<strong>Opération Valide</strong> : Slider Image supprimé(e) avec succès.";
        $typeMessage = "success";
    }
    //Action Delete Processing End
    $_SESSION['sliderImage-action-message'] = $actionMessage;
    $_SESSION['sliderImage-type-message'] = $typeMessage;
    header('Location:../media.php');


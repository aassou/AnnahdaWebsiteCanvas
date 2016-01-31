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

    $configManager = new ConfigManager($pdo);
	//Action Add Processing Begin
    if($action == "add"){
        if( !empty($_POST['indexContent']) ){
			$indexContent = htmlentities($_POST['indexContent']);
			$sliderType = htmlentities($_POST['sliderType']);
			$createdBy = $_SESSION['userAnnahdaSite']->login();
            $created = date('Y-m-d h:i:s');
            //create object
            $config = new Config(array(
				'indexContent' => $indexContent,
				'sliderType' => $sliderType,
				'created' => $created,
            	'createdBy' => $createdBy
			));
            //add it to db
            $configManager->add($config);
            $actionMessage = "Opération Valide : Config Ajouté(e) avec succès.";  
            $typeMessage = "success";
        }
        else{
            $actionMessage = "Erreur Ajout config : Vous devez remplir le champ 'indexContent'.";
            $typeMessage = "error";
        }
    }
    //Action Add Processing End
    //Action Update Processing Begin
    else if($action == "update"){
        $idConfig = htmlentities($_POST['idConfig']);
        if(!empty($_POST['indexContent'])){
			$indexContent = htmlentities($_POST['indexContent']);
			$sliderType = htmlentities($_POST['sliderType']);
			$updatedBy = $_SESSION['userAnnahdaSite']->login();
            $updated = date('Y-m-d h:i:s');
            $config = new Config(array(
				'id' => $idConfig,
				'indexContent' => $indexContent,
				'sliderType' => $sliderType,
				'updated' => $updated,
            	'updatedBy' => $updatedBy
			));
            $configManager->update($config);
            $actionMessage = "Opération Valide : Config Modifié(e) avec succès.";
            $typeMessage = "success";
        }
        else{
            $actionMessage = "Erreur Modification Config : Vous devez remplir le champ 'indexContent'.";
            $typeMessage = "error";
        }
    }
    //Action Update Processing End
    //Action ChangeIndexContent Processing Begin
    else if($action == "changeIndexContent"){
        $indexContent = htmlentities($_POST['indexContent']);
        $configManager->changeIndexContent($indexContent);
        $actionMessage = "Opération Valide : Configuration Modifié(e) avec succès.";
        $typeMessage = "success";
    }
    //Action ChangeIndexContent Processing End
    //Action ChangeSliderType Processing Begin
    else if($action == "changeSliderType"){
        $sliderType = htmlentities($_POST['sliderType']);
        $configManager->changeSliderType($sliderType);
        $actionMessage = "Opération Valide : Configuration Modifié(e) avec succès.";
        $typeMessage = "success";
    }
    //Action ChangeSliderType Processing End
    //Action Delete Processing Begin
    else if($action == "delete"){
        $idConfig = htmlentities($_POST['idConfig']);
        $configManager->delete($idConfig);
        $actionMessage = "Opération Valide : Config supprimé(e) avec succès.";
        $typeMessage = "success";
    }
    //Action Delete Processing End
    $_SESSION['config-action-message'] = $actionMessage;
    $_SESSION['config-type-message'] = $typeMessage;
    header('Location:../configuration.php');


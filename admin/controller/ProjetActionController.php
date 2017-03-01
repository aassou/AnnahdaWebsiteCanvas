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

    $projetManager = new ProjetManager($pdo);
	//Action Add Processing Begin
    if($action == "add"){
        if( !empty($_POST['name']) ){
			$name = htmlentities($_POST['name']);
			$description = htmlentities($_POST['description']);
			$adresse = htmlentities($_POST['adresse']);
			$dateCreation = htmlentities($_POST['dateCreation']);
            $avancementConstruction = htmlentities($_POST['avancementConstruction']);
            $avancementFinition = htmlentities($_POST['avancementFinition']);
			$createdBy = $_SESSION['userAnnahdaSite']->login();
            $created = date('Y-m-d h:i:s');
            //create object
            $projet = new Projet(array(
				'name' => $name,
				'description' => $description,
				'adresse' => $adresse,
				'dateCreation' => $dateCreation,
				'avancementConstruction' => $avancementConstruction,
				'avancementFinition' => $avancementFinition,
				'created' => $created,
            	'createdBy' => $createdBy
			));
            //add it to db
            $projetManager->add($projet);
            $actionMessage = "<strong>Opération Valide</strong> : Projet Ajouté(e) avec succès.";  
            $typeMessage = "success";
        }
        else{
            $actionMessage = "<strong>Erreur Ajout projet</strong> : Vous devez remplir le champ 'Nom'.";
            $typeMessage = "danger";
        }
    }
    //Action Add Processing End
    //Action Update Processing Begin
    else if($action == "update"){
        $idProjet = htmlentities($_POST['idProjet']);
        if(!empty($_POST['name'])){
			$name = htmlentities($_POST['name']);
			$description = htmlentities($_POST['description']);
			$adresse = htmlentities($_POST['adresse']);
			$dateCreation = htmlentities($_POST['dateCreation']);
            $avancementConstruction = htmlentities($_POST['avancementConstruction']);
            $avancementFinition = htmlentities($_POST['avancementFinition']);
			$updatedBy = $_SESSION['userAnnahdaSite']->login();
            $updated = date('Y-m-d h:i:s');
            $projet = new Projet(array(
				'id' => $idProjet,
				'name' => $name,
				'description' => $description,
				'adresse' => $adresse,
				'dateCreation' => $dateCreation,
				'avancementConstruction' => $avancementConstruction,
                'avancementFinition' => $avancementFinition,
				'updated' => $updated,
            	'updatedBy' => $updatedBy
			));
            $projetManager->update($projet);
            $actionMessage = "<strong>Opération Valide</strong> : Projet Modifié(e) avec succès.";
            $typeMessage = "success";
        }
        else{
            $actionMessage = "<strong>Erreur Modification Projet</strong> : Vous devez remplir le champ 'name'.";
            $typeMessage = "danger";
        }
    }
    //Action Update Processing End
    //Action UpdateAvancement Processing Begin
    else if($action == "updateAvancement"){
        $idProjet = htmlentities($_POST['idProjet']);
        if( !empty($_POST['avancementConstruction']) and !empty($_POST['avancementFinition']) ){
            $avancementConstruction = htmlentities($_POST['avancementConstruction']);
            $avancementFinition = htmlentities($_POST['avancementFinition']);
            $projetManager->updateAvancementProjet($idProjet, $avancementConstruction, $avancementFinition);
            $actionMessage = "<strong>Opération Valide</strong> : Avancement Projet Modifié(e) avec succès.";
            $typeMessage = "success";
        }
        else{
            $actionMessage = "<strong>Erreur Modification Avancement Projet</strong> : Vous devez remplir les champs 'Avancement Construction' et 'Avancement Finition'.";
            $typeMessage = "danger";
        }
    }
    //Action UpdateAvancement Processing End
    //Action Delete Processing Begin
    else if($action == "delete"){
        $idProjet = htmlentities($_POST['idProjet']);
        $projetManager->delete($idProjet);
        $actionMessage = "<strong>Opération Valide</strong> : Projet supprimé(e) avec succès.";
        $typeMessage = "success";
    }
    //Action Delete Processing End
    $_SESSION['projet-action-message'] = $actionMessage;
    $_SESSION['projet-type-message'] = $typeMessage;
    header('Location:../projets.php');


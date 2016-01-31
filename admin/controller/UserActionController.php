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
    include("../../include/config.php");
    //classes loading end
    session_start();
    
    //post input processing
    $action = htmlentities($_POST['action']);
    //This var contains result message of CRUD action
    $actionMessage = "";
    $typeMessage = "";
    $redirectLink = "Location:../index.php";
    //Action SignIn Processing Begin
    if ( $action == "signin" ) {
        if( empty($_POST['login']) || empty($_POST['password']) ){
            $actionMessage = "<strong>Erreur Connexion : </strong> Tous les champs sont obligatoires.";
            $typeMessage = "danger";
        }
        else{
            $login = htmlspecialchars($_POST['login']);
            $password = htmlspecialchars($_POST['password']);
            $userManager = new UserManager($pdo);
            if($userManager->exists($login, $password)){
                if($userManager->getStatus($login)!=0){
                    $_SESSION['userAnnahdaSite'] = $userManager->getUserByLoginPassword($login, $password);
                    $redirectLink='Location:../dashboard.php';   
                }
                else{
                    $actionMessage = "<strong>Erreur Connexion : </strong>Votre compte est inactif.";
                    $typeMessage = "danger";  
                }
            }
            else{
                $actionMessage = "<strong>Erreur Connexion : </strong>Login ou Mot de passe invalide.";
                $typeMessage = "danger";
            }
        }    
    }
    //Action SignIn Processing End
    $_SESSION['user-action-message'] = $actionMessage;
    $_SESSION['user-type-message'] = $typeMessage;
    header($redirectLink);
?>
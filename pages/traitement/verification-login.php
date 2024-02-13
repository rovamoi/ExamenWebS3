<?php
    session_start();
    include("fonction.php");
    
    $mail=$_POST["email"];
    $pwd=$_POST["pwd"];
    $is_admin=$_POST["is_admin"];
    if(verification ($mail , $pwd)){
        if($is_admin=="admin"){
            Header('Location:../web/accueil-admin.html');
        }else{
            $_SESSION["id_user"]=getIdUser($mail,$pwd)['id_utilisateur'];
            Header('Location:../web/accueil-user.html');
        }
    }else{
        if($is_admin=="admin"){
            Header('Location:../web/index-admin.php?error=1');
        }else{
            Header('Location:../web/index-user.php?error=1');
        }        
    }
?>
<?php
    include("fonction.php");
    $listeCueilleur=getCueilleurs();

    if(isset($_POST['action'])){
        if($_POST['action']==null){
            ajouterCueilleur($_POST['nom'], $_POST['genre'], $_POST['date_naissance']);
            Header('Location:../web/admin/gestion-cueilleur.php');
        }else if($_POST['action']=="delete"){
            supprimerCueilleur($_POST['id']);
        }else if($_POST['action']=="update"){
            modifierCueilleur($_POST['id_cueilleur'], $_POST['nom'], $_POST['genre'], $_POST['date_naissance']);
            Header('Location:../web/admin/gestion-cueilleur.php');
        }
    }
    echo json_encode($listeCueilleur);
?>
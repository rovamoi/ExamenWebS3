<?php
    include("fonction.php");
    $listeCategorie=getCategoriesDepenses();

    if(isset($_POST['action'])){
        if($_POST['action']==null){
            ajouterCategorieDepense($_POST['nom']);
            Header('Location:../web/admin/gestion-categorie.php');
        }else if($_POST['action']=="delete"){
            supprimerCategorieDepense($_POST['id']);
        }else if($_POST['action']=="update"){
            modifierCategorieDepense($_POST['id_categorie'],$_POST['nom']);
            Header('Location:../web/admin/gestion-categorie.php');
        }
    }
    echo json_encode($listeCategorie);
?>
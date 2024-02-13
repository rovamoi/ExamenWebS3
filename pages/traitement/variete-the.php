<?php
    include("fonction.php");
    $listeVarieteThe=getVarieteThe();

    if(isset($_POST['action'])){
        if($_POST['action']==null){
            ajouterVariation($_POST['nom_var'],$_POST['Occupation_var'],$_POST['rendement_kg_mois']);
            Header('Location:../web/admin/gestion-variete.php');
        }else if($_POST['action']=="delete"){
            supprimerVarieteThe($_POST['id']);
        }else if($_POST['action']=="update"){
            modifierVarieteThe($_POST['id_variete'],$_POST['nom_var'],$_POST['Occupation_var'],$_POST['rendement_kg_mois']);
            Header('Location:../web/admin/gestion-variete.php');
        }
    }
    echo json_encode($listeVarieteThe);
?>
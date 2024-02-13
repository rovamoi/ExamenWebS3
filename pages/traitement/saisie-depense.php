<?php
    session_start();
    include('fonction.php');
    $listeCategories=getCategoriesDepenses();
    $alert_message="";

    if(isset($_POST['action']) && $_POST['action']=="insert"){
        $date_depense=$_POST['date'];
        $id_categorie=$_POST['selectCategorie'];
        $montant=$_POST['montant_depense'];

        ajouterDepenses($_SESSION['id_user'],$id_categorie,$montant,$date_depense);
        
    }

    $response = array(
        'listeCategories' => $listeCategories,
        'error' =>$alert_message
    );
    echo json_encode($response);
?>
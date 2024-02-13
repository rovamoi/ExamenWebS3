<?php
    session_start();
    include('fonction.php');
    $listeCueilleurs=getCueilleurs();
    $listeParcelles=getParcelles();
    $alert_message="";

    if(isset($_POST['action']) && $_POST['action']=="insert"){
        $dateFin=$_POST['date'];
        $dateDebut=date('Y-m-01', strtotime($dateFin));
        $id_parcelle=$_POST['selectParcelle'];
        $id_cueilleur=$_POST['selectCueilleur'];

        $reste=poidsRestantParcelle($id_parcelle, $dateDebut, $dateFin);

        $poids_voulu=$_POST['poids_cueilli'];

        if($poids_voulu > $reste) {
            // Si le poids voulu est supérieur au reste, stockez le message d'alerte dans une variable
            $alert_message = "Le poids voulu est supérieur au poids restant sur la parcelle. Veuillez choisir un poids inférieur.";
        }else{
            ajouterCueillettes($_SESSION["id_user"],$id_cueilleur,$id_parcelle,$poids_voulu,$dateFin);
        }
    }

    $response = array(
        'listeCueilleurs' => $listeCueilleurs,
        'listeParcelles' => $listeParcelles,
        'error' =>$alert_message
    );
    echo json_encode($response);
?>
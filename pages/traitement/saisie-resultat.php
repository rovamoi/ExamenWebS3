<?php
    session_start();
    include('fonction.php');
    $alert_message="";
    $poidsTotal=0;

    if(isset($_POST['action']) && $_POST['action']=="insert"){
        $dateFin=$_POST['date_fin'];
        $dateDebut=$_POST['date_debut'];
        $poidsTotal=poidsTotalCueillette($dateDebut, $dateFin);
        $listeIds=getParcelleIds();

        $listeTotalPoids=poidsTotalCueilletteParParcelle($listeIds,$dateDebut,$dateFin);

        $coutDeRevient=coutDeRevient($dateDebut,$dateFin);
    }

    $response = array(
        'poidsTotal' => $poidsTotal,
        'listeTotalPoids' => $listeTotalPoids,
        'coutDeRevient' => $coutDeRevient,
        'error' =>$alert_message
    );
    echo json_encode($response);
?>
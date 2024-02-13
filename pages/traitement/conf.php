<?php
    include("fonction.php");
    $listeConf=getSalaireParKg();

    if(isset($_POST['action'])){
            configurerSalaireParKg($_POST['montant_kg']);
            Header('Location:../web/admin/config.php'); 
    }
    echo json_encode($listeConf);
?>
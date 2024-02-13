<?php
    include("fonction.php");
    $listeParcelleThe = getParcelles();
    $nom_variete = array();
    $listeVarieteThe=getVarieteThe();

    if (isset($_POST['id_varietes'])) {
        // Assurez-vous que $_POST['id_varietes'] est un tableau
        $id_varietes = json_decode($_POST['id_varietes'], true);
        // Récupérer les noms des variétés
        $nom_varietes = getNomVariete($id_varietes);
    } else {
        $nom_varietes = [];
    }

    if (isset($_POST['action'])) {
        if ($_POST['action'] == null) {
            ajouterParcelles($_POST['numero'], $_POST['surface_hectare'], $_POST['id_variete']);
            Header('Location:../web/admin/gestion-parcelle.php');
        } else if ($_POST['action'] == "delete") {
            supprimerParcelles($_POST['id']);
        } else if ($_POST['action'] == "update") {
            modifierParcelles($_POST['id_parcelle'], $_POST['numero'], $_POST['surface_hectare'], $_POST['id_variete']);
            Header('Location:../web/admin/gestion-parcelle.php');
        }
    }

    // Retournez les données sous forme de tableau associatif
    $response = array(
        'dataParcelle' => $listeParcelleThe,
        'nom_variete' => $nom_variete,
        'listeVariete' => $listeVarieteThe
    );
    echo json_encode($response);
?>

<?php 
    include("../../inc/connexion.php");

    function getLogin($num){
        $requete = "SELECT mail,mot_de_passe FROM Utilisateurs WHERE is_admin='".$num."'";
        $membres = mysqli_query(dbconnect() , $requete);
        $membre = mysqli_fetch_assoc($membres);
        return $membre;
    }

    //verification login
    function verification ($email , $mot_de_passe)
    {
        $requete = "select * from Utilisateurs where mail='".$email."' and mot_de_passe='".$mot_de_passe."'";
        $membres = mysqli_query(dbConnect() , $requete);
        if(mysqli_num_rows($membres)>0){
            return true;
        }
        return false;
    }

    function getIdUser($email , $mot_de_passe)
    {
        $requete = "select id_utilisateur from Utilisateurs where mail='".$email."' and mot_de_passe='".$mot_de_passe."'";
        $membres = mysqli_query(dbConnect() , $requete);
        $membre = mysqli_fetch_assoc($membres);
        return $membre;
    }
    
    //Gestion de variété de thé 
    function ajouterVariation($nom,$occupation,$rendement){
        $requete="INSERT INTO Variete_de_the(nom,occupation_m2,rendement_kg_mois) VALUES ('".$nom."','".$occupation."','".$rendement."')";
        mysqli_query(dbconnect(),$requete);
    }

    function modifierVarieteThe($id,$nom,$occupation,$rendement){
        $requete="UPDATE Variete_de_the SET nom='".$nom."',occupation_m2='".$occupation."',rendement_kg_mois='".$rendement."' WHERE id_variete='".$id."'";
        mysqli_query(dbconnect(),$requete);
    }

    function supprimerVarieteThe($id){
        $requete="DELETE FROM Variete_de_the WHERE id_variete='".$id."'";
        mysqli_query(dbconnect(),$requete);
    }

    function getVarieteThe(){
        $valiny=array();
        $requete="SELECT * FROM Variete_de_the";
        $membres = mysqli_query(dbconnect() , $requete );
        while($membre = mysqli_fetch_assoc($membres))
        {
            $valiny[] =$membre;
        }
        return $valiny;
    }

    //gestion parcelle
    function ajouterParcelles($numero,$surface,$idvariete){
        $requete="INSERT INTO Parcelles(id_parcelle,numéro,surface_hectare,id_variete) VALUES ('".$numero."','".$surface."','".$idvariete."')";
        mysqli_query(dbconnect(),$requete);
    }

    function modifierParcelles($id_parcelle,$numero,$surface_hectare,$id_variete){
        $requete="UPDATE Parcelles SET numéro='".$numero."',surface_hectare='".$surface_hectare."',id_variete='".$id_variete."' WHERE id_parcelle='".$id_parcelle."'";
        mysqli_query(dbconnect(),$requete);
    }

    function supprimerParcelles($id_parcelle){
        $requete="DELETE FROM Parcelles WHERE id_parcelle='".$id_parcelle."'";
        mysqli_query(dbconnect(),$requete);
    }

    function getParcelles(){
        $valiny=array();
        $requete="SELECT * FROM Parcelles";
        $resultat = mysqli_query(dbconnect() , $requete );
        while($parcelle = mysqli_fetch_assoc($resultat))
        {
            $valiny[] =$parcelle;
        }
        return $valiny;
    }

    function getParcelleIds(){
        $ids_parcelles = array(); // Initialisation du tableau pour stocker les IDs de parcelles
        $requete = "SELECT id_parcelle FROM Parcelles"; // Sélectionner seulement les IDs de parcelles
        $resultat = mysqli_query(dbconnect(), $requete);
        
        // Parcourir les résultats et stocker les IDs de parcelles dans le tableau
        while($row = mysqli_fetch_assoc($resultat)) {
            $ids_parcelles[] = $row['id_parcelle'];
        }
        
        return $ids_parcelles;
    }
    

    function getNomVariete($id_variete){
        $requete="SELECT nom FROM Variete_de_the WHERE id_variete='".$id_variete."'";
        $vals=mysqli_query(dbconnect(),$requete);
        $val = mysqli_fetch_assoc($vals);
        return $val;
    }

    //gestion cueilleurs
    function ajouterCueilleur($nom, $genre, $date_naissance) {
        $requete="INSERT INTO Cueilleurs(nom, genre, date_naissance) VALUES ('".$nom."','".$genre."','".$date_naissance."')";
        mysqli_query(dbconnect(),$requete);
    }
    
    function modifierCueilleur($id, $nom, $genre, $date_naissance) {
        $requete="UPDATE Cueilleurs SET nom='".$nom."', genre='".$genre."', date_naissance='".$date_naissance."' WHERE id_cueilleur='".$id."'";
        mysqli_query(dbconnect(),$requete);
    }
    
    function supprimerCueilleur($id) {
        $requete="DELETE FROM Cueilleurs WHERE id_cueilleur='".$id."'";
        mysqli_query(dbconnect(),$requete);
    }
    
    function getCueilleurs() {
        $valiny=array();
        $requete="SELECT * FROM Cueilleurs";
        $membres = mysqli_query(dbconnect(), $requete);
        while($membre = mysqli_fetch_assoc($membres)) {
            $valiny[] =$membre;
        }
        return $valiny;
    }

    //gestion cathegorie depense
    function ajouterCategorieDepense($nom) {
        $requete="INSERT INTO Categories_de_depenses(nom) VALUES ('".$nom."')";
        mysqli_query(dbconnect(),$requete);
    }
    
    function modifierCategorieDepense($id, $nom) {
        $requete="UPDATE Categories_de_depenses SET nom='".$nom."' WHERE id_categorie='".$id."'";
        mysqli_query(dbconnect(),$requete);
    }
    
    function supprimerCategorieDepense($id) {
        $requete="DELETE FROM Categories_de_depenses WHERE id_categorie='".$id."'";
        mysqli_query(dbconnect(),$requete);
    }
    
    function getCategoriesDepenses() {
        $valiny=array();
        $requete="SELECT * FROM Categories_de_depenses";
        $membres = mysqli_query(dbconnect(), $requete);
        while($membre = mysqli_fetch_assoc($membres)) {
            $valiny[] =$membre;
        }
        return $valiny;
    }

    //configuration montant salaire
    function configurerSalaireParKg($montant) {
        $requete="UPDATE Salaire_cueilleur_par_kg SET montant_kg='".$montant."' WHERE id_salaire=1";
        mysqli_query(dbconnect(),$requete);
    }
    
    function getSalaireParKg() {
        $requete="SELECT montant_kg FROM Salaire_cueilleur_par_kg WHERE id_salaire=1";
        $resultat = mysqli_query(dbconnect(),$requete);
        $row = mysqli_fetch_assoc($resultat);
        return $row['montant_kg'];
    }

    //configuration cueillettes
    function ajouterCueillettes($id_utilisateur,$id_cueilleur,$id_parcelle,$poids_cueilli,$date_cueillette){
        $requete="INSERT INTO Cueillettes(id_utilisateur,id_cueilleur,id_parcelle,poids_cueilli,date_cueillette) VALUES ('".$id_utilisateur."','".$id_cueilleur."','".$id_parcelle."','".$poids_cueilli."','".$date_cueillette."')";
        mysqli_query(dbconnect(),$requete);
    }


    //configuration depense
    function ajouterDepenses($id_utilisateur,$id_categorie,$montant,$date_depense){
        $requete="INSERT INTO Depenses(id_utilisateur,id_categorie,montant,date_depense) VALUES ('".$id_utilisateur."','".$id_categorie."','".$montant."','".$date_depense."')";
        mysqli_query(dbconnect(),$requete);
    }

    //calcul depense
    function calculDepense($dateDebut, $dateFin){
        $connexion = dbconnect();
        $requete="SELECT SUM(montant) as totalDepense FROM Depenses WHERE date_depense > '$dateDebut' AND date_depense < '$dateFin'";
        $resultat = mysqli_query($connexion, $requete);
        $row = mysqli_fetch_assoc($resultat);
        $poidsTotal = $row['totalDepense'];
        return $poidsTotal;
    }

    // Calcul du poids total de la cueillette
    function poidsTotalCueillette($dateDebut, $dateFin) {
        $connexion = dbconnect();
        $requete = "SELECT SUM(poids_cueilli) AS poids_total FROM Cueillettes WHERE date_cueillette > '$dateDebut' AND date_cueillette < '$dateFin'";
        $resultat = mysqli_query($connexion, $requete);
        $row = mysqli_fetch_assoc($resultat);
        $poidsTotal = $row['poids_total'];
        return $poidsTotal;
    }

    // Calcul du poids total de la cueillette
    function poidsTotalCueilletteParParcelle($ids_parcelles, $dateDebut, $dateFin) {
        $connexion = dbconnect();
        $resultats = array(); // Initialisation du tableau pour stocker les résultats
        
        // Parcours de chaque ID de parcelle
        foreach ($ids_parcelles as $id_parcelle) {
            $requete = "SELECT SUM(poids_cueilli) AS poids_total FROM Cueillettes WHERE date_cueillette > '$dateDebut' AND date_cueillette < '$dateFin' AND id_parcelle='$id_parcelle'";
            $resultat = mysqli_query($connexion, $requete);
            $row = mysqli_fetch_assoc($resultat);
            $poidsTotal = $row['poids_total'];
            
            // Stockage du résultat pour cette parcelle dans le tableau associatif
            $resultats[$id_parcelle] = $poidsTotal;
        }
        
        return $resultats;
    }
    

    // Calcul du rendement
    function Rendement($id_parcelle) {
        $connexion = dbconnect();
        $requete = "SELECT V.rendement_kg_mois, V.occupation_m2, P.surface_hectare FROM Parcelles P INNER JOIN Variete_de_the V ON P.id_variete=V.id_variete WHERE P.id_parcelle='$id_parcelle'";
        $resultat = mysqli_query($connexion, $requete);
        $row = mysqli_fetch_assoc($resultat);
        $rendement = ($row['rendement_kg_mois'] * $row['surface_hectare'] * 10000) / $row['occupation_m2'];
        return $rendement;
    }

    // Calcul du poids restant sur la parcelle
    function poidsRestantParcelle($id_parcelle, $dateDebut, $dateFin) {
        $rendement = Rendement($id_parcelle);
        $poidTotalCueillette = poidsTotalCueilletteParParcelle($id_parcelle,$dateDebut, $dateFin);
        $poidsRestant = $rendement - $poidTotalCueillette;
        return $poidsRestant;
    }

        //calcul cout de revien par kg
    function coutDeRevient($dateDebut, $dateFin){
        $poidsTotal = poidsTotalCueillette($dateDebut, $dateFin);
        
        // Vérifier si le poids total de la cueillette est différent de zéro
        if ($poidsTotal != 0) {
            $dep = calculDepense($dateDebut, $dateFin);
            $sal = $poidsTotal * getSalaireParKg();
            $val = ($dep + $sal) / $poidsTotal;
            return $val;
        } else {
            // Si le poids total est zéro, retourner une valeur spéciale ou traiter le cas différemment selon vos besoins
            return "Poids total de la cueillette est zéro, division par zéro impossible.";
        }
    }



?>  
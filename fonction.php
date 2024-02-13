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
        $dateDebut=getDernierSaison($dateFin);
        $connexion = dbconnect();
        $requete="SELECT SUM(montant) as totalDepense FROM Depenses WHERE date_depense > '$dateDebut' AND date_depense < '$dateFin'";
        $resultat = mysqli_query($connexion, $requete);
        $row = mysqli_fetch_assoc($resultat);
        $poidsTotal = $row['totalDepense'];
        return $poidsTotal;
    }

    // Calcul du poids total de la cueillette
    function poidsTotalCueillette($dateDebut, $dateFin) {
        $dateDebut=getDernierSaison($dateFin);
        $connexion = dbconnect();
        $requete = "SELECT SUM(poids_cueilli) AS poids_total FROM Cueillettes WHERE date_cueillette > '$dateDebut' AND date_cueillette < '$dateFin'";
        $resultat = mysqli_query($connexion, $requete);
        $row = mysqli_fetch_assoc($resultat);
        $poidsTotal = $row['poids_total'];
        return $poidsTotal;
    }

    // Calcul du poids total de la cueillette
    function poidsTotalCueilletteParParcelle($ids_parcelles, $dateDebut, $dateFin) {
        $dateDebut=getDernierSaison($dateFin);
        $connexion = dbconnect();
        $resultats = array();
        
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
    function poidsRestantParcelle($id_parcelle, $dateDebut, $dateFin){
        $dateDebut=getDernierSaison($dateFin);
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

    
    //generateur saison
    function genererSaison(){
        $requete="SELECT * FROM Saison";
        $saisons = mysqli_query(dbconnect(), $requete);
        while($saison = mysqli_fetch_assoc($saisons)) {
            $valiny[] =$saison;
        }
        return $valiny;
    }

    function getSaisonById($id){
        $connexion = dbconnect();
        $requete="SELECT nom_saison FROM Saison WHERE id_saison='".$id."'";
        $resultat = mysqli_query($connexion, $requete);
        $row = mysqli_fetch_assoc($resultat);
        $nom_saison = $row['nom_saison'];
        return $nom_saison;
    }


    //configuration saison
    function config_saison($id_saison,$mois){
        $requete="INSERT INTO Configuration_saison(id_saison,mois) VALUES ('".$id_saison."','".$mois."')";
        mysqli_query(dbconnect(),$requete);    
    }

    //configuration cueillettes
    function configuration_cueillettes($poids_min_journalier,$pourcentage_bonus,$pourcentage_malus){
        $requete ="INSERT INTO Configuration_cueillettes(poids_min_journalier,pourcentage_bonus,pourcentage_malus) VALUES ('".$poids_min_journalier."','".$pourcentage_bonus."','".$pourcentage_malus."')";     
        mysqli_query(dbconnect(),$requete);
    }

    //rajout de prix de vente par variete de the
    function Prix_vente_variete_the($id_variete,$prix_vente){
        $requete ="INSERT INTO Prix_vente_variete_the(id_variete,prix_vente) VALUES ('".$id_variete."','".$prix_vente."')";
        mysqli_query(dbconnect(),$requete);
    }

    function getCueilleurIds(){
        $ids_Cueilleurs = array(); // Initialisation du tableau pour stocker les IDs de Cueilleurs
        $requete = "SELECT id_cueilleur FROM Cueilleurs"; // Sélectionner seulement les IDs de Cueilleurs
        $resultat = mysqli_query(dbconnect(), $requete);
        
        // Parcourir les résultats et stocker les IDs de Cueilleurs dans le tableau
        while($row = mysqli_fetch_assoc($resultat)) {
            $ids_Cueilleurs[] = $row['id_cueilleur'];
        }
        return $ids_Cueilleurs;
    }
    

    //calcule poids total cueillette par cueilleur
    function poidsCueilletteParCueilleur($dateDebut, $dateFin, $id_cueilleur) {
        $valiny = array();
        $connexion = dbconnect();
        $requete = "SELECT date_cueillette, poids_cueilli FROM Cueillettes WHERE date_cueillette > '$dateDebut' AND date_cueillette < '$dateFin' AND id_cueilleur='$id_cueilleur'";
        $resultats = mysqli_query($connexion, $requete);
        while ($resultat = mysqli_fetch_array($resultats)) {
            $valiny[] = $resultat;
        }
    
        $requete3 = "SELECT nom FROM Cueilleurs WHERE id_cueilleur='$id_cueilleur'";
        $resultat3 = mysqli_query(dbconnect(), $requete3);
        $val3 = mysqli_fetch_assoc($resultat3);
    
        $requete2 = "SELECT * FROM Configuration_cueillettes";
        $resultat2 = mysqli_query(dbconnect(), $requete2);
        $val2 = mysqli_fetch_assoc($resultat2);
    
        $salaire = getSalaireParKg();
        $reponse = array();
    
        for ($i = 0; $i < count($valiny); $i++) {
            if ($valiny[$i]['poids_cueilli'] < $val2['poids_min_journalier']) {
                $val2['pourcentage_bonus'] = 0;
            }
            if ($valiny[$i]['poids_cueilli'] > $val2['poids_min_journalier']) {
                $val2['pourcentage_malus'] = 0;
            }
            
            $montant = ($valiny[$i]['poids_cueilli'] +($valiny[$i]['poids_cueilli'] * $val2['pourcentage_bonus']) -($valiny[$i]['poids_cueilli'] * $val2['pourcentage_malus'])) * $salaire;
    
            $reponse['date'][$i] = $valiny[$i]['date_cueillette'];
            $reponse['nom'][$i] = $val3['nom'];
            $reponse['poids'][$i] = $valiny[$i]['poids_cueilli'];
            $reponse['bonus'][$i] = $val2['pourcentage_bonus'];
            $reponse['malus'][$i] = $val2['pourcentage_malus'];
            $reponse['montant'][$i] = $montant;
        }
        return $reponse;
    }


    function getConfigSaison($mois){
        $requete="SELECT id_saison FROM Configuration_saison WHERE id_saison <= '$mois' ORDER BY id_saison DESC LIMIT 1";
        $resultat=mysqli_query(dbconnect(),$requete);    
        $row = mysqli_fetch_assoc($resultat);
        $idSaison = $row['id_saison'];
        return $idSaison;
    }


    function getPrixVariation($id_variete){
        $requete="SELECT prix_vente FROM Prix_vente_variete_the WHERE id_variete='$id_variete'";
        $resultat=mysqli_query(dbconnect(),$requete);
        $val=mysqli_fetch_assoc($resultat);
        $reponse=$val['prix_vente'];
        return $reponse;
    }



    //calcul dernier saison 
    function getDernierSaison($dateFin){
        $annee=date("Y",strtotime($dateFin));
        $mois=date("m",strtotime($dateFin));
        $moisSaison=getConfigSaison($mois);
        $dateSaison=date('Y-m-d',strtotime("$annee-$mois-01"));
        return $dateSaison;
    }

    //calcul montant de vente
    function montantDeVente($dateDebut, $dateFin){
        $parcelle=array();
        $parcelle=getParcelles();
        $montant=0;
        for($i=0;$i<count($parcelle);$i++){
            $montant=$montant+ (poidsTotalCueilletteParParcelle($parcelle['id_parcelle'][$i],$dateDebut, $dateFin) * getPrixVariation($parcelle['id_variete'][$i]));
        }
        return $montant;
    }
    

    //calcul benefice 
    function benefice(){
        $benefice=(montantDeVente($dateDebut, $dateFin) - calculDepense($dateDebut, $dateFin));
        return $benefice;
    }

?>  
<?php
    session_start();
    include('../connexion.php');
    if(isset($_POST['ajouter']))
    {

        $mark = $_POST['mark'];  
        $model  = $_POST['model'];
        $code_inventaire  = $_POST['code_inventaire'];
        $num_serie = $_POST['num_serie'];
        $emplacement = $_POST['emplacement'];
        $etat = $_POST['etat'];
        $annee_inventaire = $_POST['annee_inventaire'];
        $date_achat = $_POST['date_achat'];
        $garantie= $_POST['garantie'];
        $date_creation = $_POST['date_creation'];
        $nom_utilisateur = $_POST['nom_utilisateur'];
        $cat = 7;

        $sql="INSERT INTO `inventaire` (`mark`, `model`, `code_inventaire`, `num_serie`, `emplacement`, `etat`, `annee_inventaire`, `date_achat`, `garantie`, `date_creation`, `nom_utilisateur`,`categorie`)
                VALUES (:mark, :model,:code_inventaire, :num_serie, :emplacement, :etat, :annee_inventaire, :date_achat, :garantie, :date_creation, :nom_utilisateur,:categorie)";
        $res = $dbh->prepare($sql);

        $exec = $res->execute(array
          ( ":mark"=>$mark,
            ":model"=>$model,
            ":code_inventaire"=>$code_inventaire,
            ":num_serie"=>$num_serie,
            ":emplacement"=>$emplacement,
            ":etat"=>$etat,
            ":annee_inventaire"=>$annee_inventaire,
            ":date_achat"=>$date_achat,
            ":garantie"=>$garantie,
            ":date_creation"=>$date_creation,
            ":nom_utilisateur"=>$nom_utilisateur,
            ":categorie"=> $cat

            ));

            if($exec){
                header("location: ../serveur.php");
              }else{
                echo "Échec de l'opération d'insertion";
              }

      
            
    }  
        
            
    
    ?>
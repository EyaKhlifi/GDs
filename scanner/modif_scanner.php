<?php
    session_start();
    include('../connexion.php');
    if(isset($_POST['Modifier']))
    {
        $id=$_POST['id'];
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
        
        $cat = 6;
    $stmt = $dbh->prepare("UPDATE `inventaire` 
                            SET `mark`=:mark,
                                `model`=:model,
                                `code_inventaire`=:code_inventaire,
                                `num_serie`=:num_serie,
                                `emplacement`=:emplacement,
                                `etat`=:etat,
                                `annee_inventaire`=:annee_inventaire,
                                `date_achat`=:date_achat,
                                `garantie`=:garantie,
                                `date_creation`=:date_creation,
                                `nom_utilisateur`=:nom_utilisateur
                            WHERE `id`=:id"
                        );

     $stmt->bindParam(':mark', $mark);
     $stmt->bindParam(':model', $model);
     $stmt->bindParam(':code_inventaire', $code_inventaire);
     $stmt->bindParam(':num_serie', $num_serie);
     $stmt->bindParam(':emplacement', $emplacement);
     $stmt->bindParam(':etat', $etat);
     $stmt->bindParam(':annee_inventaire', $annee_inventaire);
     $stmt->bindParam(':date_achat', $date_achat);
     $stmt->bindParam(':garantie', $garantie);
     $stmt->bindParam(':date_creation', $date_creation);
     $stmt->bindParam(':nom_utilisateur', $nom_utilisateur);
     $stmt->bindParam(':id', $id);
     $stmt->execute();
     if ($stmt->rowCount() > 0) {
      header("location: ../scanner.php");
      } else {
        echo "Non Modifier";
      }
    }
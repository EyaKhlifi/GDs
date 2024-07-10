<?php
    session_start();
    include('../connexion.php');
    if(isset($_POST['supprimers']))
    {
        $id=$_POST['id'];
    $stmt = $dbh->prepare("DELETE FROM `inventaire` 
                            WHERE `id`=:id"
                        );
     $stmt->bindParam(':id',$id);
     $stmt->execute();
     if ($stmt->rowCount() > 0) {
      header("location: ../mini_pc.php");
      } else {
        echo "Non Modifier";
      }
    }                 
?>
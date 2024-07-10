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
        $cat = 1;
/*
echo $mark."<br>" ;
echo $model."<br>" ;
echo $code_inventaire."<br>" ;
echo $num_serie."<br>" ;
echo $emplacement."<br>" ;
echo $etat."<br>" ;
echo $annee_inventaire."<br>" ;
echo $date_achat."<br>" ;
echo $garantie."<br>" ;
echo $date_creation."<br>" ;
echo $nom_utilisateur."<br>" ;
*/
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
                header("location: ../pc_bureau.php");
              }else{
                echo "Échec de l'opération d'insertion";
              }

       // $sth = $dbh->prepare($sql);
       // $sth->execute(array("mark"=>$mark,"model"=>$model,"code_inventaire"=>$code_inventaire,"num_serie"=>$num_serie,"emplacement"=>$emplacement,"etat"=>$etat,"annee_inventaire"=>$annee_inventaire,"date_achat"=>$date_achat,"garantie"=>$garantie,"date_creation"=>$date_creation,"nom_utilisateur"=>$nom_utilisateur));
        //$row = $sth->rowCount();
       // $fetch = $sth->fetch();
        //if($row >0)
       // {$_SESSION["inventaire"]=$fetch['mark'];
          // echo 'ajouter';
            
       // }
    
            
    
        //else
       // {
          //  echo'erreur';
           // exit();
        //}
        
            
    }  
        
            
    
    ?>
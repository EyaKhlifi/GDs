<?php
    //include('../connexion.php');
    //   TOTOL ORDINATEUR

    $sqlordi = "SELECT COUNT(*) as ordi FROM `inventaire`WHERE `categorie` BETWEEN 1 AND 3";
    $sth = $dbh->prepare($sqlordi);
    $sth->execute();
    $fetchs = $sth->fetch();
    $tordi = (int)$fetchs['ordi'];

    // Poucentage Ordinateur en panne + total ordinateur en panne

    $sqlordi = "SELECT COUNT(*) as Pnordi FROM `inventaire`WHERE `categorie` BETWEEN 1 AND 3 AND `etat`='Panne'";
    
    $sth = $dbh->prepare($sqlordi);
    $sth->execute();
    $fetchs = $sth->fetch();
    $pordi = (int)$fetchs['Pnordi'];

    $p = ($pordi*100)/$tordi;


   
//   TOTOL imprimante

$sqlimp = "SELECT COUNT(*) as imp FROM `inventaire`WHERE `categorie`= 4";
$sth = $dbh->prepare($sqlimp);
$sth->execute();
$fetchs = $sth->fetch();
$timp = (int)$fetchs['imp'];


 // Poucentage imprimante en panne + total imprimante en panne

 $sqlimp = "SELECT COUNT(*) as Pimp FROM `inventaire`WHERE `categorie`=4 AND `etat`='Panne'";
    
 $sth = $dbh->prepare($sqlimp);
 $sth->execute();
 $fetchs = $sth->fetch();
 $imp = (int)$fetchs['Pimp'];

 $pi = ($imp*100)/$timp;


 //   TOTOL scanner

$sqlscan = "SELECT COUNT(*) as Pscan FROM `inventaire`WHERE `categorie`= 6";
$sth = $dbh->prepare($sqlscan);
$sth->execute();
$fetchs = $sth->fetch();
$tscan = (int)$fetchs['Pscan'];


 // Poucentage scanner en panne + total scanner en panne

 $sqlscan = "SELECT COUNT(*) as Pscan FROM `inventaire`WHERE `categorie`=6 AND `etat`='Panne'";
    
 $sth = $dbh->prepare($sqlscan);
 $sth->execute();
 $fetchs = $sth->fetch();
 $scan = (int)$fetchs['Pscan'];

 $ps = ($scan*100)/$tscan;


 

 //   TOTOL ecran

$sqlecran = "SELECT COUNT(*) as Pecran FROM `inventaire`WHERE `categorie`= 5";
$sth = $dbh->prepare($sqlecran);
$sth->execute();
$fetchs = $sth->fetch();
$tecran = (int)$fetchs['Pecran'];


 // Poucentage ecran en panne + total ecran en panne

 $sqlecran = "SELECT COUNT(*) as Pecran FROM `inventaire`WHERE `categorie`=5 AND `etat`='Panne'";
    
 $sth = $dbh->prepare($sqlecran);
 $sth->execute();
 $fetchs = $sth->fetch();
 $pecran = (int)$fetchs['Pecran'];

 $pe = ($pecran*100)/$tecran;




 
 //   TOTOL telephone

$sqltel = "SELECT COUNT(*) as Ptel FROM `inventaire`WHERE `categorie`= 9";
$sth = $dbh->prepare($sqltel);
$sth->execute();
$fetchs = $sth->fetch();
$ttel = (int)$fetchs['Ptel'];


 // Poucentage telephone en panne + total telephone en panne

 $sqltel = "SELECT COUNT(*) as Ptel FROM `inventaire`WHERE `categorie`=9 AND `etat`='Panne'";
    
 $sth = $dbh->prepare($sqltel);
 $sth->execute();
 $fetchs = $sth->fetch();
 $ptel = (int)$fetchs['Ptel'];

 $pt = ($ptel*100)/$ttel;



  
 //   TOTOL switch

$sqlswitch = "SELECT COUNT(*) as Pswitch FROM `inventaire`WHERE `categorie`= 8";
$sth = $dbh->prepare($sqlswitch);
$sth->execute();
$fetchs = $sth->fetch();
$tswitch = (int)$fetchs['Pswitch'];


 // Poucentage  switch en panne + total  switch en panne

 $sqlswitch = "SELECT COUNT(*) as Pswitch FROM `inventaire`WHERE `categorie`=8 AND `etat`='Panne'";
    
 $sth = $dbh->prepare($sqlswitch);
 $sth->execute();
 $fetchs = $sth->fetch();
 $pswitch = (int)$fetchs['Pswitch'];

 $psw = ($pswitch*100)/$tswitch;




 //   TOTOL serveur
$sqlserveur = "SELECT COUNT(*) as Pserveur FROM `inventaire`WHERE `categorie`= 7";
$sth = $dbh->prepare($sqlserveur);
$sth->execute();
$fetchs = $sth->fetch();
$tserveur = (int)$fetchs['Pserveur'];


 // Poucentage  TOTOL serveur en panne + total  TOTOL serveur en panne

 $sqlserveur = "SELECT COUNT(*) as Pserveur FROM `inventaire`WHERE `categorie`=7 AND `etat`='Panne'";
    
 $sth = $dbh->prepare($sqlserveur);
 $sth->execute();
 $fetchs = $sth->fetch();
 $pserveur = (int)$fetchs['Pserveur'];

 $pse = ($pserveur*100)/$tserveur;



?>
<?php
    session_start();
    include('../connexion.php');
    include('fpdf.php');
 
    $sql ="SELECT* FROM `inventaire` ORDER BY id";
    $sth = $dbh->prepare($sql);
    $sth->execute();

    $pdf = new FPDF( );
    $pdf ->AddPage('L');
    $pdf->SetFont('Arial','B',14);
    $pdf->SetTitle('Iventaire Matriel Informatique');
    $pdf->Cell(10,10,'ID',1);
    $pdf->Cell(18,10,'Mrque',1);
    $pdf->Cell(28,10,'Num_Serie',1);
    $pdf->Cell(41,10,'Code_Inventaire',1);
    $pdf->Cell(33,10,'Emplacement',1);
    $pdf->Cell(22,10,'Etat',1);
    $pdf->Cell(18,10,'Annee',1);
    $pdf->Cell(30,10,'Date_Achat',1);
    $pdf->Cell(22,10,'Garantie',1);
    $pdf->Cell(36,10,'Date_Creation',1);
    $pdf->Cell(28,10,'Nom_Utilse',1);
    
    $pdf->Ln();

    while($fetch = $sth->fetch()){

        $id = $fetch['id'];
        $pdf->Cell(10,10,$id,1);

        $mark = $fetch['mark'];
        $pdf->Cell(18,10,$mark,1);

        $num_serie = $fetch['num_serie'];
        $pdf->Cell(28,10,$num_serie,1);
        
        $code_inventaire = $fetch['code_inventaire'];
        $pdf->Cell(41,10,$code_inventaire,1);
        
        $emplacement = $fetch['emplacement'];
        $pdf->Cell(33,10,$emplacement,1);

        $etat = $fetch['etat'];
        $pdf->Cell(22,10,$etat,1);
         
        $annee_inventaire = $fetch['annee_inventaire'];
        $pdf->Cell(18,10,$annee_inventaire,1);
        

        $date_achat = $fetch['date_achat'];
        $pdf->Cell(30,10,$date_achat,1);
        
        
        $garantie = $fetch['garantie'];
        $pdf->Cell(22,10,$garantie,1);
         
        
        $date_creation = $fetch['date_creation'];
        $pdf->Cell(36,10,$date_creation,1);
         
         
        $nom_utilisateur = $fetch['nom_utilisateur'];
        $pdf->Cell(28,10,$nom_utilisateur,1);
        $pdf->Ln();


    }
    $pdf->Output();



    ?>
    

          
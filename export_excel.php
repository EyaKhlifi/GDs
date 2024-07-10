<?php
    session_start();
    include('connexion.php');
    
    $output ="";
    
    $sql ="SELECT* FROM `inventaire` ";
    $sth = $dbh->prepare($sql);
    $sth->execute();
   $row = $sth->rowCount();
   $output .='<table class="table table-striped table-bordered zero-configuration">
   <thead>
       <tr>
           <th>Id</th>
           <th>Marque</th>
           <th>Model</th>
           <th>Num_Serie</th>
           <th>Code Inventaire</th>
           <th>Etat</th>
           <th>Empacement</th>
           <th>Annee_Inventaire</th>
           <th>Date_Achat</th>
           <th>Garantie</th>
           <th>Date_Creation</th>
           <th>Nom_Utilisateur</th>   
       </tr>
   </thead>
   <tbody>';
               $sql = "SELECT * FROM `inventaire`";
               $sth = $dbh->prepare($sql);
               $sth->execute();
               while ($fetchs = $sth->fetch())
               {
                $output .='
                   <tr>
                       <td>'.$fetchs['id'].'</td>
                       <td>'.$fetchs['mark'].'</td>
                       <td>'.$fetchs['model'].'</td>
                       <td>'.$fetchs['num_serie'].'</td>
                       <td>'.$fetchs['code_inventaire'].'</td>
                       <td>'.$fetchs['etat'].'</td>
                       <td>'.$fetchs['emplacement'].'</td>
                       <td>'.$fetchs['annee_inventaire'].'</td>
                       <td>'.$fetchs['date_achat'].'</td>
                       <td>'.$fetchs['garantie'].'</td>
                       <td>'.$fetchs['date_creation'].'</td>
                       <td>'.$fetchs['nom_utilisateur'].'</td>
                   </tr>
                   ';
               }
           
   $output .='</tbody>                                          
            </table>';

header('Content-Type: application/xls');
header('Content-Disposition: attachment; filename=inventaire.xls');   
echo $output;
       
?>
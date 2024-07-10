<?php 
    include "include/header.php";
    include('connexion.php');

?>
<div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><i class="fa fa-desktop"></i> Seveur </h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="bootstrap-modal">
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Ajouter Serveur</button>
                                                    <!-- Modal -->
                                                    <?php include_once "serveur/modal serv.php";?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Marque</th>
                                                <th>Model</th>
                                                <th>Num Serie</th>
                                                <th>Code Inventaire</th>
                                                <th>Etat</th>
                                                <th>Empacement</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php
                                                    $sql = "SELECT * FROM `inventaire` WHERE `categorie`=:categorie";
                                                    $sth = $dbh->prepare($sql);
                                                    $sth->execute(array(':categorie'=>7));
                                                    while ($fetchs = $sth->fetch())
                                                    {
                                                        echo"
                                                        <tr>
                                                            <td>".$fetchs['mark']."</td>
                                                            <td>".$fetchs['model']."</td>
                                                            <td>".$fetchs['num_serie']."</td>
                                                            <td>".$fetchs['code_inventaire']."</td>
                                                            <td>".$fetchs['etat']."</td>
                                                            <td>".$fetchs['emplacement']."</td>
                                                            <td>
                                                                <span>
                                                                    <a href='#modifserv_".$fetchs['id']."' data-toggle='modal' data-placement='top' title='' data-original-title='Edit'><i class='fa fa-pencil color-muted m-r-5'></i></a>
                                                                    <a href='#suppserv_".$fetchs['id']."' data-toggle='modal' data-placement='top' title='' data-original-title='Delete'><i class='fa fa-close color-danger'></i></a></span>
                                                                    <a href='#obseserv_".$fetchs['id']."' data-toggle='modal' data-placement='top' title='' data-original-title='observe'><i class='fa fa-eye color-info'></i></a></span>
                                                            </td>
                                                        </tr>
                                                        ";
                                                        include ("serveur/modalupsuppserv.php");
                                                        include ("serveur/observe_serveur.php");
                                                    }
                                                ?>
                                        </tbody>                                          
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div> 
                </div>
            </div>
            <!-- row -->

           
            <!-- #/ container -->
        </div>
    

<?php include "include/footer.php";?>
<!-- Modal supp -->
<div class="modal fade" id="suppimp_<?php echo $fetchs['id'];?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">supprimer</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="imprimante/supp_imp.php" method="post">
                <div class="modal-body">
                    <?php echo $fetchs['id'];?>
                    <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $fetchs['id'];?>"/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" name="supprimers">supprimers</button>
                </div>
            </form>    
        </div>
    </div>
</div>


<!-- Modal modif -->
<div class="modal fade" id="modifimp_<?php echo $fetchs['id'];?>">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">modif</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="imprimante/modif_imp.php" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="card gradient-1">
                                <div class="card-body">
                                    <h3 class="card-title">Information Technique</h3>
                                        <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $fetchs['id'];?>"/>
                                        <label class="col-sm-6 col-form-label">Marque</label>
                                        <input type="text" id="mark" class="form-control" name="mark" value="<?php echo $fetchs['mark'];?>"/>
                                        <label class="col-sm-6 col-form-label">Model</label>
                                        <input type="text" id="model" class="form-control" name="model" value="<?php echo $fetchs['model'];?>">
                                        <label class="col-sm-6 col-form-label">Num Serie</label>
                                        <input type="text" id="num_serie" class="form-control" name="num_serie"value="<?php echo $fetchs['num_serie'];?>">
                                        <label class="col-sm-6 col-form-label">code invntaire</label>
                                        <input type="text" id="code_inventaire" class="form-control" name="code_inventaire" value=" <?php echo $fetchs['code_inventaire'];?>">
                                        <label class="col-sm-6 col-form-label input-rounded">Etat</label>
                                        <select class="custom-select mr-sm-2"  id="etat"  name="etat">
                                            <option selected="<?php echo $fetchs['etat'];?>"><?php echo $fetchs['etat'];?></option>
                                            <option value="Fonction">Fonction</option>
                                            <option value="Panne">En Panne</option>
                                        </select>
                                        <label class="col-sm-6 col-form-label input-rounded ">Garantie</label>
                                        <select class="custom-select mr-sm-2"  id="garantie"  name="garantie">
                                            <option selected="<?php echo $fetchs['garantie'];?>"><?php echo $fetchs['garantie'];?></option>
                                            <option value="Oui">Oui</option>
                                            <option value="Non">Non</option>
                                        </select>
                                                
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card gradient-1">
                                    <div class="card-body">
                                        <h3 class="card-title">Information Globale</h3>
                                        <label class="col-sm-6 col-form-label">Emplacemnt</label>
                                        <select class="custom-select mr-sm-2"  id="emplacement"  name="emplacement" >
                                            <option selected="<?php echo $fetchs['emplacement'];?>"><?php echo $fetchs['emplacement'];?></option>
                                            <option value="Prodction">Prodction</option>
                                            <option value="RH">RH</option>
                                            <option value="IT">IT</option>
                                            <option value="Qualite">Qualite</option>
                                        </select>
                                        <label class="col-sm-6 col-form-label">Date achat</label>
                                        <input type="date" id="date_achat" class="form-control" name="date_achat" value="<?php echo $fetchs['date_achat'];?>">
                                        <label class="col-sm-6 col-form-label">Annee inventaire</label>
                                        <input type="number" id="annee_inventaire" class="form-control" placeholder="YYYY" min="2000" max="2023" name="annee_inventaire" value="<?php echo $fetchs['annee_inventaire'];?>">
                                        <label class="col-sm-6 col-form-label">Date creation</label>
                                        <input type="date" id="date_creation" class="form-control" name="date_creation" value="<?php echo $fetchs['date_creation'];?>">
                                        <label class="col-sm-6 col-form-label">Nom De Utilisateur</label>
                                        <input type="text" class="form-control" id="nom_utilisateur" name="nom_utilisateur" value="<?php echo $fetchs['nom_utilisateur'];?>">      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Anuller</button>
                    <button class="btn btn-primary" type="submit" name="Modifier" >Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>

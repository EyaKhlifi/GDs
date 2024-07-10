<!-- Modal observe -->
<div class="modal fade" id="obsetel_<?php echo $fetchs['id'];?>">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Information</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
      </div>
        <div class="modal-body">
        
          <div class="row">
            <div class="col-lg-12 col-sm-6">
            <h3 class="card-title">Information Technique</h3>
              <div class="card gradient-1">
                <div class="card-body">
                  <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $fetchs['id'];?>"/>
                  <label class="col-sm-6 col-form-label">Marque :</label>
                  <label class="col-sm-6 col-form-label"><?php echo $fetchs['mark'];?></label>
                  <label class="col-sm-6 col-form-label">Model :</label>
                  <label class="col-sm-6 col-form-label"><?php echo $fetchs['model'];?>"</label>
                  <label class="col-sm-6 col-form-label">Num Serie :</label>
                  <label class="col-sm-6 col-form-label"><?php echo $fetchs['num_serie'];?></label>
                  <label class="col-sm-6 col-form-label">code invntaire :</label>
                  <label class="col-sm-6 col-form-label"><?php echo $fetchs['code_inventaire'];?></label>
                  <label class="col-sm-6 col-form-label input-rounded">Etat :</label>
                  <label class="col-sm-6 col-form-label input-rounded"><?php echo $fetchs['etat'];?></label>
                  <label class="col-sm-6 col-form-label input-rounded ">Garantie :</label>
                  <label class="col-sm-6 col-form-label input-rounded "><?php echo $fetchs['garantie'];?></label>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-sm-6">
            <h3 class="card-title">Information Globale</h3>
              <div class="card gradient-1 ">
                <div class="card-body">
                  <label class="col-sm-6 col-form-label">Emplacemnt :</label>
                  <label class="col-sm-6 col-form-label"><?php echo $fetchs['emplacement'];?></label>
                  <label class="col-sm-6 col-form-label">Date achat :</label>
                  <label class="col-sm-6 col-form-label"><?php echo $fetchs['date_achat'];?></label>
                  <label class="col-sm-6 col-form-label">Annee inventaire :</label>
                  <label class="col-sm-6 col-form-label"><?php echo $fetchs['annee_inventaire'];?></label>
                  <label class="col-sm-6 col-form-label">Date creation :</label>
                  <label class="col-sm-6 col-form-label"><?php echo $fetchs['date_creation'];?></label>
                  <label class="col-sm-6 col-form-label">Nom De Utilisateur :</label>
                  <label class="col-sm-6 col-form-label"><?php echo $fetchs['nom_utilisateur'];?></label>      
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Anuller</button>         
        </div>       
      </div>
    </div>
  </div>
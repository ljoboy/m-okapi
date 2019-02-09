
        <h2 style="margin-top:0px">Exercice_budgetaire <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Id Utilisateur <?php echo form_error('id_utilisateur') ?></label>
            <input type="text" class="form-control" name="id_utilisateur" id="id_utilisateur" placeholder="Id Utilisateur" value="<?php echo $id_utilisateur; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Date Debut <?php echo form_error('date_debut') ?></label>
            <input type="text" class="form-control" name="date_debut" id="date_debut" placeholder="Date Debut" value="<?php echo $date_debut; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Date Fin <?php echo form_error('date_fin') ?></label>
            <input type="text" class="form-control" name="date_fin" id="date_fin" placeholder="Date Fin" value="<?php echo $date_fin; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Budget Initial <?php echo form_error('budget_initial') ?></label>
            <input type="text" class="form-control" name="budget_initial" id="budget_initial" placeholder="Budget Initial" value="<?php echo $budget_initial; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Date Creation <?php echo form_error('date_creation') ?></label>
            <input type="text" class="form-control" name="date_creation" id="date_creation" placeholder="Date Creation" value="<?php echo $date_creation; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('exercice_budgetaire') ?>" class="btn btn-default">Cancel</a>
	</form>

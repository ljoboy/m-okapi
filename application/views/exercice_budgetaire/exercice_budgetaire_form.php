<h2 style="margin-bottom: 20px;"> <?php echo $button ?> un Exercice Budgetaire</h2>
<form action="<?php echo $action; ?>" method="post">
	<p class="text-danger flex-center"><?= $this->session->date_error ?></p>

	<div class="md-form">
		<input placeholder="Choisissez une date" type="text" name="date_debut" id="date-picker-example" data-value="<?php echo $date_debut; ?>" class="form-control datepicker">
		<label for="date-picker-example">Date debut <?php echo form_error('date_debut') ?></label>
	</div>
	<div class="md-form">
		<input placeholder="Choisissez une date" type="text" name="date_fin" id="date-picker-example" data-value="<?php echo $date_fin; ?>" class="form-control datepicker">
		<label for="date-picker-example">Date fin <?php echo form_error('date_fin') ?></label>
	</div>
	<div class="md-form input-group">
		<span class="input-group-addon">CDF</span>
		<input name="budget_initial" type="number" class="form-control" aria-label="Montant (en francs Congolais)" value="<?php echo $budget_initial; ?>">
		<span class="input-group-addon">.00</span>
	</div>
	<input type="hidden" name="id_utilisateur" value="<?php echo $this->session->id; ?>" />
	<input type="hidden" name="date_creation" value="<?php echo date("Y/m/d"); ?>"/>
	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('exercice_budgetaire') ?>" class="btn btn-default">Annuler</a>
</form>

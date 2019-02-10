<h2 class="flex-center text-danger">Modifier votre mot de passe</h2>
<em class="flex-center text-danger">
	<?= $this->session->error_mdp_change; ?>
</em>
<em class="flex-center text-success">
	<?= $this->session->success_mdp_change; ?>
</em>
<hr>
<?= form_open(site_url('mokapi/mdp_change_action')) ?>
<div class="md-form">
	<i class="fa fa-unlock prefix"></i>
	<input type="password" id="form4" name="actuel" class="form-control" required>
	<label for="form4">Ancien mot de passe</label>
	<?php echo form_error('actuel') ?>
</div>
<div class="md-form">
	<i class="fa fa-lock prefix"></i>
	<input type="password" id="form5" name="new_mdp" class="form-control" required>
	<label for="form5">Nouveau mot de passe</label>
	<?php echo form_error('new_mdp') ?>
</div>
<div class="md-form">
	<i class="fa fa-lock prefix"></i>
	<input type="password" id="form6" name="confirmer" class="form-control" required>
	<label for="form6">Confirmer mot de passe</label>
	<?php echo form_error('confirmer') ?>
</div>
<button type="submit" class="btn btn-primary">Envoyer</button>
<a href="<?php echo base_url() ?>" class="btn btn-default">Annuler</a>
<?= form_close() ?>


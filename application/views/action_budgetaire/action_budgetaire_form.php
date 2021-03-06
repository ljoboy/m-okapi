<h2 style="margin-bottom: 20px;"><?php echo $button ?> Action Budgetaire </h2>
<form action="<?php echo $action; ?>" method="post">
	<div class="md-form">
		<select id="int" name="id_sortie" class="mdb-select">
			<option value="" disabled <?= isset($id_sortie) ? "selected" : ""?>>Choisissez une sortie</option>
			<?php foreach ($sorties as $sortie) : ?>
				<option value="<?=$sortie->id?>" <?= ($id_sortie == $sortie->id) ? "selected" : ""?>><?=$sortie->nom_cat." ".$sortie->seuil?></option>
			<?php endforeach; ?>
		</select>
		<label for="int">Sortie <?php echo form_error('id_sortie') ?></label>
	</div>
	<div class="md-form input-group">
		<span class="input-group-addon">CDF</span>
		<input type="number" value="<?= $montant_utilise?>" class="form-control" name="montant_utilise" aria-label="Montant Utilise (En francs Congolais) <?php echo form_error('montant_utilise') ?>">
		<span class="input-group-addon">.00</span>
	</div>
	<div class="form-group">
		<label for="varchar">Motif <?php echo form_error('motif') ?></label>
		<input type="text" class="form-control" name="motif" id="motif" placeholder="Motif"
			   value="<?php echo $motif; ?>"/>
	</div>
	<input type="hidden" name="date_creation" value="<?php echo date('Y-m-d')?>"/>
	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('action_budgetaire') ?>" class="btn btn-default">Annuler</a>
</form>

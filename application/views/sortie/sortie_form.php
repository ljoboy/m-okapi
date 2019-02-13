<h2 style="margin-bottom: 20px;"><?php echo $button ?> Sortie</h2>
<form action="<?php echo $action; ?>" method="post">
	<div class="md-form">
		<select id="cat_serv" class="mdb-select" name="id_categorie_sortie">
			<option value="" disabled <?= isset($id_categorie_sortie) ? "" :  "selected"?>>Choisissez la categorie de sortie</option>
			<?php foreach ($cat_sort as $item): ?>
				<option value="<?=$item->id?>" <?=($item->id == $id_categorie_sortie) ? "selected" : ""?>><?=$item->nom?></option>
			<?php endforeach; ?>
		</select>
		<label for="cat_serv">Categorie Sortie <?php echo form_error('id_categorie_sortie') ?></label>
	</div>
	<div class="md-form">
		<select id="cat_serv" class="mdb-select" name="id_exercice_budgetaire">
			<option value="" disabled <?= isset($id_exercice_budgetaire) ? "" :  "selected"?>>Choisissez la categorie de sortie</option>
			<?php foreach ($ex_budg as $item): ?>
				<option value="<?=$item->id?>" <?=($item->id == $id_exercice_budgetaire) ? "selected" : ""?>>Du <?=date_format(date_create($item->date_debut), "d-m-Y")." au ".date_format(date_create($item->date_fin),"d-m-Y")?></option>
			<?php endforeach; ?>
		</select>
		<label for="cat_serv">Exercice Budgetaire <?php echo form_error('id_exercice_budgetaire') ?></label>
	</div>
	<div class="md-form input-group">
		<span class="input-group-addon">CDF</span>
		<input type="number" name="seuil" class="form-control" value="<?php echo $seuil; ?>" aria-label="Seuil (en francs Congolais)">
		<span class="input-group-addon">.00</span>
	</div>
	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('sortie') ?>" class="btn btn-default">Annuler</a>
</form>

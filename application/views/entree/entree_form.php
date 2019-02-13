<h2><?php echo $button ?> Entree</h2>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<select class="mdb-select" name="id_categorie_entree" id="id_categorie_entree">
			<option value="" disabled>Choisissez une categorie</option>
			<?php foreach ($entree_cat as $item): ?>
			<option value="<?=$item->id?>" <?= ($id_categorie_entree == $item->id) ? "selected" : ""?>><?=$item->nom?></option>
			<?php endforeach; ?>
		</select>
		<label for="id_categorie_entree">Id Categorie Entree <?php echo form_error('id_categorie_entree') ?></label>
	</div>
	<div class="form-group">
		<label for="varchar">Nom <?php echo form_error('nom') ?></label>
		<input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" value="<?php echo $nom; ?>"/>
	</div>
	<div class="form-group">
		<label for="double">Montant <?php echo form_error('montant') ?></label>
		<input type="text" class="form-control" name="montant" id="montant" placeholder="Montant"
			   value="<?php echo $montant; ?>"/>
	</div>

	<input type="hidden" name="date_entree" value=""/>
	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('entree') ?>" class="btn btn-default">Cancel</a>
</form>

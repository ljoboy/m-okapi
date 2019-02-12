<h2>Categorie sortie <?php echo $button ?></h2>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label for="varchar">Nom <?php echo form_error('nom') ?></label>
		<input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" value="<?php echo $nom; ?>"/>
	</div>
	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('categorie_sortie') ?>" class="btn btn-default">Retour</a>
</form>

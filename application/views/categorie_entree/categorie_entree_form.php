<h2 style="margin-top:0px">Categorie_entree <?php echo $button ?></h2>
<form action="<?php echo $action; ?>" method="post">
		<input type="hidden" name="id_utilisateur" value="<?php echo $this->session->id; ?>"/>
	<div class="form-group">
		<label for="varchar">Nom <?php echo form_error('nom') ?></label>
		<input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" value="<?php echo $nom; ?>"/>
	</div>
	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('categorie_entree') ?>" class="btn btn-default">Annuler</a>
</form>

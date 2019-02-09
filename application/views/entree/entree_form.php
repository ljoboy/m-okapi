<h2 style="margin-top:0px">Entree <?php echo $button ?></h2>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label for="int">Id Categorie Entree <?php echo form_error('id_categorie_entree') ?></label>
		<input type="text" class="form-control" name="id_categorie_entree" id="id_categorie_entree"
			   placeholder="Id Categorie Entree" value="<?php echo $id_categorie_entree; ?>"/>
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
	<div class="form-group">
		<label for="date">Date Entree <?php echo form_error('date_entree') ?></label>
		<input type="text" class="form-control" name="date_entree" id="date_entree" placeholder="Date Entree"
			   value="<?php echo $date_entree; ?>"/>
	</div>
	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('entree') ?>" class="btn btn-default">Cancel</a>
</form>

<h2>Liste des categorie sortie</h2>
<div class="row"">
<div class="col-md-4">
	<?php echo anchor(site_url('categorie_sortie/create'), 'Ajouter', 'class="btn btn-primary"'); ?>
</div>
<div class="col-md-4 text-center">
	<div style="margin-top: 8px" id="message">
		<?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
	</div>
</div>
<div class="col-md-1 text-right">
</div>
<div class="col-md-3 text-right">
	<form action="<?php echo site_url('categorie_sortie/index'); ?>" class="form-inline" method="get">
		<div class="input-group">
			<input placeholder="recherche..." type="text" class="form-control" name="q" value="<?php echo $q; ?>">
			<span class="input-group-btn">
                            <?php
							if ($q <> '') {
								?>
								<a href="<?php echo site_url('categorie_sortie'); ?>"
								   class="btn btn-default">Annuler</a>
								<?php
							}
							?>
                          <button class="btn btn-primary" type="submit">Rechercher</button>
                        </span>
		</div>
	</form>
</div>
<table class="table table-bordered">
	<tr>
		<th>No</th>
		<th>Nom</th>
		<th>Action</th>
	</tr><?php
	foreach ($categorie_sortie_data as $categorie_sortie) {
		?>
		<tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $categorie_sortie->nom ?></td>
			<td style="text-align:center; width: 25%">
				<?php
				echo anchor(site_url('categorie_sortie/read/' . $categorie_sortie->id), 'Voir');
				echo ' | ';
				echo anchor(site_url('categorie_sortie/update/' . $categorie_sortie->id), 'Modifier');
				echo ' | ';
				echo anchor(site_url('categorie_sortie/delete/' . $categorie_sortie->id), 'Effacer', 'onclick="javasciprt: return confirm(\'Etes-vous sure ?\')"');
				?>
			</td>
		</tr>
		<?php
	}
	?>
</table>
<div class="row">
	<div class="col-md-6">
		<a href="#" class="btn btn-primary">Nombre d'éléments : <?php echo $total_rows ?></a>
	</div>
	<div class="col-md-6 text-right">
		<?php echo $pagination ?>
	</div>
</div>

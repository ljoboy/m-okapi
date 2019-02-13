<h2>Listes des entr&eacute;es</h2>
<div class="row">
	<div class="col-md-4">
		<?php echo anchor(site_url('entree/create'), 'Ajouter', 'class="btn btn-primary"'); ?>
	</div>
	<div class="col-md-4 text-center">
		<div style="margin-top: 8px" id="message">
			<?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
		</div>
	</div>
	<div class="col-md-1 text-right">
	</div>
	<div class="col-md-3 text-right">
		<form action="<?php echo site_url('entree/index'); ?>" class="form-inline" method="get">
			<div class="input-group">
				<input placeholder="Recherche..." type="text" class="form-control" name="q" value="<?php echo $q; ?>">
				<span class="input-group-btn">
                            <?php
							if ($q <> '') {
								?>
								<a href="<?php echo site_url('entree'); ?>" class="btn btn-default">Annuler</a>
								<?php
							}
							?>
                          <button class="btn btn-primary" type="submit">Rechercher</button>
                        </span>
			</div>
		</form>
	</div>
</div>
<table class="table table-bordered" style="margin-bottom: 10px">
	<tr>
		<th>No</th>
		<th>Nom Categorie Entree</th>
		<th>Nom Entree</th>
		<th>Montant Entree</th>
		<th>Date Entree</th>
		<th>Action</th>
	</tr><?php
	foreach ($entree_data as $entree) {
		?>
		<tr>
			<td><?php echo ++$start ?></td>
			<td><?php echo $entree->nom_cat ?></td>
			<td><?php echo $entree->nom ?></td>
			<td><?php echo $entree->montant ?></td>
			<td><?php echo date_format(date_create($entree->date_entree), "d-m-Y") ?></td>
			<td style="text-align:center;width: 25%">
				<?php
				echo anchor(site_url('entree/read/' . $entree->id), 'Voir');
				echo ' | ';
				echo anchor(site_url('entree/update/' . $entree->id), 'Modifier');
				echo ' | ';
				echo anchor(site_url('entree/delete/' . $entree->id), 'Effacer', 'onclick="javasciprt: return confirm(\'Etes-vous sure ? ?\')"');
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

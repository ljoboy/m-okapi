<h2 style="margin-top:0">Liste des Sorties</h2>
<div class="row" style="margin-bottom: 10px">
	<div class="col-md-4">
		<?php echo anchor(site_url('sortie/create'),'Ajouter', 'class="btn btn-primary"'); ?>
	</div>
	<div class="col-md-4 text-center">
		<div style="margin-top: 8px" id="message">
			<?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
		</div>
	</div>
	<div class="col-md-1 text-right">
	</div>
	<div class="col-md-3 text-right">
		<form action="<?php echo site_url('sortie/index'); ?>" class="form-inline" method="get">
			<div class="input-group">
				<input placeholder="recherche..." type="text" class="form-control" name="q" value="<?php echo $q; ?>">
				<span class="input-group-btn">
                            <?php
							if ($q <> '')
							{
								?>
								<a href="<?php echo site_url('sortie'); ?>" class="btn btn-default">Annuler</a>
								<?php
							}
							?>
                          <button class="btn btn-primary" type="submit">Recherher</button>
                        </span>
			</div>
		</form>
	</div>
</div>
<table class="table table-bordered" style="margin-bottom: 10px">
	<tr>
		<th>No</th>
		<th>Categorie Sortie</th>
		<th>Seuil</th>
		<th>Action</th>
	</tr><?php
	foreach ($sortie_data as $sortie)
	{
		?>
		<tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $sortie->nom_cat ?></td>
			<td><?php echo $sortie->seuil ?></td>
			<td style="text-align:center;width: 25%;">
				<?php
				echo anchor(site_url('sortie/read/'.$sortie->id),'Voir');
				echo ' | ';
				echo anchor(site_url('sortie/update/'.$sortie->id),'Modifier');
				echo ' | ';
				echo anchor(site_url('sortie/delete/'.$sortie->id),'Effacer','onclick="javasciprt: return confirm(\'Etes-vous sure ?\')"');
				?>
			</td>
		</tr>
		<?php
	}
	?>
</table>
<div class="row">
	<div class="col-md-6">
		<a href="#" class="btn btn-primary">Nombre d'élément : <?php echo $total_rows ?></a>
	</div>
	<div class="col-md-6 text-right">
		<?php echo $pagination ?>
	</div>
</div>

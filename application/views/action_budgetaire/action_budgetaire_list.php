<h2 style="margin-top:0px">Liste des Actions Budgetaires</h2>
<div class="row" style="margin-bottom: 10px">
	<div class="col-md-4">
		<?php echo anchor(site_url('action_budgetaire/create'), 'Ajouter', 'class="btn btn-primary"'); ?>
	</div>
	<div class="col-md-4 text-center">
		<div style="margin-top: 8px" id="message">
			<?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
		</div>
	</div>
	<div class="col-md-1 text-right">
	</div>
	<div class="col-md-3 text-right">
		<form action="<?php echo site_url('action_budgetaire/index'); ?>" class="form-inline" method="get">
			<div class="input-group">
				<input placeholder="recherche..." type="text" class="form-control" name="q" value="<?php echo $q; ?>">
				<span class="input-group-btn">
                            <?php
							if ($q <> '') {
								?>
								<a href="<?php echo site_url('action_budgetaire'); ?>" class="btn btn-default">Annuler</a>
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
		<th>Categorie Sortie</th>
		<th>Montant Utilise</th>
		<th>Motif</th>
		<th>Date Creation</th>
		<th>Action</th>
	</tr><?php
	foreach ($action_budgetaire_data as $action_budgetaire) {
		?>
		<tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $action_budgetaire->id_sortie ?></td>
			<td><?php echo $action_budgetaire->montant_utilise ?></td>
			<td><?php echo $action_budgetaire->motif ?></td>
			<td><?php echo $action_budgetaire->date_creation ?></td>
			<td style="text-align:center" width="200px">
				<?php
				echo anchor(site_url('action_budgetaire/read/' . $action_budgetaire->id), 'Read');
				echo ' | ';
				echo anchor(site_url('action_budgetaire/update/' . $action_budgetaire->id), 'Update');
				echo ' | ';
				echo anchor(site_url('action_budgetaire/delete/' . $action_budgetaire->id), 'Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
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

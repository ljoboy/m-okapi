<h2>Liste Exercice Budgetaire</h2>
<div class="row" style="margin-bottom: 10px">
	<div class="col-md-4">
		<?php echo anchor(site_url('exercice_budgetaire/create'),'Ajouter', 'class="btn btn-primary"'); ?>
	</div>
	<div class="col-md-4 text-center">
		<div id="message">
			<?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
		</div>
	</div>
	<div class="col-md-1 text-right">
	</div>
	<div class="col-md-3 text-right">
		<form action="<?php echo site_url('exercice_budgetaire/index'); ?>" class="form-inline" method="get">
			<div class="input-group">
				<input placeholder="recherche..." type="text" class="form-control" name="q" value="<?php echo $q; ?>">
				<span class="input-group-btn">
                            <?php
							if ($q <> '')
							{
								?>
								<a href="<?php echo site_url('exercice_budgetaire'); ?>" class="btn btn-default">Annuler</a>
								<?php
							}
							?>
                          <button class="btn btn-primary" type="submit">Recherche</button>
                        </span>
			</div>
		</form>
	</div>
</div>
<table class="table table-bordered" style="margin-bottom: 10px">
	<tr>
		<th>No</th>
		<th>Date Debut</th>
		<th>Date Fin</th>
		<th>Budget Initial</th>
		<th>Date Creation</th>
		<th class="flex-center">Action</th>
	</tr><?php
	foreach ($exercice_budgetaire_data as $exercice_budgetaire)
	{
		?>
		<tr>
			<td><?php echo ++$start ?></td>
			<td><?php echo date_format(date_create($exercice_budgetaire->date_debut), "d-m-Y") ?></td>
			<td><?php echo date_format(date_create($exercice_budgetaire->date_fin), "d-m-Y") ?></td>
			<td><?php echo $exercice_budgetaire->budget_initial ?></td>
			<td><?php echo date_format(date_create($exercice_budgetaire->date_creation), "d-m-Y H:m:i") ?></td>
			<td style="text-align:center;width: 25%">
				<?php
				echo anchor(site_url('exercice_budgetaire/read/'.$exercice_budgetaire->id),'Voir');
				echo ' | ';
				echo anchor(site_url('exercice_budgetaire/update/'.$exercice_budgetaire->id),'Modifier');
				echo ' | ';
				echo anchor(site_url('exercice_budgetaire/delete/'.$exercice_budgetaire->id),'Effacer','onclick="javasciprt: return confirm(\'Etes-vous sure ?\')"');
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

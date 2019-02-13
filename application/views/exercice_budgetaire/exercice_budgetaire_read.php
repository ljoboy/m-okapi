<h2 style="margin-top:0px">Voir Exercice Budgetaire</h2>
<table class="table">
	<tr>
		<td>Date Debut</td>
		<td><?php echo date_format(date_create($date_debut), "d-m-Y") ?></td>
	</tr>
	<tr>
		<td>Date Fin</td>
		<td><?php echo date_format(date_create($date_fin), "d-m-Y"); ?></td>
	</tr>
	<tr>
		<td>Budget Initial</td>
		<td><?php echo $budget_initial; ?></td>
	</tr>
	<tr>
		<td>Date Creation</td>
		<td><?php echo date_format(date_create($date_creation), "d-m-Y H:m:i"); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="<?php echo site_url('exercice_budgetaire') ?>" class="btn btn-default">Retour</a></td>
	</tr>
</table>

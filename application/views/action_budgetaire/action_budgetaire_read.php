<h2>Action_budgetaire Read</h2>
<table class="table">
	<tr>
		<td>Id Sortie</td>
		<td><?php echo $id_sortie; ?></td>
	</tr>
	<tr>
		<td>Montant Utilise</td>
		<td><?php echo $montant_utilise; ?></td>
	</tr>
	<tr>
		<td>Motif</td>
		<td><?php echo $motif; ?></td>
	</tr>
	<tr>
		<td>Date Creation</td>
		<td><?php echo $date_creation; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="<?php echo site_url('action_budgetaire') ?>" class="btn btn-default">Cancel</a></td>
	</tr>
</table>

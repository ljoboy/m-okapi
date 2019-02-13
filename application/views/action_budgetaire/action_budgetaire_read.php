<h2>Action Budgetaire</h2>
<table class="table">
	<tr>
		<td>Sortie</td>
		<td><?php echo $sortie->nom_cat." du ".date_format(date_create($sortie->date_debut), "d-m-Y")." au ".
				date_format(date_create($sortie->date_fin), "d-m-Y")." : ".$sortie->seuil ?></td>
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
		<td><a href="<?php echo site_url('action_budgetaire') ?>" class="btn btn-default">Retour</a></td>
	</tr>
</table>

<h2>Voir Entree</h2>
<table class="table">
	<tr>
		<td>Nom Categorie Entree</td>
		<td><?php echo $nom_cat; ?></td>
	</tr>
	<tr>
		<td>Nom</td>
		<td><?php echo $nom; ?></td>
	</tr>
	<tr>
		<td>Montant</td>
		<td><?php echo $montant; ?></td>
	</tr>
	<tr>
		<td>Date Entree</td>
		<td><?php echo date_format(date_create($date_entree), "d-m-Y") ?></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="<?php echo site_url('entree') ?>" class="btn btn-default">Retour</a></td>
	</tr>
</table>

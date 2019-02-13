<h2 style="margin-top:0px">Voir Sortie</h2>
<table class="table">
	<tr>
		<td>Categorie Sortie</td>
		<td><?php echo $nom_cat; ?></td>
	</tr>
	<tr>
		<td>Exercice Budgetaire</td>
		<td>Du <?=date_format(date_create($date_debut), "d-m-Y")." au ".date_format(date_create($date_fin),"d-m-Y")?></td>
	</tr>
	<tr>
		<td>Seuil</td>
		<td><?php echo $seuil; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="<?php echo site_url('sortie') ?>" class="btn btn-default">Retour</a></td>
	</tr>
</table>

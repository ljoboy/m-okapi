<?php $solde =  $sum_entree['montant'] - $sum_cat ?>
<h2 class="flex-center">BILAN</h2>
<table class="table table-hover">
	<thead class="thead-default">
		<tr>
			<th>Sorties</th>
			<th>Entr&eacute;es</th>
			<th>R&eacute;sultat</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th><?= $sum_cat ?></th>
			<th><?= $sum_entree['montant'] ?></th>
			<th></th>
		</tr>
	</tbody>
	<tfoot class="<?=($solde>=0) ? "table-success" : "table-danger"?>">
		<tr>
			<th></th>
			<th></th>
			<th><?= $solde?></th>
		</tr>
	</tfoot>
</table>

<div class="row">
	<div class="col-md-3">
		<?php foreach ($sorties as $sortie):?>
			<div class="flex-center">
				<span class="min-chart" id="<?=$sortie->nom?>" data-percent="<?= round(($sortie->montant_utilise / $sortie->seuil) * 100)?>"><span class="percent"></span></span>
			</div>
			<h5><span class="label green flex-center"><?=ucfirst($sortie->nom)?> | Solde : <b><?= $sortie->seuil - $sortie->montant_utilise ?></b></span></h5>
		<?php endforeach; ?>
	</div>
</div>

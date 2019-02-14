<h2>Concepteurs : </h2>
<?php
	$i = 0;
	foreach ($concepteurs as $concepteur) : ?>
	<?= (($i%3)==0) ? "<div class='row'>" : ""?>
		<div class="col-md-4">
			<!--Panel-->
			<div class="card">
				<h3 class="card-header primary-color white-text"><?= $concepteur['nom'] ?></h3>
				<div class="card-block">
					<p class="card-text"><?= $concepteur['passion'] ?></p>
					<a href="https://githubcom/<?= $concepteur['github'] ?>" class="btn btn-primary">Repos Github</a>
				</div>
			</div>
			<!--/.Panel-->
		</div>
	<?php
	$i++;
	echo (($i%3)==0) ? "</div>" : "";
	endforeach; ?>

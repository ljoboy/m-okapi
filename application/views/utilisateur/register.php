<!--Second column-->
<div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
	<!--Form-->
	<div class="card">
		<div class="card-block">
			<!--Header-->
			<div class="text-xs-center">
				<h3><i class="fa fa-user"></i> Créer un compte M-OKAPI :</h3>
				<hr>
			</div>
			<?= form_open(site_url("utilisateur/nouvel_utilisateur")) ?>
			<!--Body-->
			<div class="md-form">
				<i class="fa fa-user prefix"></i>
				<input name="nomcomplet" type="text" id="form3" class="form-control" value="<?= set_value('nomcomplet') ?>">
				<label for="form3">Nom complet :</label>
				<?= form_error('nomcomplet','<em class="text-danger">','</em>') ?>
			</div>

			<div class="md-form">
				<i class="fa fa-envelope prefix"></i>
				<input name="email" value="<?= set_value('email') ?>" type="email" id="form2" class="form-control validate">
				<label data-error="" data-success="" for="form2">E-mail</label>
				<?= form_error('email','<em class="text-danger">','</em>') ?>
			</div>

			<div class="md-form">
				<i class="fa fa-sign-in prefix"></i>
				<input name="login" value="<?= set_value('login') ?>" type="text" id="form4" class="form-control">
				<label for="form4">Login :</label>
				<?= form_error('login','<em class="text-danger">','</em>') ?>
			</div>

			<div class="md-form">
				<i class="fa fa-lock prefix"></i>
				<input name="mdp" type="password" id="form4" class="form-control">
				<label for="form4">Mot de passe :</label>
				<?= form_error('mdp','<em class="text-danger">','</em>') ?>
			</div>

			<div class="md-form">
				<i class="fa fa-lock prefix"></i>
				<input name="mdpconf" type="password" id="form4" class="form-control">
				<label for="form4">Mot de passe :</label>
				<?= form_error('mdpconf','<em class="text-danger">','</em>') ?>
			</div>

			<div class="text-xs-center">
				<button class="btn btn-ins btn-lg">Cr&eacute;er</button>
				<hr>
				<fieldset class="form-group">
					<a href="<?= site_url() ?>">J'ai déjà un compte</a>
				</fieldset>
			</div>

		</div>
	</div>
	<!--/.Form-->
</div>
<!--/Second column-->

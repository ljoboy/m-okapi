<!--Second column-->
<div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
	<!--Form-->
	<?= form_open(site_url("utilisateur/connexion")); ?>
	<div class="card">
		<div class="card-block">
			<!--Header-->
			<div class="text-xs-center">
				<h3><i class="fa fa-user"></i> Se connecter :</h3>
				<hr>
			</div>

			<em class="flex-center text-danger">
				<?= $this->session->error_login; ?>
			</em>

			<!--Body-->
			<div class="md-form">
				<i class="fa fa-user prefix"></i>
				<input type="text" id="form3" name="login" class="form-control">
				<label for="form3">Login :</label>
			</div>

			<div class="md-form">
				<i class="fa fa-lock prefix"></i>
				<input type="password" id="form4" name="mdp" class="form-control">
				<label for="form4">Mot de passe : </label>
			</div>

			<div class="text-xs-center">
				<button class="btn btn-ins btn-lg">Connexion</button>
				<hr>
				<fieldset class="form-group">
					<a href="<?= site_url("utilisateur/nouvel_utilisateur") ?>">Je n'ai pas de compte</a>
				</fieldset>
			</div>

		</div>
	</div>
	<!--/.Form-->
</div>
<?= form_close() ?>
<!--/Second column-->

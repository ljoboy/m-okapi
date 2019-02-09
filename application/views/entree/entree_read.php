<!doctype html>
<html>
    <head>
        <title>M-Okapi | Votre gestionnaire de budget optimisé</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Entree Read</h2>
        <table class="table">
	    <tr><td>Id Utilisateur</td><td><?php echo $id_utilisateur; ?></td></tr>
	    <tr><td>Nom</td><td><?php echo $nom; ?></td></tr>
	    <tr><td>Montant</td><td><?php echo $montant; ?></td></tr>
	    <tr><td>Date Entree</td><td><?php echo $date_entree; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('entree') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>

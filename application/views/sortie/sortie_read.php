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
        <h2 style="margin-top:0px">Sortie Read</h2>
        <table class="table">
	    <tr><td>Id Categorie Sortie</td><td><?php echo $id_categorie_sortie; ?></td></tr>
	    <tr><td>Id Exercice Budgetaire</td><td><?php echo $id_exercice_budgetaire; ?></td></tr>
	    <tr><td>Seuil</td><td><?php echo $seuil; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('sortie') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>

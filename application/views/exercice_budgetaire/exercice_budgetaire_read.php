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
        <h2 style="margin-top:0px">Exercice_budgetaire Read</h2>
        <table class="table">
	    <tr><td>Id Utilisateur</td><td><?php echo $id_utilisateur; ?></td></tr>
	    <tr><td>Date Debut</td><td><?php echo $date_debut; ?></td></tr>
	    <tr><td>Date Fin</td><td><?php echo $date_fin; ?></td></tr>
	    <tr><td>Budget Initial</td><td><?php echo $budget_initial; ?></td></tr>
	    <tr><td>Date Creation</td><td><?php echo $date_creation; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('exercice_budgetaire') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>

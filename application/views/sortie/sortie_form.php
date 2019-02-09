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
        <h2 style="margin-top:0px">Sortie <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Id Categorie Sortie <?php echo form_error('id_categorie_sortie') ?></label>
            <input type="text" class="form-control" name="id_categorie_sortie" id="id_categorie_sortie" placeholder="Id Categorie Sortie" value="<?php echo $id_categorie_sortie; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Exercice Budgetaire <?php echo form_error('id_exercice_budgetaire') ?></label>
            <input type="text" class="form-control" name="id_exercice_budgetaire" id="id_exercice_budgetaire" placeholder="Id Exercice Budgetaire" value="<?php echo $id_exercice_budgetaire; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Seuil <?php echo form_error('seuil') ?></label>
            <input type="text" class="form-control" name="seuil" id="seuil" placeholder="Seuil" value="<?php echo $seuil; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('sortie') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>

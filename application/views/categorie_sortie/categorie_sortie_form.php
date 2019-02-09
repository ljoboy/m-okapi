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
        <h2 style="margin-top:0px">Categorie_sortie <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Id Utilisateur <?php echo form_error('id_utilisateur') ?></label>
            <input type="text" class="form-control" name="id_utilisateur" id="id_utilisateur" placeholder="Id Utilisateur" value="<?php echo $id_utilisateur; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nom <?php echo form_error('nom') ?></label>
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" value="<?php echo $nom; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('categorie_sortie') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>

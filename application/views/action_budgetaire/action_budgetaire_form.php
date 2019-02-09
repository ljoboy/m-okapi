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
        <h2 style="margin-top:0px">Action_budgetaire <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Id Sortie <?php echo form_error('id_sortie') ?></label>
            <input type="text" class="form-control" name="id_sortie" id="id_sortie" placeholder="Id Sortie" value="<?php echo $id_sortie; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Montant Utilise <?php echo form_error('montant_utilise') ?></label>
            <input type="text" class="form-control" name="montant_utilise" id="montant_utilise" placeholder="Montant Utilise" value="<?php echo $montant_utilise; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Motif <?php echo form_error('motif') ?></label>
            <input type="text" class="form-control" name="motif" id="motif" placeholder="Motif" value="<?php echo $motif; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Date Creation <?php echo form_error('date_creation') ?></label>
            <input type="text" class="form-control" name="date_creation" id="date_creation" placeholder="Date Creation" value="<?php echo $date_creation; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('action_budgetaire') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>

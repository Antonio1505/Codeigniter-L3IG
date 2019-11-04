<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Client</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<?php //print_r($categories); 
//var_dump($categories);?>
	<h1 class="page-header text-center">AJOUT DE COMMANDE</h1>
	<div class="row">
		<div class="col-sm-2">
			<div>
				<ul class="nav">
					<li><a href="<?php echo base_url(); ?>index.php/cli">client</a></li>
					<li><a href="<?php echo base_url(); ?>index.php/cat">catégorie</a></li>
					<li><a href="<?php echo base_url(); ?>index.php/prod">produit</a></li>
					<li><a href="<?php echo base_url(); ?>index.php/cmd">commande</a></li>
				</ul>
			</div>
		</div>
		<div class="col-sm-4 col-sm-offset-2">
			<h3>Ajout
				<span class="pull-right"><a href="<?php echo base_url(); ?>index.php/cmd" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a></span>
			</h3>
			<hr>
			<form method="POST" action="<?php echo base_url(); ?>index.php/Commandes/insert">
				<div class="form-group">
					<label>Client :</label>
					<select name="client_id" class="form-control" required>
                        <option value="">Selectionner un client</option>
                         <?php foreach($clients as $client): ?>
                            <option value="<?php echo $client->id_client; ?>"><?php echo $client->nom; ?></option>
                        <?php endforeach; ?>
                	</select>
				</div>
				<div class="form-group">
					<label>Produit :</label>
					<select name="produit_id" class="form-control" required>
                        <option value="">Selectionner un produit</option>
                         <?php foreach($produits as $produit): ?>
                            <option value="<?php echo $produit->id_produit; ?>"><?php echo $produit->libelle_produit; ?></option>
                        <?php endforeach; ?>
                	</select>
				</div>
				<div class="form-group">
					<label>Quantité :</label>
					<input type="number" class="form-control" name="qtecmd" required>
				</div>
				<div class="form-group">
					<label for="">Date :</label>
                    <input type="date" name="datecmd" id="" required>
                </div>
				<button type="submit" class="btn btn-primary">
				<span class="glyphicon glyphicon-floppy-disk"></span>  Enregistrer</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>
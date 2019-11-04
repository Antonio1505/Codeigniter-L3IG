<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Client</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">EDITION DE CLIENT</h1>
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
			<h3>Modification
				<span class="pull-right"><a href="<?php echo base_url();?>index.php/cli" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a></span>
			</h3>
			<hr>
			<?php extract($client); ?>
			<form method="POST" action="<?php echo base_url(); ?>index.php/clients/update/<?php echo $id_client; ?>">
				<div class="form-group">
					<label>Nom:</label>
					<input type="text" class="form-control" value="<?php echo $nom; ?>" name="nom" required>
				</div>
				<div class="form-group">
					<label>Prénom:</label>
					<input type="text" class="form-control" value="<?php echo $adresse; ?>" name="adresse" required>
				</div>
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Modifier</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>
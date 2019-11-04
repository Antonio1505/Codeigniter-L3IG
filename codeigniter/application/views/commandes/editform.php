<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Client</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">EDITION DE COMMANDE</h1>
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
				<span class="pull-right"><a href="<?php echo base_url(); ?>index.php/cmd" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a></span>
			</h3>
			<hr>
			<?php 
				extract($commande);
			?>
			<form method="POST" action="<?php echo base_url(); ?>index.php/Commandes/update/<?php echo $id_cmd; ?>">
				<div class="form-group">
					<label>Client :</label>
					<select name="client_id" class="form-control" required>
                        <option value="">Selectionner un client</option>
                        <?php foreach($clients as $client): ?>
							<?php 
								if($client->id_client == $client_id):
							?>
								<option value="<?php echo $client->id_client; ?>" selected><?php echo $client->nom; ?></option>
							<?php
								else:
							?>
								<option value="<?php echo $client->id_client; ?>"><?php echo $client->nom; ?></option>
							<?php
								endif;	
							?>
						<?php endforeach; ?>
                	</select>
				</div>
				<div class="form-group">
					<label>Produit :</label>
					<select name="produit_id" class="form-control" required>
                        <option value="">Selectionner un produit</option>
                         <?php foreach($produits as $produit): ?>
						 	<?php 
								if($produit->id_produit == $produit_id):
							?>
	                            <option value="<?php echo $produit->id_produit; ?>" selected><?php echo $produit->libelle_produit; ?></option>
							<?php
								else:
							?>
								<option value="<?php echo $produit->id_produit; ?>"><?php echo $produit->libelle_produit; ?></option>
							<?php
								endif;
							?>
						<?php endforeach; ?>
                	</select>
				</div>
				<div class="form-group">
					<label>Quantité :</label>
					<input type="number" class="form-control" name="qtecmd" value="<?php echo $qtecmd; ?>" required>
				</div>
				<div class="form-group">
					<label for="">Date :</label>
                    <input type="date" name="datecmd" id="" value="<?php echo $datecmd; ?>" required>
                </div>
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Modifier</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>
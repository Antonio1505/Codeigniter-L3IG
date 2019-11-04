<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Client</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">EDITION DE PRODUIT</h1>
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
		<div class="col-sm-4">
			<h3>Modification
				<span class="pull-right"><a href="<?php echo base_url(); ?>index.php/prod" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a></span>
			</h3>
			<hr>
			<?php extract($produit); ?>
			<form method="POST" action="<?php echo base_url(); ?>index.php/Produits/update/<?php echo $id_produit; ?>">
			<div class="form-group">
					<label>Libelle :</label>
					<input type="text" class="form-control" name="libelle_produit" value="<?php echo $libelle_produit; ?>"required>
				</div>
				<div class="form-group">
					<label>Quantité :</label>
					<input type="number" class="form-control" name="qte" value="<?php echo $qte;?>" required>
				</div>
				<div class="form-group">
					<label>Prix unitaire :</label>
					<input type="number" class="form-control" name="pu" value="<?php echo $pu;?>" required>
				</div>
				<div class="form-group">
                    <select name="categorie_id" class="form-control" required>
                        <option value="">Selectionner une categorie</option>
                         <?php foreach($categories as $categorie): ?>
                            <option value="<?php echo $categorie->id_categorie; ?>"><?php echo $categorie->libelle_categorie; ?></option>
                        <?php endforeach; ?>
                	</select>
                </div>
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Modifier</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">

		<title>ENI</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
<body>
<div class="container">
	<h1 class="page-header text-center" style="font-family:">LISTE DES COMMANDES</h1>
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
		<div class="col-sm-8">
			<a href="<?php echo base_url(); ?>index.php/commandes/addnew" class="btn btn-primary">Ajouter
			<span class="glyphicon glyphicon-plus"></span></a><br><br>
			<table class="table table-bordered table-striped">
				<thead >
					<tr>
						<th style="text-align:center;">Id</th>
						<th style="text-align:center;">Id client</th>
						<th style="text-align:center;">Id Produit</th>
						<th style="text-align:center;">Quantité</th>
						<th style="text-align:center;">Date</th>
						<th style="text-align:center;">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($commandes as $commande){
						?>
						<tr style="text-align:center;background-color:rgb(236,225,255);">
							<td><?php echo $commande->id_cmd; ?></td>
							<td><?php echo $commande->client_id; ?></td>
							<td><?php echo $commande->produit_id; ?></td>
							<td><?php echo $commande->qtecmd; ?></td>
							<td><?php echo $commande->datecmd; ?></td>
							<td>	
								<a href="<?php echo base_url(); ?>index.php/commandes/edit/<?php echo $commande->id_cmd; ?>" 
								class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> </a>
								&nbsp &nbsp 
								<a href="<?php echo base_url(); ?>index.php/commandes/delete/<?php echo $commande->id_cmd; ?>" 
								class="btn btn-default"><span class="glyphicon glyphicon-trash"></span> </a>
							</td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
	
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	
</html>
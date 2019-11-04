<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">

		<title>DASI3</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
<body>
<div class="container">
	<h1 class="page-header text-center" style="font-family:">Gestion de location des Kuruma</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<a href="<?php echo base_url(); ?>index.php/users/addnew" class="btn btn-primary">Atarashii
			<span class="glyphicon glyphicon-plus"></span></a><br><br>
			<table class="table table-bordered table-striped">
				<thead >
					<tr>
						<th style="text-align:center;">Identification&laquo;</th>
						<th style="text-align:center;">Nom</th>
						<th style="text-align:center;">Prénom</th>
						<th style="text-align:center;">Fonction</th>
						<th style="text-align:center;">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($users as $user){
						?>
						<tr style="text-align:center;background-color:rgb(236,225,255);">
							<td><?php echo $user->id; ?></td>
							<td><?php echo $user->username; ?></td>
							<td><?php echo $user->password; ?></td>
							<td><?php echo $user->fname; ?></td>
							<td>
							<a href="<?php echo base_url(); ?>index.php/users/edit/<?php echo $user->id; ?>" 
							class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> </a>
							  &nbsp &nbsp 
						 <a href="<?php echo base_url(); ?>index.php/users/delete/<?php echo $user->id; ?>" 
						 class="btn btn-default"><span class="glyphicon glyphicon-trash"></span> </a></td>
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
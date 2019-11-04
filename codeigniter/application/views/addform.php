<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>CodeIgniter Simple CRUD Tutorial</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Atarashii no ki te i masu </h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Atarashii
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a></span>
			</h3>
			<hr>
			<form method="POST" action="<?php echo base_url(); ?>index.php/users/insert">
				<div class="form-group">
					<label>Nom:</label>
					<input type="text" class="form-control" name="username">
				</div>
				<div class="form-group">
					<label>Prénom:</label>
					<input type="text" class="form-control" name="password">
				</div>
				<div class="form-group">
					<label>Fonction:</label>
					<input type="text" class="form-control" name="fname">
				</div>
				<button type="submit" class="btn btn-primary">
				<span class="glyphicon glyphicon-floppy-disk"></span>  Enregistrer</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>
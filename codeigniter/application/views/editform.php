<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>CodeIgniter Simple CRUD Tutorial</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">APPLICATION AVEC CODEIGNITER</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Modification
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a></span>
			</h3>
			<hr>
			<?php extract($user); ?>
			<form method="POST" action="<?php echo base_url(); ?>index.php/users/update/<?php echo $id; ?>">
				<div class="form-group">
					<label>Nom:</label>
					<input type="text" class="form-control" value="<?php echo $username; ?>" name="username">
				</div>
				<div class="form-group">
					<label>Prénom:</label>
					<input type="text" class="form-control" value="<?php echo $password; ?>" name="password">
				</div>
				<div class="form-group">
					<label>Fonction:</label>
					<input type="text" class="form-control" value="<?php echo $fname; ?>" name="fname">
				</div>
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Modifier</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>
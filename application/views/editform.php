
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Crudniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>

<body>
    <style>
    body {
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.45) 100%, transparent),
            url(https://images.pexels.com/photos/257360/pexels-photo-257360.jpeg);
        background-size: cover, cover;
        background-position: center, center;
        height: 100vh;
        width: 100%;
        overflow: hidden;
        font-family: 'Poppins', sans-serif;
    }

    input:focus,
    input.form-control:focus {
        border: 2px rgba(145, 135, 238, 1) solid;
        outline: none !important;
        outline-width: 0 !important;
        box-shadow: none;
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
    }
    </style>
    <nav class="navbar navbar-dark bg-dark p-3">
        <a class="navbar-brand" href="#">
            CodeIgniter_Crud
        </a>
        <h4 class="text-light">Alex R. Munoz</h4>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card" style="width: 50rem; height: 37rem;">
                <div class="card-body bg-light">
				<h3>Edit User
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<?php extract($user); ?>
			<form method="POST" action="<?php echo base_url(); ?>index.php/users/update/<?php echo $id; ?>">
				<div class="form-group">
					<label>Username:</label>
					<input type="text" class="form-control" value="<?php echo $username; ?>" name="username">
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="text" class="form-control" value="<?php echo $password; ?>" name="password">
				</div>
				<div class="form-group">
					<label>FullName:</label>
					<input type="text" class="form-control" value="<?php echo $fname; ?>" name="fname">
				</div>
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
			</form>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 
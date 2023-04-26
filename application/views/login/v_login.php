<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title ?></title>
	<link rel="icon" type="image/png" href="<?= base_url("assets/images/icon/Icon.png") ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
	<link rel="stylesheet" href="<?= base_url("assets/css/") ?>login.css">
</head>

<body class="text-center">
	<div class="container px-4">
		<div class="container login-area col-12 col-lg-5 bg-light">
			<div class="row d-flex justify-content-center">
				<div class="col-11 col-lg-10 col-md-10">
					<form action="<?php echo base_url('login/login'); ?>" method="post">
						<div class="mt-3 p-3">
							<img src="<?= base_url("assets/images/icon/Icon.png") ?>" class="w-25 mb-4" alt="">
							<h3>LOGIN SIPIA</h3>
						</div>
						<div class="mt-3 form-floating">
							<input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
							<label for="floatingInput">Email address</label>
						</div>
						<div class="mt-3 form-floating">
							<input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
							<label for="floatingPassword">Password</label>
						</div>
						<button class="mt-3 w-100 text-light btn btn-lg sign-in" type="submit">Sign in</button>
						<p class="mt-3 text-muted">&copy;SIPIa 2023</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
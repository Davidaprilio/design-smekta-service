<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<style type="text/css">
		.btn-login-thirdParty {
			border-radius: .25rem;
			background-color: #fff;
			padding: .5rem;
	    margin-top: .5rem;
	    border: 1px solid #dee2e6;
	    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075);
	    transition: .2s linear;
		}
		.btn-login-thirdParty img {
			float: left;
			margin-left: 30px;
		}
		.btn-login-thirdParty:hover {
			background: #eee;
		}
	</style>
</head>
<body class="d-flex justify-content-center align-items-center w-100 vh-100">
	<form action="" class="w-100" style="max-width: 400px">
		<div class="card" style="box-shadow: 0 .125rem .40rem rgba(0,0,0,.2)!important">
			<div class="card-body text-center">
				<h2 class="mt-3 mb-5">Daftar</h2>
				<div class="form-floating mb-2">
				  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
				  <label for="floatingInput">Email address</label>
				</div>
				<div class="form-floating mb-2">
				  <input type="text" class="form-control" id="floatingUser" placeholder="Username">
				  <label for="floatingUser">Username</label>
				</div>
				<div class="form-floating mb-2">
				  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
				  <label for="floatingPassword">Password</label>
				</div>
				<div class="form-floating mb-2">
				  <input type="password" class="form-control" id="floatingCPassword" placeholder="Confirm Password">
				  <label for="floatingCPassword">Confirm Password</label>
				</div>
				<button class="btn btn-primary w-100">Buat Akun</button>

				<p class="mt-3">Sudah punya akun? <a href="login.php" class="font-weight-bold text-primary text-decoration-none">Masuk</a></p>
			</div>
		</div>
	</form>
</body>
</html>
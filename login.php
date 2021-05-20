<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
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
				<h2 class="mt-3 mb-5">Masuk</h2>
				<div class="form-floating mb-3">
				  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
				  <label for="floatingInput">Email address</label>
				</div>
				<div class="form-floating mb-3">
				  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
				  <label for="floatingPassword">Password</label>
				</div>
				<a href="user/" class="btn btn-primary w-100">Masuk</a>

				<div class="my-4 border-top pt-3 position-relative">
					<span class="bg-white position-absolute " style="top: -13px; left: calc(50% - 30px); width: 60px">atau</span>
					<div class="btn-login-thirdParty">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVg_CpBJkD6MLiwNpq9mWPCPFNNShpEI6yk84fpPc&usqp=CAU" width="25">
						<span>Masuk dengan Google</span>
					</div>
					<div class="btn-login-thirdParty">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyDwBVk2xIXLwi4oc-wMMvpjpcRu-6-0B91RYATkQ&usqp=CAU" width="25">
						<span>Masuk dengan Twitter</span>
					</div>
					<div class="btn-login-thirdParty">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSM0gJqsLpbGvCd5hZuW4cw1ohKBt3SJ_SUhmiPszk&usqp=CAU" width="25">
						<span>Masuk dengan Facebook</span>
					</div>
				</div>
				<p>Belum punya akun? <a href="daftar.php" class="font-weight-bold text-primary text-decoration-none">Daftar</a></p>
			</div>
		</div>
	</form>
</body>
</html>
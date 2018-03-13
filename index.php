<?php
error_reporting(0);
session_start();
    include_once 'config/dao.php';
    $user = new Dao();
    if ($user->get_session()){
       header("location:home.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<title>My Login Page &mdash; Bootstrap 4 Login Page Snippet</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/my-login.css">
</head>

<body class="my-login-page">
	<form id="login" name="login" action="login.php" method="POST" class="form-signin">
		<section class="h-100">
			<div class="container h-100">
				<div class="row justify-content-md-center h-100">
					<div class="card-wrapper">
						<div class="brand">
							<img src="assets/img/logo.png">
						</div>
						<div class="card fat">
							<div class="card-body">
								<h4 class="card-title">Login</h4>
								<form method="POST">

									<div class="form-group">
										<label for="email">E-Mail Address</label>
										<input id="username" type="teks" class="form-control" name="username" value="" required autofocus>
									</div>
									<div class="form-group">
										<label for="password">Password
											<a href="forgot.html" class="float-right">
												Forgot Password?
											</a>
										</label>
										<input id="password" type="password" class="form-control" name="password" required data-eye>
									</div>

									<div class="form-group">
										<label>
											<input type="checkbox" name="remember"> Remember Me
										</label>
									</div>

									<div class="form-group no-margin">
										<button type="submit" class="btn btn-primary btn-block">
											Login
										</button>
									</div>
									<div class="margin-top20 text-center">
										Don't have an account? <a href="register.html">Create One</a>
									</div>
								</form>
							</div>
						</div>
						<div class="footer">
							Copyright &copy; Roy Andri
						</div>
					</div>
			</div>
		</div>
	</section>
	</form>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/my-login.js"></script>
</body>
</html>

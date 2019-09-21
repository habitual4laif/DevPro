<?php
// Initialize the session
session_start();

// Include config file
require_once "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<script src="main.js"></script>
	<title>Login Page</title>
</head>
<body>
	<div class="container">

			<div class="row no-gutters text-center py-5">
				<div class="col-lg-6 col-md-6 col-sm-12 px-2 mx-auto py-sm-3 ">
					<div class="side-box py-5  m-0 mx-sm-0">
						<h4 class="text-center pb-5 p-sm-0 ">Welcome to DevPro</h4>
						<p class="px-3">

								<div class="col-lg-6 col-md-6  col-sm-12 px-2 mx-auto py-sm-3">
					<div class="login-box py-3 m-0 mx-sm-0">
    <?php
  					$errMsg = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  					if (strpos($errMsg, 'error=empty') !== false){
  							echo "<div class='emptyErr'>Incorrect details</div>";
  					}
  	?>
		            <h2 class="login-header">Login</h2>
							<div class="form-row"></div>
							<form action="logincode.php" method="post">
			             <div class="form-group">
                     <input type="text" name="username" placeholder="username or Email" class="form-control" id= "username"  value="">
					       <span class="help-block"></span>
			           </div>
			            <div class="form-group">
	                   <input type="password" name="password" placeholder="password" id= "password" class="form-control">
	               <span class="help-block"></span>
                </div>
								<div class="form-group offset-md-3 col-md-6">
								 <button id="sign-in"  value="Login" class="btn btn-secondary btn-xl js-scroll-trigger">Sign in</button>
								</div>
                <a class="btn btn-info btn-xl js-scroll-trigger" href="index.php">HomePage</a>
              </form>
							</div>

					</div>
				</div>
			</div>

	</div>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>

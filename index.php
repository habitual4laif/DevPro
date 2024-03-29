<?php
// Include config file
require_once "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<script src="main.js"></script>
	<title>Login Page</title>
</head>
<body>
	<div class="container-fluid">

			<div class="row no-gutters text-center py-5 wert">
				<div class="col-lg-6 col-md-6 col-sm-12 px-2 mx-auto py-sm-3">

<?php
        $errMsg = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        if (strpos($errMsg, 'error=empty') !== false){
            echo "<hr><h3 class='emptyErr'>Kindly fill all fields</h><hr>";
        } else if (strpos($errMsg, 'error=notsame') !== false) {
            echo "<hr><h3 class='pwdErrMsg'>Password does not match</h3><hr>";
        } else if (strpos($errMsg, 'error=fname') !== false) {
              echo "<hr><h3 class='emailErr'>This Email is already taken</h3><hr>";
        }
  ?>

					<div class="side-box py-5 m-0 mx-sm-0">
						<h4 class="text-center pb-5 p-sm-0 ">Welcome to DevPro</h4>
								<div class="container">
										<div class="row">
											 <div  class="col-md-5 mx-auto">
												 <div id="">

												 <div class="signup form ">
														  <div class="logo mb-3">
															 <div class="col-md-12 text-center">
																<h1 >Signup</h1>
															 </div>
														  </div>
                  <form action="signupcode.php" method="post">
                  <div class="form-group">
                  <input type="text" name="username" placeholder="Username or email" id="newUsername" class="form-control" value="">
                  <span class="help-block"></span>
                  </div>
                  <div class="form-group">
                  <input type="password" name="password"  placeholder="Password" class="form-control" id="newUsername" value="">
                  <span class="help-block"></span>
                  </div>
                  <div class="form-group">
                  <input type="password" name="confirm_password" placeholder="Confirm Password" id="newUsername" class="form-control" value="">
                  <span class="help-block"></span>
                  </div>
                   <div class="col-md-12 text-center mb-3">
                    <button type="submit" class=" btn btn-block mybtn btn-primary "value="Submit">Sign Up</button>
                   </div>
                   <div class="col-md-12 ">
                    <div class="form-group">
                    <p class="text-center"><a href="login.php">Already have an account?</a></p>
                    </div>

                   </div>
                  </form>
												 </div>

												 </div>

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

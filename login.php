<?php
include("connect.php");
session_start();
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT * FROM user WHERE email='$email' and password='$password'";

	$result = mysqli_query($conn, $query);
	$rows = mysqli_num_rows($result);

	if ($rows == 1) {
		$_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        while ($res=mysqli_fetch_assoc($result) ){
     # code...
   
   $_SESSION['id']=$res['id'];
   $_SESSION['name']=$res['name'];
    
    
   }
   
		header("Location: user-list.php");
	}else {
    
		echo "error";
	}
}
?>
<?php include "background.php";?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
    <script type="text/javascript" src="main.js"></script>
  </head>
  <body>
      <?php include "navbar.php" ?>
      
    
      <div class="container">
      <div class="row">
        <div class="col-md-1">
          
          <?php include "sidebar.php";?>
          </div>
          <div class="col-md-6 offset-md-3">
              <h1>Login</h1>
             <form role="form" action="" method="post" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Email</label>
                                        <input type="text" name="email" placeholder="email..." class="form-username form-control" id="form-username"> </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password"> </div>
                                    <button type="submit" class="btn" name="submit"><strong>Sign in</strong></button>
                                </form>
              
              
              
          If you are not registered <a href="register.php" class="btn btn-primary">Click Here</a>
          
          
        </div>
          
          
          </div>
      
      
      
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

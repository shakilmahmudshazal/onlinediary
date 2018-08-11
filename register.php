
<?php
include "connect.php";
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO user(name,mobile,email,password) values ('$name','$mobile','$email','$password');";
    if (mysqli_query($conn, $sql)) {

    echo "New record created successfully";

    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Regestration</title>
    <script type="text/javascript" src="main.js"></script>
  </head>
  <body>
      <?php include "navbar.php" ?>
      <div class="container">
      <div class="row">
        <div class="col-1">

          <?php include "sidebar.php";?>
          </div>
          <div class="col-6 offset-3">

          <h1>Registration</h1>
      <form class="form-group" method="post" action="register.php">
       <label  for="name"> Name:</label>
          <input id="name" type="text" class="form-control" name="name" >
           <label  for="mobile"> Mobile:</label>
          <input id="mobile" type="text" class="form-control" name="mobile" >
           <label  for="email"> Email:</label>
          <input id="email" type="text" class="form-control" name="email" >
           <label  for="password"> Password:</label>
          <input id="password" type="password" class="form-control" name="password" >
          <br>
          <input type="submit" name="submit" class="btn btn-success">



      </form>
        <br>
       If you are    registered <a href="login.php" class="btn btn-primary">Click Here</a>


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
<?php include "background.php";?>

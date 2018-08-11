<?php
include_once("connect.php");
include_once("function.php");
check_login_user();

?>

<?php
include ("background.php");
//include("connect.php");

//session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- <link rel="stylesheet" type="text/css" href="main.css"> -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
    <script type="text/javascript" src="main.js"></script>
  </head>
  <body>
      <?php include "navbar.php"; ?>


      <div class="container">
      <div class="row">
        <div class="col-md-1">

          <?php include "sidebarprofile.php";?>

        </div>
          <div class="col-md-6 offset-md-3">
              <h1>Your information</h1>
               <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        </tr>
<?php
$rid=$_SESSION['id'];
              $query1 = "SELECT * FROM user WHERE id='$rid';" ;

  $result = mysqli_query($conn, $query1);
  //$rows = mysqli_num_rows($result);
  while ($res=mysqli_fetch_assoc($result) ){
     # code...


      //  $_SESSION['id']=$res['id'];
        echo "<tr>";
        echo "<td>".$res['name']."</td>";
        echo "<td>".$res['email']."</td>";
        echo "<td>".$res['mobile']."</td>";
        echo "<td><a class=\"btn btn-success\" href=\"editprofile.php?id=$res[id]\">Edit </a></td>";
        echo "<td><a class=\"btn btn-danger\" href=\"deleteprofile.php?id=$res[id]\">Delete </a></td>";
        }

      ?>
    </tbody>
  </table>
    <!-- to enter an entry <a href="user-list.php" class="btn btn-primary">Click Here</a> -->






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

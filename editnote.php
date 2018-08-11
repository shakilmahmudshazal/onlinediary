<?php
include_once("connect.php");
include_once("function.php");
check_login_user();

?>
<?php
$id=$_GET['id'];
//$rid=$_SESSION['id'];
              $query1 = "SELECT * FROM diary WHERE id='$id';" ;

  $result = mysqli_query($conn, $query1);
  //$rows = mysqli_num_rows($result);
  while ($res=mysqli_fetch_assoc($result) ){
     # code...

$title= $res['title'];
$note= $res['note'];
      //  $_SESSION['id']=$res['id'];
        // echo "<tr>";
        // echo "<td>".$res['date']."</td>";
        // echo "<td>".$res['title']."</td>";
        // echo "<td>".$res['note']."</td>";
        // echo "<td><a href=\"editnote.php?id=$res[id]\">Edit </a></td>";
        }

      ?>

      <?php
      // include "connect.php";
      if(isset($_POST['submit']))
      {
        $rid=$_SESSION['id'];

          $name=$_SESSION['name'];
          $title=$_POST['title'];
          $note= mysqli_real_escape_string($conn,$_POST['note']) ;
          // $date=date("Y/m/d");

          $sql="INSERT INTO diary(rid,name,date,title,note) values ('$rid','$name','$date','$title','$note');";
          $sql="update diary set title='$title',note='$note' where id='$id';";
          if (mysqli_query($conn, $sql)) {
          //echo "Updated successfully";
          // echo "<script>alert(\"successfullydone\");</script>";
            echo '<script language="javascript">';
           echo 'alert("message successfully sent")';
           echo '</script>';

               header('Location:allnote.php');
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

    <title>Hello, world!</title>
    <script type="text/javascript" src="main.js"></script>
  </head>
  <body>
      <?php include "navbar.php" ?>








     <div class="cotainer">
      <div class="row">
         <div class="col-1">

          <?php include "sidebarprofile.php";?>

        </div>
        <div class="col-6 offset-3">

          <form class="form-group" method="post" action="">
            <caption>Edit your Note<br></caption>
            <label>title: </label>
            <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" >
            <label>Note: </label>
            <textarea  class="form-control"  rows="10" name="note"><?php echo $note; ?></textarea>
            <!-- <input type="text" value="<?php echo $note; ?>" class="form-control"  rows="10" name="note"> -->
            <input type="submit" name="submit" value="submit" class="form-control btn btn-success">


          </form>



      </div>





     </div>





    <br>






      <a href="allnote.php" class="btn btn-primary">All note</a>
      <a href="logout.php" class="btn btn-danger">LOG OUT</a>



      <br>
      <br>
      <br>
      @copyright protected

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<?php include "background.php";?>

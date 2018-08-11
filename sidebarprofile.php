
     <div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <!-- <h3>Bootstrap Sidebar</h3> -->


        </div>

        <ul class="list-unstyled components">
            <!-- <p>Dummy Heading</p> -->
            <li class="active">
                 <?php
            //session_start();
          //echo $_SESSION["id"];
         echo "<h1>".$_SESSION['name']."</h2>";
        ?>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle btn btn-success">My Account</a>
                <ul class="collapse list-unstyled " id="homeSubmenu">
                    <li>
                        <a class="btn btn-info " href="allnote.php">My All note</a>
                         <!-- <a href="allnote.php" class="btn btn-primary">All note</a> -->
                    </li>

<li>
    <a href="user-list.php" class="btn btn-dark">new post</a>
</li>
                    <li>
                        <a class="btn btn-primary " href="myprofile.php">My Profile</a>
                    </li>
                    <li>
                        <a class="btn btn-danger " href="logout.php">Log Out</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">About</a>
            </li>

            </li>

            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

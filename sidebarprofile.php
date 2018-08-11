
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
                        <a class="btn btn-primary " href="#">My Profile</a>
                    </li>
                    <li>
                        <a class="btn btn-danger " href="logout.php">Log Out</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
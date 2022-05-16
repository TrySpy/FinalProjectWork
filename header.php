<!--SDEV255 Group One | Final Project-->

<?php
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>GROUP ONE FINAL PROJECT SDEV255</title>
  </head>

  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
        <div class="container">
        <a href="index.php" class="navbar-brand">Group One University</a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navmenu"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="cman.php" class="nav-link">Course Manager</a></li>
                    <?php
                        if (isset($_SESSION["userid"])){
                            echo "<li class='nav-item'><a href='profile.php' class='nav-link'>My Profile</a></li>";
                            echo "<li class='nav-item'><a href='includes/logout.inc.php' class='nav-link'>Log Out</a></li>";
                        }
                        else{
                            echo "<li class='nav-item'><a href='signup.php' class='nav-link'>Sign Up</a></li>";
                            echo "<li class='nav-item'><a href='login.php' class='nav-link'>Login</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
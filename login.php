<!--SDEV255 Group One | Final Project-->
<?php
    include_once 'header.php';
?>
    <section class="signup-form mt-5 mx-5 p-5 text-center">
        <h2>Log In Information</h2>
        <div class="signup-form-form">
            <form action="includes/login.inc.php" method="post">
                <ul class="list-group text-center">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="submit">Log In</button></ul>
            </form>
        </div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput"){
                echo "<p>Error: Could not submit form due to empty fields. Please fill in all fields.</p>";
            }
            if ($_GET["error"] == "wronglogin"){
                echo "<p>Error: Incorrect login information. </p>";
            }
        }
        ?>
    </section>
  </body>
</html>
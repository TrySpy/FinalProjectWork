<!--SDEV255 Group One | Final Project-->

<?php
    include_once 'header.php';
?>

    <section class="signup-form mt-5 mx-5 p-5 text-center">
        <h2>Sign Up Information</h2>
        <form action="includes/signup.inc.php" method="post">
            <ul class="list-group text-center">
                <input type="text" name="name" placeholder="John Doe">
                <input type="text" name="email" placeholder="jdoe@groupone.com">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrepeat" placeholder="Re-enter Password">
                <button type="submit" name="submit">Sign Up!</button></ul>
        </form> 
    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput"){
                echo "<p>Error: Could not submit form due to empty fields. Please fill in all fields.</p>";
            }
            if ($_GET["error"] == "invalidemail"){
                echo "<p>Error: Could not submit form due to invalid email. Please enter a valid email address.</p>";
            }
            if ($_GET["error"] == "pwdsdontmatch"){
                echo "<p>Error: Could not submit form due to non-matching passwords. Passwords are case-sensitive.</p>";
            }
            if ($_GET["error"] == "emailexists"){
                echo "<p>Error: Email already in use. Please log in using your existing login information.</p>";
            }
            if ($_GET["error"] == "none"){
                echo "<p>Success! You are now signed up. Redirecting...</p>";
                header("location: index.php");
            }
        }
    ?>
    </section>
  </body>
</html>
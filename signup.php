<?php include "header.php"; ?>
<?php include "db.php"; ?>

<div class="auth-container">

    <h2>Create Account</h2>

    <?php

if(isset($_POST['signup'])){

$name=$_POST['name'];
$email=$_POST['email'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

$query="INSERT INTO users(name,email,password)
VALUES($1,$2,$3)";

pg_query_params($conn,$query,array($name,$email,$password));

echo "<p class='success'>Account Created Successfully</p>";

}

?>

    <form method="POST">

        <input type="text" name="name" placeholder="Full Name" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <button name="signup">Sign Up</button>

        <p class="switch">Already have an account? <a href="login.php">Login</a></p>

    </form>

</div>
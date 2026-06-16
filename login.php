<?php
include "db.php";
include "header.php";

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

/* ADMIN LOGIN CHECK */

if($email == "admin@gmail.com" && $password == "Admin123"){

    $_SESSION['admin'] = "admin";
    header("Location: dashboard.php");
    exit();

}

$query = "SELECT * FROM users WHERE email=$1";
$result = pg_query_params($conn,$query,array($email));

$user = pg_fetch_assoc($result);

if($user && password_verify($password,$user['password'])){

$_SESSION['user'] = $user['name'];

header("Location: index.php");
exit();

}else{

$error = "Invalid Email or Password";

}

}
?>

<div class="auth-container">

    <h2>Login</h2>

    <?php
if(isset($error)){
echo "<p class='error'>$error</p>";
}
?>

    <form method="POST">

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <button name="login">Login</button>

        <p class="switch">Don't have an account? <a href="signup.php">Sign Up</a></p>

    </form>

</div>
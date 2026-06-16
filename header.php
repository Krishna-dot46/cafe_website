<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Cafe Website</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

</head>

<body>

    <header>
        <nav>

            <div class="logo">
                <img src="images/logo2.png" alt="My Cafe Logo">
                <span>My Cafe</span>
            </div>

            <ul>

                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="reservation.php">Reservation</a></li>
                <li><a href="contact.php">Contact</a></li>

                <?php if(isset($_SESSION['user'])) { ?>

                <li style="color:#534931;">Hello, <?php echo $_SESSION['user']; ?></li>
                <li><a href="logout.php">Logout</a></li>

                <?php } else { ?>

                <li><a href="login.php">Login</a></li>

                <?php } ?>

            </ul>

        </nav>
    </header>
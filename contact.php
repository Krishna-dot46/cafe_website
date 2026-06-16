<?php include "header.php"; ?>
<?php include "db.php"; ?>

<?php

$msg="";

if(isset($_POST['send'])){

$name=$_POST['name'] ?? '';
$email=$_POST['email']?? '';
$subject=$_POST['subject'] ?? '';
$message=$_POST['message'] ?? '';

$query="INSERT INTO contact(name,email,subject,message)
VALUES($1,$2,$3,$4)";

$result=pg_query_params($conn,$query,array($name,$email,$subject,$message));

if($result){
$msg="Message Sent Successfully!";
}

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Contact Us</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
    /* HERO */

    .hero {
        height: 60vh;
        background: linear-gradient(rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.15)),
            url("images/image.png");
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-family: 'Playfair Display', serif;

    }

    .hero h1 {
        font-size: 45px;
        letter-spacing: 2px;
        color: #534931;
    }

    .hero-content {
        margin-top: -80px;
        /* move UP */
    }

    /* BREADCRUMB */

    /* BREADCRUMB */

    .breadcrumb {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        padding: 12px 0;
        margin-top: 0px;
        background: #e5dcd2;
        font-family: 'Poppins', sans-serif;
        font-size: 15px;
        color: #534931;
    }

    /* HOME BUTTON */

    .home-btn {
        color: #534931;
        padding: 6px 16px;
        border-radius: 4px;
        text-decoration: none;
        font-size: 15px;
        font-family: 'Poppins', sans-serif;
    }

    .home-btn:hover {
        background: #8e7a51;
    }

    /* SLASH */

    .breadcrumb span {
        color: #534931;
    }

    /* CURRENT PAGE */

    .breadcrumb p {
        margin: 0;
        color: #534931;
        font-weight: 500;
    }

    /* INFO SECTION */

    .contact-info-section {
        width: 85%;
        margin: 60px auto;
        display: flex;
        gap: 50px;
        align-items: center;
        font-family: 'Playfair Display', serif;

    }

    /* INFO BOX */

    .info {
        flex: 1;
    }

    .info h2 {
        margin-bottom: 20px;
    }

    .info-box {
        margin-bottom: 18px;
    }

    .info-box strong {
        display: block;
        font-size: 16px;
    }

    .info-box p {
        color: #555;
        margin: 5px 0;
    }

    /* IMAGE */

    .contact-img {
        flex: 1;
    }

    .contact-img img {
        width: 100%;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    /* FORM FULL WIDTH */

    .contact-form {
        width: 85%;
        margin: auto;
        background: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin-bottom: 60px;
    }

    .contact-form h2 {
        margin-bottom: 25px;
        text-align: center;
        font-family: 'Playfair Display', serif;

    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .contact-form textarea {
        height: 130px;
    }

    .contact-form button {
        background: #ff7b00;
        color: white;
        border: none;
        padding: 12px;
        width: 100%;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        font-family: 'Playfair Display', serif;

    }

    .contact-form button:hover {
        background: #e76d00;
    }

    .success {
        color: green;
        text-align: center;
        margin-bottom: 15px;
    }

    /* MAP */

    .map {
        width: 85%;
        margin: auto;
        margin-bottom: 60px;
    }

    .map iframe {
        width: 100%;
        height: 350px;
        border: 0;
        border-radius: 10px;
    }

    /* IMAGE SCROLLER */

    .scroller {
        width: 100%;
        overflow: hidden;
        background: white;
        padding: 20px 0;
    }

    .scroller-track {
        display: flex;
        gap: 0px;
        width: max-content;
        animation: scroll 60s linear infinite;
    }

    .scroller img {
        height: 250px;
        width: 250px;
        object-fit: cover;
        border-radius: 0px;
    }

    /* Animation */

    @keyframes scroll {

        0% {
            transform: translateX(0);
        }

        /* slow move */

        40% {
            transform: translateX(-25%);
        }

        /* pause for 1 second */

        45% {
            transform: translateX(-25%);
        }

        /* move again */

        80% {
            transform: translateX(-50%);
        }

        /* pause again */

        85% {
            transform: translateX(-50%);
        }

        100% {
            transform: translateX(-50%);
        }

    }

    /* RESPONSIVE */

    @media(max-width:900px) {

        .contact-info-section {
            flex-direction: column;
        }

    }
    </style>

</head>

<body>

    <!-- HERO -->
    <section class="hero">

        <div class="hero-content">
            <h1>Contact Us</h1>
        </div>

    </section>


    <!-- BREADCRUMB -->

    <div class="breadcrumb">

        <a href="index.php" class="home-btn">Home</a>

        <span>/</span>

        <p>Contact</p>

    </div>


    <!-- CONTACT INFO -->

    <div class="contact-info-section">

        <div class="info">

            <h2>Contact Information</h2>

            <div class="info-box">
                <strong>Address</strong>
                <p>123 Cafe Street, Pune, India</p>
            </div>

            <div class="info-box">
                <strong>Phone</strong>
                <p>+91 9876543210</p>
            </div>

            <div class="info-box">
                <strong>Email</strong>
                <p>mycafe@email.com</p>
            </div>

            <div class="info-box">
                <strong>Opening Hours</strong>
                <p>Mon - Sun : 10AM - 11PM</p>
            </div>

        </div>

        <div class="contact-img">

            <img src="images/food2 (7).jpg">

        </div>

    </div>


    <!-- FULL WIDTH FORM -->

    <div class="contact-form">

        <h2>Send Message</h2>

        <?php if($msg!=""){ ?>
        <p class="success"><?php echo $msg; ?></p>
        <?php } ?>

        <form method="POST">

            <input type="text" name="name" placeholder="Your Name" required>

            <input type="email" name="email" placeholder="Your Email" required>

            <input type="text" name="subject" placeholder="Subject">

            <textarea name="message" placeholder="Your Message"></textarea>

            <button name="send">Send Message</button>

        </form>

    </div>


    <!-- MAP -->

    <div class="map">

        <iframe src="https://www.google.com/maps?q=pune&output=embed"></iframe>

    </div>


    <!-- IMAGE SCROLLER -->

    <div class="scroller">

        <div class="scroller-track">

            <img src="images/food1.jpg">
            <img src="images/food2 (1).jpg">
            <img src="images/food2 (2).jpg">
            <img src="images/food2 (3).jpg">
            <img src="images/food2 (4).jpg">

            <img src="images/food1.jpg">
            <img src="images/food2 (7).jpg">
            <img src="images/food2 (5).jpg">
            <img src="images/food2 (8).jpg">
            <img src="images/food2 (11).jpg">


        </div>

    </div>

</body>

</html>

<?php include "footer.php"; ?>
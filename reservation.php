<?php
include "db.php";
include "header.php";

$message = "";

if(isset($_POST['book'])){

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$date = $_POST['date'] ?? '';
$time = $_POST['time'] ?? '';
$persons = $_POST['persons'] ?? '';
$message_text = $_POST['message'] ?? '';

$query="INSERT INTO reservations(name,email,phone,date,time,persons,message)
VALUES($1,$2,$3,$4,$5,$6,$7)";

$result = pg_query_params($conn,$query,array(
$name,
$email,
$phone,
$date,
$time,
$persons,
$message_text
));

if($result){
    $message="Table Reserved Successfully!";
}else{
    $message="Reservation Failed!";
}
}
?>

<!DOCTYPE html>
<html>

<head>

    <title>Table Reservation</title>

    <style>
    /* HERO SECTION */

    .hero {
        height: 60vh;
        background: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)),
            url("images/reservation (2).jpg");
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-right: 420px;
        color: #534931;
        text-align: left;

    }

    .hero h1 {
        font-size: 48px;
        letter-spacing: 2px;
        font-family: 'Playfair Display', serif;

    }

    .hero-content {
        margin-top: -80px;
        /* move UP */
    }

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

    /* FORM SECTION */

    .container {
        width: 100%;
        display: flex;
        justify-content: center;
        margin-top: 10px;
        padding-bottom: 60px;
    }

    .form-box {
        background: white;
        padding: 40px;
        width: 420px;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .form-box h2 {
        text-align: center;
        margin-bottom: 25px;
        font-family: 'Playfair Display', serif;

    }

    .input-group {
        margin-bottom: 18px;
    }

    .input-group label {
        font-size: 14px;
        font-weight: 500;
        font-family: 'Playfair Display', serif;

    }

    .input-group input {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
    }

    .input-group input:focus {
        outline: none;
        border-color: #ff7b00;
    }

    button {
        width: 100%;
        padding: 12px;
        background: #ff7b00;
        color: white;
        border: none;
        font-size: 16px;
        border-radius: 6px;
        cursor: pointer;
        transition: 0.3s;
        font-family: 'Playfair Display', serif;

    }

    button:hover {
        background: #e86d00;
    }

    .message {
        text-align: center;
        color: green;
        margin-bottom: 15px;
        font-weight: 500;
    }

    /* RESPONSIVE */

    @media(max-width:500px) {

        .form-box {
            width: 90%;
        }

        .hero h1 {
            font-size: 34px;
        }

    }
    </style>

</head>

<body>

    <!-- HERO -->
    <section class="hero">

        <div class="hero-content">
            <h1>Reserve Your Table</h1>
        </div>

    </section>

    <!-- BREADCRUMB -->

    <div class="breadcrumb">

        <a href="index.php" class="home-btn">Home</a>

        <span>/</span>

        <p>Reservation</p>

    </div>




    <!-- FORM -->

    <div class="container">

        <div class="form-box">

            <h2>Book a Table</h2>

            <?php if($message!=""){ ?>
            <div class="message"><?php echo $message; ?></div>
            <?php } ?>

            <form method="POST" onsubmit="return validateForm()">

                <div class="input-group">
                    <label>Name</label>
                    <input type="text" name="name" id="name" required>
                </div>

                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>

                <div class="input-group">
                    <label>Phone</label>
                    <input type="text" name="phone" required>
                </div>

                <div class="input-group">
                    <label>Date</label>
                    <input type="date" name="date" required>
                </div>

                <div class="input-group">
                    <label>Time</label>
                    <input type="time" name="time" required>
                </div>

                <div class="input-group">
                    <label>Number of Persons</label>
                    <input type="number" name="persons" min="1" max="20" required>
                </div>

                <div class="input-group">
                    <label>Special Request / Message</label>
                    <input type="text" name="message" placeholder="Birthday, Anniversary etc">
                </div>

                <button type="submit" name="book">Reserve Table</button>

            </form>

        </div>

    </div>


    <script>
    function validateForm() {

        let name = document.getElementById("name").value;
        let persons = document.getElementById("persons").value;

        if (name.length < 3) {
            alert("Name must be at least 3 characters");
            return false;
        }

        if (persons <= 0) {
            alert("Enter valid number of persons");
            return false;
        }

        return true;
    }
    </script>

</body>

</html>
<?php include "footer.php"; ?>
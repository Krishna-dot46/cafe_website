<?php
include "db.php";
include "header.php";

$categories = ["Starter","Breakfast","Dessert","Beverage"];
?>
<!-- HERO -->
<section class="hero">

    <div class="hero-content">
        <h1>Our Menu</h1>
    </div>

</section>


<!-- BREADCRUMB -->

<div class="breadcrumb">

    <a href="index.php" class="home-btn">Home</a>

    <span>/</span>

    <p>Menu</p>

</div>

<link rel="stylesheet" href="menu.css">

<section class="menu-section">

    <h4>OUR MENU</h4>
    <h1 class="menu-title">Special Menu</h1>
    <p>
        Explore our special menu featuring delicious dishes prepared with fresh
        ingredients and unique flavors specially crafted for our customers.
    </p>
    <!-- CATEGORY TABS -->
    <div class="menu-tabs">
        <?php foreach($categories as $cat){ ?>
        <button class="tab-btn" onclick="showMenu('<?php echo $cat; ?>')">
            <?php echo $cat; ?>
        </button>
        <?php } ?>
    </div>

    <?php foreach($categories as $cat){ ?>

    <div class="menu-category" id="<?php echo $cat; ?>">

        <div class="menu-grid">

            <?php
$query="SELECT * FROM menu WHERE category=$1";
$result=pg_query_params($conn,$query,array($cat));

while($row=pg_fetch_assoc($result)){
?>

            <div class="menu-item">

                <div class="menu-head">

                    <h3><?php echo $row['name']; ?></h3>
                    <span class="dots"></span>

                    <span class="price">₹<?php echo $row['price']; ?></span>

                </div>

                <p class="desc"><?php echo $row['description']; ?></p>

            </div>
            <?php } ?>

        </div>

    </div>

    <?php } ?>

</section>

<script src="menu.js"></script>

<?php include "footer.php"; ?>
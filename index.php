<?php include "header.php"; ?>

<style>
/* HERO */

.hero {
    height: 85vh;
    background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)),
        url("images/bg.jpg");
    background-size: cover;
    background-position: center;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
}

.hero h1 {
    font-size: 60px;
    letter-spacing: 2px;
    margin-bottom: 10px;
}

.hero p {
    font-size: 20px;
    margin-bottom: 25px;
}

.btn {
    background: #b38e6a;
    color: white;
    padding: 12px 28px;
    text-decoration: none;
    border-radius: 6px;
    font-size: 16px;
    transition: .3s;
}

.btn:hover {
    background: #8a6c4d;
}

/* ABOUT */

/* HOME ABOUT */

.home-about {
    padding: 80px 10%;
    background: #fafafa;
}

.about-container {
    display: flex;
    align-items: center;
    gap: 40px;
    max-width: 1100px;
    margin: auto;
}

/* SMALL IMAGE */

.about-img img {
    width: 350px;
    height: 260px;
    object-fit: cover;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}

/* TEXT */

.about-text h2 {
    font-size: 34px;
    color: #534931;
    margin-bottom: 15px;
}

.about-text p {
    color: #666;
    line-height: 1.7;
    margin-bottom: 20px;
    max-width: 500px;
}

/* BUTTON */

.about-btn {
    background: #b38e6a;
    color: white;
    padding: 10px 22px;
    text-decoration: none;
    border-radius: 6px;
    font-size: 15px;
    transition: .3s;
}

.about-btn:hover {
    background: #8a6c4d;
}

/* MOBILE */

@media(max-width:900px) {

    .about-container {
        flex-direction: column;
        text-align: center;
    }

    .about-img img {
        width: 100%;
        height: auto;
    }

}

/* MENU PREVIEW */

.menu-preview {
    background: #fafafa;
    padding: 10px 10%;
    text-align: center;
}

.menu-preview h2 {
    font-size: 36px;
    margin-bottom: 40px;
    color: #534931;
}

.menu-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.menu-card {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: .3s;
}

.menu-card:hover {
    transform: translateY(-8px);
}

.menu-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 15px;
}

.menu-card h3 {
    margin-bottom: 5px;
}

/* FEATURES */

.features {
    padding: 80px 10%;
    text-align: center;
}

.features h2 {
    font-size: 36px;
    margin-bottom: 40px;
}

.feature-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.feature {
    padding: 30px;
    background: #f5f5f5;
    border-radius: 10px;
    transition: .3s;
}

.feature:hover {
    background: #e5dcd2;
}

.feature h3 {
    margin-bottom: 10px;
}

/* CTA */

.cta {
    background: linear-gradient(rgba(159, 146, 146, 0.48), rgba(159, 146, 146, 0.48)),
        url("images/GalleryDesktophtml_row0.jpg");
    color: white;
    text-align: center;
    padding: 80px 20px;
}

.cta h2 {
    font-size: 40px;
    margin-bottom: 15px;
}

.cta a {
    background: #b38e6a;
    padding: 12px 28px;
    text-decoration: none;
    color: white;
    border-radius: 6px;
}

/* MOBILE */

@media(max-width:900px) {

    .about {
        grid-template-columns: 1fr;
    }

    .menu-grid {
        grid-template-columns: 1fr;
    }

    .feature-grid {
        grid-template-columns: 1fr;
    }

    .hero h1 {
        font-size: 40px;
    }

}
</style>

<!-- HERO -->

<section class="hero">

    <h1>Welcome To Our Cafe</h1>

    <p>Best Coffee & Delicious Food</p>

    <a href="menu.php" class="btn">View Menu</a>

</section>


<!-- ABOUT -->

<section class="home-about">

    <div class="about-container">

        <div class="about-img">
            <img src="images/about1.jpg">
        </div>

        <div class="about-text">

            <h2>About Our Cafe</h2>

            <p>
                At My Cafe we serve freshly brewed coffee and delicious homemade
                food in a cozy environment. Our goal is to create a relaxing
                place where people can enjoy quality coffee and great moments.
            </p>

            <a href="about.php" class="about-btn">Read More</a>

        </div>

    </div>

</section>


<!-- MENU PREVIEW -->

<section class="menu-preview">

    <h2>Popular Menu</h2>

    <div class="menu-grid">

        <div class="menu-card">
            <img src="images/food1.jpg">
            <h3>Cappuccino</h3>
            <p>Rich espresso with creamy milk foam.</p>
        </div>

        <div class="menu-card">
            <img src="images/food2 (1).jpg">
            <h3>Chocolate Cake</h3>
            <p>Fresh baked cake with chocolate layers.</p>
        </div>

        <div class="menu-card">
            <img src="images/food2 (2).jpg">
            <h3>Breakfast Combo</h3>
            <p>Perfect morning meal with coffee.</p>
        </div>

    </div>

</section>


<!-- FEATURES -->

<section class="features">

    <h2>Why Choose Us</h2>

    <div class="feature-grid">

        <div class="feature">
            <h3>☕ Premium Coffee</h3>
            <p>We use high quality roasted beans.</p>
        </div>

        <div class="feature">
            <h3>🍰 Fresh Desserts</h3>
            <p>Handmade desserts every day.</p>
        </div>

        <div class="feature">
            <h3>🌿 Cozy Atmosphere</h3>
            <p>Relax and enjoy your time in comfort.</p>
        </div>

    </div>

</section>


<!-- CTA -->

<section class="cta">

    <h2>Reserve Your Table Today</h2>

    <p>Enjoy your coffee moment with us.</p>

    <br>

    <a href="reservation.php">Book Table</a>

</section>


<?php include "footer.php"; ?>
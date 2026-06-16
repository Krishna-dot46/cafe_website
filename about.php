<?php include "header.php"; ?>

<style>
/* PAGE FONT */


/* HERO SECTION */

.about-hero {
    height: 60vh;
    background: linear-gradient(rgba(241, 241, 241, 0), rgba(237, 235, 235, 0)), url("images/classic-deviled-eggs-appetizer-white.jpg");
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    font-family: 'Playfair Display', serif;


}

.about-hero h1 {
    font-size: 50px;
    letter-spacing: 3px;
    animation: fadeDown 1s ease;
    color: #534931;
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

/* ANIMATION */

@keyframes fadeDown {
    from {
        opacity: 0;
        transform: translateY(-30px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}


/* ABOUT SECTION */

.about-section {
    max-width: 1200px;
    margin: auto;
    padding: 80px 30px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    font-family: 'Playfair Display', serif;

}

.about-img img {
    width: 100%;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

.about-text h2 {
    font-size: 36px;
    margin-bottom: 20px;
}

.about-text p {
    color: #555;
    line-height: 1.8;
    margin-bottom: 15px;
}


/* STATISTICS SECTION */

.stats {
    background: #111;
    color: white;
    padding: 80px 20px;
    font-family: 'Playfair Display', serif;

}

.stats-container {
    max-width: 1100px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 40px;
    text-align: center;
}

.stat-box {
    transition: 0.3s;
}

.stat-box:hover {
    transform: translateY(-8px);
}

.stat-box h2 {
    font-size: 45px;
    color: #facc15;
    margin-bottom: 5px;
}


/* FEATURES */

.features {
    padding: 80px 20px;
}

.features h2 {
    text-align: center;
    font-size: 36px;
    margin-bottom: 50px;
    font-family: 'Playfair Display', serif;

}

.feature-grid {
    max-width: 1100px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.feature-card {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: 0.3s;
    font-family: 'Playfair Display', serif;

}

.feature-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

.feature-card h3 {
    margin-bottom: 10px;
}


/* TEAM */

.team {
    background: #f5f5f5;
    padding: 80px 20px;
    text-align: center;
}

.team h2 {
    font-size: 36px;
    margin-bottom: 50px;
    font-family: 'Playfair Display', serif;

}

.team-grid {
    max-width: 1100px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.team-card {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: 0.3s;
    font-family: 'Playfair Display', serif;

}

.team-card:hover {
    transform: scale(1.05);
}

.team-card img {
    width: 100%;
    height: 250px;
    object-fit: cover;
}

.team-card h3 {
    margin-top: 15px;
}

.team-card p {
    margin-bottom: 20px;
    color: #666;
}


/* RESPONSIVE */

@media(max-width:900px) {

    .about-section {
        grid-template-columns: 1fr;
    }

    .feature-grid {
        grid-template-columns: 1fr;
    }

    .team-grid {
        grid-template-columns: 1fr;
    }

    .stats-container {
        grid-template-columns: 1fr 1fr;
    }

}
</style>



<!-- HERO -->

<section class="about-hero">
    <h1>About Us</h1>
</section>
<!-- BREADCRUMB -->

<div class="breadcrumb">

    <a href="index.php" class="home-btn">Home</a>

    <span>/</span>

    <p>About Us</p>

</div>



<!-- ABOUT -->

<section class="about-section">

    <div class="about-img">
        <img src="images/about1.jpg">
    </div>

    <div class="about-text">

        <h2>Welcome To My Cafe</h2>

        <p>
            At My Cafe, we believe coffee is more than a drink — it's a lifestyle.
            Our mission is to create a cozy place where people can relax, work,
            and enjoy amazing coffee.
        </p>

        <p>
            We carefully select premium coffee beans and combine them with
            fresh ingredients to create delicious beverages and desserts.
            Every cup we serve is made with passion.
        </p>

        <p>
            Whether you're meeting friends, studying, or enjoying a peaceful
            moment alone, My Cafe is the perfect place for you.
        </p>

    </div>

</section>


<!-- STATISTICS -->

<section class="stats">

    <div class="stats-container">

        <div class="stat-box">
            <h2 class="counter" data-target="10">0</h2>
            <p>Years Experience</p>
        </div>

        <div class="stat-box">
            <h2 class="counter" data-target="25000">0</h2>
            <p>Happy Customers</p>
        </div>

        <div class="stat-box">
            <h2 class="counter" data-target="50">0</h2>
            <p>Coffee Varieties</p>
        </div>

        <div class="stat-box">
            <h2 class="counter" data-target="15">0</h2>
            <p>Professional Staff</p>
        </div>

    </div>

</section>


<!-- FEATURES -->

<section class="features">

    <h2>Why Customers Love Us</h2>

    <div class="feature-grid">

        <div class="feature-card">
            <h3>☕ Premium Coffee</h3>
            <p>Freshly roasted beans for the best taste.</p>
        </div>

        <div class="feature-card">
            <h3>🍰 Fresh Desserts</h3>
            <p>Handmade cakes and pastries every day.</p>
        </div>

        <div class="feature-card">
            <h3>🌿 Relaxing Atmosphere</h3>
            <p>A cozy place to enjoy coffee and relax.</p>
        </div>

    </div>

</section>


<!-- TEAM -->

<section class="team">

    <h2>Meet Our Team</h2>

    <div class="team-grid">

        <div class="team-card">
            <img src="images/team1.jpg">
            <h3>Rahul Sharma</h3>
            <p>Head Barista</p>
        </div>

        <div class="team-card">
            <img src="images/team4.jpg">
            <h3>Priya Patel</h3>
            <p>Chef</p>
        </div>

        <div class="team-card">
            <img src="images/team3.jpg">
            <h3>Amit Verma</h3>
            <p>Manager</p>
        </div>

    </div>

</section>

<script>
const counters = document.querySelectorAll('.counter');
let started = false;

function startCounter() {

    if (started) return;

    const section = document.querySelector('.stats');
    const sectionTop = section.offsetTop;
    const scrollPos = window.scrollY + window.innerHeight;

    if (scrollPos > sectionTop) {

        started = true;

        counters.forEach(counter => {

            counter.innerText = '0';

            const updateCounter = () => {

                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;

                const increment = target / 200;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCounter, 10);
                } else {
                    counter.innerText = target;
                }

            };

            updateCounter();

        });

    }

}

window.addEventListener("scroll", startCounter);
</script>
<?php include "footer.php"; ?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Café - Premium Coffee Experience</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        color: #333;
    }

    header {
        background: linear-gradient(135deg, #2c1810 0%, #1a0f0a 100%);
        color: #fff;
        padding: 1rem 0;
        position: sticky;
        top: 0;
        z-index: 100;
    }

    nav {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 2rem;
    }

    .logo {
        font-size: 1.8rem;
        font-weight: bold;
        color: #d4a574;
    }

    nav ul {
        list-style: none;
        display: flex;
        gap: 2rem;
    }

    nav a {
        color: #fff;
        text-decoration: none;
        transition: color 0.3s;
    }

    nav a:hover {
        color: #d4a574;
    }

    .hero {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%232c1810" width="1200" height="600"/></svg>');
        background-size: cover;
        background-position: center;
        color: #fff;
        text-align: center;
        padding: 10rem 2rem;
    }

    .hero h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
    }

    .hero p {
        font-size: 1.3rem;
        margin-bottom: 2rem;
    }

    .btn {
        display: inline-block;
        padding: 0.8rem 2rem;
        background: #d4a574;
        color: #1a0f0a;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        transition: background 0.3s;
        border: none;
        cursor: pointer;
    }

    .btn:hover {
        background: #c99463;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
    }

    .section {
        margin: 3rem 0;
    }

    .section h2 {
        text-align: center;
        font-size: 2.5rem;
        margin-bottom: 2rem;
        color: #2c1810;
    }

    .menu-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
    }

    .menu-item {
        background: #f5f5f5;
        padding: 1.5rem;
        border-radius: 8px;
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .menu-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .menu-item h3 {
        color: #d4a574;
        margin-bottom: 0.5rem;
    }

    .price {
        font-size: 1.3rem;
        color: #2c1810;
        font-weight: bold;
        margin-top: 1rem;
    }

    footer {
        background: #2c1810;
        color: #fff;
        text-align: center;
        padding: 2rem;
        margin-top: 3rem;
    }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="logo">☕ Our Café</div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero" id="home">
        <h1>Premium Coffee Experience</h1>
        <p>Handcrafted beverages made with passion</p>
        <button class="btn" onclick="scrollToMenu()">Explore Menu</button>
    </section>

    <div class="container">
        <section class="section" id="menu">
            <h2>Our Menu</h2>
            <div class="menu-grid">
                <div class="menu-item">
                    <h3>Espresso</h3>
                    <p>Rich and bold single shot</p>
                    <div class="price">$2.50</div>
                </div>
                <div class="menu-item">
                    <h3>Cappuccino</h3>
                    <p>Creamy espresso with steamed milk</p>
                    <div class="price">$4.00</div>
                </div>
                <div class="menu-item">
                    <h3>Latte</h3>
                    <p>Smooth coffee with velvety foam</p>
                    <div class="price">$4.50</div>
                </div>
                <div class="menu-item">
                    <h3>Americano</h3>
                    <p>Classic full-bodied brew</p>
                    <div class="price">$3.00</div>
                </div>
            </div>
        </section>

        <section class="section" id="about">
            <h2>About Us</h2>
            <p style="text-align: center; font-size: 1.1rem; color: #666;">
                We've been serving the finest coffee since 2015. Our passion is to deliver exceptional quality and
                service to every customer who walks through our doors.
            </p>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Our Café. All rights reserved.</p>
    </footer>

    <script>
    function scrollToMenu() {
        document.getElementById('menu').scrollIntoView({
            behavior: 'smooth'
        });
    }
    </script>
</body>

</html>
<?php
// Database connection (add this at the top after session_start())
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafe_website";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch menu items from database
$menu_query = "SELECT id, name, description, price FROM menu_items ORDER BY id";
$menu_result = $conn->query($menu_query);
?>
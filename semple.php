<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Borcelle Menu</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Poppins:wght@300;400&display=swap"
        rel="stylesheet">

    <style>
    body {
        margin: 0;
        background: #eae6e3;
        font-family: 'Poppins', sans-serif;
    }

    .menu-card {
        width: 700px;
        margin: 40px auto;
        background: #d8cfca;
        padding: 40px;
        border-radius: 12px;
        position: relative;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
    }

    h1 {
        text-align: center;
        font-family: 'Playfair Display', serif;
        font-size: 48px;
        letter-spacing: 3px;
        color: #3e2c23;
        margin-bottom: 20px;
    }

    .section-title {
        text-align: center;
        font-family: 'Playfair Display', serif;
        font-size: 28px;
        margin: 30px 0;
        color: #3e2c23;
    }

    .menu-item {
        margin-bottom: 18px;
    }

    .item-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: 600;
        color: #3e2c23;
    }

    .line {
        flex: 1;
        border-bottom: 1px dotted #3e2c23;
        margin: 0 10px;
    }

    .desc {
        font-size: 13px;
        color: #4b3c34;
        margin-top: 3px;
    }

    /* decorative drawings */

    .leaf1 {
        position: absolute;
        top: 80px;
        left: 20px;
        width: 120px;
    }

    /* TOP RIGHT CUP */

    .cup1 {
        position: absolute;
        top: 120px;
        right: 20px;
        width: 150px;
    }

    /* BOTTOM LEFT CUP */

    .cup2 {
        position: absolute;
        bottom: 70px;
        left: 200px;
        width: 150px;
    }

    /* BOTTOM RIGHT LEAF */

    .leaf2 {
        position: absolute;
        bottom: 120px;
        right: 20px;
        width: 150px;
    }

    .footer {
        display: flex;
        justify-content: space-between;
        margin-top: 40px;
        font-size: 14px;
    }
    </style>
</head>

<body>

    <div class="menu-card">

        <img src="images/Untitled_design-removebg-preview.png" class="leaf1">
        <img src="images/coffe4-removebg-preview.png" class="cup1">
        <img src="images/coffe4-removebg-preview.png" class="cup2">
        <img src="images/leaf2.png" class="leaf2">



        <h1>BORCELLE MENU</h1>

        <div class="section-title">Coffee Blends</div>

        <div class="menu-item">
            <div class="item-top">
                <span>ESPRESSO</span>
                <span class="line"></span>
                <span>$2.50</span>
            </div>
            <div class="desc">A strong and concentrated shot of coffee</div>
        </div>

        <div class="menu-item">
            <div class="item-top">
                <span>AMERICANO</span>
                <span class="line"></span>
                <span>$3.00</span>
            </div>
            <div class="desc">Espresso diluted with hot water</div>
        </div>

        <div class="menu-item">
            <div class="item-top">
                <span>LATTE</span>
                <span class="line"></span>
                <span>$4.00</span>
            </div>
            <div class="desc">Espresso with steamed milk and foam</div>
        </div>

        <div class="menu-item">
            <div class="item-top">
                <span>CAPPUCCINO</span>
                <span class="line"></span>
                <span>$4.50</span>
            </div>
            <div class="desc">Equal parts espresso, steamed milk and foam</div>
        </div>

        <div class="menu-item">
            <div class="item-top">
                <span>COLD BREW</span>
                <span class="line"></span>
                <span>$3.50</span>
            </div>
            <div class="desc">Coffee brewed with cold water served over ice</div>
        </div>


        <div class="section-title">Non Coffee</div>

        <div class="menu-item">
            <div class="item-top">
                <span>HOT CHOCOLATE</span>
                <span class="line"></span>
                <span>$4.00</span>
            </div>
        </div>

        <div class="menu-item">
            <div class="item-top">
                <span>MATCHA LATTE</span>
                <span class="line"></span>
                <span>$4.50</span>
            </div>
        </div>

        <div class="menu-item">
            <div class="item-top">
                <span>CHAI LATTE</span>
                <span class="line"></span>
                <span>$4.00</span>
            </div>
        </div>

        <div class="menu-item">
            <div class="item-top">
                <span>EARL GREY</span>
                <span class="line"></span>
                <span>$3.50</span>
            </div>
        </div>

        <div class="footer">
            <div>
                Visit our cafe at<br>
                123 Anywhere St., Any City
            </div>

            <div>
                For delivery orders<br>
                +123-456-7890
            </div>
        </div>

    </div>

</body>

</html>
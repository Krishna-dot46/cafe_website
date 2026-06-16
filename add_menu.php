<?php include "admin_header.php"; ?>
<?php include "admin_sidebar.php"; ?>

<style>
/* MAIN AREA */

.main {
    margin-left: 220px;
    width: calc(100% - 220px);
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding-top: 40px;
    box-sizing: border-box;
    font-family: Poppins;
}

/* PAGE TITLE */

.main h2 {
    margin-bottom: 20px;
    color: #1e293b;
    text-align: center;
}

/* FORM CARD */

.menu-form {
    background: white;
    width: 420px;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    display: flex;
    flex-direction: column;
    gap: 15px;
}

/* INPUT FIELDS */

.menu-form input,
.menu-form textarea,
.menu-form select {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    width: 100%;
    box-sizing: border-box;
}

.menu-form textarea {
    height: 90px;
    resize: none;
}

/* BUTTON */

.menu-form button {
    background: #2563eb;
    color: white;
    border: none;
    padding: 10px;
    font-size: 14px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.menu-form button:hover {
    background: #1d4ed8;
}

/* SUCCESS MESSAGE */

.success-msg {
    background: #dcfce7;
    color: #166534;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 15px;
    font-size: 14px;
    text-align: center;
}
</style>

<div class="main">

    <h2>Add Menu Item</h2>

    <?php

if(isset($_POST['add'])){

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$category = $_POST['category'];

$query = "INSERT INTO menu(name,price,description,category)
VALUES($1,$2,$3,$4)";

pg_query_params($conn,$query,array($name,$price,$description,$category));

echo "<div class='success-msg'>Menu Added Successfully</div>";

}

?>

    <form method="POST" class="menu-form">

        <input type="text" name="name" placeholder="Menu Name" required>

        <input type="number" name="price" placeholder="Price" required>

        <textarea name="description" placeholder="Ingredients / Description"></textarea>

        <select name="category" required>

            <option value="">Select Category</option>
            <option value="Starter">Starter</option>
            <option value="Breakfast">Breakfast</option>
            <option value="Dessert">Dessert</option>
            <option value="Beverage">Beverage</option>

        </select>

        <button name="add">Add Menu</button>

    </form>

</div>
<?php include "admin_header.php"; ?>
<?php include "admin_sidebar.php"; ?>
<?php include "db.php"; ?>

<style>
/* MAIN AREA */

/* MAIN AREA */

.main {
    margin-left: 220px;
    width: calc(100% - 220px);
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    font-family: Poppins;
}

/* TITLE */

.main h2 {
    margin-bottom: 20px;
    color: #1e293b;
}

/* FORM BOX */

.edit-form {
    background: white;
    width: 420px;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    display: flex;
    flex-direction: column;
    gap: 15px;
}

/* INPUTS */

.edit-form input,
.edit-form textarea,
.edit-form select {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    width: 100%;
    box-sizing: border-box;
}

.edit-form textarea {
    height: 90px;
    resize: none;
}

/* BUTTON */

.edit-form button {
    background: #2563eb;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
}

.edit-form button:hover {
    background: #1d4ed8;
}

/* SUCCESS MESSAGE */

.success {
    background: #dcfce7;
    color: #166534;
    padding: 10px;
    border-radius: 5px;
    text-align: center;
}
</style>

<div class="main">

    <h2>Edit Menu Item</h2>

    <?php

$id = $_GET['id'];

/* FETCH DATA */

$query="SELECT * FROM menu WHERE id=$1";
$result=pg_query_params($conn,$query,array($id));
$row=pg_fetch_assoc($result);


/* UPDATE DATA */

if(isset($_POST['update'])){

$name=$_POST['name'];
$price=$_POST['price'];
$description=$_POST['description'];
$category=$_POST['category'];

$update="UPDATE menu SET name=$1,price=$2,description=$3,category=$4 WHERE id=$5";

pg_query_params($conn,$update,array($name,$price,$description,$category,$id));

echo "<div class='success'>Menu Updated Successfully</div>";

}

?>

    <form method="POST" class="edit-form">

        <input type="text" name="name" value="<?php echo $row['name']; ?>" required>

        <input type="number" name="price" value="<?php echo $row['price']; ?>" required>

        <textarea name="description"><?php echo $row['description']; ?></textarea>

        <select name="category" required>

            <option value="Starter" <?php if($row['category']=="Starter") echo "selected"; ?>>Starter</option>

            <option value="Breakfast" <?php if($row['category']=="Breakfast") echo "selected"; ?>>Breakfast</option>

            <option value="Dessert" <?php if($row['category']=="Dessert") echo "selected"; ?>>Dessert</option>

            <option value="Beverage" <?php if($row['category']=="Beverage") echo "selected"; ?>>Beverage</option>

        </select>

        <button name="update">Update Menu</button>

    </form>

</div>
<?php include "admin_header.php"; ?>
<?php include "admin_sidebar.php"; ?>

<style>
/* MAIN CONTENT AREA */

.main {
    margin-left: 220px;
    padding: 20px 30px;
    width: calc(100% - 220px);
    box-sizing: border-box;
}

/* PAGE TITLE */

.main h2 {
    margin-bottom: 20px;
    color: #1e293b;
}

/* TABLE STYLE */

.main table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background: white;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    border-radius: 6px;
    overflow: hidden;
    font-family: Poppins;
}

/* TABLE HEADER */

.main table th {
    background: #1e293b;
    color: white;
    padding: 12px;
    text-align: left;
    font-size: 14px;
}

/* TABLE CELL */

.main table td {
    padding: 12px;
    border-bottom: 1px solid #eee;
    font-size: 14px;
    vertical-align: top;
}

/* HOVER EFFECT */

.main table tr:hover {
    background: #f9fafb;
}

/* DESCRIPTION COLUMN */

.main table td:nth-child(4) {
    max-width: 350px;
    white-space: normal;
    word-break: break-word;
    line-height: 1.5;
}

/* ACTION COLUMN */

.main table th:last-child,
.main table td:last-child {
    width: 140px;
}

/* BUTTON AREA */

.action-btn {
    display: flex;
    gap: 6px;
}

/* BUTTONS */

.edit {
    background: #22c55e;
    color: white;
    border: none;
    padding: 6px 12px;
    cursor: pointer;
    border-radius: 4px;
    font-size: 13px;
}

.edit:hover {
    background: #16a34a;
}

.delete {
    background: #ef4444;
    color: white;
    border: none;
    padding: 6px 12px;
    cursor: pointer;
    border-radius: 4px;
    font-size: 13px;
}

.delete:hover {
    background: #dc2626;
}
</style>

<div class="main">

    <h2>Manage Menu</h2>

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
        </tr>

        <?php

$query="SELECT * FROM menu ORDER BY id DESC";
$result=pg_query($conn,$query);

while($row=pg_fetch_assoc($result)){

?>

        <tr>

            <td><?php echo $row['id']; ?></td>

            <td><?php echo $row['name']; ?></td>

            <td><?php echo $row['category']; ?></td>

            <td><?php echo $row['description']; ?></td>

            <td>₹<?php echo $row['price']; ?></td>

            <td>
                <div class="action-btn">

                    <a href="edit_menu.php?id=<?php echo $row['id']; ?>">
                        <button class="edit">Edit</button>
                    </a>

                    <a href="delete_menu.php?id=<?php echo $row['id']; ?>">
                        <button class="delete">Delete</button>
                    </a>

                </div>
            </td>

        </tr>

        <?php } ?>

    </table>

</div>
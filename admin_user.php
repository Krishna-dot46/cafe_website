<?php
include "db.php";
include "admin_sidebar.php";
include "admin_header.php";

$query="SELECT * FROM users ORDER BY id DESC";
$result=pg_query($conn,$query);
?>

<div class="main">

    <div class="page-header">
        <h2>Registered Users</h2>
    </div>

    <div class="card">

        <table>

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>

            <?php
while($row=pg_fetch_assoc($result)){
?>

            <tr>

                <td><?php echo $row['id']; ?></td>

                <td><?php echo $row['name']; ?></td>

                <td><?php echo $row['email']; ?></td>

                <td>
                    <a href="delete_user.php?id=<?php echo $row['id']; ?>" class="delete-btn">Delete</a>
                </td>

            </tr>

            <?php } ?>

        </table>

    </div>

</div>


<style>
/* PAGE HEADER */

.page-header {
    margin-bottom: 20px;
}

.page-header h2 {
    color: #1e293b;
    font-size: 26px;
}

/* CARD DESIGN */

.card {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
}

/* TABLE STYLE */

table {
    width: 100%;
    border-collapse: collapse;
}

table th {
    background: #1e293b;
    color: white;
    font-weight: 500;
}

table th,
table td {
    padding: 14px;
    text-align: center;
    border-bottom: 1px solid #eee;
}

table tr:hover {
    background: #f9fafb;
}

/* DELETE BUTTON */

.delete-btn {
    background: #ef4444;
    color: white;
    padding: 6px 12px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 14px;
}

.delete-btn:hover {
    background: #dc2626;
}
</style>
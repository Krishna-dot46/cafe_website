<?php include "admin_header.php"; ?>
<?php include "admin_sidebar.php"; ?>
<?php include "db.php"; ?>

<div class="main">

    <h2>Reservations</h2>

    <table>

        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date</th>
            <th>Time</th>
            <th>Persons</th>
            <th>Message</th>
        </tr>

        <?php

$query="SELECT * FROM reservations ORDER BY id DESC";
$result=pg_query($conn,$query);

while($row=pg_fetch_assoc($result)){
?>

        <tr>

            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['time']; ?></td>
            <td><?php echo $row['persons']; ?></td>
            <td><?php echo $row['message']; ?></td>

        </tr>

        <?php } ?>

    </table>

</div>
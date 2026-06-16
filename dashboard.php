<?php 
include "db.php";
include "admin_header.php";
include "admin_sidebar.php";

/* COUNT DATA */
$menu = pg_query($conn,"SELECT COUNT(*) FROM menu");
$menu_count = pg_fetch_row($menu)[0];

$res = pg_query($conn,"SELECT COUNT(*) FROM reservations");
$res_count = pg_fetch_row($res)[0];

$users = pg_query($conn,"SELECT COUNT(*) FROM users");
$user_count = pg_fetch_row($users)[0];
?>

<div class="main">

    <div class="dashboard-header">
        <h2>Admin Dashboard</h2>
        <p>Welcome to Cafe Admin Panel</p>
    </div>

    <div class="cards">

        <!-- USERS CARD -->
        <div class="card users">
            <div class="card-icon">👤</div>
            <div class="card-info">
                <h3><?php echo $user_count; ?></h3>
                <p>Total Users</p>
            </div>
        </div>

        <!-- MENU CARD -->
        <div class="card menu">
            <div class="card-icon">🍽</div>
            <div class="card-info">
                <h3><?php echo $menu_count; ?></h3>
                <p>Menu Items</p>
            </div>
        </div>

        <!-- RESERVATION CARD -->
        <div class="card reservation">
            <div class="card-icon">📅</div>
            <div class="card-info">
                <h3><?php echo $res_count; ?></h3>
                <p>Reservations</p>
            </div>
        </div>

    </div>

</div>

<style>
/* DASHBOARD HEADER */

.dashboard-header {
    margin-bottom: 25px;
}

.dashboard-header h2 {
    font-size: 28px;
    color: #1e293b;
    margin-bottom: 5px;
}

.dashboard-header p {
    color: #64748b;
}

/* CARD GRID */

.cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
}

/* CARD DESIGN */

.card {
    background: white;
    padding: 25px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    transition: 0.3s;
    cursor: pointer;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

/* ICON */

.card-icon {
    font-size: 35px;
    background: #f1f5f9;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
}

/* CARD INFO */

.card-info h3 {
    font-size: 26px;
    margin: 0;
    color: #0f172a;
}

.card-info p {
    margin: 0;
    color: #64748b;
    font-size: 14px;
}

/* CARD COLORS */

.users {
    border-left: 5px solid #3b82f6;
}

.menu {
    border-left: 5px solid #22c55e;
}

.reservation {
    border-left: 5px solid #f59e0b;
}
</style>
<?php

include "db.php";

$id=$_GET['id'];

$query="DELETE FROM menu WHERE id=$1";

pg_query_params($conn,$query,array($id));

header("Location: menu_list.php");

?>
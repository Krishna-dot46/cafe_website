<?php
$conn = pg_connect("host=localhost dbname=cafe_website user=postgres password=postgres");

if(!$conn){
    echo "Database connection failed";
}
?>
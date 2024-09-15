<?php 
$conn = mysqli_connect('localhost:3307', 'root', '', 'news_site');
if(!$conn){
    die("Database connection failed");
}
?>
<?php 
include "config.php";
$post_id = $_GET['id'];
$catid = $_GET['catid'];

$query = "DELETE FROM post WHERE post_id = {$post_id};";
$query .= "UPDATE category SET post = post - 1 WHERE category_id = {$catid}";

if(mysqli_multi_query($conn, $query)){
    header("location: {$hostname}/admin/post.php");
}else{
    echo "Query Failed";
}
?>
<?php
include "config.php";
$user_id = $_GET['id'];
$query = "DELETE FROM user WHERE user_id = {$user_id}";
if (mysqli_query($conn, $query)) {
    header("Location: {$hostname}/admin/users.php");
}

mysqli_close($conn);

if ($_SESSION["role"] == '0') {
    header("Location: {$hostname}/admin/post.php");
}
?>

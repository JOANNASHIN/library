<?php
$id = $_GET['id'];
$conn = mysqli_connect("localhost","c8st18","c8st18","c8st18");
mysqli_query($conn,"SET NAMES utf8");
mysqli_select_db($conn,"c8st18");
$delsql = "DELETE FROM user_book where id='$id'";
mysqli_query($conn, $delsql);
?>
<meta http-equiv="refresh" content="0; url=menu3_1_admin.php">

<?php
$indexnum = $_GET['indexnum'];
$conn = mysqli_connect("localhost","c8st18","c8st18","c8st18");
mysqli_query($conn,"SET NAMES utf8");
mysqli_select_db($conn,"c8st18");
$delsql = "DELETE FROM booklist where book_num=$indexnum";
mysqli_query($conn, $delsql);
?>
<meta http-equiv="refresh" content="0; url=menu1_admin.php">

<?
$indexnum = $_GET['indexnum'];
$bookname = $_GET['bookname'];
$writer = $_GET['writer'];
$publisher = $_GET['publisher'];
$conn = mysqli_connect("localhost","c8st18","c8st18","c8st18");
mysqli_query($conn,"SET NAMES utf8");
mysqli_select_db($conn,"c8st18");

$addsql = "INSERT INTO booklist VALUES('$indexnum','$bookname','$writer','$publisher');";
mysqli_query($conn,$addsql);
?>
<meta http-equiv="refresh" content="0; url=menu1_admin.php">

<?
$indexnum=$_GET['indexnum'];
$bookname=$_GET['bookname'];
$writer=$_GET['writer'];
$publisher=$_GET['publisher'];

$conn = mysqli_connect("localhost","c8st18","c8st18","c8st18");
mysqli_query($conn,"SET NAMES utf8");
mysqli_select_db($conn,"c8st18");
$updatesql = "UPDATE `booklist` SET book_name='$bookname', book_writer='$writer', book_publisher='$publisher' WHERE book_num=$indexnum";
mysqli_query($conn,$updatesql);


?>
<meta http-equiv="refresh" content="0; url=menu1_admin.php">

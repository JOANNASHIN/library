<?
$conn = mysqli_connect("localhost","c8st18","c8st18","c8st18");
mysqli_query($conn,"SET NAMES utf8");
mysqli_select_db($conn,"c8st18");
$book_num = $_GET['book_num'];
$user_id = $_GET['user_id'];
$returnsql = "DELETE FROM `borrow_book` WHERE book_num=$book_num";
mysqli_query($conn,$returnsql);
echo "<script>alert('반납완료');</script>";
?>
<meta http-equiv="refresh" content="0; url=menu2_1_admin.php">

<?
$id=$_GET['id'];
$name=$_GET['name'];
$gender=$_GET['gender'];
$contact=$_GET['contact'];
$email=$_GET['email'];
$address=$_GET['address'];

$conn = mysqli_connect("localhost","c8st18","c8st18","c8st18");
mysqli_query($conn,"SET NAMES utf8");
mysqli_select_db($conn,"c8st18");
$updatesql = "UPDATE `user_book` SET name='$name', gender='$gender', contact='$contact', email='$email' , address='$address' WHERE id='$id'";
mysqli_query($conn,$updatesql);

?>
<meta http-equiv="refresh" content="0; url=menu3_1_admin.php">

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
	<title>반납처리</title>
	<link rel="stylesheet" href="./header.css">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
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
<meta http-equiv="refresh" content="0; url=borrowlist.php">
</head>
</html>
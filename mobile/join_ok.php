<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
	<link rel="stylesheet" href="./header.css">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<title>회원가입정보처리</title>
</head>
<body>
<?php
	$conn = mysqli_connect("localhost","c8st18","c8st18","c8st18");
	mysqli_query($conn);
	if(!$conn){
	   echo "서버접속 실패";
	}
	if(!mysqli_select_db($conn,"c8st18")){
	   echo "데이터베이스 선택실패";
	}

	$user_id = $_POST['user_id'];
	$user_pw = $_POST['user_pw'];
	$user_name= $_POST['user_name'];
	$user_gender = $_POST['user_gender'];
	$user_birth= $_POST['user_birth'];
	$user_contact= $_POST['user_contact'];
	$user_joinday = date('Y-m-d H:i:s',time());
	echo $user_id;
	const PASSWORD_COST=['cost'=>12];
	$hashpw = password_hash($user_pw,PASSWORD_DEFAULT,PASSWORD_COST);

	$joinsql = "INSERT INTO `user_book` VALUES('$user_id','$hashpw','$user_name','$user_gender','$user_birth','$user_contact','$user_joinday')";
	mysqli_query($conn,$joinsql);
	echo mysqli_error($conn);
	echo "<script>";
	echo "setTimeout(function(){location.replace('./login.php')},100);";
	echo "</script>";
	if($result === false){
    echo mysqli_error($conn);
}
?>
</body>
</html>
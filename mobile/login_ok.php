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
<?
	if($_POST['l_id']=="" || $_POST['l_pw']=="" ){
            echo "<script>alert('Please check your id and password'); history.back();</script>";
            exit;
    }
	$conn = mysqli_connect("localhost","c8st18","c8st18","c8st18");
	mysqli_query($conn);
	if(!$conn){
	 echo "서버접속 실패";
	}
	if(!mysqli_select_db($conn,"c8st18")){
	 echo "데이터베이스 선택실패";
	}
	$selectsql = "SELECT * FROM `user_book`";
	$result = mysqli_query($conn,$selectsql);
	//pw로 암호화 되어있음.

	//로그인시 받아온 아이디와 비번
	$l_id = $_POST['l_id'];
	$l_pw = $_POST['l_pw'];
   echo "$l_id";
   echo "$l_pw"."여기까진 받아오는지 검사";
  	$log_error=0;
   while($row = mysqli_fetch_assoc($result)){
           // if(password_verify($l_pw,$row['pw'])){
           if($l_pw == $row['pw']){
                  if($l_id =="admin"){
                  	setcookie("user_id",$row['id'],time()+86400,'/');
                     setcookie("user_name",$row['name'],time()+86400,'/');
                   
                    echo "<script>";
                    echo "setTimeout(function(){location.replace('index.html')},100)";
                    echo "</script>";
                     $log_error=1;
                  }else{
                 	setcookie("user_id",$row['id'],time()+86400,'/');
                    setcookie("user_name",$row['name'],time()+86400,'/');
                    echo "<script>";
                    echo "setTimeout(function(){location.replace('index.html')},100)";
                    echo "</script>";
                     $log_error=1;
                  }
            } 
   }
  
      // if($log_error==0){
      //    echo "<script>alert('Please check your id and pw'); history.back();</script>";
      // }
      // mysqli_free_result($result);
?>
</body>
</html>
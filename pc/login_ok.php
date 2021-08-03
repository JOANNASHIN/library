<?php
      if($_POST['login_id']=="" || $_POST['login_pw']=="" ){
            echo "<script>alert('아이디 또는 패스워드를 입력하지 않으셨습니다.'); history.back();</script>";
            exit;
      }
      $conn = mysqli_connect("localhost","c8st18","c8st18","c8st18");
      mysqli_query($conn,"SET NAMES utf-8");
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
      $login_id = $_POST['login_id'];
      $login_pw = $_POST['login_pw'];

      $log_error=0;
      while($row = mysqli_fetch_assoc($result)){
            if(password_verify($login_pw,$row['pw'])){
                  if($login_id =="admin"){
                     setcookie("user_id",$row['id'],time()+3600,'/');
                     setcookie("user_name",$row['name'],time()+3600,'/');
                     echo "<meta http-equiv='refresh' content='0; url=index.php'>";
                  }else{
                     setcookie("user_id",$row['id'],time()+3600,'/');
                     setcookie("user_name",$row['name'],time()+3600,'/');
                     echo "<meta http-equiv='refresh' content='0; url=index.php'>";
                  }
                  $log_error=1;
            }
      }
      if($log_error==0){
         echo "<script>alert('아이디와 비밀번호가 맞지 않습니다.'); history.back();</script>";
      }
      mysqli_free_result($result);
?>

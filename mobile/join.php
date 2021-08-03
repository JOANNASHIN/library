<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
	<link rel="stylesheet" href="./header.css">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<title>가입하기</title>
	<style>
		@media all and (min-width: 360px){
			body,html{
				width:100%;
				height:100%;
			}
            a:link, a:hover, a:visited, a:active{
                color:inherit;
                text-decoration: none;
            }
			  form{
			  		width:100%;
					height:100%;
                    display:inline-block;
                    text-align:center;
              }
                .inputarea_entire{
                    width:95%;
                    /*height:71px;*/
                    display:inline-block;
                    margin:0 auto;
                    text-align:left;
                    position:relative;
                    border:1px solid rgb(231,231,231);
                       
                }
                    .inputarea_entire label{
                        font-size:15px;
                        text-align:left;
                        color:rgba(0,0,0,0.7);
                        margin-bottom:5px;
                         padding-left:5%;
                    }
                    .inputarea_entire input{
                        width:95%;
                        height:50px;
                        outline:none;
                        padding-left:5%;
                        font-size:17px;
                        border:none;
                        display:inline-block;
                        float:left;
                    }
                    .ne_write{
                        width:95%;
                        color:red;
                        font-size:12px;
                        display:inline-block;
                        float:left;
                        margin:0px 0 10px;
                        padding-left:4%;
                        /*display:none;*/
                    }
                    /*select*/
                    .select_gender{
                        width:90%;
                        height:50px;
                        display:inline-block;
                        outline:none;
                        border:none;
                        margin-left:5%;
                        margin-bottom:10px;
                    }
                    .idcheckbtn{
                        position:absolute;
                        right:5%;
                        top:5%;
                        text-align:center;
                        padding:0px 5px;
                        margin-top:10px;
                        line-height:30px;
                        font-size:14px;
                        height:30px;
                        width:30%;
                        border:1px solid #0080ff;
                        color:#0080ff;
                    }
                    .joinbtn{
                        width:95%;
                        height:50px;
                        line-height:50px;
                        text-align:center;
                        font-size:16px;
                        background-color:#0080ff;
                        color:white;
                        border:none;
                        outline:none;
                    }
                  .hidden{display:none;}
                  .mustinput{color:red;
                          text-align: left;
                          font-size:12px;
                  }
		}
	</style>
</head>
<body>
	<header>
		<div class="wrap_logo">
			<a href="index.html">
				<img class="homeicon" src="./pic/home.png" alt="homeicon">
			</a>
			<span>JOIN</span>
        </div>
    </header>
	<form action="join.php" method="post">
        <div id="input1" class="inputarea_entire">
            <input type="text" id="must1" name="user_id" placeholder="아이디">
            <p class="ne_write">*필수입력란입니다.</p>
            <p id="idcheckBtn" class="idcheckbtn">
                <a href="idcheck.php">아이디 중복확인</a>
            </p>
        </div>             
        <div id="input2" class="inputarea_entire">
           <input type="password" name="user_pw" placeholder="비밀번호">
            <p class="ne_write">*필수입력란입니다.</p>
        </div> 
        <div id="input3" class="inputarea_entire">
           <input type="password" name="pw_check" placeholder="비밀번호확인">
            <p class="ne_write">*비밀번호가 다릅니다.</p>
        </div>             
        <div id="input4" class="inputarea_entire">
           <input type="text" name="user_name" placeholder="이름">
            <p class="ne_write">*필수입력란입니다.</p>
        </div> 
         
        <div id="input5" class="inputarea_entire">
            <label for="user_gender">성별</label>
             <select id="select_gender" class="select_gender" name="user_gender">
                    <option value="0" selected>선택</option>
                    <option value="male" >남자</option>
                    <option value="female">여자</option>
            </select>
            <p class="ne_write">*필수선택란입니다.</p>
        </div> 
        <div id="input6" class="inputarea_entire">
           <input type="text" name="user_birth" placeholder="생년월일 예)20001212">
            <p class="ne_write">*필수입력란입니다.</p>
        </div>
        <div id="input7" class="inputarea_entire">
           <input type="text" name="user_contact" placeholder="번호입력 예)01012345678">
            <p class="ne_write">*문자, 공백없이 숫자만 입력하세요.</p>
        </div>
       <!--  <div id="input8" class="inputarea_entire">
           <input type="text" name="user_email" placeholder="이메일입력">
            <p class="ne_write">*필수입력란입니다.</p>
        </div> -->
        <button class="joinbtn">회원가입</button>
   </form>
   <?php 
    if(isset($user_id)){
        $user_id = $_POST['user_id'];
        $user_pw = $_POST['user_pw'];
        $user_name= $_POST['user_name'];
        $user_gender = $_POST['user_gender'];
        $user_birth= $_POST['user_birth'];
        $user_contact= $_POST['user_contact'];
        $user_joinday = date('Y-m-d H:i:s',time());

        $conn = mysqli_connect("localhost","c8st18","c8st18","c8st18");
        mysqli_query($conn);
        mysqli_select_db($conn,"c8st18");
        // const PASSWORD_COST=['cost'=>12];
        // $hashpw = password_hash($user_pw,PASSWORD_DEFAULT,PASSWORD_COST);
        $sql = "INSERT INTO `user_book` VALUES(
                    '$user_id',
                    '$hashpw',
                    '$user_name',
                    '$user_gender',
                    '$user_birth',
                    '$user_contact',
                    '$user_joinday')";
        $result = mysqli_query($conn,$sql);
        if($result === false){
            echo "<script>";
            echo "alert('시스템오류, 다시 시도해주세요.');";
            echo "history.back();";
            echo "</script>";
        }else{
            echo "<script>";
            echo "alert('회원가입되었습니다. 로그인해주세요.');";
            echo "setTimeout(function(){location.replace('./login.php')},100);";
            echo "</script>";            
        }
        mysqli_free_result($result);
    }
   ?>
   

</body>
</html>
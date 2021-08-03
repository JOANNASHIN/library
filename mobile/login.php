<!DOCTYPE html>
<html lang="ko">
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
	<title>로그인</title>
	<link rel="stylesheet" href="header.css">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<style>
		@media all and (min-width:360px){
		.loginform_entire{
			width:100%;
			display:inline-block;
			float:left;
			margin-top:10px;
			text-align:center;
		}
			.loginform_entire input{
				width:90%;
				height:50px;
				display: inline-block;
				margin:0 auto;
				margin:5px 0;
				border:1px solid rgb(231,231,231);
				outline:none;
				padding:5px 10px;
				position:relative;
				font-size:17px;
			}

			.loginbtn{
				background-color:#0080ff;
				color:white;
				width:45%;
				height:40px;
				line-height:40px;
				border-radius:5px;
				margin-left:3%;
				margin-top:10px;
				display:inline-block;
				float:left;
				border:none;
				outline:none;
			}
			.joinbtn{
				background-color:rgb(231,231,231);

			}
			.idinfo{
				display:inline-block;
				float:left;
				margin-top:10px;
				text-align:left;
				color:gray;
				font-size:15px;

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
			<span>LOGIN</span>
		</div>		
	</header>
	<form class="loginform_entire" action="login_ok.php" method="post">
		<input id="l_id" type="text" name="l_id" placeholder="아이디">
		<input id="l_pw" type="password" name="l_pw" placeholder="비밀번호">
		<a class="loginbtn joinbtn" href="join.php">회원가입</a>
		<button id="loginbtn" class="loginbtn">로그인</button>	
	</form>
	<p class="idinfo">*사용자는 아이디 : user / 비밀번호 : user1234</p>
	<p class="idinfo">*관리자는 아이디 : admin / 비밀번호 : admin1234</p>

</body>
</html>
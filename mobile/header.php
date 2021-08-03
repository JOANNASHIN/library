<header>
		<div class="wrap_logo">
			<img id="navbtn" class="homeicon" src="./pic/hamburger.png" alt="hamburger">
			<!-- <img class="logoicon" src="./pic/logo.png" alt="logo"> -->
			<span id="loc_text">도서대여관리프로그램</span>
			<!-- <a href="#">
				<img class="loginicon" src="./pic/login.png" alt="login_icon">
			</a> -->
		</div>		
</header>

<nav class="menu_entire">
	<ul>
		<li class="menu_title">
				<span class="menutitle_text">MENU</span>
				<!-- <img id="exitbtn" src="./pic/exitbtn.png" alt="exitbtn"> -->
				<span id="exitbtn" class="exitbtn">X</span>
		</li>
		<li class="user_login_info">
			<p id="user_text"></p>			
		</li>
		<li>
			<a href="index.html">
				<!-- <img src="./pic/home.png" alt="menuicon"> -->
				<img src="./pic/home_black.png" alt="icon">
				<p>홈</p>
				
			</a>
		</li>
		<li>			
				<!-- <img src="./pic/icon1.png" alt="menuicon"> -->
				<img src="./pic/icon1_black.png" alt="icon">
				<p><a href="menu1.php">도서관리</a></p>
				
		</li>
		<li>			
				<!-- <img src="./pic/icon2.png" alt="menuicon"> -->
				<img src="./pic/icon2_black.png" alt="icon">
				<p><a href="menu2.php">대여관리</a></p>
				
		</li>
		<li>
			<!-- <img src="./pic/icon3.png" alt="menuicon"> -->
				<img src="./pic/icon3_black.png" alt="icon">
				<p><a href="return.php">반납관리</a></p>
				
		</li>
		<li>
				<!-- <img src="./pic/icon4.png" alt="menuicon"> -->				
				<img src="./pic/icon4_black.png" alt="icon">
				<p><a href="menu4.php">회원관리</a></p>
		</li>
		<!-- <li class="login_after">
			<p><a href="menu1_user.php">로그아웃</a></p>
		</li> -->
	</ul>
</nav>
<?php 
	$user_id = $_COOKIE['user_id'];
	$user_name = $_COOKIE['user_name'];
	//로그인하면
	if( isset($user_id) && isset($user_name) ){
		echo "<script>";
		// echo "$('#user_text').html('안녕하세요. $user_name($user_id)님')";
		echo "$('#user_text').html('안녕하세요. 관리자(admin)님')";
		echo "</script>";			
	} else {
		echo "<script>";
		//echo "$('#user_text').append('<a href=\'login.php\'>로그인하세요.</a>')";
		echo "$('#user_text').html('안녕하세요. 관리자(admin)님')";
		echo "</script>";				
	}

?>
<script>
		$('#navbtn').click(function(){
			$('nav').css("left","0%").css("transition","all 0.4s ease");
		});
		$('#exitbtn, section').click(function(){
			$('nav').css("left","-100%").css("transition","all 0.4s ease");
		});
		
</script>
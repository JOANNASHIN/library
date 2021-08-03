<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
	<link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
	<title>도서대여관리</title>
	<link rel="stylesheet" href="./header.css">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<style>
	*{margin:0px; padding:0px;font-family: 'Nanum Gothic', sans-serif;}
		@media all and (min-width:360px) {	
			.borrow_menu_entire{
				width:100%;
				height:100%;
			}
				.borrow_menu_entire li{
					width:100%;
					height:70px;
					display:inline-block;
					float:left;
					border-bottom:1px solid rgb(231,231,231);
				}
				.borrow_menu_entire span{
					text-align:left;
					width:70%;
					height:100%;
					display:inline-block;
					float:left;
					line-height:70px;
					padding-left:10%;
					font-size:20px;
				}
				.borrow_menu_entire i{
					text-align: right;
					width:15%;
					height:100%;
					display:inline-block;
					float:left;
					line-height:70px;
					padding-right:5%;
					font-size:20px;
				}
		}
	</style>
</head>
<body>
	<?include "header.php";?>
	<ul class="borrow_menu_entire">
		<li>
			<a href="borrowlist.php">
				<span>대여 중인 도서 조회</span>
				<i class="xi-angle-right"></i>
			</a>
		</li>
		<li>
			<a href="borrow.php">
				<span>대여</span>
				<i class="xi-angle-right"></i>
			</a>
		</li>
		<!-- <li>
			<a href="return.php">
				<span>반납</span>
				<i class="xi-angle-right"></i>
			</a>
		</li> -->
	</ul>
	<script>
		$('#loc_text').html("대여/반납");
	</script>
</body>
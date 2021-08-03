<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
	<title>회원관리</title>
	<link rel="stylesheet" href="./header.css">
	<link rel="stylesheet" href="./menu1.css">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<style>
		@media all and (min-width:360px){
			.borrowlist_print_area{
				width:100%;
				height:auto;
				display:inline-block;
			}
			table{
				border-collapse:collapse;
			
				display:inline-block;
			}
			th{
				background-color:rgb(231,231,231);
			}
			td{
				font-size:15px;
				padding:5% 0;
				border-bottom:1px solid rgb(231,231,231);
			}
			td:first-child{
				width:15%;
		        text-align:center;
		        font-weight:bold;
		        color:#0080ff;
			}
			td:nth-child(2){
				width:10%;
				text-align:center;
			}
			td:nth-child(3){
				width:20%;
			}
			td:nth-child(4){
				width:20%;
			}
			td:nth-child(5){
				width:25%;
			}
	</style>
</head>
<body>
	<?php include "header.php";?>
  <table id="entire_booklist">
                   <tr class="main_list_title" style="padding:5px 0px;">
                      <!-- <td>번호</td> -->
                      <th>이름<br>[아이디]</th>
                      <!-- <td>아이디</td> -->
                      <th>성별</th>
                      <th>생년월일</th>
                      <th>연락처</th>
                      <th>가입일</th>
                   </tr>
  </table>
  <script>
		$('#loc_text').html("회원관리");
	</script>	
     <?php
     $conn = mysqli_connect("localhost","c8st18","c8st18","c8st18");
         mysqli_query($conn,"SET NAMES utf8");
         mysqli_select_db($conn,"c8st18");

         /**************도서목록*******************/
         $sql = "SELECT * FROM user_book";
         $result= mysqli_query($conn,$sql);
         /**************책이름 찾기 넘어온거 search***********************/
         $search_book = $_GET['bookname'];
         $select_search = $_GET['select_search'];
         $countsql = "SELECT count(*) FROM user_book";
         $resultcount = mysqli_query($conn, $countsql);
         $countrow= mysqli_fetch_row($resultcount);
         $totalcount = $countrow[0];

         $borrow_check=1;
         $checkN=1;
        
               //도서목록
            for($i=1; $i<=$totalcount; $i++){
                  list($id_u, $pw_u,$name_u,$gender_u,$birth_u,$contact_u, $joinday_u)=mysqli_fetch_row($result);
                  if($gender_u == 'female'){
                  	$gender_u = "여";
                  }
                   if($gender_u == 'male'){
                  	$gender_u = "남";
                  }
                              echo "<script>";
                              echo "$('#entire_booklist').append('<tr id=\"onerow$i\"><td>$name_u\[$id_u\]</td><td>$gender_u</td><td>$birth_u</td><td>$contact_u</td><td>$joinday_u</td></tr>');";
                              echo "</script>";

               }//for닫힘
        ?>
</body>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
	<link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
	<title>도서대여</title>
	<link rel="stylesheet" href="./header.css">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<style>
	*{margin:0px; padding:0px;font-family: 'Nanum Gothic', sans-serif;}
		@media all and (min-width:360px) {	
			form{
				width:100%;
                height:auto;
                display:inline-block;
                float:left;
                margin-top:30px;
                text-align:center;
			}
            form >div{
                width:90%;
                height:70px;
                display:inline-block;
                float:left;
                margin:0 auto;
            }
    			label{
    					width:50%;
    					display:inline-block;
    					float:left;
    					height:40px;
    					line-height:40px;
                        text-align:center;
                        font-size:20px;
                        font-weight:bold;
    			}
    			input{
    				width:43%;
    				display:inline-block;
    				float:left;
    				height:40px;
                    font-size:20px;
                    padding-left:5%;
    				line-height:40px;
                    outline:none;
    			}
                span{
                    font-size:20px;
                    font-weight:bold;
                    width:50%;
                    display:inline-block;
                    float:left;
                    height:40px;
                    line-height:40px;
                    text-align:center;
                }
                .borrowBtn{
                    width:40%;
                    height:50px;
                    margin:0px 5%;
                    background-color:rgb(235,197,192);
                    text-align:center;
                    line-height:50px;
                    border:none;
                    outline:none;
                    font-size:20px;
                    display:inline-block;
                    float:left;
                }
                .show_borrow{
                    background-color:rgb(231,231,231);
                    width:40%;
                    height:50px;
                    display:inline-block;
                    float:left;
                    font-size:20px;
                    text-align:center;
                    line-height:50px;
                    margin-left:9%;
                }
                .alertinfo{
                    color:red;
                    width:90%;
                    display:inline-block;
                    float:left;
                }
                    .alertinfo p{
                        margin:5px 0;
                        margin-left:15px;
                        font-weight:bold;
                    }
                #idarea p, #numarea p{
                    font-size:20px;
                    font-weight:bold;
                    line-height:40px;
                }
          
	</style>
</head>
<body>
	<?php include "header.php";?>
	<!-- <form action="borrow.php" action="get">
		<label>회원아이디</label>
		<input type="text" name="borrow_id">	
		<label>도서번호</label>
		<input type="text" name="borrow_booknum">	
		<label>도서명</label>
		<input type="text" name="borrow_bookname">		
	</form> -->
	   <form action="borrow.php" method="get">
                <div>
                   <label for="user_id">회원아이디</label>
                   <div id="idarea">
                        <input type="text" name="user_id" placeholder="user1">
                    </div>
                </div>
                <div>
                   <label for="book_num">도서번호</label>
                    <div id="numarea">
                        <input type="text" name="book_num" placeholder="1~54번호선택">
                    </div>
                </div>
                <div>
                   <span>대여일</span>
                   <span id="borrowday"></span>
                </div>
                <div>
                   <span>반납일</span>
                   <span id="returnday"></span>
                </div>
              <!-- <input class="borrowBtn" type="submit" value="대여하기" > -->
              <p class="show_borrow"><a href="borrowlist.php">목록보기</a></p>
              <button class="borrowBtn">대여하기</button>
              
           </form>
         <div class="alertinfo" style="color:red;">
           <!--  <p>*사용자 아이디는 user1 또는 user2 <br>도서번호는 1~54까지 대여가능합니다.</p>
            <p>*대여가 완료되면 대여하기메뉴(조회) 또는 도서찾기메뉴에서 대여 중인 도서의 확인이 가능합니다.</p> -->
         </div>
	<script>
		$('#loc_text').html("도서대여");
	</script>
	<?
	   $today = date("Y-m-d",time());
         $today_after7 = date("Y-m-d",time()+604800);
         echo "<script>$('#borrowday').append('$today');</script>";
         echo "<script>$('#returnday').append('$today_after7');</script>";

         $user_id = $_GET['user_id'];
         $book_num =$_GET['book_num'];
         if(!isset($user_id) || !isset($book_num)){
               exit;
         }
         $conn = mysqli_connect("localhost","c8st18","c8st18","c8st18");
         mysqli_query($conn,"SET NAMES utf8");
         mysqli_select_db($conn,"c8st18");
         /**************아이디 유무 체크****************************/
         $idexist = 0;
         $user_name;
         $idsql = "SELECT * FROM `user_book`";
         $resultid = mysqli_query($conn,$idsql);
         while($rowid = mysqli_fetch_assoc($resultid)){
            if($user_id == $rowid['id']){
                  $idexist=1;
                  $user_name = $rowid['name'];
            }
         }
         mysqli_free_result($resultid);
         if($idexist==0){
             echo "<script>alert('등록된 아이디가 존재하지 않습니다.');</script>";
         }
         /**************도서번호 유무 체크****************************/
         $bookexist = 0;
         $booksql = "SELECT * FROM `booklist`";
         $resultbook = mysqli_query($conn,$booksql);
         while($rowbook = mysqli_fetch_assoc($resultbook)){
            if($book_num == $rowbook['book_num']){
                  $bookexist=1;
            }
         }
         mysqli_free_result($resultbook);
         if($bookexist==0){
             echo "<script>alert('등록된 도서번호가 존재하지 않습니다.');</script>";
         }
         /******************도서가 대여중인지 아닌지 체크***************************************/
         $borrow_check = 1;
         $borrow_check_sql = "SELECT * FROM borrow_book";
         $borrow_check_result = mysqli_query($conn,$borrow_check_sql);
         while($borrow_check_row = mysqli_fetch_assoc($borrow_check_result)){
                  if($book_num == $borrow_check_row['book_num']){
                      $borrow_check=0;
                      echo "<script>alert('도서가 이미 대여중입니다.');</script>";

                  }

         }
         mysqli_free_result($borrow_check_result);

         /*********************도서번호 존재하고 아이디 존재하면 대여db에 저장하기***************************************/
         $borrownumsql = "SELECT count(*) FROM borrow_book";
         $borrownumResult = mysqli_query($conn,$borrownumsql);
         $borrowRow = mysqli_fetch_row($borrownumResult);
         $totalrow_borrow = $borrowRow[0];
         if($idexist==1 && $bookexist==1 && $borrow_check==1){
                  $borrow_insert_sql = "INSERT INTO `borrow_book` VALUES('','$book_num','$user_name','$user_id',CURRENT_DATE(),CURRENT_DATE()+7)";
                  $$borrow_insert_result = mysqli_query($conn,$borrow_insert_sql);
                  echo "<script>alert('대여가 완료되었습니다.');</script>";
                  echo "<script>";
                  echo "$('#idarea').html(' '); $('#numarea').html(' ');";
                  echo "$('#idarea').append('<p>$user_id</p>');";
                  echo "$('#numarea').append('<p>$book_num</p>');";
                  echo "$('.borrowBtn').attr('disabled','')";
                  echo "</script>";
         }
	?>
</body>
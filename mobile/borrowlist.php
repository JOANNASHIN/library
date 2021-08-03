<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
	<link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
	<title>도서대여</title>
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
			th{
				background-color:rgb(231,231,231);
			}
			td{font-size:15px;}
			td:first-child{
				width:10%;
        text-align:center;
        font-weight:bold;
        color:#0080ff;
			}
			/*td:nth-child(2){
				width:5%;
			}*/
			td:nth-child(2){
				width:38%;
        padding:5% 0;
			}
			td:nth-child(3){
				width:17%;
        font-weight:bold;
        color:#0080ff;
			}
			td:nth-child(4){
				width:15%;
			}
			td:nth-child(5){
				width:15%;
			}
		}
	</style>
</head>
<body>
	<?php include "header.php";?>
	<section class="section_entire">
	 <article class="search_area_entire">
                  <form action="menu2_1_admin.php" method="get">
                        <select name="select_search">
                           <option value="all" checked>통합검색</option>
                           <option value="0">도서명으로 검색</option>
                           <option value="1">회원아이디로 검색</option>
                           <option value="2">회원이름으로 검색</option>
                           <option value="3">대여일로 검색</option>
                           <option value="4">반납일로 검색</option>
                        </select>
                        <input type="text" name="bookname" placeholder="대여 중인 도서 검색">
                       <button id="searchbtn" class="searchbtn"><img src="./pic/search.png" alt="search_icon"></button>
                  </form>
         </article>
         <article class="borrowlist_print_area">
                  <table id="entire_borrowlist">
                       <tr>
                          <!-- <th>대여번호</th> -->
                          <th>도서번호</th>
                          <th>대여자료</th>
                          <th>회원</th>
                          <th>대여일자</th>
                          <th>반납일자</th>
                       </tr>
                  </table>
         </article>
      </section>

        <?
  
        $conn = @mysqli_connect("localhost","c8st18","c8st18","c8st18");
         mysqli_query($conn,"SET NAMES utf8");
         mysqli_select_db($conn,"c8st18");
         $sql = "SELECT * FROM `borrow_book`";
         $result= mysqli_query($conn,$sql);
         $search_book = $_GET['bookname'];
         $select_search = $_GET['select_search'];
         $checkN=1;
         $book_refer_sql = "SELECT bb.borrow_num, bb.user_id, bb.user_name, bb.borrow_day, bb.return_day , b.book_num, b.book_name, b.book_writer, b.book_publisher FROM borrow_book AS bb LEFT JOIN booklist AS b ON bb.book_num = b.book_num ORDER BY bb.borrow_num";
         $book_refer_result = mysqli_query($conn, $book_refer_sql);
            // 1대여번호 2아이디 3 이름 4대여일 5반납일 6책번호 7책이름 8저자 9출판사
        
         if(!isset($search_book)){
            //검색아직 안했을때
               $checkN=0;
                  while(list($ref1, $ref2, $ref3, $ref4, $ref5, $ref6, $ref7, $ref8, $ref9)=  mysqli_fetch_row($book_refer_result)){
                           echo "<script>";
                           echo "$('#entire_borrowlist').append('<tr><td>$ref6</td><td style=\'text-align:left; \'>$ref7 ($ref8/$ref9)</td><td>$ref2 ($ref3)</td><td>$ref4</td><td>$ref5</td></tr>')";
                           echo "</script>";
                  }
         }else{
            //검색했을때   // 1대여번호 2아이디 3 이름 4대여일 5반납일 6책번호 7책이름 8저자 9출판사
            while(list($ref1, $ref2, $ref3, $ref4, $ref5, $ref6, $ref7, $ref8, $ref9)=  mysqli_fetch_row($book_refer_result)){
               if( preg_match("/".$search_book."/i",$ref6) && $select_search==0){ //도서명으로 검색
                     echo "<script>";
                     echo "$('#entire_borrowlist').append('<tr><td>$ref6</td><td style=\'text-align:left;\'>$ref7 ($ref8/$ref9)</td><td>$ref2 ($ref3)</td><td>$ref4</td><td>$ref5</td></tr>')";
                     echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$ref2) && $select_search==1){ //회원아이디로 검색
                     echo "<script>";
                     echo "$('#entire_borrowlist').append('<tr><td>$ref6</td><td style=\'text-align:left;\'>$ref7 ($ref8/$ref9)</td><td>$ref2 ($ref3)</td><td>$ref4</td><td>$ref5</td></tr>')";
                     echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$ref3) && $select_search==2){ //회원이름으로 검색
                     echo "<script>";
                     echo "$('#entire_borrowlist').append('<tr><td>$ref6</td><td style=\'text-align:left;\'>$ref7 ($ref8/$ref9)</td><td>$ref2 ($ref3)</td><td>$ref4</td><td>$ref5</td></tr>')";
                     echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$ref4) && $select_search==3){ //대여일로검색
                     echo "<script>";
                     echo "$('#entire_borrowlist').append('<tr><td>$ref6</td><td style=\'text-align:left;\'>$ref7 ($ref8/$ref9)</td><td>$ref2 ($ref3)</td><td>$ref4</td><td>$ref5</td></tr>')";
                     echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$ref4) && $select_search==4){ //반납일로 검색
                     echo "<script>";
                     echo "$('#entire_borrowlist').append('<tr><td>$ref6</td><td style=\'text-align:left;\'>$ref7 ($ref8/$ref9)</td><td>$ref2 ($ref3)</td><td>$ref4</td><td>$ref5</td></tr>')";
                     echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$ref6)&& $select_search=='all'||
                       preg_match("/".$search_book."/i",$ref2)&& $select_search=='all'||
                       preg_match("/".$search_book."/i",$ref3)&& $select_search=='all'||
                       preg_match("/".$search_book."/i",$ref4)&& $select_search=='all'){
                          echo "<script>";
                          echo "$('#entire_borrowlist').append('<tr><td>$ref6</td><td style=\'text-align:left; \'>$ref7 ($ref8/$ref9)</td><td>$ref2 ($ref3)</td><td>$ref4</td><td>$ref5</td></tr>')";
                           echo "</script>";
                     $checkN=0;
               }
            }
         }
         //검색한 책이 없을때
         if($checkN==1){
            echo "<script>";
            echo "$('#entire_borrowlist').append('<p style=\'margin-top:30px; font-size:14px;\'>찾을 수 없습니다.</p>');";
            echo "</script>";
         }
       
      ?>
</body>
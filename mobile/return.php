<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
	<link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
	<title>도서반납</title>
	<link rel="stylesheet" href="./header.css">	
	<link rel="stylesheet" href="./menu1.css">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<style>
		@media all and (min-width:360px){
		*{margin:0px; padding:0px;font-family: 'Nanum Gothic', sans-serif;}
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
    				width:40%;
    				display::;inline-block;
    				float:left;
    				height:40px;
                    font-size:20px;
                    padding-left:5%;
    				line-height:40px;
                    outline:none;
    			}
             
			.searchbtn, .returnbtn{
					width:40%;
                    height:40px;
                    margin:5% 10%;
                    background-color:rgb(235,197,192);
                    text-align:center;
                    line-height:40px;
                    border:none;
                    outline:none;
                    font-size:20px;
                    display:inline-block;
                    float:right;
			}
			 .returnbtn{
			 	background-color:rgb(231,231,231);
			 }
			.menu3_search_result{
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
<body>
	<?include "./header.php";?>
	  <section>
         <article class="menu2_submenu_borrow_admin">
                  <!--<h1>대여</h1>-->
                 	<form action="return.php" method="get">
                 		<div>
	               			<label for="user_id">회원아이디</label>
							<input type="text" name="user_id" placeholder="ex)admin">
						</div>
						<div>
							<label for="book_num">도서번호</label>
							<input type="text" name="book_num" placeholder="ex)1">
						</div>
						<button class="searchbtn">조회하기</button>
   					</form>
         </article>
         <!--조회하면 나오는곳-->
         <article class="menu3_search_result" style="display:none;" >
                  <table id="entire_search_borrow_list">
                       <tr style="color: gray; font-size: 14px; padding:5px 0px; font-weight:bold;">
                          <!-- <th>대여번호</th> -->
                          <th>도서번호</th>
                          <th>대여자료</th>
                          <th>대여회원</th>
                          <th>대여일자</th>
                          <th>반납일자</th>
                       </tr>
                  </table>
         </article>
      </section>
      <footer>

      </footer>
    <script>
       $('#loc_text').html("반납하기");
    </script>
      <?
     // $user_id= $_COOKIE['user_id'];
     //  $user_name= $_COOKIE['user_name'];
     //     if(isset($user_id) && isset($user_name)){//넘어오는 값이 있으면
     //           echo "<script>$('#print_user').html('안녕하세요 $user_name($user_id)님');</script>";
     // //     }/* else{
     //           echo "<meta http-equiv='refresh' content='0; url=main.php'>";
     //           exit;
     //     }*/

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
         $idsql = "SELECT * FROM `user_book`";
         $resultid = mysqli_query($conn,$idsql);
         while($rowid = mysqli_fetch_assoc($resultid)){
            if($user_id == $rowid['id']){
                  $idexist=1;
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

         /**********************조회하기***********************************/

            // 1대여번호 2아이디 3 이름 4대여일 5반납일 6책번호 7책이름 8저자 9출판사
         $book_refer_sql = "SELECT bb.borrow_num, bb.user_id, bb.user_name, bb.borrow_day, bb.return_day , b.book_num, b.book_name, b.book_writer, b.book_publisher FROM borrow_book AS bb LEFT JOIN booklist AS b ON bb.book_num = b.book_num ORDER BY bb.borrow_num";
         $book_refer_result = mysqli_query($conn, $book_refer_sql);
         while(list($ref1, $ref2, $ref3, $ref4, $ref5, $ref6, $ref7, $ref8, $ref9)=  mysqli_fetch_row($book_refer_result)){
            if( $user_id == $ref2 && $book_num ==  $ref6){

                  echo "<script>";
                  echo "$('.menu3_search_result').css('display','inline-block');";
                  echo "$('#entire_search_borrow_list').append('<tr><td>$ref6</td><td style=\'text-align:left;\'>$ref7 ($ref8/$ref9)</td><td>$ref2 ($ref3)</td><td>$ref4</td><td>$ref5</td></tr>');";
                  echo "$('#entire_search_borrow_list').after('<a class=\'returnbtn\' href=\'return_ok.php?user_id=$user_id&book_num=$book_num\'>반납하기</a>');";
                  echo "</script>";
            }
         }
   ?>
</body>
<!DOCTYPE html>
<html lang="ko">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
      <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
      <link rel="stylesheet" href="header.css">
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <title>도서대여/반납</title>
      <style media="screen">
         *{margin:0px; padding:0px;}
               section{width:100%;
                        text-align: center;
               }
               .menu2_submenu_admin{width:1300px;
                                    height:50px;
                                    margin-top:30px;

                                    display:inline-block;
               }
                  .menu2_submenu_admin ul li{
                     display:inline-block;
                     font-size:13px;
                     color:gray;
                     margin:0px 30px;
                     padding:7px;
                     cursor:pointer;
                  }
/*                  .menu2_submenu_admin ul li::after{
                     content:'';
                     width:50px;
                     height:1px;
                     display:inline-block;
                     position:absolute;
                     background-color:rgb(235, 197, 192);
                  }*/
               /******************************/
               .search_area{width:1300px;
                           height:100px;
                           //margin-top:30px;
                           //background-color:yellow;
                           display:inline-block;
               }
                  .search_area form{ display:inline-block; margin-top:27px;}
                  .search_area form input[type="text"]{
                                    width:400px;
                                    height:40px;
                                    outline:none;
                                    padding:5px 10px;
                                    float:left;
                                    display:inline-block;
                  }
                  .search_area form select{
                     display:inline-block;
                     float:left;
                     width:130px;
                     height:55px;
                     border:none;
                     outline:none;
                     margin-right:10px;
                     color: gray;
                  }

                  .search_area form input[type="submit"]{
                                 width:70px;
                                 height:54px;
                                 text-align: center;
                                 outline:none;
                                 border:none;
                                 background-color:white;
                                 border:1px solid #a9a9a9;
                                 float:left;
                                 border-left:none;
                                 display:inline-block;
                  }

                  /*******************************/
                  .booklist_print_area{width:1300px;
                                       border-top:1.5px solid  #a9a9a9;
                                       display:inline-block;
                                       margin-top:30px;
                  }
                     .booklist_print_area table{
                                       margin-top:20px;
                                       width:1100px;
                                       display:inline-block;
                                       color: gray;
                                       font-size:13px;
                                       text-align: center;
                                       border-top:1px solid #a9a9a9;
                                       border-collapse:collapse;
                     }
                     /*tr*/
                     .main_list_title td{ font-weight:bold; color:black;}
                     .booklist_print_area table tr td{
                           height:30px;
                           border-bottom:1px solid  #a9a9a9;
                     }
                  /*책이름 빼고 다른것들 메뉴*/
                  .booklist_print_area table tr td{
                                 width:150px;
                  }
                  /*책이름*/
                  .booklist_print_area table tr td:nth-child(2){
                                 width:500px;
                  }
                  .table_footer{width:1100px;
                                 display:inline-block;
                                 margin-top:20px;
                  }
                  .table_footer .show_entire{float:right;
                                    font-size:14px;
                                    border:1px solid #a9a9a9;
                                    padding:7px 10px;
                  }

                  /***********대여/반납-대여(관리자)********************************/
                  .menu2_submenu_borrow_admin{
                              width:1100px;
                              display:inline-block;
                              margin-top:50px;
                              text-align: center;
                  }
                  .menu2_submenu_borrow_admin h1{
                                 color:black;
                                 font-size:20px;
                                 float:left;
                  }
                  .menu2_submenu_borrow_admin table{
                           width:1100px;
                           display:inline-block;
                           border-top:2px solid #a9a9a9;
                           border-bottom:1px solid #a9a9a9;
                           border-collapse: collapse;
                           margin-bottom:30px;
                  }
                  .menu2_submenu_borrow_admin table tr{width:1100px;}
                  .menu2_submenu_borrow_admin table tr td {
                           width:1100px;
                           height:70px;
                           border-bottom:1px solid #a9a9a9;
                  }
                  /*input요소*/
                  .menu2_submenu_borrow_admin input[type="text"]{
                                    outline:none;
                                    padding:5px;
                                    width:200px;
                                    height:20px;
                  }
                  .menu2_submenu_borrow_admin .borrowBtn{
                                          float:right;
                                          border:none;
                                          outline:none;
                                          font-size:16px;
                                          background-color:black;
                                          color:white;
                                          width:148px;
                                          height:48px;
                                          text-align: center;
                                          line-height: 30px;
                                          font-weight:bold;
                                          cursor:pointer;
                  }

                  /***********대여/반납-대여(관리자)끝********************************/
                  footer{width:100%;
                         height:100px;

                  }
                  #print_user{display:inline-block; margin-right:25px;}
      </style>
   </head>
   <body>
      <header>
            <?php include "header.php";?>
            <nav>
                  <ul>
                     <li><a href="menu1_admin.php">도서찾기</a></li>
                     <li class="menu1"><a href="menu2_1_admin.php">대여/반납</a></li>
                     <li><a href="menu3_1_admin.php">회원관리</a></li>
                  </ul>
            </nav>
      </header>
      <section>
         <article class="menu2_submenu_admin">
                  <ul>
                     <li id="submenu1"><a href="menu2_1_admin.php">조회하기</a></li>
                     <li style="border-bottom:2px solid rgb(255,229,226); font-weight:bold; color:black;" id="submenu2">
                        <a href="menu2_2_admin.php">대여하기</a>
                     </li>
                     <li id="submenu3">
                        <a href="menu2_3_admin.php">반납하기</a>
                     </li>
                  </ul>
         </article>
         <article class="menu2_submenu_borrow_admin">
                  <!--<h1>대여</h1>-->
                  <form action="menu2_2_admin.php" method="get">
                  <table>
                        <tr>
                           <td>회원아이디</td>
                           <td id="idarea"><input type="text" name="user_id"></td>
                        </tr>
                        <tr>
                           <td>도서번호</td>
                           <td id="numarea"><input type="text" name="book_num"></td>
                        </tr>
                        <tr>
                           <td>대여일</td>
                           <td id="borrowday"></td>

                        </tr>
                        <tr>
                           <td>반납일</td>
                           <td id="returnday"></td>
                        </tr>
                  </table>
                  <input class="borrowBtn" type="submit" value="대여하기" >
               </form>
         </article>
         <article style="color:red;">
            <p>*사용자 아이디는 admin 또는 user1 / 도서번호는 1~54까지 선택하여 대여가능합니다.</p>
            <p>*대여가 완료되면 대여하기-조회 / 도서찾기에서 대여 중인 도서의 확인이 가능합니다.</p>
         </article>
      </section>
      <footer>

      </footer>
      <script>

      </script>
      <?
     // $user_id= $_COOKIE['user_id'];
     //  $user_name= $_COOKIE['user_name'];
     //     if(isset($user_id) && isset($user_name)){//넘어오는 값이 있으면
     //           echo "<script>$('#print_user').html('안녕하세요 $user_name($user_id)님');</script>";
     //     }
         /* else{
               echo "<meta http-equiv='refresh' content='0; url=main.php'>";
               exit;
         }*/
         /**********대여일 / 반납일 오늘날짜랑 +7로 찍기**************/
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
                  echo "$('#idarea').append('$user_id');";
                  echo "$('#numarea').append('$book_num');";
                  echo "$('.borrowBtn').attr('disabled','')";
                  echo "</script>";
         }
   ?>
   </body>
</html>

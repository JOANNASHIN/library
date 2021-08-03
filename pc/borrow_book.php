<!DOCTYPE html>
<html lang="ko">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
      <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <title>도서찾기</title>
      <style media="screen">
         *{margin:0px; padding:0px;}
         body,html{width:100%;
               height:100%;
         }
         header{width:100%;
                height:120px;

         }
         a:link, a:hover, a:visited, a:active{text-decoration: none; color:inherit;}
         ul{list-style-type: none;}
            .header_top{width:100%;
                        height:40px;
                        display:inline-block;
                        float:left;
            }
               .header_top li:first-child h1{ /*h1*/
                                    font-size:21px;
                                    display:inline-block;
                                    float:left;
                                    line-height: 38px;
                                    color:#1b1d1f;
               }
               .header_top li:last-child{
                     display:inline-block;
                     float:right;
                     line-height: 40px;
                     margin-right:50px;
               }
         nav{width:100%;
               height:80px;
               /*background-color:rgb(255,229,226);*/
               background-color:#1b1d1f;
               display:inline-block;
               float:left;
               text-align: center;
         }
            nav ul{width:1000px;
                   height:100%;
                   display:inline-block;
                   margin:0 auto;

            }
               nav ul li{ display:inline-block;
                           font-size:17px;
                           margin:0px 70px;
                           line-height: 76px;
                           font-weight:bold;
                           /*color:rgb(255,229,226);*/
                           color:white;
                           position:relative;
                           cursor:pointer;
               }
               .menu1{color:rgb(235, 197, 192);}
               nav ul li:hover{color:rgb(235, 197, 192);}
               /*첫번째 메뉴 선 고정
               .menu1::after{
                     content:' ';
                     display:inline-block;
                     width:50px;
                     height:1.5px;
                     background-color:rgb(255,229,226);
                     position:absolute;
                     top:23px;
                     left:0;

               }
               /*두세번째 메뉴 선 일단 길이값없음
               nav ul li::after{
                  content:' ';
                  display:inline-block;
                  width:0px;
                  height:1.5px;
                  background-color:rgb(255,229,226);
                  position:absolute;
                  top:23px;
                  left:0;
               }
               /*두세번째 메뉴 선 호버시 길이 늘리기
               nav ul li:hover::after{
                  content:' ';
                  display:inline-block;
                  width:50px;
                  height:1.5px;
                  background-color:rgb(255,229,226);
                  position:absolute;
                  top:23px;
                  left:0;
                  transition:all 0.8s linear;
               }*/

               section{width:100%;
                        text-align: center;
               }
               /******************************/
               .search_area{width:1300px;
                           height:100px;
                           margin-top:30px;
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
                     width:120px;
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
                  footer{width:100%;
                         height:100px;

                  }
      </style>
   </head>
   <body>
      <header>
            <ul class="header_top">
               <li>
                  <h1>도서 대여 관리 시스템</h1>
               </li>
               <li>
                  <p id="print_user"></p>
                  <a href="logout.php">로그아웃</a>
               </li>
            </ul>
            <nav>
                  <ul>
                     <li><a href="search_book.php">도서찾기</a></li>
                     <li class="menu1"><a href="borrow_book.php">대여/반납</a></li>
                     <li>마이페이지</li>
                  </ul>
            </nav>
      </header>
      <section>
         <article class="search_area">
                  <form action="search_book.php" method="get">
                        <select name="select_search">
                           <option value="all" checked>통합검색</option>
                           <option value="0">도서명으로 검색</option>
                           <option value="1">책 번호로 검색</option>
                           <option value="2">저자명으로 검색</option>
                           <option value="3">출판사명으로 검색</option>
                        </select>
                        <input type="text" name="bookname" placeholder="책 이름을 입력해주세요.">
                        <input type="submit" value="검색">
                  </form>
         </article>
         <article class="booklist_print_area">
                  <table id="entire_booklist">
                       <tr class="main_list_title" style="border-bottom:1px solid black; padding:5px 0px;">
                          <td>번호</td>
                          <td>도서명</td>
                          <td>저자</td>
                          <td>출판사</td>
                          <td>대여상태</td>
                       </tr>
                  </table>

         </article>

      </section>
      <footer>

      </footer>
      <?
/*      $user_id= $_COOKIE['user_id'];
      $user_name= $_COOKIE['user_name'];
         if(isset($user_id) && isset($user_name)){//넘어오는 값이 있으면
               echo "<script>$('#print_user').html('안녕하세요 $user_name($user_id)님');</script>";
         }else{
               echo "<meta http-equiv='refresh' content='0; url=main.php'>";
               exit;
         }*/
         $conn = mysqli_connect("localhost","c8st18","c8st18","c8st18");
         mysqli_query($conn,"SET NAMES utf8");
         mysqli_select_db($conn,"c8st18");
         $sql = "SELECT * FROM `booklist`";
         $result= mysqli_query($conn,$sql);
         $search_book = $_GET['bookname'];
         $select_search = $_GET['select_search'];
         $checkN=1;
         if(!isset($search_book)){
            //검색아직 안했을때
               $checkN=0;
                  while(list($listnum, $name, $writer, $publisher) = mysqli_fetch_row($result)){
                           echo "<script>";
                           echo "$('#entire_booklist').append('<tr><td>$listnum</td><td>$name</td><td>$writer</td><td>$publisher</td><td></td></tr>')";
                           echo "</script>";
                  }
         }else{
            //검색했을때
            while(list($listnum, $name, $writer, $publisher) = mysqli_fetch_row($result)){
               if( preg_match("/".$search_book."/i",$name) && $select_search==0){
                     echo "<script>";
                     echo "$('#entire_booklist').append('<tr><td>$listnum</td><td>$name</td><td>$writer</td><td>$publisher</td><td></td></tr>');";
                     echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$listnum) && $select_search==1){
                     echo "<script>";
                     echo "$('#entire_booklist').append('<tr><td>$listnum</td><td>$name</td><td>$writer</td><td>$publisher</td><td></td></tr>');";
                     echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$writer) && $select_search==2){
                     echo "<script>";
                     echo "$('#entire_booklist').append('<tr><td>$listnum</td><td>$name</td><td>$writer</td><td>$publisher</td><td></td></tr>');";
                     echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$publisher) && $select_search==3){
                     echo "<script>";
                     echo "$('#entire_booklist').append('<tr><td>$listnum</td><td>$name</td><td>$writer</td><td>$publisher</td><td></td></tr>');";
                     echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$publisher)&& $select_search=='all'||
                       preg_match("/".$search_book."/i",$writer)&& $select_search=='all'||
                       preg_match("/".$search_book."/i",$listnum)&& $select_search=='all'||
                       preg_match("/".$search_book."/i",$name)&& $select_search=='all'){
                     echo "<script>";
                     echo "$('#entire_booklist').append('<tr><td>$listnum</td><td>$name</td><td>$writer</td><td>$publisher</td><td></td></tr>');";
                     echo "</script>";
                     $checkN=0;
               }
            }
         }
         //검색한 책이 없을때
         if($checkN==1){
            echo "<script>";
            echo "$('#entire_booklist').append('<p style=\'margin-top:30px; font-size:14px;\'>찾을 수 없습니다.</p>');";
            echo "</script>";
         }
         echo "<script>";
         echo "$('#entire_booklist').after('<ul class=\"table_footer\"><li class=\"show_entire\"><a href=\"search_book.php\">전체목록</</li></ul>');";
         echo "</script>";
      ?>
   </body>
</html>

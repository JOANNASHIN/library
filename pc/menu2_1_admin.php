<!DOCTYPE html>
<html lang="ko">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
      <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
      <link rel="stylesheet" href="header.css">
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <title>도서대여</title>
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
                  .borrowlist_print_area{width:1300px;
                                       border-top:1.5px solid  #a9a9a9;
                                       display:inline-block;
                                       margin-top:30px;
                  }
                     .borrowlist_print_area table{
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
                     .borrowlist_print_area table tr td{
                           height:30px;
                           border-bottom:1px solid  #a9a9a9;
                     }
                  /*책이름 빼고 다른것들 메뉴*/
                  .borrowlist_print_area table tr td{
                                 width:150px;
                  }
                  /*책이름*/
                  .borrowlist_print_area table tr td:nth-child(3){
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
                  #print_user{display:inline-block;margin-right:20px;}
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
                     <li style="border-bottom:2px solid rgb(255,229,226);" id="submenu1">
                        <a href="menu2_1_admin.php">
                           조회하기
                     </li>
                     <li id="submenu2">
                        <a href="menu2_2_admin.php">대여하기</a>
                     </li>
                     <li id="submenu3">
                        <a href="menu2_3_admin.php">반납하기</a>
                     </li>
                  </ul>
         </article>
         <article class="search_area">
                  <form action="menu2_1_admin.php" method="get">
                        <select name="select_search">
                           <option value="all" checked>통합검색</option>
                           <option value="0">도서명으로 검색</option>
                           <option value="1">회원아이디로 검색</option>
                           <option value="2">회원이름으로 검색</option>
                           <option value="3">대여일로 검색</option>
                           <option value="4">반납일로 검색</option>
                        </select>
                        <input type="text" name="bookname" placeholder="대여 중인 도서를 검색해보세요.">
                        <input type="submit" value="검색">
                  </form>
         </article>
         <article class="borrowlist_print_area">
                  <table id="entire_borrowlist">
                       <tr style="border-bottom:1px solid black; padding:5px 0px; font-weight:bold;">
                          <td>대여번호</td>
                          <td>도서번호</td>
                          <td>대여자료</td>
                          <td>대여회원</td>
                          <td>대여일자</td>
                          <td>반납일자</td>
                       </tr>
                  </table>
         </article>
      </section>
      <footer></footer>
      <?
      // $user_id= $_COOKIE['user_id'];
      // $user_name= $_COOKIE['user_name'];
      //    if(isset($user_id) && isset($user_name)){//넘어오는 값이 있으면
      //          echo "<script>$('#print_user').html('안녕하세요 $user_name($user_id)님');</script>";
      //    }
         /*  else{
             echo "<meta http-equiv='refresh' content='0; url=main.php'>";
               exit;
         }*/
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
         /*while(list($ref_num, $ref_name, $ref_writer,$ref_publisher) = mysqli_fetch_row($book_refer_result)){}
list($listnum, $booknum, $userid, $borrowday, $returnday) = mysqli_fetch_row($result) && $ref_row = mysqli_fetch_assoc($book_refer_result)
         */
         if(!isset($search_book)){
            //검색아직 안했을때
               $checkN=0;
                  while(list($ref1, $ref2, $ref3, $ref4, $ref5, $ref6, $ref7, $ref8, $ref9)=  mysqli_fetch_row($book_refer_result)){
                           echo "<script>";
                           echo "$('#entire_borrowlist').append('<tr><td>$ref1</td><td>$ref6</td><td style=\'text-align:left; padding:0px 30px;\'>$ref7 ($ref8/$ref9)</td><td>$ref3($ref2)</td><td>$ref4</td><td>$ref5</td></tr>')";
                           echo "</script>";
                  }
         }else{
            //검색했을때   // 1대여번호 2아이디 3 이름 4대여일 5반납일 6책번호 7책이름 8저자 9출판사
            while(list($ref1, $ref2, $ref3, $ref4, $ref5, $ref6, $ref7, $ref8, $ref9)=  mysqli_fetch_row($book_refer_result)){
               if( preg_match("/".$search_book."/i",$ref6) && $select_search==0){ //도서명으로 검색
                     echo "<script>";
                     echo "$('#entire_borrowlist').append('<tr><td>$ref1</td><td>$ref6</td><td style=\'text-align:left; padding:0px 30px;\'>$ref7 ($ref8/$ref9)</td><td>$ref3($ref2)</td><td>$ref4</td><td>$ref5</td></tr>')";
                     echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$ref2) && $select_search==1){ //회원아이디로 검색
                     echo "<script>";
                     echo "$('#entire_borrowlist').append('<tr><td>$ref1</td><td>$ref6</td><td style=\'text-align:left; padding:0px 30px;\'>$ref7 ($ref8/$ref9)</td><td>$ref3($ref2)</td><td>$ref4</td><td>$ref5</td></tr>')";
                     echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$ref3) && $select_search==2){ //회원이름으로 검색
                     echo "<script>";
                     echo "$('#entire_borrowlist').append('<tr><td>$ref1</td><td>$ref6</td><td style=\'text-align:left; padding:0px 30px;\'>$ref7 ($ref8/$ref9)</td><td>$ref3($ref2)</td><td>$ref4</td><td>$ref5</td></tr>')";
                     echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$ref4) && $select_search==3){ //대여일로검색
                     echo "<script>";
                     echo "$('#entire_borrowlist').append('<tr><td>$ref1</td><td>$ref6</td><td style=\'text-align:left; padding:0px 30px;\'>$ref7 ($ref8/$ref9)</td><td>$ref3($ref2)</td><td>$ref4</td><td>$ref5</td></tr>')";
                     echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$ref4) && $select_search==4){ //반납일로 검색
                     echo "<script>";
                     echo "$('#entire_borrowlist').append('<tr><td>$ref1</td><td>$ref6</td><td style=\'text-align:left; padding:0px 30px;\'>$ref7 ($ref8/$ref9)</td><td>$ref3($ref2)</td><td>$ref4</td><td>$ref5</td></tr>')";
                     echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$ref6)&& $select_search=='all'||
                       preg_match("/".$search_book."/i",$ref2)&& $select_search=='all'||
                       preg_match("/".$search_book."/i",$ref3)&& $select_search=='all'||
                       preg_match("/".$search_book."/i",$ref4)&& $select_search=='all'){
                          echo "<script>";
                          echo "$('#entire_borrowlist').append('<tr><td>$ref1</td><td>$ref6</td><td style=\'text-align:left; padding:0px 30px;\'>$ref7 ($ref8/$ref9)</td><td>$ref3($ref2)</td><td>$ref4</td><td>$ref5</td></tr>')";
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
         echo "<script>";
         echo "$('#entire_borrowlist').after('<ul class=\"table_footer\"><li class=\"show_entire\"><a href=\"menu2_1_admin.php\">전체목록</</li></ul>');";
         echo "</script>";
      ?>
   </body>
</html>

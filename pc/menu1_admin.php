<!DOCTYPE html>
<html lang="ko">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
      <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
      <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
      <link rel="stylesheet" href="header.css">
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <title>도서찾기</title>
      <style media="screen">
         *{margin:0px; padding:0px;}

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
                  .booklist_print_area{width:1100px;
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
                  .table_footer .show_entire{float:left;
                                    font-size:14px;
                                    border:1px solid #a9a9a9;
                                    padding:7px 10px;
                  }
                  .table_footer .add_book{
                          float:right;
                          font-size:14px;
                          border:1px solid #a9a9a9;
                          padding:7px 10px;
                          cursor:pointer;
                  }
                  footer{width:100%;
                         height:100px;

                  }
                  #print_user{display:inline-block; margin-right:20px;}

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
                     .editbtn{display:inline-block;
                     cursor:pointer;}


                     .hidden{display:none;}

                      .addBook_printarea{width:1100px;
                                           border-top:1.5px solid  #a9a9a9;
                                           display:inline-block;
                                           margin-top:35px;
                      }
                         .addBook_printarea table{
                                           width:1100px;
                                           display:inline-block;
                                           color: gray;
                                           text-align: center;
                                           border-collapse:collapse;
                         }
                         .addBook_printarea table td{
                           border-bottom:1px solid #a9a9a9;
                          border-top:1px solid #a9a9a9;
                           width:200px;
                           height:45px;
                           font-size:16px;
                         }
                         .addBook_printarea table td:nth-child(2){
                           width:700px;
                         }
                         .addBook_printarea table td input{
                           width:150px; height:28px;
                           outline:none;
                           padding:0px 5px;
                         }
                         .addBook_printarea table td:nth-child(2) input{
                           width:300px;
                         }
                         .addBook_printarea input[type="submit"]{
                                  width:120px;
                                  height:35px;
                                  background-color:black;
                                  border:1px solid black;
                                  color:white;
                                  margin-top:20px;
                                  cursor:pointer;
                         }

      </style>
   </head>
   <body>
      <header>
           <?php include "header.php";?>
            <nav>
                  <ul>
                     <li class="menu1">
                        <a href="menu1_admin.php">도서</a>
                     </li>
                     <li>
                        <a href="menu2_1_admin.php">대여/반납</a>
                     </li>
                     <li><a href="menu3_1_admin.php">회원관리</a></li>
                  </ul>
            </nav>
      </header>
      <section>
   <!--      <article class="menu2_submenu_admin">
                  <ul>
                     <li style="border-bottom:2px solid rgb(255,229,226);" id="submenu1">
                        <a href="menu2_1_admin.php">
                           도서찾기
                     </li>
                     <li id="submenu2">
                        <a href="menu2_2_admin.php">도서수정</a>
                     </li>
                     <li id="submenu3">
                        <a href="menu2_3_admin.php">도서삭제</a>
                     </li>
                  </ul>
         </article>-->
         <article class="search_area">
                  <form action="menu1_admin.php" method="get">
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
                          <td>수정/삭제</td>
                       </tr>
                  </table>
         </article>
         <article class="addBook_printarea" style="display:none;">
           <form action="add_book.php" method="get">
           <table>
                  <tr>
                    <td>번호</td>
                    <td>도서명</td>
                    <td>저자</td>
                    <td>출판사</td>
                  </tr>
                  <tr>
                      <td><input type="text" name="indexnum" placeholder="번호입력"></td>
                      <td><input type="text" name="bookname" placeholder="도서명입력"></td>
                      <td><input type="text" name="writer" placeholder="저자입력"></td>
                      <td><input type="text" name="publisher" placeholder="출판사입력"></td>
                  </tr>
             </table>
             <input id="savebtn" type="submit" value="저장">
            </form>
         </article>
      </section>
      <footer>

      </footer>
      <?
     // 
         /* else{$user_id= $_COOKIE['user_id'];
     //  $user_name= $_COOKIE['user_name'];
     //     if(isset($user_id) && isset($user_name)){//넘어오는 값이 있으면
     //           echo "<script>$('#print_user').html('안녕하세요 $user_name($user_id)님');</script>";
     //     }
               echo "<meta http-equiv='refresh' content='0; url=main.php'>";
               exit;
         }*/
         $conn = mysqli_connect("localhost","c8st18","c8st18","c8st18");
         mysqli_query($conn,"SET NAMES utf8");
         mysqli_select_db($conn,"c8st18");

         /**************도서목록*******************/
         $sql = "SELECT * FROM booklist";
         $result= mysqli_query($conn,$sql);
         /**************책이름 찾기 넘어온거 search***********************/
         $search_book = $_GET['bookname'];
         $select_search = $_GET['select_search'];
         $countsql = "SELECT count(*) FROM booklist";
         $resultcount = mysqli_query($conn, $countsql);
         $countrow= mysqli_fetch_row($resultcount);
         $totalcount = $countrow[0];

         $borrow_check=1;
         $checkN=1;
         if(!isset($search_book)){
            //검색아직 안했을때
               $checkN=0;
               //도서목록
                  while(list($listnum, $name, $writer, $publisher) = mysqli_fetch_row($result)){
                           $check_borrow_sql = "SELECT * FROM borrow_book";
                           $check_borrow_result=mysqli_query($conn,$check_borrow_sql);
                           while($check_borrow_row = mysqli_fetch_assoc($check_borrow_result)){
                              if($listnum == $check_borrow_row['book_num']){
                                 $borrow_check=1;
                                 echo "<script>";
                                 echo "$('#entire_booklist').append('<tr id=\"onerow$listnum\"><td>$listnum</td><td>$name</td><td>$writer</td><td>$publisher</td><td>대여중</td><td><p id=\"edit$listnum\" class=\"editbtn\">수정</p>/<p id=\"del$listnum\" class=\"editbtn\">삭제</p></td></tr>')";
                                 echo "</script>";
                                 break;
                              }else{
                                 $borrow_check=0;
                              }
                           }
                           if($borrow_check==0){
                              echo "<script>";
                              echo "$('#entire_booklist').append('<tr id=\"onerow$listnum\"><td>$listnum</td><td>$name</td><td>$writer</td><td>$publisher</td><td></td><td><p id=\"edit$listnum\" class=\"editbtn\">수정</p>/<p id=\"del$listnum\" class=\"editbtn\">삭제</p></td></tr>')";
                              echo "</script>";
                     }
               }//while닫힘
         }
         
        if(isset($search_book)){
            //검색했을때
            while(list($listnum, $name, $writer, $publisher) = mysqli_fetch_row($result)){
               if( preg_match("/".$search_book."/i",$name) && $select_search==0){
                     echo "<script>";
                     echo "$('#entire_booklist').append('<tr><td>$listnum</td><td>$name</td><td>$writer</td><td>$publisher</td><td></td><td><p id=\"edit$listnum\" class=\"editbtn\">수정</p>/<p id=\"del$listnum\" class=\"editbtn\">삭제</p></td></tr>');";
                     echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$listnum) && $select_search==1){
                     echo "<script>";
                     echo "$('#entire_booklist').append('<tr><td>$listnum</td><td>$name</td><td>$writer</td><td>$publisher</td><td></td><td><p id=\"edit$listnum\" class=\"editbtn\">수정</p>/<p id=\"del$listnum\" class=\"editbtn\">삭제</p></td></tr>');";
                     echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$writer) && $select_search==2){
                     echo "<script>";
                     echo "$('#entire_booklist').append('<tr><td>$listnum</td><td>$name</td><td>$writer</td><td>$publisher</td><td></td><td><p id=\"edit$listnum\" class=\"editbtn\">수정</p>/<p id=\"del$listnum\" class=\"editbtn\">삭제</p></td><</tr>');";
                     echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$publisher) && $select_search==3){
                     echo "<script>";
                     echo "$('#entire_booklist').append('<tr><td>$listnum</td><td>$name</td><td>$writer</td><td>$publisher</td><td></td><td><p id=\"edit$listnum\" class=\"editbtn\">수정</p>/<p id=\"del$listnum\" class=\"editbtn\">삭제</p></td></tr>');";
                     echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$publisher)&& $select_search=='all'||
                       preg_match("/".$search_book."/i",$writer)&& $select_search=='all'||
                       preg_match("/".$search_book."/i",$listnum)&& $select_search=='all'||
                       preg_match("/".$search_book."/i",$name)&& $select_search=='all'){
                     echo "<script>";
                     echo "$('#entire_booklist').append('<tr><td>$listnum</td><td>$name</td><td>$writer</td><td>$publisher</td><td></td><td><p id=\"edit$listnum\" class=\"editbtn\">수정</p>/<p id=\"del$listnum\" class=\"editbtn\">삭제</p></td></tr>');";
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
         echo "$('#entire_booklist').after('<ul class=\"table_footer\"><li class=\"add_book\"><p>도서추가</p></li><li class=\"show_entire\"><a href=\"menu1_admin.php\">전체목록</</li></ul>');";
         echo "</script>";
      ?>
      <script>
      var totalcount= '<?=$totalcount?>';
      //개수에 맞게 수정부분 넣기
      for(var i=1; i<=totalcount; i++){
         $('#entire_booklist #onerow'+i).after('<tr id="newedit'+i+'" class="hidden"><td style="width:150px;"><input type="hidden" name="indexnum" value="'+i+'"></td><td><input id="bookname'+i+'" style="width:300px; height:20px; outline:none;" id="iname'+i+'" type="text" placeholder="도서명"></td><td><input id="writer'+i+'" style="width:120px;height:20px; outline:none;" type="text" placeholder="저자"></td><td><input id="publisher'+i+'" style="width:120px; height:20px; outline:none;" type="text" placeholder="출판사"></td><td style="width:150px;"></td><td style="position:relative;"><input id="btn'+i+'" style="height:25px; margin-right:5px;" type="button" value="수정완료"><input style="height:25px;" id="cancel'+i+'" type="button" value="수정취소"></td><tr>');
      }

      //수정버튼 누르면 수정할수있는 input보이기 / 개당 한개만 클릭되게 하기!!
      var hideN = 0;
      var indexN=0;
      this.onclick= function(e){
         for(var i=1; i<=totalcount; i++){
               if(e.target.id=="edit"+i && hideN==0){
                     $('#onerow'+i).css("color","red");
                     $('#newedit'+i).removeAttr("class","hidden"); //보이기 일단 보이면 HIDEN 은 1
                     hideN =1;
               }
               //수정취소누르면
               else if(e.target.id=="cancel"+i && hideN==1){
                     $('#onerow'+i).css("color","gray");
                     $('#newedit'+i).attr("class","hidden");   //가리기
                     $('.sureBtn').removeAttr("class","hidden"); //다시 막기 안가리기!!
                     hideN=0;
               }
               if(e.target.id=="btn"+i){
                  var conf = confirm('정말로 수정하시겠습니까? 한번 수정하면 되돌릴 수 없습니다.');
                  if(conf== true){
                     location.href="edit_book.php?indexnum="+i+"&bookname="+$('#bookname'+i).val()+"&writer="+$('#writer'+i).val()+"&publisher="+$('#publisher'+i).val();
                  }
               }
               if(e.target.id=="del"+i){
                      var conf_del = confirm('정말로 삭제하시겠습니까? 한번 삭제하면 되돌릴 수 없습니다.');
                      if(conf_del==true){
                        location.href="del_book.php?indexnum="+i;
                      }
               }
         }//for닫힘
      }

      $('.add_book p').click(function(){
              $('.addBook_printarea').removeAttr("style","display:none;");
      });
      </script>
   </body>
</html>

<!DOCTYPE html>
<html lang="ko">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
     <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
      <link rel="stylesheet" href="header.css">
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <title>회원관리</title>
      <style>
        
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
                  .booklist_print_area{width:1200px;
                                       border-top:1.5px solid  #a9a9a9;
                                       display:inline-block;
                                       margin-top:30px;

                  }
                     .booklist_print_area table{
                                       margin-top:20px;
                                       width:1200px;
                                       display:inline-block;
                                       color: gray;
                                       font-size:13px;
                                       text-align: center;
                                       border-top:1px solid #a9a9a9;
                                       border-collapse:collapse;
                     }
                     /*tr*/
                     .main_list_title td{ font-weight:bold; color:black; }
                     .booklist_print_area table tr td{
                           height:30px;
                           border-bottom:1px solid  #a9a9a9;
                     }
/*                     .textLeft{text-align:left;}*/
                  /*책이름 빼고 다른것들 메뉴*/
                  .booklist_print_area table tr td{
                                 width:91px;
                  }
                  .booklist_print_area table tr td:nth-child(6),.booklist_print_area table tr td:nth-child(7),.booklist_print_area table tr td:nth-child(9){
                                 width:200px;
                  }
                  /*책이름*/
                  .booklist_print_area table tr td:nth-child(8){
                                 width:250px;
                  }
                  .table_footer{width:1200px;
                                 display:inline-block;
                                 margin-top:20px;
                  }
                  .table_footer .show_entire{float:left;
                                    font-size:14px;
                                    border:1px solid #a9a9a9;
                                    padding:7px 10px;
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


      </style>
   </head>
   <body>
      <header>
           <?php include "header.php";?>
            <nav>
                  <ul>
                     <li>
                        <a href="menu1_admin.php">도서</a>
                     </li>
                     <li>
                        <a href="menu2_1_admin.php">대여/반납</a>
                     </li>
                     <li class="menu1">
                       <a href="menu3_1_admin.php">회원관리</a>
                       </li>
                  </ul>
            </nav>
      </header>
      <section>
         <article class="search_area">
                  <form action="menu3_1_admin.php" method="get">
                        <select name="select_search">
                           <option value="all" checked>통합검색</option>
                           <option value="0">이름 검색</option>
                           <option value="1">아이디로 검색</option>
                        </select>
                        <input type="text" name="bookname" placeholder="회원을 검색하세요.">
                        <input type="submit" value="검색">
                  </form>
         </article>
         <article class="booklist_print_area">
                  <table id="entire_booklist">
                       <tr class="main_list_title" style="border-bottom:1px solid black; padding:5px 0px;">
                          <td>번호</td>
                          <td>이름</td>
                          <td>아이디</td>
                          <td>성별</td>
                          <td>생년월일</td>
                          <td>연락처</td>                         
                          <td>가입일</td>
                          <td>수정/삭제</td>
                       </tr>
                  </table>
         </article>
      </section>
      <footer>

      </footer>
      <?
     // $user_id= $_COOKIE['user_id'];
     //  $user_name= $_COOKIE['user_name'];
     //     if(isset($user_id) && isset($user_name)){//넘어오는 값이 있으면
     //           echo "<script>$('#print_user').html('안녕하세요 $user_name($user_id)님');</script>";
     //     }/* else{
     //           echo "<meta http-equiv='refresh' content='0; url=main.php'>";
     //           exit;
     //     }*/
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
         if(!isset($search_book)){
            //검색아직 안했을때
               $checkN=0;
               //도서목록
            for($i=1; $i<=$totalcount; $i++){
                  list($id_u, $pw_u,$name_u,$gender_u,$birth_u,$contact_u, $joinday_u)=mysqli_fetch_row($result);
                              echo "<script>";
                              echo "$('#entire_booklist').append('<<tr id=\"onerow$i\"><td>$i</td><td>$name_u</td><td id=\"pk_id$i\">$id_u</td><td>$gender_u</td><td>$birth_u</td><td>$contact_u</td><td>$joinday_u</td><td><p id=\"edit$i\" class=\"editbtn\">수정</p>/<p id=\"del$i\" class=\"editbtn\">삭제</p></td></tr>');";
                              echo "</script>";

               }//for닫힘
           }
      if(isset($search_book)){
            //검색했을때
            for($i=1; $i<=$totalcount; $i++){
            list($id_u, $pw_u,$name_u,$gender_u,$birth_u,$contact_u,$email_u, $address_u, $joinday_u)=mysqli_fetch_row($result);
               if( preg_match("/".$search_book."/i",$name_u) && $select_search==0){
                     echo "<script>";
                     echo "$('#entire_booklist').append('<<tr id=\"onerow$i\"><td>$i</td><td>$name_u</td><td>$id_u</td><td>$gender_u</td><td>$birth_u</td><td>$contact_u</td><td>$joinday_u</td><td><p id=\"edit$i\" class=\"editbtn\">수정</p>/<p id=\"del$i\" class=\"editbtn\">삭제</p></td></tr>');";
                  echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$id_u) && $select_search==1){
                     echo "<script>";
                     echo "$('#entire_booklist').append('<<tr id=\"onerow$i\"><td>$i</td><td>$name_u</td><td>$id_u</td><td>$gender_u</td><td>$birth_u</td><td>$contact_u</td><td>$joinday_u</td><td><p id=\"edit$i\" class=\"editbtn\">수정</p>/<p id=\"del$i\" class=\"editbtn\">삭제</p></td></tr>');";
                     echo "</script>";
                     $checkN=0;
               }
               else if(preg_match("/".$search_book."/i",$name_u)&& $select_search=='all'||
                       preg_match("/".$search_book."/i",$id_u)&& $select_search=='all'){
                     echo "<script>";
                     echo "$('#entire_booklist').append('<<tr id=\"onerow$i\"><td>$i</td><td>$name_u</td><td>$id_u</td><td>$gender_u</td><td>$birth_u</td><td>$contact_u</td><td>$joinday_u</td><td><p id=\"edit$i\" class=\"editbtn\">수정</p>/<p id=\"del$i\" class=\"editbtn\">삭제</p></td></tr>');";
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
         echo "$('#entire_booklist').after('<ul class=\"table_footer\"><li class=\"show_entire\"><a href=\"menu1_admin.php\">전체목록</</li></ul>');";
         echo "</script>";
      ?>
      <script>
      //수정시작
      var totalcount= '<?=$totalcount?>';
      //개수에 맞게 수정부분 넣기
      for(var i=1; i<=totalcount; i++){
         $('#entire_booklist #onerow'+i).after('<tr id="newedit'+i+'" class="hidden"><td><input type="hidden" style="width:89px;"></td><td><input id="name'+i+'" type="text" placeholder="이름" style="width:90px; height:25px;outline:none;"></td><td style="width:80px;height:25px;outline:none;"></td><td><input id="gender'+i+'" type="text" placeholder="성별" style="width:80px; height:25px;outline:none;"></td><td><input id="gender'+i+'" type="text" placeholder="생년월일" style="width:80px; height:25px;outline:none;"></td><td ><input id="contact'+i+'" type="text"placeholder="연락처" style="width:110px;height:25px;outline:none;"></td><td></td><td style="position:relative; width:280px; height:40px;"><input id="btn'+i+'" style="height:25px; margin-right:5px;" type="button" value="수정완료"><input style="height:25px;" id="cancel'+i+'" type="button" value="수정취소"></td><tr>');
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
 location.href="edit_user.php?id="+$('#pk_id'+i).html()+"&name="+$('#name'+i).val()+"&gender="+$('#gender'+i).val()+"&contact="+$('#contact'+i).val()+"&email="+$('#email'+i).val()+"&address="+$('#address'+i).val()+"";
                  }
               }
               if(e.target.id=="del"+i){
                      var conf_del = confirm('정말로 삭제하시겠습니까? 한번 삭제하면 되돌릴 수 없습니다.');
                      if(conf_del==true){
                        location.href="del_user.php?id="+$('#pk_id'+i).html();
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

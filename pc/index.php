<!DOCTYPE html>
<html lang="ko">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
     <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <style media="screen">
         *{margin:0px; padding:0px;}
         @media all and (max-width:1400px){
           html,body{width:100%;
                    height:100%;
                    min-width:1300px;
           }
           section{width:100%;height:100%;}
           a:link, a:hover, a:visited, a:active{ text-decoration: none;
                                                  color:black;
           }
           .white_space{width:100%;
                       height:60%;
                       display:inline-block;
                       float:left;
                       background-color: white;
           }
              /*타이틀*/
              .white_space h1{font-size:3vw;
                             display:inline-block;
                             margin-left:200px;
                             line-height: 60px;
                             margin-top:200px;

              }
              /*오른쪽 전체*/
              .rightside_header{float:right;
                                display:inline-block;
                                margin-right:50px;
                                line-height: 50px;
              }
              /*form전체*/
              .loginForm{display:inline-block;float:left;}
                 .loginForm label{ font-size: 0.72vw;}
                 .loginForm input{ width:130px;
                                   height:23px;
                                   padding-left:10px;
                                   outline:none;
                                   display:inline-block;
                                   margin:0px 5px;

                 }
                 /*작은곳*/
                 .loginForm input[type="submit"]{
                    width:55px;
                    border:none;
                    outline:none;
                    background-color:transparent;
                    margin:0px 5px;
                    font-size:0.9vw;
                    cursor:pointer;
                 }
              /*|랑 회원가입텍스트*/
              .rightside_header a, .rightside_header p{
                    display:inline-block;
                    margin-left:5px;
                    font-size:0.9vw;
                    cursor:pointer;
              }
              .rightside_header p{
                font-size:16px;
              }
           .black_space{width:100%;
                       height:40%;
                       display:inline-block;
                       float:left;
                       /*background-color: #1b1d1f;*/
                       background-color:#008;
           }
           .menu1{
              top:-100px;
              left:200px;
           }
           .menu2{
              top:-100px;
              left:500px;
           }
           .menu3{
              top:-100px;
              left:800px;
           }
           ul{list-style-type: none;}
           .menu1, .menu2, .menu3{ cursor:pointer;
             position:absolute;
                width:200px;
                height:230px;
              }
           .menu1 p,.menu2 p,.menu3 p{position:absolute;
                                   color:black;
                                   top:30px; left:55px;
                                   font-size:1.2vw;
                                   font-family: 'Do Hyeon', sans-serif;
           }
           .menu1 i,.menu2 i,.menu3 i{position:absolute;
                                   color:black;
                                   top:30px; left:130px;
                                   font-size:1.8vw;
                                   margin-left:10px;
                                   font-family: 'Do Hyeon', sans-serif;
           }
           .menu1 img,.menu2 img,.menu3 img{
             width:200px;
             height:230px;
                    box-shadow: 3px 5px 2px black;
           }
           .menu1:hover, .menu2:hover, .menu3:hover{
              top:-130px;
           }
         }/*작은곳끝*/





         /*큰곳*/
         @media all and (min-width:1400px){
         html,body{width:100%;
                  height:100%;
         }
         section{width:100%;height:100%;}
         a:link, a:hover, a:visited, a:active{ text-decoration: none;
                                                color:black;
         }
         .white_space{width:100%;
                     height:60%;
                     display:inline-block;
                     float:left;
                     background-color: white;
         }
            /*타이틀*/
            .white_space h1{font-size:3vw;
                           display:inline-block;
                           margin-left:200px;
                           line-height: 60px;
                           margin-top:230px;

            }
            /*오른쪽 전체*/
            .rightside_header{float:right;
                              display:inline-block;
                              margin-right:50px;
                              line-height: 50px;
            }
            /*form전체*/
            .loginForm{display:inline-block;float:left;}
               .loginForm label{ font-size: 0.72vw;}
               .loginForm input{ width:130px;
                                 height:23px;
                                 padding-left:10px;
                                 outline:none;
                                 display:inline-block;
                                 margin:0px 5px;

               }
               .loginForm input[type="submit"]{
                  width:55px;
                  border:none;
                  outline:none;
                  background-color:transparent;
                  margin:0px 5px;
                  font-size:0.72vw;
                  cursor:pointer;
               }
            /*|랑 회원가입텍스트*/
            .rightside_header a, .rightside_header p{
                  display:inline-block;
                  margin-left:5px;
                  font-size:16px;
               /*   cursor:pointer;*/
            }

         .black_space{width:100%;
                     height:40%;
                     display:inline-block;
                     float:left;
                     /*background-color: #1b1d1f;*/
                     background-color:#008;
         }
         .menu1{position:absolute;
            width:250px;
            height:280px;
            top:-150px;
            left:200px;
         }
         .menu2{position:absolute;
            width:250px;
            height:280px;
            top:-150px;
            left:500px;
         }
         .menu3{position:absolute;
            width:250px;
            height:280px;
            top:-150px;
            left:500px;
            top:-150px;
            left:800px;
         }
         ul{list-style-type: none;}
         .menu1, .menu2, .menu3{ cursor:pointer;}
         .menu1 p,.menu2 p,.menu3 p{position:absolute;
                                 color:black;
                                 top:30px; left:55px;
                                 font-size:1.2vw;
                                 font-family: 'Do Hyeon', sans-serif;
         }
         .menu1 i,.menu2 i,.menu3 i{position:absolute;
                                 color:black;
                                 top:30px; left:130px;
                                 font-size:1.8vw;
                                 margin-left:10px;
                                 font-family: 'Do Hyeon', sans-serif;
         }
         .menu1 img,.menu2 img,.menu3 img{width:250px;
                  height:280px;
                  box-shadow: 3px 5px 2px black;
         }
         .menu1:hover, .menu2:hover, .menu3:hover{
            top:-180px;
         }
         .hidden{display:none;}
       }

      </style>
      <title></title>
   </head>
   <body>
      <section>
         <article class="white_space">
            <header>
               <a href="index.php">
                  <h1>도서 대여 관리시스템</h1>
               </a>
               <div class="rightside_header">
                     <p id="print_user">안녕하세요 관리자님</p>
                     <!-- <a href="logout.php">로그아웃</a> -->
               </div>
            </header>
         </article>
         <article class="black_space">
            <nav style="position:relative;">
               <ul>
                  <a href="menu1_admin.php">
                     <li class="menu1 menu">
                        <img src="./pic/booknew.png" alt="menu1">
                        <p>도서찾기</p>
                        <i class="xi-book"></i>
                     </li>
                  </a>
                  <a href="menu2_1_admin.php">
                     <li class="menu2 menu">
                        <img src="./pic/booknew.png" alt="menu2">
                        <p>대여/반납</p>
                        <i class="xi-library"></i>
                     </li>
                  </a>
                  <a href="menu3_1_admin.php">
                     <li class="menu3 menu">
                        <img src="./pic/booknew.png" alt="menu3">
                        <p>회원관리</p>
                        <i class="xi-user"></i>
                     </li>
                  </a>
               </ul>
            </nav>
         </article>
      </section>
      <!-- php
         $user_id= $_COOKIE['user_id'];
         $user_name= $_COOKIE['user_name'];
            if(isset($user_id) && isset($user_name)){//넘어오는 값이 있으면
                  echo "<script>$('#print_user').html('안녕하세요 $user_name($user_id)님');</script>";
            }else{
                  echo "<meta http-equiv='refresh' content='0; url=index.php'>";
                  exit;
            } -->
      
   </body>
</html>

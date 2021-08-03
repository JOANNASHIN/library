<!DOCTYPE html>
<html lang="ko">
   <head>
      <meta charset="utf-8">
      <script src="http://code.jquery.com/jquery-latest.min.js"></script>
      <title>회원가입</title>
      <style media="screen">
         *{margin:0px; padding:0px; }
            body,html{width:100%;
              height:100%;
              background-color:rgb(247,247,247);
              /*background-color:#F5C3C2;*/
            }
            section{width:100%;
                        height:100%;
            }
            .top_article{width:100%;
                        height:20%;
                        display:inline-block;
                        float:left;
                        text-align: center;
            }
              .top_article h1{font-size:2.8vw;
                                      line-height:180px;
                                      color:black;
              }
              .bottom_article{width:100%;
                                        height:80%;
                                        padding-top:30px;
                                        display:inline-block;
                                        float:left;
                                        text-align: center;
                                          background-color:white;
              }
              form{
                        display:inline-block;

              }
              /*항목들*/
               form tr td:first-child{
                  text-align: left;
                  width:100px;
                  font-size:15px;
               }
                form input{width:300px;
                                    height:30px;
                                    outline:none;
                                    padding:5px;
                }

                 form tr{margin:5px 0px;}
                 #idcheckBtn{font-size:13px;
                                      float:left;

                                      cursor:pointer;
                 }
                 select{ outline:none;
                              width:314px;
                              height:44px;
                 }
                  form input[type="submit"]{
                    width:314px;
                    height:44px;
                    border:none;
                    outline:none;
                    border:2px solid black;
                    background-color:black;
                    color:white;
                    font-weight:bold;
                    margin-top:20px;
                    cursor:pointer;
                  }
                  .checkSubmit{
                          display:none;
                          float:left;
                          width:314px;
                          height:44px;
                      /*    background-color: red;*/
                          position:absolute;
                          margin-top:20px;
                          cursor:pointer;
                  }

                  /*
                  .addClass ::after{
                              content:"필수입력항목입니다.";
                              color:red;
                              display:block;
                              float:left;
                              width:314px;
                              height:10px;

                  }*/
                  .hidden{display:none;}
                          .mustinput{color:red;
                                              text-align: left;
                                              font-size:12px;
                          }
      </style>
   </head>
   <body>
     <section>
             <article class="top_article">
                     <header>
                                <h1>회원가입</h1>
                  </header>
             </article>
              <article class="bottom_article">
                        <form action="join_ok.php" method="post">
                           <table>
                            <!--아이디--->
                              <tr id="input1" >
                                 <td >아이디</td>
                                 <td ><input type="text" id="must1" name="user_id"></td>
                                 <td><p id="idcheckBtn" >아이디 중복확인</p></td>
                              </tr>
                              <tr class="alarmT hidden">
                                <td></td>
                                <td class="mustinput">필수입력항목입니다.</td>
                              </tr>


                              <tr id="input2">
                                 <td>비밀번호</td>
                                 <td><input type="password" id="must2" name="user_pw"></td>
                              </tr>
                              <tr class="alarmT hidden">
                                <td></td>
                                <td class="mustinput">필수입력항목입니다.</td>
                              </tr>
                              <tr class="alertpw hidden">
                                <td></td>
                                <td class="mustinput">비밀번호는 7자 이상 20자 이하입니다.</td>
                              </tr>

                              <tr id="input3">
                                 <td>비밀번호확인</td>
                                 <td><input type="password" id="must3" name="pw_check"></td>
                              </tr>
                              <tr class="alarmT hidden">
                                <td></td>
                                <td class="mustinput">필수입력항목입니다.</td>
                              </tr>
                              <tr class="pwcheck_alert hidden">
                                <td></td>
                                <td class="mustinput">비밀번호가 일치하지 않습니다. 다시 입력하여 주세요.</td>
                              </tr>


                              <tr id="input9">
                                 <td>이름</td>
                                 <td><input type="text" id="must9" name="user_name"></td>
                              </tr>
                              <tr class="alarmT hidden">
                                <td></td>
                                <td class="mustinput">필수입력항목입니다.</td>
                              </tr>
                              <tr class="name_alert hidden">
                                <td></td>
                                <td class="mustinput">이름에 공백 또는 특수문자가 포함되어있습니다.</td>
                              </tr>

                              <tr id="input7">
                                 <td>성별</td>
                                 <td>
                                        <select id="select_gender" name="user_gender">
                                                <option value="0" selected>선택</option>
                                                <option value="male" >남자</option>
                                                <option value="female">여자</option>
                                        </select>
                                 </td>
                              </tr>
                              <tr class="gender_alert hidden">
                                <td></td>
                                <td class="mustinput">성별을 선택해주세요.</td>
                              </tr>

                              <tr id="input4">
                                 <td>생년월일</td>
                                 <td><input type="text" name="user_birth" id="must4" placeholder="예)19931117"></td>
                              </tr>
                              <tr class="alarmT hidden">
                                <td></td>
                                <td class="mustinput">필수입력항목입니다.</td>
                              </tr>
                              <tr class="birth_alert hidden">
                                <td></td>
                                <td class="mustinput">문자, 공백없이 숫자 8자리만 입력하여주세요. 예)20001234</td>
                              </tr>

                              <tr id="input5">
                                 <td>연락처</td>
                                 <td><input type="text" name="user_contact" id="must5" placeholder="-없이 숫자만 기입해주세요."></td>
                              </tr>
                              <tr class="alarmT hidden">
                                <td></td>
                                <td class="mustinput">필수입력항목입니다.</td>
                              </tr>
                              <tr class="contact_alert hidden">
                                <td></td>
                                <td class="mustinput">문자, 공백없이 숫자만 입력하여주세요. 예)01012345678</td>
                              </tr>


                              <tr id="input6">
                                 <td>이메일</td>
                                 <td><input type="email"  id="must6" name="user_email"></td>
                              </tr>
                              <tr class="alarmT hidden">
                                <td></td>
                                <td class="mustinput">필수입력항목입니다.</td>
                              </tr>
                              <tr class="email_alert hidden">
                                <td></td>
                                <td class="mustinput">이메일 형식에 맞지 않습니다. 공백없이 입력해주세요.</td>
                              </tr>



                              <tr id="input8">
                                 <td>주소</td>
                                 <td><input type="text" id="must8"  name="user_address"></td>
                              </tr>
                              <tr class="alarmT hidden">
                                <td></td>
                                <td class="mustinput">필수입력항목입니다.</td>
                              </tr>

                              <tr>
                                <td></td>
                                  <td  class="submitBtn" >
                                      <p class="checkSubmit"></p>
                                      <input type="submit" value="회원가입">
                                  </td>
                              </tr>
                           </table>
                        </form>
                </article>
           </section>
      <script>
            //오류있는지 체크하는애
            var checkS =1;
            var idclick_check = 0;  //아이디 중복체크 했는지 체크
            var regExp = /\s/g;  //공백체크 정규식

            //아이디체크
            var idcheckBtn = document.getElementById('idcheckBtn');
            idcheckBtn.onclick= function(){
                  location.href="id_check.php?id="+$('input[name="user_id"]').val();
                  idclick_check=1;

            }


            /*아이디 체크부분*/
           $('#input1').focusout(function(){
                  if($('#must1').val() == ""){
                       $('#input1 + .alarmT').removeClass("hidden");   //필수입력사항보이기
                       checkS=0;
                    } else{
                              $('#input1 + .alarmT').addClass("hidden");
                              checkS=1;
                  }
           });
        //   var regPw = /[\w][\w][\w][\w][\w][\w][\w][\w]+/;

        /*비밀번호 ////////////////////////////////////////////////////////////////////////////////////////////////////*/
           $('#input2').focusout(function(){
              //아예 입력안했을때 필수입력항목입니다 알림
                  if(must2.value.length==0){
                      checkS=0;
                       $('#input2 + .alarmT').removeClass("hidden");
                    }
                    //입력은 했는데 조건에 안맞을때
                  else  if( must2.value.length>0 && must2.value.length<7 || must2.value.length>21){
                            $('.alertpw').removeClass('hidden');            //조건통과 ㄴㄴ
                            $('#input2 + .alarmT').addClass("hidden"); //필수입력은통과
                           checkS=0;
                 }
                 //조건에 맞을때
                 else if( must2.value.length>=7 &&  must2.value.length<21){
                              checkS=1;
                              $('#input2 + .alarmT').addClass("hidden");
                              $('.alertpw').addClass('hidden');     //조건 통과. 숨기기
                 }
           });
           //비밀번호확인부분
           $('#input3').focusout(function(){
                    if($('#must3').val() == ""){ //아예 작성안했으면
                            $('#input3 + .alarmT').removeClass("hidden");  //필수입력입니다.
                    }
                    else if($('#must2').val() != $('#must3').val() &&  $('#must2').val() != "" ){
                          $('#input3 + .alarmT').addClass("hidden");  //필수입력 안보이기
                          $('#must3').val(" ");                             //칸비우기
                          $('.pwcheck_alert').removeClass('hidden'); //비밀번호 일치하지 않습니다 보이기
                        checkS=0;
                  }else{  checkS=1;
                           $('#input3 + .alarmT').addClass("hidden");
                          $('.pwcheck_alert').addClass('hidden');
                  }
           });
           /*생일*/
           var regBirth =/^[\d][\d][\d][\d][\d][\d][\d][\d]$/;
           $('#input4').focusout(function(){
                  if($('#must4').val() == ""){
                                  $('#input4 + .alarmT').removeClass("hidden");
                    }
                   else if(!regBirth.test($('#must4').val())){
                              $('#input4 + .alarmT').addClass("hidden");   //필수입력숨기기
                              $('.birth_alert').removeClass('hidden');          //문자포함보이기
                              checkS=0;
                   }else{
                               checkS=1;
                               $('#input4 + .alarmT').addClass("hidden");
                               $('.birth_alert').addClass('hidden');   //문자포함 숨기기
                   }
           });

           /*연락처*/
           var regContact = /^(\d){3}(\d){3,4}(\d){4}$/;
           $('#input5').focusout(function(){
                     if($('#must5').val() == ""){
                            $('#input5 + .alarmT').removeClass("hidden");
                     }
                     else if(!regContact.test($('#must5').val())){
                                $('#input5 + .alarmT').addClass("hidden");
                                $('.contact_alert').removeClass('hidden');
                              checkS=0;
                      }else{
                              $('#input5 + .alarmT').addClass("hidden");
                              $('.contact_alert').addClass('hidden');
                              checkS=1;
                      }
           });
           /*이메일*/
           var regEmail = /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i;
           $('#input6').focusout(function(){
                  if($('#must6').val() == ""){
                       $('#input6 + .alarmT').removeClass("hidden");
                    }
                     else if(!regEmail.test($('#must6').val())){
                                 $('#input6 + .alarmT').addClass("hidden");
                                 $('.email_alert').removeClass('hidden');
                               checkS=0;
                     }else{
                              $('#input6 + .alarmT').addClass("hidden");
                              $('.email_alert').addClass('hidden');
                                checkS=1;
                   }
           });
           /*성별*/
                $('#input7').focusout(function(){
                      if($('select[name="gender"]').val()==0){  //성별체크 안했을때
                                $('.gender_alert').removeClass('hidden');
                                checkS=0;
                      }else{
                              $('.gender_alert').addClass('hidden');
                              checkS=1;
                      }
                });

           /*주소*/
           $('#input8').focusout(function(){
                  if($('#must8').val() == ""){
                       $('#input8 + .alarmT').removeClass("hidden");
                       checkS=0;
                    } else{ $('#input8 + .alarmT').addClass("hidden");
                        checkS=1;
                  }
           });
           /*이름*/
           $('#input9').focusout(function(){
                 if($('#must9').val() == ""){
                      $('#input9 + .alarmT').removeClass("hidden");
                      checkS=0;
                   } else { $('#input9 + .alarmT').addClass("hidden");
                       checkS=1;
                 }
          });
/*
  $('.checkSubmit').mouseover(function(){

            if(checkS==1 && idclick_check==1 ){
                            $('.checkSubmit').css("display","none");
              }else{  $('.checkSubmit').css("display","inline-block");
              }
});*/

      </script>
      <?
            $id_ok = $_GET['id_ok'];
            if(strlen($id_ok)>0){
                  print "<script>$('#must1').val('$id_ok');</script>";
            }
      ?>

   </body>
</html>

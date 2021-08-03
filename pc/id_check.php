<?
         $id = $_GET['id'];
         //db연결
         $conn = mysqli_connect("localhost","c8st18","c8st18","c8st18");
         mysqli_query($conn,"SET NAMES UTF8");
         mysqli_select_db($conn,"c8st18");
         //db에서 아이디 참조
         $idchecksql = "SELECT * FROM `user_book`";
         $idList= mysqli_query($conn, $idchecksql);
         //중복되는게 있는지 검사.
         $count=0;
         while($rowid = mysqli_fetch_assoc($idList)){
             if($id ==$rowid['id']){    //중복된아이디있음. count 1
                $count=1;
            }
            /*else{ 새로운아이디
               echo "이게 데이터베이스에 있는거 {$rowid[id]} ";
               echo $id;
               echo "<script>alert('사용가능한 아이디입니다.');</script>";
            }*/
         }

      if($count==1){
         echo "<script>alert('중복된 아이디가 있습니다.');location.href='join.php';</script>";
      }else{
         echo "<script>alert('사용가능한 아이디입니다.');location.href='join.php?id_ok=$id';</script>";
      }
         mysqli_free_result($idList);
?>

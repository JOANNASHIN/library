<?
$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw'];
$user_name= $_POST['user_name'];
$user_gender = $_POST['user_gender'];
$user_birth= $_POST['user_birth'];
$user_contact= $_POST['user_contact'];
$user_email= $_POST['user_email'];
$user_address= $_POST['user_address'];
$user_joinday = date('Y-m-d H:i:s',time());

$conn = mysqli_connect("localhost","c8st18","c8st18","c8st18");
mysqli_query($conn,"SET NAMES utf-8");
if(!$conn){
   echo "서버접속 실패";
}
if(!mysqli_select_db($conn,"c8st18")){
   echo "데이터베이스 선택실패";
}
const PASSWORD_COST=['cost'=>12];
$hashpw = password_hash($user_pw,PASSWORD_DEFAULT,PASSWORD_COST);

$joinsql = "INSERT INTO `user_book` VALUES('$user_id','$hashpw','$user_name','$user_gender','$user_birth','$user_contact','$user_email','$user_address','$user_joinday')";
mysqli_query($conn,$joinsql);
echo "회원가입되었습니다. 로그인해주세요.";
?>
<meta http-equiv="refresh" content="0; url=index.php">

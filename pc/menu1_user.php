<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
	<title>도서찾기</title>
	<link rel="stylesheet" href="./header.css">
	<link rel="stylesheet" href="./menu1_user.css">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body>
	<?php include "./header.php";?>
	<section class="section_entire">
		<article class="search_area_entire">
			<form action="menu1_user.php" method="get"><!--  나중에 post로 변경 -->
				<select name="selectnum">
					<option value="all">통합검색</option>
					<option value="0">도서명검색</option>
					<option value="1">책번호검색</option>
					<option value="2">저자명검색</option>
					<option value="3">출판사검색</option>
				</select>
				<input type="text" name="bookname" placeholder="도서검색">
				<button id="searchbtn" class="searchbtn"><img src="./pic/search.png" alt="search_icon"></button>
			</form>
		</article>
		<article class="booklist_entire">
			<table class="booklist_table">
				<tr>
					<th>번호</th>
					<th>도서명 [출판사]</th>
					<th>저자</th>
					<th>대여가능</th>
				</tr>				
			</table>
			<p class="notfind_alarm">찾을 수 없습니다.</p>
			<p class="show_entire_btn">
				<a href="menu1_user.php">전체보기</a>
			</p>
		</article>
		<article class="wrap_footer">
			
		</article>
	</section>
	
<?php
$selectnum = $_GET['selectnum'];
$bookname_s = $_GET['bookname'];
$conn = mysqli_connect("localhost","c8st18","c8st18","c8st18");
mysqli_query($conn);
mysqli_select_db($conn,"c8st18");
$sql = "SELECT * FROM booklist";
$result = mysqli_query($conn,$sql);
$check_find =false;
//검색안했을때
if(!isset($bookname_s)){
	while(list($booklistnum, $name, $writer, $publisher)=mysqli_fetch_row($result)){
		echo "<script>";
		echo "$('.booklist_entire table').append('<tr><td>$booklistnum</td><td>$name&nbsp;\[$publisher\]</td><td>$writer</td><td class='borrow_check'></td></tr>')";
		echo "</script>";
	}
	
}
//검색했을때
else if(isset($bookname_s)){
		while(list($booklistnum, $name, $writer, $publisher)=mysqli_fetch_row($result)){
			//도서명으로 검색
			if($selectnum==0 && preg_match("/".$bookname_s."/i",$name)){
				echo "<script>";
				echo "$('.booklist_entire table').append('<tr><td>$booklistnum</td><td>$name&nbsp;\[$publisher\]</td><td>$writer</td><td></td></tr>')";
				echo "</script>";
				$check_find=true;
			}
			else if($selectnum==1 && preg_match("/".$bookname_s."/i",$booklistnum)){
				echo "<script>";
				echo "$('.booklist_entire table').append('<tr><td>$booklistnum</td><td>$name&nbsp;\[$publisher\]</td><td>$writer</td><td></td></tr>')";
				echo "</script>";
				$check_find=true;
			}
			else if($selectnum==2 && preg_match("/".$bookname_s."/i",$writer)){
				echo "<script>";
				echo "$('.booklist_entire table').append('<tr><td>$booklistnum</td><td>$name&nbsp;\[$publisher\]</td><td>$writer</td><td></td></tr>')";
				echo "</script>";
				$check_find=true;
			}
			else if($selectnum==3 && preg_match("/".$bookname_s."/i",$publisher)){
				echo "<script>";
				echo "$('.booklist_entire table').append('<tr><td>$booklistnum</td><td>$name&nbsp;\[$publisher\]</td><td>$writer</td><td></td></tr>')";
				echo "</script>";
				$check_find=true;
			}
			else if($select_search=='all' && preg_match("/".$search_book."/i",$publisher)||
                    $select_search=='all' && preg_match("/".$search_book."/i",$writer)||
                    $select_search=='all' && preg_match("/".$search_book."/i",$listnum)||
                    $select_search=='all' && preg_match("/".$search_book."/i",$name)){
				echo "<script>";
				echo "$('.booklist_entire table').append('<tr><td>$booklistnum</td><td>$name&nbsp;\[$publisher\]</td><td>$writer</td><td></td></tr>')";
				echo "</script>";
				$check_find=true;
			}
			//전체보기 버튼
			echo "<script>";
			echo "$('.show_entire_btn').css('display','inline-block')";
			echo "</script>";
		}
		if($check_find==false){
			echo "<script>";
            echo "$('.notfind_alarm').css('display','inline-block');";
            echo "</script>";
		}
}
 $check_borrow_sql = "SELECT * FROM borrow_book";
 $check_borrow_result=mysqli_query($conn,$check_borrow_sql);
 while($check_borrow_row = mysqli_fetch_assoc($check_borrow_result)){
      if($listnum == $check_borrow_row['book_num']){
         $borrow_check=1;
         echo "<script>";
         echo "$('.booklist_table').find('.borrow_check:nth-child('+$listnum+')').html('대여중')";
         echo "</script>";
         break;
      }else{
         $borrow_check=0;
      }
 }
?>
</body>
</html>
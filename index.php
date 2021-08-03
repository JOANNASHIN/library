<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<script>
		var mobileKeyWords = new Array('iPhone','iPod','BlackBerry','Android','Windows CE', 'LG', 'MOT', 'SAMSUNG', 'SonyEricsson');
		var m_ok = "no";
		for(var word in mobileKeyWords){
			if(navigator.userAgent.match(mobileKeyWords[word]) != null){
				m_ok = "ok";
				if(screen.width<1366){
					location.href= "./mobile/index.html";
				}
				break;
			}
		}
		if(m_ok=="no"){
			location.href="./pc/index.php"
		}
	</script>
</body>
</html>

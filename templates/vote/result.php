<?php
        include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';	
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1182, initial-scale=1">
    <title>컴퓨터정보통신공학과</title>
    <link rel="stylesheet" type="text/css" href="/home/assets/css/default.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/contact.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/result.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/polls.css">
</head>
<body>
<!-- End Of Footer -->
<?php Header::render();?>
<!-- START Content-->
<div class="main-container">
    <div class="vote_check">
    	<form action='./resulting.php' method='POST' name='write' id="write" enctype="multipart/form-data">
    		<p>코드를 입력하세요</p>
    		<input type="text" name='votecode' value="" style="width:100;"size='20'>
    		<button name="checkbtn" onclick='write_ok()'>다음</button>
    	</form>
    </div>
</div>

<!-- End Of Content -->

<!-- START Footer-->
<div class="footer">
    <div class="content">
        <div class="bar"></div>
        <div class="logo"></div>
        <div class="menu">
            <div class="top">
                <ul>
                    <li><a href="">ABEEK</a></li>
                    <li><a href="">대학원</a></li>
                    <li><a href="">커뮤니티</a></li>
                    <li><a href="">구성원</a></li>
                    <li><a href="">교과과정</a></li>
                    <li><a href="">학과소개</a></li>
                </ul>
            </div>
            <div class="bottom">
                <ul>
                    <li><a href="">개인정보취급방침</a></li>
                    <li><a href="">이용약관</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="/home/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="/home/assets/js/header.js"></script>
<script type="text/javascript" src="http://openapi.map.naver.com/openapi/naverMap.naver?ver=2.0&key=756db721b31636565a3f43ae98ffbb46"></script>
<script src="/home/assets/js/contact.js"></script>
<!-- End Of Footer-->

<script>
function write_ok(){
	if(write.votecode.value ==""){
		alert("코드를 입력하세요");
		write.votecode.focus();
		return false;
	}else{
		document.write.submit();
	}
}

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66909995-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>

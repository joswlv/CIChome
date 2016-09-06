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
 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
<!-- End Of Footer -->
<?php Header::render();?>
<!-- START Content-->
<div class="main-container">
    <div class="map-content">
	   <table border="0" cellpadding="0" cellspacing="0" class="map-table">
	        <tr style="height:50px;">
	            <td>
	                <div class="contact-item">
	                    <div class="title">Contact</div>
	              <div class="bar"></div>		
	                </div>
	            </td>
	        </tr>
	       <tr style="height:350px;">
	           <td>
			<div id="map" >
			<iframe src="https://www.google.com/maps/place/36%C2%B037'17.0%22N+127%C2%B017'10.8%22E/@36.6212322,127.2851293,17.25z/data=!4m5!3m4!1s0x0:0x0!8m2!3d36.621386!4d127.286347?hl=en-US"width="600"height="400"></iframe> <!-- googleMapAPI-->
			</div>
		  </td>
	       </tr>
	   </table>
    </div>
    <div class="contact-content">
	   <table border="0" cellpadding="10" cellspacing="0" class="contact-table">
        <tr style="height:40px;">
            <td><span class="contact-title">Address</span><br><span>&nbsp;</span></td>
            <td><span class="kor-address">세종특별자치시 조치원읍 세종로 2639(신안리300) 홍익대학교 D407</span><br><span class="eng-address">D407, Hongik University, 2639 Sejong-ro(300 Sinan-ri), Jochiwon-eup, Sejong Special Self-Governing City, Republic of Korea</span></td>
        </tr>
        <tr style="height:40px;">
            <td><span class="contact-title">Zip Code</span></td>
            <td><span class="kor-address">30016</span></td>
        </tr>
        <tr style="height:40px;">
            <td><span class="contact-title">Fax</span></td>
            <td><span class="kor-address">(044) 865-0460</span></td>
        </tr>
        <tr style="height:40px;">
            <td><span class="contact-title">Tel</span></td>
            <td><span class="kor-address">(044) 860-2392</span></td>
        </tr>
        <tr style="height:40px;">
            <td><span class="contact-title">Home Admin</span></td>
            <td><span class="kor-address">com01@hongik.ac.kr</span></td>
        </tr>
	   </table>
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
           
        </div>
    </div>
</div>

<script src="/home/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="/home/assets/js/header.js"></script>

<script src="/home/assets/js/contact.js"></script>
<!-- End Of Footer-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-66909995-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>

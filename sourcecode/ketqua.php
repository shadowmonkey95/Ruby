<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kết quả</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#wrapper {	
	 width:950px;
	 height:auto;
	 padding: 13px;
     margin-top:50px;
     margin-bottom: 50px;
	 margin-right:auto;
	 margin-left:auto;
	 background-color:#fff;	
}
</style>
</head>
<body>
<script type="text/javascript">
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
</script>
<div class="header-wrapper">
  <div class="header">
    <div class="logo">
      <h1>Kết quả</h1>
    </div>
    <!---logo ends here -->
    <div class="menu">
      <ul>
        <li><a href="index.html">Trang chủ</a>me</li>
        <li><a href="nhanvat.html">Nhân vật</a></li>
        <li><a href="sukien.html">Sự kiện</a></li>
        <li><a class="active" href="trochoi.html">Trò chơi</a></li>
        <li><a href="thongtin.html">Thông tin</a></li>
      </ul>
    </div>
    <!--- menu ends here -->
  </div>
  <!---headerends here -->
</div>
<!---header-wrapper-ends here -->
<div class="clear"></div>
<div id="wrapper">
<br />
<br />

<?php

    $fid = $_GET['id'];
    $a=substr($_SERVER[REQUEST_URI],-1,1);
    
if ($a == 1){
	$answer1 = $_POST['answerOne'];
	$answer2 = $_POST['answerTwo'];
	$answer3 = $_POST['answerThree'];
    $answer4 = $_POST['answerFour'];
	$answer5 = $_POST['answerFive'];
	$answer6 = $_POST['answerSix'];
    $answer7 = $_POST['answerSeven'];
	$answer8 = $_POST['answerEight'];
	$answer9 = $_POST['answerNine'];
    $answer10= $_POST['answerTen'];
	$score = 0;
	
	if ($answer1 == "B"){$score++;}
	if ($answer2 == "B"){$score++;}
	if ($answer3 == "D"){$score++;}
	if ($answer4 == "D"){$score++;}
	if ($answer5 == "B"){$score++;}
	if ($answer6 == "C"){$score++;}
	if ($answer7 == "B"){$score++;}
	if ($answer8 == "B"){$score++;}
	if ($answer9 == "C"){$score++;}
    if ($answer10 == "D"){$score++;}
	echo "<center><size='16'>Số câu trả lời đúng: <br> $score/10</font></center>";   
}

if ($a == 2){
	$answer1 = $_POST['answerOne'];
	$answer2 = $_POST['answerTwo'];
	$answer3 = $_POST['answerThree'];
    $answer4 = $_POST['answerFour'];
	$answer5 = $_POST['answerFive'];
	$answer6 = $_POST['answerSix'];
    $answer7 = $_POST['answerSeven'];
	$answer8 = $_POST['answerEight'];
	$answer9 = $_POST['answerNine'];
    $answer10= $_POST['answerTen'];
	$score = 0;
	
	if ($answer1 == "D"){$score++;}
	if ($answer2 == "C"){$score++;}
	if ($answer3 == "C"){$score++;}
	if ($answer4 == "C"){$score++;}
	if ($answer5 == "C"){$score++;}
	if ($answer6 == "D"){$score++;}
	if ($answer7 == "B"){$score++;}
	if ($answer8 == "A"){$score++;}
	if ($answer9 == "D"){$score++;}
    if ($answer10 == "C"){$score++;}
	echo "<center><size='16'>Số câu trả lời đúng: <br> $score/10</font></center>";   
}		

if ($a == 3){
	$answer1 = $_POST['answerOne'];
	$answer2 = $_POST['answerTwo'];
	$answer3 = $_POST['answerThree'];
    $answer4 = $_POST['answerFour'];
	$answer5 = $_POST['answerFive'];
	$answer6 = $_POST['answerSix'];
    $answer7 = $_POST['answerSeven'];
	$answer8 = $_POST['answerEight'];
	$answer9 = $_POST['answerNine'];
    $answer10= $_POST['answerTen'];
	$score = 0;
	
	if ($answer1 == "C"){$score++;}
	if ($answer2 == "D"){$score++;}
	if ($answer3 == "C"){$score++;}
	if ($answer4 == "D"){$score++;}
	if ($answer5 == "A"){$score++;}
	if ($answer6 == "B"){$score++;}
	if ($answer7 == "B"){$score++;}
	if ($answer8 == "B"){$score++;}
	if ($answer9 == "C"){$score++;}
    if ($answer10 == "C"){$score++;}
	echo "<center><size='16'>Số câu trả lời đúng: <br> $score/10</font></center>";   
}	
?>
<br />
<p align=center style="font-size: 150%;">Xem đáp án</p><br />
<center><a onclick="toggle_visibility('1');"><input type="button" value="Ðề số 1" /></a></center>
<div id="1" style="display: none;" ><center>Câu 1:B&nbsp&nbsp Câu 2:B&nbsp&nbsp Câu 3:D&nbsp&nbsp Câu 4:D&nbsp&nbsp Câu 5:B&nbsp&nbsp Câu 6:C&nbsp&nbsp Câu 7:B&nbsp&nbsp Câu 8:B&nbsp&nbsp Câu 9:C&nbsp&nbsp Câu 10:D&nbsp&nbsp</center></div>
<center><a onclick="toggle_visibility('2');"><input type="button" value="Ðề số 2" /></a></center>
<div id="2" style="display: none;" ><center>Câu 1:D&nbsp&nbsp Câu 2:C&nbsp&nbsp Câu 3:C&nbsp&nbsp Câu 4:C&nbsp&nbsp Câu 5:C&nbsp&nbsp Câu 6:D&nbsp&nbsp Câu 7:B&nbsp&nbsp Câu 8:A&nbsp&nbsp Câu 9:D&nbsp&nbsp Câu 10:C&nbsp&nbsp</center></div>
<center><a onclick="toggle_visibility('3');"><input type="button" value="Ðề số 3" /></a></center>
<div id="3" style="display: none;" ><center>Câu 1:C&nbsp&nbsp Câu 2:D&nbsp&nbsp Câu 3:C&nbsp&nbsp Câu 4:D&nbsp&nbsp Câu 5:A&nbsp&nbsp Câu 6:B&nbsp&nbsp Câu 7:B&nbsp&nbsp Câu 8:B&nbsp&nbsp Câu 9:C&nbsp&nbsp Câu 10:C&nbsp&nbsp</center></div>
<br /><br /><br /><br /><br /><br /><br /><br />
</div>
<!--- end of wrapper div --->
<div class="clear"></div>

<div class="footer-wrapper">
  <div class="footer">
    
        <center><p style="color: yellow;">Copyright (c) lichsuvietnam 2016 . All rights reserved.<br /> 
        Phạm Quỳnh Châu Giang - Lớp 7E, Trường THCS Dịch Vọng, quận Cầu Giấy, Hà Nội<br />
        Email: lichsuvietnam@gmail.com - Tel: 04 38336674<br />
        Last edited: 2:19PM Jan 10, 2016<br />
        </p></center>

     
  
         
    
      
  </div>
</div>
<!---footer-wrapper ends here-->
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trò chơi</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="header-wrapper">
  <div class="header">
    <div class="logo">
      <h1>Trò chơi</h1>
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
<style type='text/css'>
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

<?php
    $a=substr($_SERVER[REQUEST_URI],-1,1);
?>

<div id='wrapper'>

<center><p style="font-size:150% ;">Đề số <?php echo $a ?><p></center>
<center><img src="images/thinking.gif" /></center>
<br />
<br />
<br /><br />

<?php

if ($a == 1){
	
	echo "
<form action='ketqua.php?id=1' method='post' id='quizForm' id='1'>


	
    
   
    	
        <h3>Câu 1: Mục đích khai thác thuộc địa lần thứ hai của Pháp ở Việt Nam là gì?</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>A) Bù vào những thiệt hại trong cuộc khai thác lần thứ nhất.</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>B) Để bù đắp những thiệt hại do Chiến tranh thế giới lần thứ nhất gây ra.</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>C) Để thúc đẩy sự phát triển kinh tế – xã hội ở Việt Nam.</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='D' />
        <label for='answerOneD'>D) Để tăng cường sức mạnh về kinh tế của Pháp đối với các nước tư bản chủ nghĩa.</label>
        </div>
        
        
     
        
        <h3>Câu 2: Trong cuộc khai thác thuộc địa lần thứ hai, thực dân Pháp đầu tư vốn nhiều nhất vào các ngành nào?</h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A) Công nghiệp chế biến. </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>B) Nông nghiệp và khai thác mỏ.</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>C) Nông nghiệp và thương nghiệp.</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='D' />
        <label for='answerTwoD'>D) Giao thông vận tải.</label>
        </div>
      
        
         
        <h3>Câu 3: Vì sao tư bản Pháp chú trọng đến việc khai thác mỏ than ở Việt Nam?</h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A)Việt Nam có trữ lượng than lớn. </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>B) Than là nguyên liệu chủ yếu phục vụ cho công nghiệp chính quốc.</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>C)Để phục vụ cho nhu cầu công nghiệp chính quốc.</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='D' />
        <label for='answerThreeD'>D)Tất cả cùng đúng.</label>
        </div>
        
        
        
        <h3>Câu 4: Vì sao trong quá trình khai thác thuộc địa lần thứ hai, tư bản Pháp hạn chế phát triển công nghiệp nặng ở Việt Nam?</h3>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='A' />
        <label for='answerFourA'>A)Cột chặt nền kinh tế Việt Nam lệ thuộc vào kinh tế Pháp. </label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='B' />
        <label for='answerFourB'>B) Biến Việt Nam thành thị trường tiêu thụ hàng hóa do nền công nghiệp Pháp sản xuất.</label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='C' />
        <label for='answerFourC'>C)Biến Việt Nam thành căn cứ quân sự và chính trị của Pháp.</label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='D' />
        <label for='answerFourD'>D)Câu A và B đều đúng.</label>
        </div>
        
        
        
        
        <h3>Câu 5: Các giai cấp nào mới ra đời do hậu quả của cuộc khai thác thuộc địa lần thứ hai của Pháp ở Việt Nam?</h3>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='A' />
        <label for='answerFiveA'>A)Công nhân, nông dân, tư sản dân tộc. </label>
        </div>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='B' />
        <label for='answerFiveB'>B) Công nhân, tiểu tư sản, tư sản dân tộc.</label>
        </div>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='C' />
        <label for='answerFiveC'>C)Công nhân, tư sản dân tộc, địa chủ phong kiến.</label>
        </div>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='D' />
        <label for='answerFiveD'>D)Công nhân, nông dân, tư sản dân tộc, tiểu tư sản, địa chủ phong kiến.</label>
        </div>
        
        
        
        <h3>Câu 6: Sau chiến tranh thế giới lần thứ nhất, ở Việt Nam ngoài thực dân Pháp, còn có giai cấp nào trở thành đối tượng của cách mạng Việt Nam?</h3>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='A' />
        <label for='answerSixA'>A)Giai cấp nông dân. </label>
        </div>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='B' />
        <label for='answerSixB'>B) Giai cấp công nhân.</label>
        </div>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='C' />
        <label for='answerSixC'>C)Giai cấp đại địa chủ phong kiến.</label>
        </div>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='D' />
        <label for='answerSixD'>D)Giai cấp tư sản, dân tộc.</label>
        </div>
        
        
        
        
        <h3>Câu 7: Dưới ách thống trị của thực dân Pháp, thái độ chính trị của giai cấp tư sản dân tộc Việt Nam như thế nào?</h3>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='A' />
        <label for='answerSevenA'>A)Có thái độ kiên định với Pháp. </label>
        </div>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='B' />
        <label for='answerSevenB'>B) Có thái độ không kiên định, dễ thoải hiệp, cải lương khi đế quốc mạnh.</label>
        </div>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='C' />
        <label for='answerSevenC'>C)Có tinh thần đấu tranh cách mạng triệt để trong sự nghiệp giải phóng dân tộc.</label>
        </div>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='D' />
        <label for='answerSevenD'>D)Tất cả các câu trên đều đúng.</label>
        </div>
        
        
        
        
        <h3>Câu 8: Lực lượng nào hăng hái và đông đảo nhất của cách mạng Việt Nam sau chiến tranh thế giới thứ nhất?</h3>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='A' />
        <label for='answerEightA'>A)Công nhân. </label>
        </div>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='B' />
        <label for='answerEightB'>B) Nông dân.</label>
        </div>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='C' />
        <label for='answerEightC'>C)Tiểu tư sản.</label>
        </div>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='D' />
        <label for='answerEightD'>D)Tư sản dân tộc.</label>
        </div>
        
        
        
        
        
        <h3>Câu 9: Những tổ chức chính trị như: Việt Nam Nghĩa đoàn, Hội Phục Việt, Hội Hưng Nam, Đảng Thanh Niên là tiền thân của tổ chức nào?</h3>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='A' />
        <label for='answerNineA'>A)Hội Việt Nam cách mạng thanh niên. </label>
        </div>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='B' />
        <label for='answerNineB'>B) Việt Nam quốc dân đảng.</label>
        </div>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='C' />
        <label for='answerNineC'>C)Tân Việt cách mạng đảng.</label>
        </div>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='D' />
        <label for='answerNineD'>D)Đông Dương Cộng sản đảng.</label>
        </div>
        
        
        
        
        <h3>Câu 10: Những tờ báo tiến bộ của tầng lớp tiểu tư sản trí thức xuất bản trong phong trào yêu nước dân chủ công khai (1919-1926)?</h3>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='A' />
        <label for='answerTenA'>A)“Chuông rè”, “An Nam trẻ”, “Nhành lúa”... </label>
        </div>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='B' />
        <label for='answerTenB'>B) “Tin tức”, “Thời mới”, “Tiếng dân” ...</label>
        </div>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='C' />
        <label for='answerTenC'>C)“Chuông rè”, “Tin tức”, “Nhành lúa”, ...</label>
        </div>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='D' />
        <label for='answerTenD'>D)“Chuông rè”, “An Nam trẻ”, “Người nhà quê” ...</label>
        </div>
        
    
     <div align=\"center\"><input type='submit' value='Hoàn Thành' /></div>
</form>";

}

if ($a == 2){
	
	echo "

<form action='ketqua.php?id=2' method='post' id='quizForm' id='1'>


	
    
   
    	
        <h3>Câu 1: Trần Dân Tiên viết: “việc đó tuy nhỏ nhưng nó báo hiệu bắt đầu thời đại đấu tranh dân tộc như chim én nhỏ báo hiệu mùa xuân”. Sự kiện nào sau đây phản ánh điều đó?</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>A) Cuộc bãi công của công nhân Ba Son.</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>B) Cuộc đấu tranh đòi nhà cầm quyền Pháp thả Phan Bội Châu (1925).	</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>C) Phong trào để tang Phan Châu Trinh (1926)</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='D' />
        <label for='answerOneD'>D) Tiếng bom Phạm Hồng Thái tại Sa Diện- Quảng Châu (6/1924)</label>
        </div>
        
        
     
        
        <h3>Câu 2: Trong những nguyên nhân sau đây, nguyên nhân nào là nguyên nhân chủ quan làm cho phong trào yêu nước dân chủ công khai (1919-1926) cuối cùng bị thất bại?</h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A) Hệ tư tưởng dân chủ tư sản đã trở nên lỗi thời, lạc hậu. </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>B) Thực dân Pháp còn mạnh, đủ khả năng đàn áp phong trào.</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>C) Giai cấp tư sản dân tộc do yếu kém về kinh tế nên ươn hèn về chính trị; tầng lớp tiểu tư sản do điều kiện kinh tế bấp bênh nên không thể lãnh đạo phong trào cách mạng.</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='D' />
        <label for='answerTwoD'>D) Do chủ nghĩa Mác – Lê nin chưa được truyền bá sâu rộng vào Việt Nam.</label>
        </div>
      
        
         
        <h3>Câu 3:  Nhà thơ Chế Lan Viên viết: “Phút khóc đầu tiên là phút Bác Hồ cười”. Câu thơ đó nói lên điều gì?</h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A)Bác Hồ ra đi tìm đường cứu nước. </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>B) Bác Hồ đọc tuyên ngôn độc lập.</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>C)Bác Hồ đọc sơ thảo luận cương của Lênin</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='D' />
        <label for='answerThreeD'>D)Bác Hồ đưa yêu sách đến Hội nghị Vecxai.</label>
        </div>
        
        
        
        <h3>Câu 4: Sự kiện nào đánh dấu giai cấp công nhân Việt Nam đi vào đấu tranh tự giác?</h3>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='A' />
        <label for='answerFourA'>A)Cuộc bãi công của công nhân thợ nhuộm Chợ Lớn (1922) </label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='B' />
        <label for='answerFourB'>B) Cuộc tổng bãi công của công nhân Bắc Kỳ (1922)</label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='C' />
        <label for='answerFourC'>C)Bãi công của thợ máy xưởng Ba Son cảng Sài Gòn ngăn cản tàu chiến Pháp đi đàn áp cách mạng ở Trung Quốc (8/1925)</label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='D' />
        <label for='answerFourD'>D)Cuộc bãi công của 1000 công nhân nhà máy sợi Nam Định.</label>
        </div>
        
        
        
        
        <h3>Câu 5: Sự kiện nào đÁnh dấu Nguyễn Ái Quốc bước đầu tìm thấy con đường cứu nước đúng đắn</h3>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='A' />
        <label for='answerFiveA'>A)Nguyễn Ái Quốc đưa yêu sÁch đến Hội nghị vecxai (18/6/1919) </label>
        </div>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='B' />
        <label for='answerFiveB'>B) Nguyễn Ái Quốc tham gia sÁng lập Đảng Cộng sản PhÁp (12/1920)</label>
        </div>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='C' />
        <label for='answerFiveC'>C)Nguyễn Ái Quốc đọc sơ thảo luận cương của Lênin về vấn đề dân tộc và thuộc địa (7/1920)</label>
        </div>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='D' />
        <label for='answerFiveD'>D)Nguyễn Ái Quốc thành lập tổ chức Hội Việt Nam cÁch mạng thanh niên(6/1925)</label>
        </div>
        
        
        
        <h3>Câu 6: Vào thời gian nào, Nguyễn ái Quốc rời Pari đi Liên Xô, đất nước mà từ lâu Người mơ ước đặt chân tới?</h3>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='A' />
        <label for='answerSixA'>A)Tháng 6/1924 </label>
        </div>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='B' />
        <label for='answerSixB'>B) Tháng 6/1922</label>
        </div>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='C' />
        <label for='answerSixC'>C)Tháng 12/1923</label>
        </div>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='D' />
        <label for='answerSixD'>D)Tháng 6/1923</label>
        </div>
        
        
        
        
        <h3>Câu 7: Sự kiện ngày 17/6/1924 gắn với hoạt động nào của Nguyễn ái Quốc ở Liên Xô, đó là?</h3>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='A' />
        <label for='answerSevenA'>A)Người dự đại hội Nông dân quốc tế. </label>
        </div>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='B' />
        <label for='answerSevenB'>B) Người dự đại hội lần thứ V của quốc tế cộng sản.</label>
        </div>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='C' />
        <label for='answerSevenC'>C)Người dự đại hội quốc tế phụ nữ.</label>
        </div>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='D' />
        <label for='answerSevenD'>D)Người dự đại hội quốc tế VII của quốc tế cộng sản.</label>
        </div>
        
        
        
        
        <h3>Câu 8: Tác dụng trong quá trình hoạt động của Nguyễn ái Quốc từ năm 1919 đến 1925 là gì?</h3>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='A' />
        <label for='answerEightA'>A)Quá trình chuẩn bị về tư tưởng chính trị và tổ chức cho sự thành lập Đảng Cộng sản Việt Nam 3/2/1930 </label>
        </div>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='B' />
        <label for='answerEightB'>B) Quá trình truyền bá chủ nghĩa Mác – Lênin vào Việt Nam.</label>
        </div>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='C' />
        <label for='answerEightC'>C)Quá trình thành lập ba tổ chức Cộng sản ở Việt Nam.</label>
        </div>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='D' />
        <label for='answerEightD'>D)Quá trình thực hiện chủ trương “Vô sản hóa” để truyền bá chủ nghĩa Mác – Lênin vào Việt Nam.</label>
        </div>
        
        
        
        
        
        <h3>Câu 9: Hội Việt Nam cách mạng thanh niên được thành lập vào thời gian nào? ở đâu?</h3>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='A' />
        <label for='answerNineA'>A)Tháng 5/1925 ở Quảng Châu (Trung Quốc). </label>
        </div>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='B' />
        <label for='answerNineB'>B) Tháng 6/1925 ở Hương Cảng (Trung Quốc).</label>
        </div>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='C' />
        <label for='answerNineC'>C)Tháng 7/1925 ở Quảng Châu (Trung Quốc).</label>
        </div>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='D' />
        <label for='answerNineD'>D)Tháng 6/1925 ở Quảng Châu (Trung Quốc).</label>
        </div>
        
        
        
        
        <h3>Câu 10:  Ba tư tưởng sau đây được trình bày trong tác phẩm nào của Nguyễn Ái Quốc: Cách mạng là sự nghiệp của quần chúng, Cách mạng phi do Đảng theo chủ nghĩa Mác – Lênin lãnh đạo, Cách mạng Việt Nam phi gắn bó và đoàn kết với cách mạng thế giới?</h3>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='A' />
        <label for='answerTenA'>A)Tạp chí Thư tín Quốc tế. </label>
        </div>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='B' />
        <label for='answerTenB'>B) “Bản án chế độ thực dân Pháp”</label>
        </div>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='C' />
        <label for='answerTenC'>C)“Đường cách mệnh”</label>
        </div>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='D' />
        <label for='answerTenD'>D)Tất cả cùng đúng.</label>
        </div>
        
    
     <div align=\"center\"><input type='submit' value='Hoàn Thành' /></div>
</form>";
}


if ($a == 3){
	
	echo "
    
<form action='ketqua.php?id=3' method='post' id='quizForm' id='1'>


	
        <h3>Câu 1: Hãy nêu rõ thành phần và địa bàn hoạt động của Tân Việt cách mạng đảng?</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>A) Công nhân và nông dân, hoạt động ở Trung Kì.</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>B) Tư sản dân tộc, công nhân, hoạt động ở Bắc Kì.	</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>C) Trí thức trẻ và thanh niên tiểu tư sản, hoạt động ở Trung Kì.</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='D' />
        <label for='answerOneD'>D) Tất cả các giai cấp và tầng lớp, hoạt động ở Nam Kì.</label>
        </div>
        
        
     
        
        <h3>Câu 2: Tân Việt cách mạng đảng đã phân hóa như thế nào dưới tác động của Hội Việt Nam cách mạng thanh niên?</h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A) Một số đảng viên tiên tiến chuyển sang Hội Việt Nam cách mạng thanh niên. </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>B) Một số tiên tiến còn lại tích cực chuẩn bị tiến tới thành lập một chính đảng kiểu mới theo chủ nghĩa Mác – Lênin.</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>C) Một số gia nhập vào Việt Nam quốc dân đảng.</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='D' />
        <label for='answerTwoD'>D) Câu A và B đều đúng.</label>
        </div>
      
        
         
        <h3>Câu 3: Mục tiêu của Việt Nam quốc dân đảng là gì?</h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A)Đánh đuổi thực dân Pháp, xóa bỏ ngôi vua. </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>B) Đánh đuổi thực dân Pháp, thiết lập dân quyền.</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>C)Đánh đuổi giặc Pháp, đánh đổ ngôi vua, thiết lập dân quyền.</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='D' />
        <label for='answerThreeD'>D)Đánh đổ ngôi vua, đánh đuổi giặc Pháp, lập nên nước Việt Nam độc lập.</label>
        </div>
        
        
        
        <h3>Câu 4: Cuộc khởi nghĩa của Việt Nam quốc dân đảng nổ ra đêm 9/2/1930 ở Yên Bái, sau đó nổ ra ở các tỉnh nào?</h3>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='A' />
        <label for='answerFourA'>A)Phú Thọ, Hải Dương, Hà Tĩnh. </label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='B' />
        <label for='answerFourB'>B) Hòa Bình, Lai Châu, Sơn La.</label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='C' />
        <label for='answerFourC'>C)Vĩnh Yên, Phúc Yên, Yên Thế.</label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='D' />
        <label for='answerFourD'>D)Phú Thọ, Hải Dương, Thái Bình.</label>
        </div>
        
        
        
        
        <h3>Câu 5: Quá trình phân hóa của Hội Việt Nam cách mạng thanh niên đã dẫn đến sự thành lập các tổ chức cộng sản nào trong năm 1929?</h3>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='A' />
        <label for='answerFiveA'>A)Đông Dương cộng sản đảng, An Nam cộng sản đảng. </label>
        </div>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='B' />
        <label for='answerFiveB'>B) Đông Dương cộng sản đảng, An Nam cộng sản đảng và Đông Dương cộng sản liên đoàn.</label>
        </div>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='C' />
        <label for='answerFiveC'>C)Đông Dương cộng sản đảng, Đông dương cộng sản liên đoàn.</label>
        </div>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='D' />
        <label for='answerFiveD'>D)Tất cả đều sai.</label>
        </div>
        
        
        
        <h3>Câu 6: Báo “Búa liềm” là cơ quan ngôn luận của tổ chức cộng sản nào được thành lập năm 1929 ở Việt Nam?</h3>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='A' />
        <label for='answerSixA'>A)Đông Dương cộng sản liên đoàn. </label>
        </div>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='B' />
        <label for='answerSixB'>B) Đông Dương cộng sản đảng.</label>
        </div>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='C' />
        <label for='answerSixC'>C)An Nam cộng sản đảng.</label>
        </div>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='D' />
        <label for='answerSixD'>D)Đông Dương cộng sản đảng và An Nam cộng sản đảng.</label>
        </div>
        
        
        
        
        <h3>Câu 7: Tổ chức Việt Nam quốc dân đảng chịu ảnh hưởng sâu sắc của hệ tư tưởng nào?</h3>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='A' />
        <label for='answerSevenA'>A)Tư tưởng của chủ nghĩa Mác – Lênin. </label>
        </div>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='B' />
        <label for='answerSevenB'>B) Tư tưởng Tam dân của Tôn Trung Sơn.</label>
        </div>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='C' />
        <label for='answerSevenC'>C)Tư tưởng dân chủ tư sản của đảng Quốc Đại ở ấn Độ.</label>
        </div>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='D' />
        <label for='answerSevenD'>D)Tư tưởng của cách Minh Trị ở Nhật Bản.</label>
        </div>
        
        
        
        
        <h3>Câu 8:  Những người đúng ra thành lập Việt Nam quốc dân đảng là ai?</h3>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='A' />
        <label for='answerEightA'>A)Nguyễn Thái Học, Phạm Tuấn Tài, Nguyễn Khác Nhu, Tôn Trung Sơn. </label>
        </div>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='B' />
        <label for='answerEightB'>B) Nguyễn Thái Học, Phạm Tuấn Tài, Nguyễn Khắc Nhu, Phó Đức Chính.</label>
        </div>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='C' />
        <label for='answerEightC'>C)Nguyễn Thái Học, Phạm Tuấn Tài, Nguyễn Khắc Nhu, Nguyễn Phan Long.</label>
        </div>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='D' />
        <label for='answerEightD'>D)Nguyễn Thái Học, Nguyễn Phan Long, Bùi Quang Chiêu, Phó Đức Chính.</label>
        </div>
        
        
        
        
        
        <h3>Câu 9:  Đảng Cộng sản Việt Nam ra đời là sự kết hợp các yếu tố nào?</h3>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='A' />
        <label for='answerNineA'>A)Chủ nghĩa Mác – Lênin với phong trào công nhân </label>
        </div>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='B' />
        <label for='answerNineB'>B) Chủ nghĩa Mác – Lênin với tư tưởng Hồ Chí Minh.</label>
        </div>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='C' />
        <label for='answerNineC'>C)Chủ nghĩa Mác – Lênin với phong trào công nhân và phong trào yêu nước.</label>
        </div>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='D' />
        <label for='answerNineD'>D)Chủ nghĩa Mác – Lênin với phong trào công nhân và phong trào tư sản yêu nước.</label>
        </div>
        
        
        
        
        <h3>Câu 10: Tại Hội nghị hợp nhất ba tổ chức cộng sản, không có sự tham gia của các tổ chức cộng sản nào?</h3>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='A' />
        <label for='answerTenA'>A)Đông Dương cộng sản đảng, An Nam cộng sản đảng. </label>
        </div>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='B' />
        <label for='answerTenB'>B) Đông Dương cộng sản đảng.</label>
        </div>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='C' />
        <label for='answerTenC'>C)Đông Dương cộng sản liên đoàn.</label>
        </div>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='D' />
        <label for='answerTenD'>D)An Nam cộng sản đảng.</label>
        </div>
        
    
     <div align=\"center\"><input type='submit' value='Hoàn Thành' /></div>
</form>";

}

?>
</div><!--- end of wrapper div --->
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
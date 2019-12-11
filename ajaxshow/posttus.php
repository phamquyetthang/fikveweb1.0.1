<?php
session_start();
require_once ("../controller/connect.php");

$ida=$_SESSION['drid'];

$mystatus=$_POST['realtus'];
$nameimg=$_POST['nameimg'];
$myimgtus="library/img/".$nameimg;

$addstatus="INSERT INTO `status`(`idacc`, `multitus`,`img`) 
            VALUES ('$ida','$mystatus','$myimgtus')";
$query=mysqli_query($connect, $addstatus);
if($query){
    echo('
    <div class="createtus" id="createtus" >
	<div class="headhs whead">
		<div class="avt posiavths"></div>
		<div id="nickname">
				<?php
				echo $mynick;
				?>
		</div>
		<button class="far fa-times cu-p icsip exit"></button>
	</div>
	<div class="mytus">
		<div id="mytus"></div>
		
	</div>
	<button class="fas fa-backspace cu-p icsip dele" onclick="clickDele(this)"></button>
	<div class="myimage" id="preview"><img id="output"/></div>
	<div class="customupanh">
		<span class="fakeicon">+</span>
		<p class="themanh">Thêm ảnh</p>
		<input type="file" name="upanh" id="upanh" class="upanh" accept="image/*" onchange="loadFile(event)">
	</div>
	<div class="libralytus">
		<div class="buttontus" onclick="clickButtontus(this)">
			Thiếu một nửa tôi đi tìm một nửa
		</div>
		<div class="buttontus" onclick="clickButtontus(this)">
			Em ngược đường ngược nắng để yêu anh
		</div>
		<div class="buttontus" onclick="clickButtontus(this)">.</br></div>
		<div class="buttontus" onclick="clickButtontus(this)">,</div>
		
		<div class="buttontus" onclick="clickButtontus(this)">
			Nước mắt đã rơi, trò chơi kết thúc
		</div>
		<div class="buttontus" onclick="clickButtontus(this)">
			Bên em nắng rồi bên anh thì vẫn mưa
		</div>
		<div class="buttontus" onclick="clickButtontus(this)">
			Không nói nhiều tuyển bạn trai
		</div>
		<div class="buttontus" onclick="clickButtontus(this)">
			Các vợ ơi
		</div>
		<div class="buttontus" onclick="clickButtontus(this)">
			Các chồng ơi
		</div>
		<div class="buttontus" onclick="clickButtontus(this)">
			Một là anh đang nói dối
		</div>
		<div class="buttontus" onclick="clickButtontus(this)">
			Hai là anh đang nói dối nhiều lần
		</div>
		<div class="buttontus" onclick="clickButtontus(this)">
			Đã bao lần tự nhủ
		</div>
		<div class="buttontus" onclick="clickButtontus(this)">
			Tình khờ hãy quên đi
		</div>
		<div class="buttontus" onclick="clickButtontus(this)">
			Mà bao kỷ niệm cũ
		</div>
		<div class="buttontus" onclick="clickButtontus(this)">
			Vẫn làm ướt hàng mi
		</div>
		
	</div>
	<button class="danganhlen cu-p" id="submytus">Đăng</button>
	
</div>
</div>
    ');
}
	else{
		echo("đéo được");
	}	
?>
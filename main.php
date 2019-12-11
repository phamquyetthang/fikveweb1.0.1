<?php
session_start();
if(empty($_SESSION['drid'])){
	header('Location: index.php');
}
?>
<?php
require_once ("controller/connect.php");
require_once ("model/loadinfo.php");
// require_once ("model/locgt.php");
?>
<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>FiKVe</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pattaya&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
	<link href="vendors/icon/css/all.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<link href="resources/style/styles.css" rel="stylesheet" type="text/css">
	<link href="resources/style/colors.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="resources/style/hstyle.css" type="text/css">

	<!-- <script src="../resources/script/hjavascript.js" type="text/javascript"></script> -->
    <!-- <script src="../resources/script/javascript.js" type="text/javascript"></script> -->
</head>

<body>
	
<!--header-->
	<header class="header">
		<div>
			<a class="cu-p">
				<img class="logo cu-p" src="resources/img/logo12.png" alt="logo">
				<form action="model/locgt.php" method="post" class="retoma">
				<input type="submit" name="allsex">
				</form>
			</a> 
		</div>
		<div id="title">Fikve</div>
		
		<div>
			<button onclick="openLit('othongbao')" class="fas fa-bell icsip cu-p news" title="Thông báo">
			</button>
		</div>
		
		<div class="moneys">
			<button onclick="openLit('omoney')" class="fas fa-heart-circle icsip cu-p" title="heart coin">
			</button>
			<span>
				<?php 
					echo $mymoney;
				?>
			</span>
		</div>
		
		<div>
		<button onclick="openLit('otuychon')" class="fas fa-align-justify icsip cu-p options" title="tùy chọn">
		</button>
		</div>
	</header>
	
<!--//////////-->
<!--	lề trái-->

	<div class="letrai">
		<button onclick="showMyinfo('myinfomation')" class="icsip cu-p yourinfo" title="Thông tin của bạn">
		<!-- fas fa-user-circle  -->
			<?php
				
				echo '<img src="'.$myavt.'" alt="avt của cậu đó">';
			?>
		</button>
		<button class="fas fa-comment-lines icsip cu-p message" onclick="openAny('mymess')" title="Tin nhắn"></button>
		<!-- <button class="far fa-user-friends icsip cu-p knews"></button> -->
		<button class="fal fa-chart-line icsip cu-p bxhcn" title="Theo dõi cá nhân" onclick="openAny('bxhcanhan')"></button>
		<button class="far fa-star icsip cu-p careful" title="Người bạn quan tâm" onclick="openAny('nguoiquantam')"></button>
		
		<!-- <label class="switch">
		<input type="checkbox">
		<span class="slider round"></span>
		</label>
		 -->
			
	</div>

<!--//////////-->
<!--content-->
<div id="manChanAll"></div>
<div class="content" id="content">
    

	<input onclick="openAny('createtus')" class="mycreats cu-p" type="button" value="Đăng bài của bạn">

	<div id="menuno1" >
		<ul class="tabmenu1">
			<li><a onclick="openTabs('tab1')" class=" cu-p icsip setcons">
			<!-- fas fa-street-view -->
					<div title="Tìm kiếm theo khu vực">Xung quanh</div>
				</a>
			</li>
			<li><a onclick="openTabs('tab2')" class="cu-p icsip setcons">
			<!-- fas fa-book-heart -->
					<div title="Những người bạn đã biết">Đã biết</div>
				</a>
			</li>
			<li><a onclick="openTabs('tab3')" class="cu-p icsip setcons">
			<!-- fas fa-analytics  -->
					<div title="Những bài viết xu hướng">Trend</div>
				</a>
			</li>
			
		</ul>
	</div>
	<!-- Bộ lọc giới tính -->
	<form action="model/locgt.php" method="post">
	<ul class="bolocgt">
		    <button class="fad fa-globe-asia cu-p icsip allsex">
				<input type="submit" class="sendsex cu-p" name="allsex">
			</button>
			<li><button class="fas fa-mars cu-p icsip sexisms2 posib"><input type="submit" class="sendsex cu-p" name="man"></button></li>
			<li><button class="far fa-venus cu-p icsip sexisms2 posig"><input type="submit" class="sendsex cu-p" name="girl"></button></li>
			<li><button class="lgbt icsip cu-p sexisms2 posil"><input type="submit" class="sendsex cu-p" name="lgbt"></button></li>
	</ul>
	</form>
	<!-- nội dung hiển thị -->
	<div id="tab1" class="tabcontents">
		<!-- <div class="hop2s">
			<div class="headh2s">
				<div class="avt posiavth2s"></div>
				<div id="nickname"></div>
				<div id="timeoftus"></div>
				<div id="khoangcach"></div>
				<button class="far fa-times cu-p icsip banthems"></button>
			</div>
			<div class="statush2s"></div>
			<div class="contenth2s">
				<button class="fal fa-info-circle cu-p report"></button>
			</div>
			<div class="endh2s">
					<button class="fad fa-heart cu-p icsip thatims"></button>
					<button class="fas fa-comment-alt-edit cu-p icsip binhluans"></button>
					<button class="fas fa-comment-plus cu-p icsip chonnhans"></button>
					<button class="fad fa-star cu-p icsip quantams"></button>
	
			</div>
		</div> -->
	</div>
	<div id="tab2" class="tabcontents" style="display: none;">
		<?php
			for ($i = 0; $i < 20; $i++){
				echo '<div class="hop1s">
				<div class="headhs">
					<div class="avt posiavths"></div>
					<div id="nickname"></div>
					<div id="timeoftus"></div>
					<div id="khoangcach"></div>
					<button class="far fa-times cu-p icsip banthems"></button>
				</div>
				<div class="statushs"></div>
				<div class="contenths  ">
					<button class="fal fa-info-circle cu-p report"></button>
				</div>
				<div class="endhs">
						<button class="fad fa-heart cu-p icsip thatims"></button>
						<button class="fas fa-comment-alt-edit cu-p icsip binhluans"></button>
						<button class="fas fa-comment-plus cu-p icsip chonnhans"></button>
						<button class="fad fa-star cu-p icsip quantams"></button>
		
				</div>
			</div>';
			}
		?>
	</div>

	<div id="tab3" class="tabcontents" style="display: none;">
	</div>


	
	
	
</div>

	
<!--//////////-->
	
<!--Lề phải-->

<div class="lephai">
	<div class="tabmenu2">
		<button onclick="openTabrank('tabrankboy')" class="fas fa-mars cu-p icsip sexisms"></button>
		<button onclick="openTabrank('tabrankgirl')" class="far fa-venus cu-p icsip sexisms"></button>
		<button onclick="openTabrank('tabranklgbt')" class="lgbt sexisms icsip cu-p"></button>

	</div>
	<div id="manche"></div>
	<div id="tabrankboy" class="rankdisplay scroll">
	</div>

	<div id="tabrankgirl" class="rankdisplay scroll" style="display: none;">
	</div>
	<div id="tabranklgbt" class="rankdisplay scroll"  style="display: none;">
	</div>
</div>
	

<!-- thong tin chinh minh -->
	<div class="myinfomation" id="myinfomation">
		<div class="infoleft">
			<div class="avttop">
				<div class="doiavt">
					<form action="" method="post">
						<input type="button" value="Thay đổi" name="btndoiavt" class="cu-p"></br>
						<input type="button" value="Xem ảnh" name="btnxemavt" class="cu-p">
					</form>
				</div>
				<?php					
					echo '<img src="'.$myavt.'" alt="avt của cậu đó">';
				?>
				
			</div>
			<div class="infobottom">
				<div id="myNameinfo" class="infochild1">
					<span>Tên:</span>
					<?php 						
						echo $myname;
					?>
				</div>
				<div id="nickNameinfo" class="infochild1">
					<span>Nick name:</span>
					<?php 						
						echo $mynick;
					?>
				</div>
				<div id="myage" class="infochild2">
					<span>Tuổi:</span>
					<?php						
						echo $myage;
					?>
				</div>
				<div id="mygender" class="infochild2">
					<span>Giới tính:</span>
					<?php 	
						if($mysex=='1'){
							echo 'Nam';
						}
						else if($mysex=='2'){
							echo 'Nữ';
						}
						else{
							echo 'Món quàn của tạo hóa';
						}
					?>
				</div>
				<div id="myslogan" class="infochild3">
					<span>Slogan:</span>
					<?php
						echo $myslo;
					?>
				</div>

				<div id="moreinfo" class="infochild3">
					<span>Nói thêm về bạn:</span>
					<?php
						echo $myin;
					?>
				</div>
			</div>
		</div>
		<div class="hisright">
			<div class="far fa-times cu-p icsip exit e1" onclick="exitButton()"></div>
			<div id="showmytus">
			</div>
		</div>
	</div>


	
<!-- form đăng bài -->
<div id="showornot">
<div class="createtus" id="createtus">
	<div class="headhs whead">
		<div class="avt posiavths"></div>
		<div id="nickname">
				<?php
				echo $mynick;
				?>
		</div>
		<button class="far fa-times cu-p icsip exit" id="closecreatus"></button>
	</div>
	<div class="mytus">
		<div id="mytus"></div>
	</div>
	
	<button class="fas fa-backspace cu-p icsip dele" onclick="clickDele(this)"></button>
	<div class="myimage" id="preview"><img id="output"/></div>
	<div class="customupanh">
		<span class="fakeicon">+</span>
		<p class="themanh">Thêm ảnh</p>
		<form method="post">
		<input type="hidden" name="status" id="realtus" value="">
		<input type="file" name="upanh" id="upanh" class="upanh" accept="image/*" onchange="loadFile(event)">
		</form>
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
</div>
<script>
	var loadFile = function(event) {
		var output = document.getElementById('output');
		output.src = URL.createObjectURL(event.target.files[0]);
	};
	document.getElementById("closecreatus").onclick=function(){
		document.getElementById("createtus").style.display="none";
		manche.setAttribute('class', '');
	};
</script>
<!-- tabs tin nhắn -->
<div class="mymess" id="mymess">
	<div class="leftmess">
		<div class="kindleft">
			<button class="kindcon" id="nguoila">Người lạ</button>
			<button class="kindcon" id="nguoiquen">Người quen</button>
		</div>
		<div class="listmess">
			<div class="eachmess"></div>
			<div class="eachmess"></div>
			<div class="eachmess"></div>
			<div class="eachmess"></div>
			<div class="eachmess"></div><div class="eachmess"></div>
			<div class="eachmess"></div>
			<div class="eachmess"></div>
			<div class="eachmess"></div>
			<div class="eachmess"></div>
			<div class="eachmess"></div>
		</div>
	</div>
	<div class="rightmess">
		<div class="headright">
			<div id="avtmess" class="avt"></div>
			<div id="money" class="fas fa-heart-circle icsip cu-p"></div>
			<button onclick="closeAny('mymess')" class="far fa-times cu-p icsip" id="exitmess"></button>
		</div>
		<div class="contentmess"></div>
		<div class="chucnangmess">
			<button id="askname" class="cu-p askinfo"></button>
			<button id="askphone" class="cu-p askinfo"></button>
			<button id="askpos" class="cu-p askinfo"></button>
			<button id="tangqua" class="cu-p askinfo"></button>
			<button id="morongcn" class="cu-p askinfo"></button>
		</div>
		<div class="nhaptinnhan">
			<input type="text" name="onhapmess" id="onhapmess" placeholder="Soạn tin nhắn">
			<button id="sendmess" class="fal fa-paper-plane cu-p icsip"></button>
		</div>
	</div>
</div>

<div id="othongbao">
abcsd
</div>
<!-- <div id="sukienhai">
	<button onclick="closeLit('othongbao','sukienhai')"></button>
	<button onclick="closeLit('omoney','sukienhai')"></button>
	<button onclick="closeLit('otuychon','sukienhai')"></button>
</div> -->
<div id="omoney">
	<button class="naptien">Nạp vào tài khoản</button>
</div>
<div id="otuychon">
	<form action="model/out.php" method="post">
	<input type="submit" value="Đăng xuất" name="logout" class="logout" >
	</form>
	<button class="caidat"><span>Cài Đặt</span></button>
</div>


<!-- Bảng xếp hạng cá nhân -->
<div id="bxhcanhan">
	<button class="far fa-times cu-p icsip exit" onclick="closeAny('bxhcanhan')"></button>
</div>


<!-- danh sach nguoi quan tam -->
<div id="nguoiquantam">
	<button class="far fa-times cu-p icsip exit" onclick="closeAny('nguoiquantam')"></button>
	<?php
		for($i = 0; $i< 200; $i++){
			echo '<div class="eachcare"></div>';
		}
	?>
</div>

<!-- tabs binh luan -->
<div class="commenttus" id="commenttus">
	<div class="headhs cmthead">
		<div class="avt posiavths"></div>
		<div id="nickname">Phúc Vinh</div>
		<div id="timeoftus"></div>
		<div id="khoangcach"></div>
		<button class="far fa-times cu-p icsip exit" onclick="closeAny('commenttus')"></button>
	</div>
	<!-- binh luan cua nguoi khac  -->
	<div class="blcosan">
		<div class="cmtcosan"></div>
		<div class="cmtcosan"></div>
		<div class="cmtcosan"></div>
		<div class="cmtcosan"></div>
		<div class="cmtcosan"></div>
		<div class="cmtcosan"></div>
		<div class="cmtcosan"></div>
		<div class="cmtcosan"></div>

	</div>
	<div class="mycmttus">
		<div id="mycmt"></div>
	</div>
	<button class="fas fa-backspace cu-p icsip delecmt" onclick="delecmt(this)"></button>
	<div class="librarycmt">
		<div class="buttontus" onclick="clickCmt(this)">
			Em đẹp quá
		</div>
		<div class="buttontus" onclick="clickCmt(this)">
			Nhà em ở đâu thế
		</div>
		<div class="buttontus" onclick="clickCmt(this)">
			Cho anh làm quen với bé ơi
		</div>
		<div class="buttontus" onclick="clickCmt(this)">.</br></div>
		<div class="buttontus" onclick="clickCmt(this)">,</div>
		<div class="buttontus" onclick="clickCmt(this)">
			Người trao có nửa nụ cười
		</div>
		<div class="buttontus" onclick="clickCmt(this)">
			Mà anh mất cả một đời để quên
		</div>
		<div class="buttontus" onclick="clickCmt(this)">
			Uống nhầm một ánh mắt
		</div>
		<div class="buttontus" onclick="clickCmt(this)">
			Cơn say theo nửa đời
		</div>
	</div>
	<button class="danganhlen cu-p" onclick="closeAny('commenttus')">Đăng</button>
</div>
<?php
$connect->close();
?>

<!-- <script src="../resources/script/hjavascript.js" type="text/javascript"></script> -->
	<!-- <script src="vendors/script/jquery.min.js"></script>
	<script src="vendors/script/jquery.form.js"></script> -->
	<!-- <script src = "https://code.highcharts.com"></script> -->
	<script src="resources/script/javascript.js" type="text/javascript"></script>
	<script src="resources/script/hjavascript.js" type="text/javascript"></script>
	<script src="ajaxshow/ajaxshow.js"></script>
	<script src="ajaxshow/ajaxpost.js"></script>
</body>
</html>

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
	<!-- <script src="https://kit.fontawesome.com/aa97e6aad9.js" crossorigin="anonymous"></script> -->
	<link href="vendors/icon/css/all.css" rel="stylesheet" type="text/css">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	<!-- jquery-ui -->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
	<!-- <link rel="stylesheet" href="../vendors/css/bootstrap.css"> -->
	
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
			<a href="main.php"><img class="logo" src="resources/img/logo12.png" alt="logo"></a> 
		</div>
		<div id="title">Fikve</div>
		
		<div>
			<button onclick="openLit('othongbao','sukienhai')" class="fas fa-bell icsip cu-p news" title="Thông báo">
			</button>
		</div>
		
		<div class="moneys">
			<button onclick="openLit('omoney','sukienhai')" class="fas fa-heart-circle icsip cu-p" title="heart coin">
			</button>
			<span>
				<?php 
					echo $mymoney;
				?>
			</span>
		</div>
		
		<div>
		<button onclick="openLit('otuychon','sukienhai')" class="fas fa-align-justify icsip cu-p options" title="tùy chọn">
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
				<input type="submit" class="sendsex" name="allsex">
			</button>
			<li><button class="fas fa-mars cu-p icsip sexisms2 posib"><input type="submit" class="sendsex" name="man"></button></li>
			<li><button class="far fa-venus cu-p icsip sexisms2 posig"><input type="submit" class="sendsex" name="girl"></button></li>
			<li><button class="lgbt icsip cu-p sexisms2 posil"><input type="submit" class="sendsex" name="lgbt"></button></li>
	</ul>
	</form>
	<!-- nội dung hiển thị -->
	<div id="tab1" class="tabcontents">
		<?php
			include ("model/loadtus1.php");
		?>
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
	<?php
	 include ("model/loadtus2.php");
	?>
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
	<div id="tabrankboy" class="rankdisplay">
		<?php
			$sql1 = "SELECT * FROM `account` WHERE idsex='1' ORDER BY tuongtac DESC LIMIT 10";
			$ket_qua1 = $connect->query($sql1);
			//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
			if (!$ket_qua1) {
				die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
				exit();
			}
			//Dùng vòng lặp while truy xuất các phần tử trong table
			$rank1=1;
			while ($row1= $ket_qua1->fetch_array(MYSQLI_ASSOC)) {
				// chuyển mảng về 1 phần tử
				$tavt1=$row1['avt'];
				$tnick1=$row1['nicknam'];
				$tslo1=$row1['slogan'];
				$tpoint1=$row1['tuongtac'];
				if($rank1<10){
					$rank12="0".$rank1;
				}else{ $rank12=$rank1; }
				echo    '<div class="ranks cu-p">
						<div class="stts">'.$rank12.'</div>
						<div class="avttrender"><img src="'.$tavt1.'" alt="avt ai đó"></div>
						<div class="nametrender">'.$tnick1.'</div>
						<div class="scoretrender">'.$tpoint1.'</div>
						<div class="slogantrender">'.$tslo1.'</div>
						</div>';
				$rank1++;
			}
		?>
	</div>

	<div id="tabrankgirl" class="rankdisplay" style="display: none;">
		<?php
			$sql2 = "SELECT * FROM `account` WHERE idsex='2' ORDER BY tuongtac DESC LIMIT 10";
			$ket_qua2 = $connect->query($sql2);
			//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
			if (!$ket_qua2) {
				die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
				exit();
			}
			//Dùng vòng lặp while truy xuất các phần tử trong table
			$rank2=1;
			while ($row2= $ket_qua2->fetch_array(MYSQLI_ASSOC)) {
				// chuyển mảng về 1 phần tử
				$tavt2=$row2['avt'];
				$tnick2=$row2['nicknam'];
				$tslo2=$row2['slogan'];
				$tpoint2=$row2['tuongtac'];
				if($rank2<10){
					$rank22="0".$rank2;
				}else{ $rank22=$rank2; }
				echo    '<div class="ranks cu-p">
						<div class="stts">'.$rank22.'</div>
						<div class="avttrender"><img src="'.$tavt2.'" alt="avt ai đó"></div>
						<div class="nametrender">'.$tnick2.'</div>
						<div class="scoretrender">'.$tpoint2.'</div>
						<div class="slogantrender">'.$tslo2.'</div>
						</div>';
				$rank2++;
			}
		?>
	</div>
	<div id="tabranklgbt" class="rankdisplay"  style="display: none;">
		<?php
			$sql3 = "SELECT * FROM `account` WHERE idsex='3' ORDER BY tuongtac DESC LIMIT 10";
			$ket_qua3 = $connect->query($sql3);
			//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
			if (!$ket_qua3) {
				die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
				exit();
			}
			//Dùng vòng lặp while truy xuất các phần tử trong table
			$rank3=1;
			while ($row3= $ket_qua3->fetch_array(MYSQLI_ASSOC)) {
				// chuyển mảng về 1 phần tử
				$tavt3=$row3['avt'];
				$tnick3=$row3['nicknam'];
				$tslo3=$row3['slogan'];
				$tpoint3=$row3['tuongtac'];
				if($rank3<10){
					$rank32="0".$rank3;
				}else{ $rank32=$rank3; }
				echo    '<div class="ranks cu-p">
						<div class="stts">'.$rank32.'</div>
						<div class="avttrender"><img src="'.$tavt3.'" alt="avt ai đó"></div>
						<div class="nametrender">'.$tnick3.'</div>
						<div class="scoretrender">'.$tpoint3.'</div>
						<div class="slogantrender">'.$tslo3.'</div>
						</div>';
				$rank3++;
			}
		?>

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
			<?php
				$sqltus = "SELECT * FROM `status` WHERE idacc='$ida' ORDER BY idstatus DESC";
				$ket_qua_tus = $connect->query($sqltus);
				//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
				if (!$ket_qua_tus) {
					die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
					exit();
				}
				//Dùng vòng lặp while truy xuất các phần tử trong table
				while ($rowtus= $ket_qua_tus->fetch_array(MYSQLI_ASSOC)) {
					// chuyển mảng về 1 phần tử
					$tustime=$rowtus['time'];
					$tusimg=$rowtus['img'];
					$tuscon=$rowtus['multitus'];
					$sumlike=$rowtus['sumlike'];
					echo '<div class="hop1s myhis">'.$ida.$tustime.' // '.$tuscon.' // '.$tusimg.'</div><hr>';
				}

			?>
			<div class="hop1s myhis">

			</div>
			<div class="hop1s myhis"></div>
			<div class="hop1s myhis"></div>
			<div class="hop1s myhis"></div>
			<div class="hop1s myhis"></div>
		</div>
	</div>


	
<!-- form đăng bài -->
<div class="createtus" id="createtus">
	<div class="headhs whead">
		<div class="avt posiavths"></div>
		<div id="nickname">
				<?php
				echo $mynick;
				?>
		</div>
		<button class="far fa-times cu-p icsip exit" onclick="closeAny('createtus')"></button>
	</div>
	<div class="mytus">
		<div id="mytus"></div>
		
	</div>
	<button class="fas fa-backspace cu-p icsip dele" onclick="clickDele(this)"></button>
	<div class="okok" id="submytus1">Ok</div>

	<form id="imageform" method="post" enctype="multipart/form-data" action='model/doajax.php'>
		<div class="myimage" id="preview"></div>
		<div class="customupanh">
			<span class="fakeicon">+</span>
			<p class="themanh">Thêm ảnh</p>
			<input type="file" name="upanh" id="upanh" class="upanh">
		</div>
	</form>
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
	<form method="post">
		<input type="text" name="myftus" id="myftus" value="">
		<input type="text" name="myfimg" id="myfimg" value="">
		<input type="submit" value="Đăng" class="danganhlen cu-p" id="submytus" name="submytus">
		<!-- onclick="closeAny('createtus')" -->
	</form>
	
	<script>
		document.getElementById('submytus1').onclick=function(){
			var sta = setTimeout(function(){
				var myftus= document.getElementById('mytus').innerHTML;//lấy text ở #mytus
				var myfimg = document.querySelector(".preview").src;//lấy link ảnh ở .preview
				document.getElementById('myftus').value=myftus;//gán text vào #myftus
				document.getElementById('myfimg').value=myfimg;//gán link dạng text vào #myfimg
				var k=document.getElementById('myftus').value;
				console.log(myftus);
				console.log(k);
				console.log(myfimg);
			}, 10);
		}
	</script>
	<?php
		if(isset($_POST['submytus'])){
			$mystatus=$_POST['myftus'];
			$myimgtus=$_POST['myfimg'];
			$addstatus="INSERT INTO `status`(`idacc`, `multitus`,`img`) 
						VALUES ('$ida','$mystatus','$myimgtus')";
			$query=mysqli_query($connect, $addstatus);
		}
	?>
</div>
</div>

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
<div id="sukienhai">
	<button onclick="closeLit('othongbao','sukienhai')"></button>
	<button onclick="closeLit('omoney','sukienhai')"></button>
	<button onclick="closeLit('otuychon','sukienhai')"></button>
</div>
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
<script src="vendors/script/jquery.min.js"></script>
	<script src="vendors/script/jquery.form.js"></script>
	<!-- <script src = "https://code.highcharts.com"></script> -->
	<script src="resources/script/javascript.js" type="text/javascript"></script>
	<script src="resources/script/hjavascript.js" type="text/javascript"></script>
</body>
</html>

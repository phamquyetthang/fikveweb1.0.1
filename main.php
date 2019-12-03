<?php
session_start();
if(empty($_SESSION['drid'])){
	header('Location: index.php');
}
?>
<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>FiKVe</title>

	<link href="https://fonts.googleapis.com/css?family=EB+Garamond&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
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
					require_once ("model/loadinfo.php");
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
				require_once ("model/loadinfo.php");
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
<div class="content">
    

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
	<ul class="bolocgt">
		    <button class="fad fa-globe-asia cu-p icsip allsex"onclick="showBoloc()"></button>
			<li><button class="fas fa-mars cu-p icsip sexisms2 posib"></button></li>
			<li><button class="far fa-venus cu-p icsip sexisms2 posig"></button></li>
			<li><button class="lgbt icsip cu-p sexisms2 posil"></button></li>
	</ul>
	<!-- nội dung hiển thị -->
	<div id="tab1" class="tabcontents">
		<div class="hop1s">
			<div class="headhs">
				<div class="avt posiavths"></div>
				<div id="nickname">Nguyễn Thị Tý</div>
				<div id="timeoftus">1000s</div>
				<div id="khoangcach">3km</div>
				<button class="far fa-times cu-p icsip banthems"></button>
			</div>
			<div class="statushs">
				Thiếu một nửa tôi đi tìm một nửa</br>
				Bạn có là một nửa của tôi không
			</div>
			<div class="contenths img1">
				<button class="fal fa-info-circle cu-p report"></button>
			</div>
			<div class="endhs">
					<button class="fad fa-heart cu-p icsip thatims"></button>
					<button class="fas fa-comment-alt-edit cu-p icsip binhluans" onclick="openAny('commenttus')"></button>
					<button class="fas fa-comment-plus cu-p icsip chonnhans"></button>
					<button class="fad fa-star cu-p icsip quantams"></button>

			</div>
		</div>
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
		<?php
			for ($i = 0; $i < 200; $i++){
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
			for ($i = 0; $i < 20; $i++){
				echo '<div class="hop1s">
				<div class="headhs">
					<div class="avt posiavths"></div>
					<div id="nickname">kakashi</div>
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
				require_once("controller/connect.php");

				$sql = "SELECT * FROM `account` WHERE idsex='1' ORDER BY tuongtac DESC LIMIT 10";
            	$ket_qua = $connect->query($sql);
				//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
				if (!$ket_qua) {
					die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
					exit();
				}
            	//Dùng vòng lặp while truy xuất các phần tử trong table
            	$rank=1;
            	while ($row= $ket_qua->fetch_array(MYSQLI_ASSOC)) {
					// chuyển mảng về 1 phần tử
					$myavt=$row['avt'];
					$mynick=$row['nicknam'];
					$myslo=$row['slogan'];
					$mypoint=$row['tuongtac'];
					if($rank<10){
						$rank2="0".$rank;
					}else{ $rank2=$rank; }
					echo    '<div class="ranks cu-p">
							<div id="stts">'.$rank2.'</div>
							<div id="avttrender"><img src="'.$myavt.'" alt="avt ai đó"></div>
							<div id="nametrender">'.$mynick.'</div>
							<div id="scoretrender">'.$mypoint.'</div>
							<div id="slogantrender">'.$myslo.'</div>
							</div>';
					$rank++;
            	}
			?>
		</div>

		<div id="tabrankgirl" class="rankdisplay" style="display: none;">
			<?php
				require_once("controller/connect.php");

				$sql = "SELECT * FROM `account` WHERE idsex='2' ORDER BY tuongtac DESC LIMIT 10";
				$ket_qua = $connect->query($sql);
				//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
				if (!$ket_qua) {
					die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
					exit();
				}
				//Dùng vòng lặp while truy xuất các phần tử trong table
				$rank=1;
				while ($row= $ket_qua->fetch_array(MYSQLI_ASSOC)) {
					// chuyển mảng về 1 phần tử
					$myavt=$row['avt'];
					$mynick=$row['nicknam'];
					$myslo=$row['slogan'];
					$mypoint=$row['tuongtac'];
					if($rank<10){
						$rank2="0".$rank;
					}else{ $rank2=$rank; }
					echo    '<div class="ranks cu-p">
							<div id="stts">'.$rank2.'</div>
							<div id="avttrender"><img src="'.$myavt.'" alt="avt ai đó"></div>
							<div id="nametrender">'.$mynick.'</div>
							<div id="scoretrender">'.$mypoint.'</div>
							<div id="slogantrender">'.$myslo.'</div>
							</div>';
					$rank++;
				}
			?>
		</div>
		<div id="tabranklgbt" class="rankdisplay"  style="display: none;">
			<?php
				require_once("controller/connect.php");

				$sql = "SELECT * FROM `account` WHERE idsex='3' ORDER BY tuongtac DESC LIMIT 10";
				$ket_qua = $connect->query($sql);
				//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
				if (!$ket_qua) {
					die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
					exit();
				}
				//Dùng vòng lặp while truy xuất các phần tử trong table
				$rank=1;
				while ($row= $ket_qua->fetch_array(MYSQLI_ASSOC)) {
					// chuyển mảng về 1 phần tử
					$myavt=$row['avt'];
					$mynick=$row['nicknam'];
					$myslo=$row['slogan'];
					$mypoint=$row['tuongtac'];
					if($rank<10){
						$rank2="0".$rank;
					}else{ $rank2=$rank; }
					echo    '<div class="ranks cu-p">
							<div id="stts">'.$rank2.'</div>
							<div id="avttrender"><img src="'.$myavt.'" alt="avt ai đó"></div>
							<div id="nametrender">'.$mynick.'</div>
							<div id="scoretrender">'.$mypoint.'</div>
							<div id="slogantrender">'.$myslo.'</div>
							</div>';
					$rank++;
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
					require_once ("model/loadinfo.php");
					echo '<img src="'.$myavt.'" alt="avt của cậu đó">';
				?>
				
			</div>
			<div class="infobottom">
				<div id="myNameinfo" class="infochild1">
					<span>Tên:</span>
					<?php 
						require_once ("model/loadinfo.php");
						echo $myname;
					?>
				</div>
				<div id="nickNameinfo" class="infochild1">
					<span>Nick name:</span>
					<?php 
						require_once ("model/loadinfo.php");
						echo $mynick;
					?>
				</div>
				<div id="myage" class="infochild2">
					<span>Tuổi:</span>
					<?php 
						require_once ("model/loadinfo.php");
						echo $myage;
					?>
				</div>
				<div id="mygender" class="infochild2">
					<span>Giới tính:</span>
					<?php 
						require_once ("model/loadinfo.php");
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
						require_once ("model/loadinfo.php");
						echo $myslo;
					?>
				</div>

				<div id="moreinfo" class="infochild3">
					<span>Nói thêm về bạn:</span>
					<?php 
						require_once ("model/loadinfo.php");
						echo $myin;
					?>
				</div>
			</div>
		</div>
		<div class="hisright">
			<div class="far fa-times cu-p icsip exit e1" onclick="exitButton()"></div>
			<?php
				require_once ("controller/connect.php");
				$ida=$_SESSION['drid'];
				$sql = "SELECT * FROM `status` WHERE idacc='$ida' ORDER BY idstatus DESC";
				$ket_qua = $connect->query($sql);
				//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
				if (!$ket_qua) {
					die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
					exit();
				}
				//Dùng vòng lặp while truy xuất các phần tử trong table
				while ($row= $ket_qua->fetch_array(MYSQLI_ASSOC)) {
					// chuyển mảng về 1 phần tử
					$tustime=$row['time'];
					$tusimg=$row['img'];
					$tuscon=$row['multitus'];
					$sumlike=$row['sumlike'];
					echo '<div class="hop1s myhis">'.$tustime.' // '.$tuscon.' // '.$tusimg.'</div><hr>';
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
		<div id="nickname">Phúc Vinh</div>
		<button class="far fa-times cu-p icsip exit" onclick="closeAny('createtus')"></button>
	</div>
	<div class="mytus">
		<div id="mytus"></div>
	</div>
	<button class="fas fa-backspace cu-p icsip dele" onclick="clickDele(this)"></button>


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
	<button class="danganhlen cu-p" onclick="closeAny('createtus')">Đăng</button>
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


<!-- <script src="../resources/script/hjavascript.js" type="text/javascript"></script> -->
<script src="vendors/script/jquery.min.js"></script>
	<script src="vendors/script/jquery.form.js"></script>
	<script src = "https://code.highcharts.com"></script>
	<script src="resources/script/javascript.js" type="text/javascript"></script>
	<script src="resources/script/hjavascript.js" type="text/javascript"></script>
</body>
</html>

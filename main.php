<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FiKVe</title>

	<link href="https://fonts.googleapis.com/css?family=EB+Garamond&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pattaya&display=swap" rel="stylesheet">
<!--	<script src="https://kit.fontawesome.com/aa97e6aad9.js" crossorigin="anonymous"></script>-->
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
			<a href="#"><img class="logo" src="resources/img/logo12.png" alt="logo"></a> 
		</div>
		<div id="title">Fikve</div>
		
		<div>
			<button onclick="openLit('othongbao','sukienhai')" class="fas fa-bell icsip cu-p news" title="Thông báo">
			</button>
		</div>
		
		<div>
		<button onclick="openLit('omoney','sukienhai')" class="fas fa-heart-circle icsip cu-p moneys" title="heart coin">
		</button>
		</div>
		
		<div>
		<button onclick="openLit('otuychon','sukienhai')" class="fas fa-align-justify icsip cu-p options" title="tùy chọn">
		</button>
		</div>
	</header>
	
<!--//////////-->
<!--	lề trái-->

	<div class="letrai">
		<button onclick="showMyinfo('myinfomation')" class="fas fa-user-circle icsip cu-p yourinfo" title="Thông tin của bạn"></button>
		<button class="fas fa-comment-lines icsip cu-p message" onclick="openAny('mymess')" title="Tin nhắn"></button>
		<!-- <button class="far fa-user-friends icsip cu-p knews"></button> -->
		<button class="fal fa-chart-line icsip cu-p bxhcn" title="Theo dõi cá nhân"></button>
		<button class="far fa-star icsip cu-p careful" title="Người bạn quan tâm"></button>
		
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
			<li><a onclick="openTabs('tab1')" class="fas fa-street-view cu-p icsip setcons">
					<span class="textinli1" title="Tìm kiếm theo khu vực">Xung quanh</span>
				</a
			></li>
			<li><a onclick="openTabs('tab2')" class="fas fa-book-heart cu-p icsip setcons">
					<span class="textinli1" title="Những người bạn đã biết">Đã biết</span>
				</a>
			</li>
			<li><a onclick="openTabs('tab3')" class="fas fa-analytics cu-p icsip setcons">
					<span class="textinli1" title="Những bài viết xu hướng">Trend</span>
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
					<button class="fas fa-comment-alt-edit cu-p icsip binhluans"></button>
					<button class="fas fa-comment-plus cu-p icsip chonnhans"></button>
					<button class="fad fa-star cu-p icsip quantams"></button>

			</div>
		</div>
		<div class="hop1s">
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
		</div>
		<div class="hop1s">
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
		</div>
		<div class="hop1s">
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
		</div>
		<div class="hop1s">
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
		</div>
	</div>
		

	<div id="tab2" class="tabcontents" style="display: none;">
		<div class="hop1s">
			<div class="headhs">
				<div class="avt posiavths"></div>
				<div id="nickname"></div>
				<div id="timeoftus"></div>
				<div id="khoangcach"></div>
				<button class="far fa-times-circle cu-p icsip banthems"></button>
			</div>
			<div class="statushs"></div>
			<div class="contenths">
				<button class="fal fa-info-circle cu-p report"></button>
			</div>
			<div class="endhs">
					<button class="fad fa-heart cu-p icsip thatims"></button>
					<button class="fas fa-comment-alt-edit cu-p icsip binhluans"></button>
					<button class="fas fa-comment-plus cu-p icsip chonnhans"></button>
					<button class="fad fa-star cu-p icsip quantams"></button>

			</div>
		</div>
		<div class="hop1s">
			<div class="headhs">
				<div class="avt posiavths"></div>
				<div id="nickname"></div>
				<div id="timeoftus"></div>
				<div id="khoangcach"></div>
				<button class="far fa-times-circle cu-p icsip banthems"></button>
			</div>
			<div class="statushs"></div>
			<div class="contenths">
				<button class="fal fa-info-circle cu-p report"></button>
			</div>
			<div class="endhs">
					<button class="fad fa-heart cu-p icsip thatims"></button>
					<button class="fas fa-comment-alt-edit cu-p icsip binhluans"></button>
					<button class="fas fa-comment-plus cu-p icsip chonnhans"></button>
					<button class="fad fa-star cu-p icsip quantams"></button>

			</div>
		</div>
	</div>


	<div id="tab3" class="tabcontents" style="display: none;">
		<div class="hop1s">
			<div class="headhs">
				<div class="avt posiavths"></div>
				<div id="nickname"></div>
				<div id="timeoftus"></div>
				<div id="khoangcach"></div>
				<button class="far fa-times-circle cu-p icsip banthems"></button>
			</div>
			<div class="statushs"></div>
			<div class="contenths">
				<button class="fal fa-info-circle cu-p report"></button>
			</div>
			<div class="endhs">
					<button class="fad fa-heart cu-p icsip thatims"></button>
					<button class="fas fa-comment-alt-edit cu-p icsip binhluans"></button>
					<button class="fas fa-comment-plus cu-p icsip chonnhans"></button>
					<button class="fad fa-star cu-p icsip quantams"></button>

			</div>
		</div>
		<div class="hop1s">
			<div class="headhs">
				<div class="avt posiavths"></div>
				<div id="nickname"></div>
				<div id="timeoftus"></div>
				<div id="khoangcach"></div>
				<button class="far fa-times-circle cu-p icsip banthems"></button>
			</div>
			<div class="statushs"></div>
			<div class="contenths">
				<button class="fal fa-info-circle cu-p report"></button>
			</div>
			<div class="endhs">
					<button class="fad fa-heart cu-p icsip thatims"></button>
					<button class="fas fa-comment-alt-edit cu-p icsip binhluans"></button>
					<button class="fas fa-comment-plus cu-p icsip chonnhans"></button>
					<button class="fad fa-star cu-p icsip quantams"></button>

			</div>
		</div>
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
			<div class="ranks cu-p">
				<div id="stts">01</div>
				<div id="avttrender" class="img5"></div>
				<div id="nametrender">Phúc Vinh</div>
				<div id="scoretrender">1000</div>
				<div id="slogantrender"></div>
			</div>
			<div class="ranks cu-p">
				<div id="stts">02</div>
				<div id="avttrender" class="img6"></div>
				<div id="nametrender">Không Phải Phúc</div>
				<div id="scoretrender">800</div>
				<div id="slogantrender">Điếu thuốc tàn bên ly rượu cạn </br> 
					Đời khốn nạn biết kết bạn cùng ai </div>
			</div>
			<div class="ranks cu-p">
				<div id="stts">03</div>
				<div id="avttrender" class="img4"></div>
				<div id="nametrender">Sơn Thần</div>
				<div id="scoretrender">788</div>
				<div id="slogantrender">Điệp vụ hai mang tại bang tổ lái phái đua xe </div>
			</div>
			<div class="ranks cu-p">
				<div id="stts">04</div>
				<div id="avttrender" class="img7"></div>
				<div id="nametrender">Người đi ngoài phố</div>
				<div id="scoretrender">762</div>
				<div id="slogantrender">Chiều bỡ ngỡ bơ vơ</div>
			</div>
		</div>

		<div id="tabrankgirl" class="rankdisplay" style="display: none;">
				<div class="ranks cu-p">
						<div id="stts">01</div>
						<div id="avttrender" class="img3"></div>
						<div id="nametrender">Chí Công Tử</div>
						<div id="scoretrender">1000</div>
						<div id="slogantrender">Điệp vụ hai mang tại bang tổ lái phái đua xe </div>
					</div>
					<div class="ranks cu-p">
						<div id="stts">02</div>
						<div id="avttrender" class="img4"></div>
						<div id="nametrender">Chí Công Tử</div>
						<div id="scoretrender">1000</div>
						<div id="slogantrender">Điệp vụ hai mang tại bang tổ lái phái đua xe </div>
					</div>
					<div class="ranks cu-p">
						<div id="stts">03</div>
						<div id="avttrender"></div>
						<div id="nametrender">Chí Công Tử</div>
						<div id="scoretrender">1000</div>
						<div id="slogantrender">Điệp vụ hai mang tại bang tổ lái phái đua xe </div>
					</div>
					<div class="ranks cu-p">
						<div id="stts">04</div>
						<div id="avttrender" ></div>
						<div id="nametrender">Chí Công Tử</div>
						<div id="scoretrender">1000</div>
						<div id="slogantrender">Điệp vụ hai mang tại bang tổ lái phái đua xe </div>
					</div>
		</div>
		<div id="tabranklgbt" class="rankdisplay"  style="display: none;">
				<div class="ranks cu-p">
						<div id="stts">01</div>
						<div id="avttrender" class="img3"></div>
						<div id="nametrender">Món quà của tạo hóa</div>
						<div id="scoretrender">1000</div>
						<div id="slogantrender">Điệp vụ hai mang tại bang tổ lái phái đua xe </div>
					</div>
					<div class="ranks cu-p">
						<div id="stts">02</div>
						<div id="avttrender" class="img4"></div>
						<div id="nametrender">Chí Công Tử</div>
						<div id="scoretrender">1000</div>
						<div id="slogantrender">Điệp vụ hai mang tại bang tổ lái phái đua xe </div>
					</div>
					<div class="ranks cu-p">
						<div id="stts">03</div>
						<div id="avttrender"></div>
						<div id="nametrender">Chí Công Tử</div>
						<div id="scoretrender">1000</div>
						<div id="slogantrender">Điệp vụ hai mang tại bang tổ lái phái đua xe </div>
					</div>
					<div class="ranks cu-p">
						<div id="stts">04</div>
						<div id="avttrender" ></div>
						<div id="nametrender">Chí Công Tử</div>
						<div id="scoretrender">1000</div>
						<div id="slogantrender">Điệp vụ hai mang tại bang tổ lái phái đua xe </div>
					</div>

		</div>
	</div>
	

<!-- thong tin chinh minh -->
	<div class="myinfomation" id="myinfomation">
		<div class="infoleft">
			<div class="avttop">
				
			</div>
			<div class="infobottom">
				<div id="myNameinfo">
					<span>Tên</span>
					<?php 
					// include ('C:/xampp/htdocs/fikveweb/fikveweb/controller/selectdata.php');

					// echo ($myname);
						//echo ('helo');
					?>
				</div>
				<div id="nickNameinfo">
					<span>Nick name</span>
				</div>
				<div id="myage">
					<span>Tuổi</span>
				</div>
				<div id="mygender">
					<span>Giới tính</span>
				</div>
				<div id="myslogan">
					<span>Slogan</span>
				</div>

				<div id="moreinfo">
					<span>Nói thêm về bạn</span>
				</div>
			</div>
		</div>
		<div class="hisright">
			<div class="far fa-times cu-p icsip exit" onclick="exitButton()"></div>
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

	</div>
		<form id="imageform" method="post" enctype="multipart/form-data" action='model/doajax.php'>
			<div class="myimage" id="preview"></div>
			<div class="customupanh">
				<span class="fakeicon">+</span>
				<p class="themanh">Thêm ảnh</p>
				<input type="file" name="upanh" id="upanh" class="upanh">
			</div>
		</form>
		
	<div class="libralytus">

	</div>
	<input type="submit" value="Đăng" class="danganhlen">
</div>


<!-- tabs tin nhắn -->
<div class="mymess" id="mymess">
	<div class="leftmess">
		<div class="kindleft">
			<button class="kindcon" id="nguoila">Người lạ</button>
			<button class="kindcon" id="nguoiquen">Người quen</button>
		</div>
		<div class="listmess">
			<div id="eachmess"></div>
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
	<a class="logout " href="../indez.html/first.php"><span>Đăng xuất</span></a>
	<button class="caidat"><span>Cài Đặt</span></button>
</div>
<!-- <script src="../resources/script/hjavascript.js" type="text/javascript"></script> -->




<script src="vendors/script/jquery.min.js"></script>
	<script src="vendors/script/jquery.form.js"></script>
	<script src="resources/script/javascript.js" type="text/javascript"></script>
	<script src="resources/script/hjavascript.js" type="text/javascript"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../vendors/icon/favicon.ico"/>
<!--===============================================================================================-->
	<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="../vendors/css/bootstrap.css"> 
<!--===============================================================================================-->
	<!-- icon -->
<link rel="stylesheet" type="text/css" href="../vendors/icon/css/all.css">
<!--===============================================================================================-->
<!-- line icon	 -->
<link rel="stylesheet" type="text/css" href="../vendors/icon/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendors/css/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendors/css/hamburgers.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendors/css/select2.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendors/css/util.css">
	<link rel="stylesheet" type="text/css" href="../resources/style/loginstyle.css">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pattaya&display=swap" rel="stylesheet">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-50 p-b-20">
			<a id="back" class="far fa-times eback" href="../index.php"></a>
				<form class="login100-form validate-form" method="post">
					
					<span class="login100-form-title p-b-20">
						Fikve
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="fullname" placeholder="Họ và Tên">
                    
						<span class="focus-input100"></span>
						<span class="symbol-input100">
                            <span class="lnr lnr-user"></span>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>
					<div>
						<input class="input101 m-b-16" list="gioitinh" name="chonsex" placeholder="Nam/Nữ/Khác"/>
							<datalist id="gioitinh">
							<option value="1">Nam</option>
							<option value="2">Nữ</option>
							<option value="3">Khác</option>
							</datalist>
					</div>	
					<div>
						<input class="input102" type="number" name="age" min="14" placeholder="Tuổi"/>
					</div>
					<div>
						<input class="input103" list="diachi" name="dia-chi" placeholder="Địa chỉ"/>
							<datalist id="diachi">
								<option value="1">Ba Đình</option>
								<option value="2">Hoàn Kiếm</option>
								<option value="3">Hai Bà Trưng</option>
								<option value="4">Đống Đa</option>
								<option value="5">Tây Hồ</option>
								<option value="6">Cầu Giấy</option>
								<option value="7">Thanh Xuân</option>
								<option value="8">Hoàng Mai</option>
								<option value="9">Long Biên</option>
								<option value="10">Từ Liêm</option>
								<option value="11">Thanh Trì</option>
								<option value="12">Gia Lâm</option>
								<option value="13">Đông Anh</option>
								<option value="14">Sóc Sơn</option>
								<option value="15">Hà Đông</option>
								<option value="16">Sơn Tây</option>
								<option value="17">Ba Vì</option>
								<option value="18">Phúc Thọ</option>
								<option value="19">Thạch Thất</option>
								<option value="20">Quốc Oai</option>
								<option value="21">Chương Mỹ</option>
								<option value="22">Đan Phượng</option>
								<option value="23">Hoài Đức</option>
								<option value="24">Thanh Oai</option>
								<option value="25">Mỹ Đức</option>
								<option value="26">Ứng Hòa</option>
								<option value="27">Thường Tín</option>
								<option value="28">Phú Xuyên</option>
								<option value="29">Mê Linh</option>
							</datalist>
					</div>
					<div class="container-login100-form-btn p-t-25">
						<input type="submit" name="submit" value="Đăng ký" class="login100-form-btn">
					</div>
	
				</form>
				<?php
					$server = "localhost";
					$username = "phucvinhvic"; // Khai báo username
					$password = "2019vanconyeuem";      // Khai báo password
					$port="3306";
					$dbname   = "fikve";      // Khai báo database

					// Kết nối database tintuc
					$connect = new mysqli($server, $username, $password, $dbname, $port);

					//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
					if ($connect->connect_error) {
						die("Không kết nối :" . $conn->connect_error);
						exit();
					}

					//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
					$title = "";
					$date = "";
					$description = "";
					$content = "";

					//Lấy giá trị POST từ form vừa submit
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						if(isset($_POST["email"])) { $signemail = $_POST['email']; }
						if(isset($_POST["fullname"])) { $signfullname = $_POST['fullname']; }
						if(isset($_POST["pass"])) { $signpass = $_POST['pass']; }
						if(isset($_POST["chonsex"])) { $chonsex = $_POST['chonsex']; }
						if(isset($_POST["dia-chi"])) { $diachi = $_POST['dia-chi']; }
						if(isset($_POST["age"])) { $signage = $_POST['age']; }
						$sexinput;
						if($chonsex=="Nữ"){
							$sexinput=1;
						}
						else if($chonsex =="Nam"){
							$sexinput = 2;
						}
						else if($chonsex=="Khác"){
							$sexinput=3;
						}
						//Code xử lý, insert dữ liệu vào table
						//$sql = "INSERT INTO tin_xahoi (title, date, description, content)
						//VALUES ('$title', '$date', '$description', '$content')";
						$sql = "INSERT INTO account (email, accname, password, idsex, idposition, age) VALUES ('$signemail', '$signfullname', '$signpass', '$chonsex', '$diachi', '$signage' )";
						if ($connect->query($sql) === TRUE) {
							echo "Đăng ký thành công";
						} else {
							echo "Error: " . $sql . "<br>" . $connect->error;
						}
					}
					//Đóng database
					$connect->close();
					?>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
<script src="../vendors/script/jquery.min.js"></script>
<!--===============================================================================================-->
	<!-- bootstrap popper -->
	<script src="../vendors/script/popper.js"></script>
	
	<script src="../vendors/script/bootstrap.js"></script>
<!--===============================================================================================-->
	<script src="../vendors/script/select2.js"></script>
<!--===============================================================================================-->
	<script src="../resources/script/loginscript.js"></script>
</body>
</html>
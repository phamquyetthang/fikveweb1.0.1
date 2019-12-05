<?php
session_start();
?>
<html>
<head>
  <meta http-equiv='refresh' content='0.5; URL=http://localhost/fikveweb1.0.1/main.php'>
</head>
</html>
<?php
$server = "localhost";
$username = "phucvinhvic"; // Khai báo username
$password = "2019vanconyeuem";// Khai báo password
$port="3306";
$dbname = "fikve";      // Khai báo database
// Kết nối database tintuc
$connect = new mysqli($server, $username, $password, $dbname, $port);
//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}
$ida=$_SESSION['drid'];
		if(isset($_POST['submytus'])){
			$mystatus=$_POST['myftus'];
			$myimgtus=$_POST['myfimg'];
			$addstatus="INSERT INTO `status`(`idacc`, `multitus`,`img`) 
						VALUES ('$ida','$mystatus','$myimgtus')";
			$query=mysqli_query($connect, $addstatus);
		}
?>
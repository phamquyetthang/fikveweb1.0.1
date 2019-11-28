<!-- Đăng ký tài khoản -->
<html>
<head>
  <meta http-equiv='refresh' content='1; URL=08sale.php'>
</head>
</html>
<?php

$hostname = "localhost";
$username = "phucvinhvic";
$password = "2019vanconyeuem";
$db = "dbms";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Không thể truy cập cơ sở dữ liệu được : " . $dbconnect->connect_error);
}

if(isset($_POST['submit'])) {
    $useremail=$_POST['sign-email'];
    $username=$_POST['sign-fullname'];
    $userpass=$_POST['sign-pass'];
    $usersex=$_POST['chonsex'];
    $userpos=$_POST['dia-chi'];
    $userage=$_POST['sign-age'];


    $query = "INSERT INTO sale_detail (Sale_id, Pro_id,Amount,Sale_price,Discount)
    VALUES ('$Sale_id', '$Pro_id','$Amount','$Sale_price','$Discount')";

    if (!mysqli_query($dbconnect, $query)) {
        die('Bị lỗi. Chưa thành công nhé.');
    } else {
      echo "<center>Thêm bán sản phẩm đã thành công.</center>";
    }

}
?>


<?php
					$connect=mysqli_connect("localhost","phucvinhvic","2019vanconyeuem");
					$db=mysqli_select_db($connect,"fikve");
					if(isset($_POST['sign-submit'])){
						$useremail=$_POST['sign-email'];
						$username=$_POST['sign-fullname'];
						$userpass=$_POST['sign-pass'];
						$usersex=$_POST['chonsex'];
						$userpos=$_POST['dia-chi'];
						$userage=$_POST['sign-age'];
						if($useremail==""||$username==""||$userpass==""||$usersex==""||
						$userpos==""||$userage=="")
							{
							echo  '<p> Hãy điền đầy đủ thông tin </p>';
							}else{
								$sql="INSERT INTO `account`(`name`,`password`,`email`,'idsex','idposition', 'age')
								VALUES('$username', '$userpass', '$useremail','$usersex','$userposn','$userage')";
								$query=mysqli_query($connect, $sql);
								if ($query!=0) {
									echo '<p>Bạn đã đăng ký thành công. Hãy quay lại để đăng nhập</p>';
								} else {
									echo '<p>Bạn đã đăng ký không thành công</p>';

							}
							
						}
					}
					?>
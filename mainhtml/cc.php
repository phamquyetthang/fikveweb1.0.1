<?php
session_start();
?>
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
//Lấy giá trị POST từ form vừa submit
if(isset($_POST['submit'])){
    $logmail = $_POST['email'];
    $logpass = $_POST['pass'];
    if($logmail==""||$logpass==""){
        echo "Hãy điền đầy đủ thông tin";
    }else{
        $sql="SELECT * FROM `account` WHERE email='$logmail' and password='$logpass'";
        $query=mysqli_query($connect, $sql);
        $num_rows=mysqli_num_rows($query);
        if($num_rows!=0){
            header('Location:../main.php');
            die();
            // echo "cc";
            // echo "<a href=../main.php>bấm</a>";
        }
        else{
            header('Location: login.php');
            die();
        }
    }
}
//Đóng database
$connect->close();
?>
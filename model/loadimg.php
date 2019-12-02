<?php
session_start();
?>
<?php
require_once "../controller/connect.php";

$ida=$_SESSION['drid'];
$sql = "SELECT avt FROM `account` WHERE idacc='$ida'";
$ket_qua = $connect->query($sql);
$img='';
//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
if (!$ket_qua) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}

//Dùng vòng lặp while truy xuất các phần tử trong table
while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
    // chuyển mảng về 1 phần tử
    $img=$row['avt'];
}
//Đóng kết nối database tintuc
$connect->close();
?>
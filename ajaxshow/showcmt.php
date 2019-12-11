<?php
session_start();
require_once ("../controller/connect.php");
$idtus=$_POST['v'];
$sqlshowtus="SELECT * FROM `activeone` WHERE activeone.idtus='$idtus' ORDER BY `activeone`.`id` DESC";
$showtus= $connect->query($sqlshowtus);
//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
if (!$showtus) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}
//Dùng vòng lặp while truy xuất các phần tử trong table
while ($rowcmt= $showtus->fetch_array(MYSQLI_ASSOC)) {
    $idacc= $rowcmt['idacc'];
    $cmt= $rowcmt['multilcoment'];
    // $idtus =$rowcmt['idtus'];

    echo("$idacc||$cmt<hr>");
}
?>
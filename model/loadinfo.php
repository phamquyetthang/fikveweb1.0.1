<?php
$ida=$_SESSION['drid'];
$sql = "SELECT * FROM `account` WHERE idacc='$ida'";
$ket_qua = $connect->query($sql);
// $img='';
//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
if (!$ket_qua) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}
//Dùng vòng lặp while truy xuất các phần tử trong table
while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
    // chuyển mảng về 1 phần tử
    $myavt=$row['avt'];
    $myname=$row['accname'];
    $mynick=$row['nicknam'];
    $myage=$row['age'];
    $mysex=$row['idsex'];
    $myslo=$row['slogan'];
    $myin=$row['moreinfo'];
    $mymoney=$row['money'];
}
//Đóng kết nối database tintuc
// $connect->close();
?>
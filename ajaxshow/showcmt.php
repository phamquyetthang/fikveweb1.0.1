<?php
session_start();
require_once ("../controller/connect.php");
$idtus=$_POST['v'];
// $idother=$_POST['at'];
$sqlshowtus="SELECT activeone.id, activeone.idacc, activeone.multilcoment, 
            activeone.liked, activeone.idtus, account.nicknam, account.avt 
            FROM `activeone` INNER JOIN account ON activeone.idacc=account.idacc 
            WHERE activeone.idtus='$idtus' ORDER BY `activeone`.`id` DESC";
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
    $avtthey=$rowcmt['avt'];
    $namethey=$rowcmt['nicknam'];
    // $idtus =$rowcmt['idtus'];

    echo('<div class="cmtcosan">
    <div class="avtthey"><img src="'.$avtthey.'" alt="avt của cậu đó"></div>
    <p class="namethey">'.$namethey.'</p>
    <p class="cmtthey">'.$cmt.'</p>
</div>
');
}
echo('<form method="post">
<input type="hidden" value="'.$idtus.'" id="thistusid">
</form>');
?>
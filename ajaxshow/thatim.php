<?php
session_start();
require_once ("../controller/connect.php");
$ida=$_SESSION['drid'];
$idtus=$_POST['tim'];
// $at=$_POST['at'];
$sqlthatim="SELECT * FROM `activeone` WHERE idacc='$ida'AND idtus='$idtus'";
$thatim= $connect->query($sqlthatim);
//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
if (!$thatim) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
    
}
//Dùng vòng lặp while truy xuất các phần tử trong table
while ($rowtim= $thatim->fetch_array(MYSQLI_ASSOC)) {
    if($rowtim!=NULL){
    $co=$rowtim['liked'];
    if($co==='1'){
        $sqluptim1="UPDATE `activeone` SET `liked` = '0' 
        WHERE `activeone`.`idacc` = '$ida' AND `activeone`.`idtus`='$idtus'";
        $sqltt="UPDATE `status` SET `sumlike` = sumlike-'1' WHERE `status`.`idstatus` = '$idtus' ";
        $sqltt2="UPDATE `account` SET `tuongtac` = tuongtac-'1' WHERE `account`.`idacc` = '$ida'";
        $querytt2=mysqli_query($connect, $sqltt2);
        $queryup1=mysqli_query($connect, $sqluptim1);
        $querytt=mysqli_query($connect, $sqltt);
    }else if($co==='0'){
        $sqluptim2="UPDATE `activeone` SET `liked` = '1' 
        WHERE `activeone`.`idacc` = '$ida' AND `activeone`.`idtus`='$idtus'";
        $sqltt="UPDATE `status` SET `sumlike` = sumlike+'1' WHERE `status`.`idstatus` = '$idtus' ";
        $sqltt2="UPDATE `account` SET `tuongtac` = tuongtac+'1' WHERE `account`.`idacc` = '$ida'";
        $querytt2=mysqli_query($connect, $sqltt2);
        $queryup2=mysqli_query($connect, $sqluptim2);
        $querytt=mysqli_query($connect, $sqltt);
    }
 } else{
        $sqladdtim="INSERT INTO `activeone` (`idacc`,`liked`, `idtus`) 
        VALUES ('$ida','1', '$idtus')";
        $sqltt="UPDATE `status` SET `sumlike` = sumlike+'1' WHERE `status`.`idstatus` = '$idtus' ";
        $sqltt2="UPDATE `account` SET `tuongtac` = tuongtac+'1' WHERE `account`.`idacc` = '$ida'";
        $querytt2=mysqli_query($connect, $sqltt2);
        $queryadd=mysqli_query($connect, $sqladdtim);
        $querytt=mysqli_query($connect, $sqltt);
    }
}
?>
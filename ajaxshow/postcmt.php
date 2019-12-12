<?php
session_start();
require_once ("../controller/connect.php");

$ida=$_SESSION['drid'];

$mycmt=$_POST['mycmt'];
$thisid=$_POST['thisid'];
// $thisoid=$_POST['thisoid'];
$addcmt="INSERT INTO `activeone`(`idacc`, `multilcoment`,`idtus`) 
            VALUES ('$ida','$mycmt','$thisid')";
$query=mysqli_query($connect, $addcmt);
$sqltt10="UPDATE `status` SET `sumcom` = sumcom+'1' WHERE `status`.`idstatus` = '$thisid' ";
$sqltt20="UPDATE `account` SET `tuongtac` = tuongtac+'1' WHERE `account`.`idacc` = '$ida'";
$querytt20=mysqli_query($connect, $sqltt20);
$querytt10=mysqli_query($connect, $sqltt10);
?>
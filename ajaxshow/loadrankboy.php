<?php
session_start();
require_once ("../controller/connect.php");
    $sql1 = "SELECT * FROM `account` WHERE idsex='1' ORDER BY tuongtac DESC LIMIT 10";
    $ket_qua1 = $connect->query($sql1);
    //Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
    if (!$ket_qua1) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
        exit();
    }
    //Dùng vòng lặp while truy xuất các phần tử trong table
    $rank1=1;
    while ($row1= $ket_qua1->fetch_array(MYSQLI_ASSOC)) {
        // chuyển mảng về 1 phần tử
        $tavt1=$row1['avt'];
        $tnick1=$row1['nicknam'];
        $tslo1=$row1['slogan'];
        $tpoint1=$row1['tuongtac'];
        if($rank1<10){
            $rank12="0".$rank1;
        }else{ $rank12=$rank1; }
        echo    '<div class="ranks cu-p">
                <div class="stts">'.$rank12.'</div>
                <div class="avttrender"><img src="'.$tavt1.'" alt="avt ai đó"></div>
                <div class="nametrender">'.$tnick1.'</div>
                <div class="scoretrender">'.$tpoint1.'</div>
                <div class="slogantrender">'.$tslo1.'</div>
                </div>';
        $rank1++;
    }
?>
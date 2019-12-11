<?php
session_start();
require_once ("../controller/connect.php");
    $sql2 = "SELECT * FROM `account` WHERE idsex='2' ORDER BY tuongtac DESC LIMIT 10";
    $ket_qua2 = $connect->query($sql2);
    //Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
    if (!$ket_qua2) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
        exit();
    }
    //Dùng vòng lặp while truy xuất các phần tử trong table
    $rank2=1;
    while ($row2= $ket_qua2->fetch_array(MYSQLI_ASSOC)) {
        // chuyển mảng về 1 phần tử
        $tavt2=$row2['avt'];
        $tnick2=$row2['nicknam'];
        $tslo2=$row2['slogan'];
        $tpoint2=$row2['tuongtac'];
        if($rank2<10){
            $rank22="0".$rank2;
        }else{ $rank22=$rank2; }
        echo    '<div class="ranks cu-p">
                <div class="stts">'.$rank22.'</div>
                <div class="avttrender"><img src="'.$tavt2.'" alt="avt ai đó"></div>
                <div class="nametrender">'.$tnick2.'</div>
                <div class="scoretrender">'.$tpoint2.'</div>
                <div class="slogantrender">'.$tslo2.'</div>
                </div>';
        $rank2++;
    }
?>
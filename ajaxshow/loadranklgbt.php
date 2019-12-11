<?php
session_start();
require_once ("../controller/connect.php");
    $sql3 = "SELECT * FROM `account` WHERE idsex='3' ORDER BY tuongtac DESC LIMIT 10";
    $ket_qua3 = $connect->query($sql3);
    //Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
    if (!$ket_qua3) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
        exit();
    }
    //Dùng vòng lặp while truy xuất các phần tử trong table
    $rank3=1;
    while ($row3= $ket_qua3->fetch_array(MYSQLI_ASSOC)) {
        // chuyển mảng về 1 phần tử
        $tavt3=$row3['avt'];
        $tnick3=$row3['nicknam'];
        $tslo3=$row3['slogan'];
        $tpoint3=$row3['tuongtac'];
        if($rank3<10){
            $rank32="0".$rank3;
        }else{ $rank32=$rank3; }
        echo    '<div class="ranks cu-p">
                <div class="stts">'.$rank32.'</div>
                <div class="avttrender"><img src="'.$tavt3.'" alt="avt ai đó"></div>
                <div class="nametrender">'.$tnick3.'</div>
                <div class="scoretrender">'.$tpoint3.'</div>
                <div class="slogantrender">'.$tslo3.'</div>
                </div>';
        $rank3++;
    }
?>

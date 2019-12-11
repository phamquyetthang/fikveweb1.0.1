<?php
session_start();
require_once ("../controller/connect.php");
$ida=$_SESSION['drid'];
    $sqlmytus="SELECT status.idstatus, status.idacc,status.multitus,status.img,status.sumlike,
    status.sumcom, status.time,
    TIME_TO_SEC(TIMEDIFF(CURRENT_TIMESTAMP(), time)) AS now, 
    account.nicknam, account.avt, account.idsex,positionuser.valuekm AS far 
    FROM status 
    inner join account on status.idacc = account.idacc 
    inner join positionuser on account.idposition = positionuser.idpos 
    WHERE account.idacc='$ida'  ORDER BY `status`.`idstatus` DESC";
    $mytus = $connect->query($sqlmytus);
//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
if (!$mytus) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}
//Dùng vòng lặp while truy xuất các phần tử trong table
while ($rowmytus= $mytus->fetch_array(MYSQLI_ASSOC)) {
    // chuyển mảng về 1 phần tử
    $mytustime0=$rowmytus['time'];
    $mytustime=$rowmytus['now'];
    $mytusimg=$rowmytus['img'];
    $mytuscon=$rowmytus['multitus'];
    $mysumlike=$rowmytus['sumlike'];
    $mysumcom=$rowmytus['sumcom'];
    $mytusname=$rowmytus['nicknam'];
    $mytusavt=$rowmytus['avt'];
    $mytusfar=$rowmytus['far']+1;
    // $idother=$rowmytus['idacc'];

    if($mytustime <= 60){
        echo ('<div class="hop1s myhis">
            <div class="headhs">
                <div class="avt posiavths"><img src="'.$mytusavt.'" alt="avt ai đó"></div>
                <div class="nickname">'.$mytusname.'</div>
                <div class="timeoftus">'.$mytustime.'s ago</div>
                <div class="khoangcach">0 km</div>
                <button class="far fa-times cu-p icsip banthems"></button>
            </div>
            <div class="statushs">'.$mytuscon.'</div>
            <div class="contenths">
                <img src="'.$mytusimg.'" alt="ảnh tự sướng của ai đó">
                
            </div>
            <div class="endhs">
                <form method="post">
                    <input type="submit" value="" class="thatims ttt" name="addlike">
                    <div class="fad fa-heart cu-p icsip thatims"></div>
                    <div class="endpl">'.$mysumlike.'</div>
                </form>
                    <button class="fas fa-comment-alt-edit cu-p icsip binhluans" id="btncomment"></button>
                    <div class="endpc">'.$mysumcom.'</div>
            </div>
            </div>');
        // echo $mytustime.' s ago';
    }
    else if($mytustime>60 && $mytustime<=3600){
        $tusmin=$mytustime/60;
        echo ('<div class="hop1s myhis">
            <div class="headhs">
                <div class="avt posiavths"><img src="'.$mytusavt.'" alt="avt ai đó"></div>
                <div class="nickname">'.$mytusname.'</div>
                <div class="timeoftus">'.(int)$tusmin.' m ago</div>
                <div class="khoangcach">0 km</div>
                <button class="far fa-times cu-p icsip banthems"></button>
            </div>
            <div class="statushs">'.$mytuscon.'</div>
            <div class="contenths">
                <img src="'.$mytusimg.'" alt="ảnh tự sướng của ai đó">
                
            </div>
            <div class="endhs">
                <form method="post">
                    <input type="submit" value="" class="thatims ttt" name="addlike">
                    <div class="fad fa-heart cu-p icsip thatims"></div>
                    <div class="endpl">'.$mysumlike.'</div>
                </form>
                    <button class="fas fa-comment-alt-edit cu-p icsip binhluans" id="btncomment"></button>
                    <div class="endpc">'.$mysumcom.'</div>
            </div>
            </div>');
        // echo (int)$tusmin.' m ago';
    }
    else if($mytustime>3600 && $mytustime<=86400){
        $tushour=$mytustime/3600;
        echo ('<div class="hop1s myhis">
            <div class="headhs">
                <div class="avt posiavths"><img src="'.$mytusavt.'" alt="avt ai đó"></div>
                <div class="nickname">'.$mytusname.'</div>
                <div class="timeoftus">'.(int)$tushour.' h ago</div>
                <div class="khoangcach">0 km</div>
                <button class="far fa-times cu-p icsip banthems"></button>
            </div>
            <div class="statushs">'.$mytuscon.'</div>
            <div class="contenths">
                <img src="'.$mytusimg.'" alt="ảnh tự sướng của ai đó">
                
            </div>
            <div class="endhs">
                <form method="post">
                    <input type="submit" value="" class="thatims ttt" name="addlike">
                    <div class="fad fa-heart cu-p icsip thatims"></div>
                    <div class="endpl">'.$mysumlike.'</div>
                </form>
                    <button class="fas fa-comment-alt-edit cu-p icsip binhluans" id="btncomment"></button>
                    <div class="endpc">'.$mysumcom.'</div>
            </div>
            </div>');
        // echo (int)$tushour.' h ago';
    }
    else if($mytustime>86400){
        $tusday=$mytustime/86400;
        echo ('<div class="hop1s myhis">
            <div class="headhs">
                <div class="avt posiavths"><img src="'.$mytusavt.'" alt="avt ai đó"></div>
                <div class="nickname">'.$mytusname.'</div>
                <div class="timeoftus">'.(int)$tusday.' d ago</div>
                <div class="khoangcach">0 km</div>
                <button class="far fa-times cu-p icsip banthems"></button>
            </div>
            <div class="statushs">'.$mytuscon.'</div>
            <div class="contenths">
                <img src="'.$mytusimg.'" alt="ảnh tự sướng của ai đó">
                
            </div>
            <div class="endhs">
                <form method="post">
                    <input type="submit" value="" class="thatims ttt" name="addlike">
                    <div class="fad fa-heart cu-p icsip thatims"></div>
                    <div class="endpl">'.$mysumlike.'</div>
                </form>
                    <button class="fas fa-comment-alt-edit cu-p icsip binhluans" id="btncomment"></button>
                    <div class="endpc">'.$mysumcom.'</div>
            </div>
            </div>');
        // echo (int)$tushour.' d ago';
    }
}
//Đóng kết nối database tintuc
// $connect->close();  
?>
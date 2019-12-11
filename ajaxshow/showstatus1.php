<?php
session_start();
require_once ("../controller/connect.php");
// echo("hi");
$sexvar=0;
if(isset($_SESSION['sexvar'])){
    $sexvar=$_SESSION['sexvar'];
}
if($sexvar!=0){
    $sqlsptus="SELECT status.idstatus, status.idacc,status.multitus,status.img,status.sumlike,
    status.sumcom, status.time,
    TIME_TO_SEC(TIMEDIFF(CURRENT_TIMESTAMP(), time)) AS now, 
    account.nicknam, account.avt, account.idsex,positionuser.valuekm AS far 
    FROM status 
    inner join account on status.idacc = account.idacc 
    inner join positionuser on account.idposition = positionuser.idpos 
    WHERE account.idsex=$sexvar ORDER BY `status`.`idstatus` DESC";
    }else{
        $sqlsptus="SELECT status.idstatus, status.idacc,status.multitus,status.img,status.sumlike,
        status.sumcom, status.time,
        TIME_TO_SEC(TIMEDIFF(CURRENT_TIMESTAMP(), time)) AS now, 
        account.nicknam, account.avt, account.idsex,positionuser.valuekm AS far 
        FROM status 
        inner join account on status.idacc = account.idacc 
        inner join positionuser on account.idposition = positionuser.idpos 
        WHERE 1 ORDER BY `status`.`idstatus` DESC";
    }
$ket_qua_tus = $connect->query($sqlsptus);
//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
if (!$ket_qua_tus) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}
//Dùng vòng lặp while truy xuất các phần tử trong table
while ($rowtus= $ket_qua_tus->fetch_array(MYSQLI_ASSOC)) {
    // chuyển mảng về 1 phần tử
    $tustime0=$rowtus['time'];
    $tustime=$rowtus['now'];
    $tusimg=$rowtus['img'];
    $tuscon=$rowtus['multitus'];
    $sumlike=$rowtus['sumlike'];
    $sumcom=$rowtus['sumcom'];
    $othername= $rowtus['nicknam'];
    $otheravt= $rowtus['avt'];
    $otherfar= $rowtus['far']+1;
    $idother=$rowtus['idacc'];

    if($tustime <= 60){
        echo ('<div class="hop1s">
            <div class="headhs">
                <div class="avt posiavths"><img src="'.$otheravt.'" alt="avt ai đó"></div>
                <div class="nickname">'.$othername.'</div>
                <div class="timeoftus">'.$tustime.'s ago</div>
                <div class="khoangcach">'.$otherfar.' km</div>
                <button class="far fa-times cu-p icsip banthems"></button>
            </div>
            <div class="statushs">'.$tuscon.'</div>
            <div class="contenths">
                <img src="'.$tusimg.'" alt="ảnh tự sướng của ai đó">
                <button class="fal fa-info-circle cu-p report"></button>
            </div>
            <div class="endhs">
                <form method="post">
                    <input type="submit" value="" class="thatims ttt" name="addlike">
                    <div class="fad fa-heart cu-p icsip thatims"></div>
                    <div class="endpl">'.$sumlike.'</div>
                    <input type="submit" value="" class="chonnhans ttt" name="addmess">
                    <div class="fas fa-comment-plus cu-p icsip chonnhans"></div>
                    <input type="submit" value="" class="quantams ttt" name="addcase">
                    <div class="fad fa-star cu-p icsip quantams"></div>
                </form>
                    <button class="fas fa-comment-alt-edit cu-p icsip binhluans" id="btncomment"></button>
                    <div class="endpc">'.$sumcom.'</div>
            </div>
            </div>');
        // echo $tustime.' s ago';
    }
    else if($tustime>60 && $tustime<=3600){
        $tusmin=$tustime/60;
        echo ('<div class="hop1s">
            <div class="headhs">
                <div class="avt posiavths"><img src="'.$otheravt.'" alt="avt ai đó"></div>
                <div class="nickname">'.$othername.'</div>
                <div class="timeoftus">'.(int)$tusmin.' m ago</div>
                <div class="khoangcach">'.$otherfar.' km</div>
                <button class="far fa-times cu-p icsip banthems"></button>
            </div>
            <div class="statushs">'.$tuscon.'</div>
            <div class="contenths">
                <img src="'.$tusimg.'" alt="ảnh tự sướng của ai đó">
                <button class="fal fa-info-circle cu-p report"></button>
            </div>
            <div class="endhs">
                <form method="post">
                    <input type="submit" value="" class="thatims ttt" name="addlike">
                    <div class="fad fa-heart cu-p icsip thatims"></div>
                    <div class="endpl">'.$sumlike.'</div>
                    <input type="submit" value="" class="chonnhans ttt" name="addmess">
                    <div class="fas fa-comment-plus cu-p icsip chonnhans"></div>
                    <input type="submit" value="" class="quantams ttt" name="addcase">
                    <div class="fad fa-star cu-p icsip quantams"></div>
                </form>
                    <button class="fas fa-comment-alt-edit cu-p icsip binhluans" id="btncomment"></button>
                    <div class="endpc">'.$sumcom.'</div>
            </div>
            </div>');
        // echo (int)$tusmin.' m ago';
    }
    else if($tustime>3600 && $tustime<=86400){
        $tushour=$tustime/3600;
        echo ('<div class="hop1s">
            <div class="headhs">
                <div class="avt posiavths"><img src="'.$otheravt.'" alt="avt ai đó"></div>
                <div class="nickname">'.$othername.'</div>
                <div class="timeoftus">'.(int)$tushour.' h ago</div>
                <div class="khoangcach">'.$otherfar.' km</div>
                <button class="far fa-times cu-p icsip banthems"></button>
            </div>
            <div class="statushs">'.$tuscon.'</div>
            <div class="contenths">
                <img src="'.$tusimg.'" alt="ảnh tự sướng của ai đó">
                <button class="fal fa-info-circle cu-p report"></button>
            </div>
            <div class="endhs">
                <form method="post">
                    <input type="submit" value="" class="thatims ttt" name="addlike">
                    <div class="fad fa-heart cu-p icsip thatims"></div>
                    <div class="endpl">'.$sumlike.'</div>
                    <input type="submit" value="" class="chonnhans ttt" name="addmess">
                    <div class="fas fa-comment-plus cu-p icsip chonnhans"></div>
                    <input type="submit" value="" class="quantams ttt" name="addcase">
                    <div class="fad fa-star cu-p icsip quantams"></div>
                </form>
                    <button class="fas fa-comment-alt-edit cu-p icsip binhluans" id="btncomment"></button>
                    <div class="endpc">'.$sumcom.'</div>
            </div>
            </div>');
        // echo (int)$tushour.' h ago';
    }
    else if($tustime>86400){
        $tusday=$tustime/86400;
        echo ('<div class="hop1s">
            <div class="headhs">
                <div class="avt posiavths"><img src="'.$otheravt.'" alt="avt ai đó"></div>
                <div class="nickname">'.$othername.'</div>
                <div class="timeoftus">'.(int)$tusday.' d ago</div>
                <div class="khoangcach">'.$otherfar.' km</div>
                <button class="far fa-times cu-p icsip banthems"></button>
            </div>
            <div class="statushs">'.$tuscon.'</div>
            <div class="contenths">
                <img src="'.$tusimg.'" alt="ảnh tự sướng của ai đó">
                <button class="fal fa-info-circle cu-p report"></button>
            </div>
            <div class="endhs">
                <form method="post">
                    <input type="submit" value="" class="thatims ttt" name="addlike">
                    <div class="fad fa-heart cu-p icsip thatims"></div>
                    <div class="endpl">'.$sumlike.'</div>
                    <input type="submit" value="" class="chonnhans ttt" name="addmess">
                    <div class="fas fa-comment-plus cu-p icsip chonnhans"></div>
                    <input type="submit" value="" class="quantams ttt" name="addcase">
                    <div class="fad fa-star cu-p icsip quantams"></div>
                </form>
                    <button class="fas fa-comment-alt-edit cu-p icsip binhluans" id="btncomment"></button>
                    <div class="endpc">'.$sumcom.'</div>
            </div>
            </div>');
        // echo (int)$tushour.' d ago';
    }
}
//Đóng kết nối database tintuc
// $connect->close();  
?>
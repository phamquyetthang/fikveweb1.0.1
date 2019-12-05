<?php

$sqltus = "SELECT *, TIME_TO_SEC(TIMEDIFF(CURRENT_TIMESTAMP(), time)) AS now 
        FROM `status` WHERE 1 ORDER BY idstatus DESC";
$ket_qua_tus = $connect->query($sqltus);
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
    
    $idother=$rowtus['idacc'];

    $other_user = "SELECT account.nicknam, account.avt, positionuser.valuekm AS far 
                FROM account inner join positionuser on account.idposition = positionuser.idpos 
                WHERE account.idacc=$idother";
    $other_ones =$connect->query($other_user);
    //Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
    if (!$other_ones) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
    }
    while ($rowother= $other_ones->fetch_array(MYSQLI_ASSOC)) {
        // chuyển mảng về 1 phần tử
        $othername= $rowother['nicknam'];
        $otheravt= $rowother['avt'];
        $otherfar= $rowother['far'];
    }
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
                    <button class="fas fa-comment-alt-edit cu-p icsip binhluans"></button>
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
                    <button class="fas fa-comment-alt-edit cu-p icsip binhluans"></button>
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
                    <button class="fas fa-comment-alt-edit cu-p icsip binhluans"></button>
                    <div class="endpc">'.$sumcom.'</div>
            </div>
            </div>');
        // echo (int)$tushour.' h ago';
    }
    else if($tustime>86400 && $tustime<=604800){
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
                    <button class="fas fa-comment-alt-edit cu-p icsip binhluans"></button>
                    <div class="endpc">'.$sumcom.'</div>
            </div>
            </div>');
        // echo (int)$tushour.' d ago';
    }
    else{
        echo ('<div class="hop1s">
            <div class="headhs">
                <div class="avt posiavths"><img src="'.$otheravt.'" alt="avt ai đó"></div>
                <div class="nickname">'.$othername.'</div>
                <div class="timeoftus">'.$tustime0.'</div>
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
                    <button class="fas fa-comment-alt-edit cu-p icsip binhluans"></button>
                    <div class="endpc">'.$sumcom.'</div>
            </div>
            </div>');
        // echo $tustime0;
    }
}
//Đóng kết nối database tintuc
// $connect->close();  
?>
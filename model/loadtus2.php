<?php

$sqltus2 = "SELECT *, TIME_TO_SEC(TIMEDIFF(CURRENT_TIMESTAMP(), time)) AS now 
        FROM `status` WHERE 1 ORDER BY (sumlike+sumcom) DESC";
$ket_qua_tus2 = $connect->query($sqltus2);
//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
if (!$ket_qua_tus2) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}
//Dùng vòng lặp while truy xuất các phần tử trong table
while ($rowtus2= $ket_qua_tus2->fetch_array(MYSQLI_ASSOC)) {
    // chuyển mảng về 1 phần tử
    $tustime02=$rowtus2['time'];
    $tustime2=$rowtus2['now'];
    $tusimg2=$rowtus2['img'];
    $tuscon2=$rowtus2['multitus'];
    $sumlike2=$rowtus2['sumlike'];
    $sumcom2=$rowtus2['sumcom'];
    
    $idother2=$rowtus2['idacc'];

    $other_user2 = "SELECT account.nicknam, account.avt, positionuser.valuekm AS far 
                FROM account inner join positionuser on account.idposition = positionuser.idpos 
                WHERE account.idacc=$idother2";
    $other_ones2 =$connect->query($other_user2);
    //Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
    if (!$other_ones2) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
    }
    while ($rowother2= $other_ones2->fetch_array(MYSQLI_ASSOC)) {
        // chuyển mảng về 1 phần tử
        $othername2= $rowother2['nicknam'];
        $otheravt2= $rowother2['avt'];
        $otherfar2= $rowother2['far'];
    }
    if($tustime2 <= 60){
        echo ('<div class="hop1s">
            <div class="headhs">
                <div class="avt posiavths"><img src="'.$otheravt2.'" alt="avt ai đó"></div>
                <div class="nickname">'.$othername2.'</div>
                <div class="timeoftus">'.$tustime2.'s ago</div>
                <div class="khoangcach">'.$otherfar2.' km</div>
                <button class="far fa-times cu-p icsip banthems"></button>
            </div>
            <div class="statushs">'.$tuscon2.'</div>
            <div class="contenths">
                <img src="'.$tusimg2.'" alt="ảnh tự sướng của ai đó">
                <button class="fal fa-info-circle cu-p report"></button>
            </div>
            <div class="endhs">
                <form method="post">
                    <input type="submit" value="" class="thatims ttt" name="addlike">
                    <div class="fad fa-heart cu-p icsip thatims"></div>
                    <div class="endpl">'.$sumlike2.'</div>
                    <input type="submit" value="" class="chonnhans ttt" name="addmess">
                    <div class="fas fa-comment-plus cu-p icsip chonnhans"></div>
                    <input type="submit" value="" class="quantams ttt" name="addcase">
                    <div class="fad fa-star cu-p icsip quantams"></div>
                </form>
                    <button class="fas fa-comment-alt-edit cu-p icsip binhluans"></button>
                    <div class="endpc">'.$sumcom2.'</div>
            </div>
            </div>');
        // echo $tustime2.' s ago';
    }
    else if($tustime2>60 && $tustime2<=3600){
        $tusmin2=$tustime2/60;
        echo ('<div class="hop1s">
            <div class="headhs">
                <div class="avt posiavths"><img src="'.$otheravt2.'" alt="avt ai đó"></div>
                <div class="nickname">'.$othername2.'</div>
                <div class="timeoftus">'.(int)$tusmin2.' m ago</div>
                <div class="khoangcach">'.$otherfar2.' km</div>
                <button class="far fa-times cu-p icsip banthems"></button>
            </div>
            <div class="statushs">'.$tuscon2.'</div>
            <div class="contenths">
                <img src="'.$tusimg2.'" alt="ảnh tự sướng của ai đó">
                <button class="fal fa-info-circle cu-p report"></button>
            </div>
            <div class="endhs">
                <form method="post">
                    <input type="submit" value="" class="thatims ttt" name="addlike">
                    <div class="fad fa-heart cu-p icsip thatims"></div>
                    <div class="endpl">'.$sumlike2.'</div>
                    <input type="submit" value="" class="chonnhans ttt" name="addmess">
                    <div class="fas fa-comment-plus cu-p icsip chonnhans"></div>
                    <input type="submit" value="" class="quantams ttt" name="addcase">
                    <div class="fad fa-star cu-p icsip quantams"></div>
                </form>
                    <button class="fas fa-comment-alt-edit cu-p icsip binhluans"></button>
                    <div class="endpc">'.$sumcom2.'</div>
            </div>
            </div>');
        // echo (int)$tusmin.' m ago';
    }
    else if($tustime2>3600 && $tustime2<=86400){
        $tushour2=$tustime2/3600;
        echo ('<div class="hop1s">
            <div class="headhs">
                <div class="avt posiavths"><img src="'.$otheravt2.'" alt="avt ai đó"></div>
                <div class="nickname">'.$othername2.'</div>
                <div class="timeoftus">'.(int)$tushour2.' h ago</div>
                <div class="khoangcach">'.$otherfar2.' km</div>
                <button class="far fa-times cu-p icsip banthems"></button>
            </div>
            <div class="statushs">'.$tuscon2.'</div>
            <div class="contenths">
                <img src="'.$tusimg2.'" alt="ảnh tự sướng của ai đó">
                <button class="fal fa-info-circle cu-p report"></button>
            </div>
            <div class="endhs">
                <form method="post">
                    <input type="submit" value="" class="thatims ttt" name="addlike">
                    <div class="fad fa-heart cu-p icsip thatims"></div>
                    <div class="endpl">'.$sumlike2.'</div>
                    <input type="submit" value="" class="chonnhans ttt" name="addmess">
                    <div class="fas fa-comment-plus cu-p icsip chonnhans"></div>
                    <input type="submit" value="" class="quantams ttt" name="addcase">
                    <div class="fad fa-star cu-p icsip quantams"></div>
                </form>
                    <button class="fas fa-comment-alt-edit cu-p icsip binhluans"></button>
                    <div class="endpc">'.$sumcom2.'</div>
            </div>
            </div>');
        // echo (int)$tushour.' h ago';
    }
    else if($tustime2>86400 && $tustime2<=604800){
        $tusday2=$tustime2/86400;
        echo ('<div class="hop1s">
            <div class="headhs">
                <div class="avt posiavths"><img src="'.$otheravt2.'" alt="avt ai đó"></div>
                <div class="nickname">'.$othername2.'</div>
                <div class="timeoftus">'.(int)$tusday2.' d ago</div>
                <div class="khoangcach">'.$otherfar2.' km</div>
                <button class="far fa-times cu-p icsip banthems"></button>
            </div>
            <div class="statushs">'.$tuscon2.'</div>
            <div class="contenths">
                <img src="'.$tusimg2.'" alt="ảnh tự sướng của ai đó">
                <button class="fal fa-info-circle cu-p report"></button>
            </div>
            <div class="endhs">
                <form method="post">
                    <input type="submit" value="" class="thatims ttt" name="addlike">
                    <div class="fad fa-heart cu-p icsip thatims"></div>
                    <div class="endpl">'.$sumlike2.'</div>
                    <input type="submit" value="" class="chonnhans ttt" name="addmess">
                    <div class="fas fa-comment-plus cu-p icsip chonnhans"></div>
                    <input type="submit" value="" class="quantams ttt" name="addcase">
                    <div class="fad fa-star cu-p icsip quantams"></div>
                </form>
                    <button class="fas fa-comment-alt-edit cu-p icsip binhluans"></button>
                    <div class="endpc">'.$sumcom2.'</div>
            </div>
            </div>');
        // echo (int)$tushour.' d ago';
    }
    else{
        echo ('<div class="hop1s">
            <div class="headhs">
                <div class="avt posiavths"><img src="'.$otheravt2.'" alt="avt ai đó"></div>
                <div class="nickname">'.$othername2.'</div>
                <div class="timeoftus">'.$tustime02.'</div>
                <div class="khoangcach">'.$otherfar2.' km</div>
                <button class="far fa-times cu-p icsip banthems"></button>
            </div>
            <div class="statushs">'.$tuscon2.'</div>
            <div class="contenths">
                <img src="'.$tusimg2.'" alt="ảnh tự sướng của ai đó">
                <button class="fal fa-info-circle cu-p report"></button>
            </div>
            <div class="endhs">
            <form method="post">
			<div class="endhs">
                <form method="post">
                    <input type="submit" value="" class="thatims ttt" name="addlike">
                    <div class="fad fa-heart cu-p icsip thatims"></div>
                    <div class="endpl">'.$sumlike2.'</div>
                    <input type="submit" value="" class="chonnhans ttt" name="addmess">
                    <div class="fas fa-comment-plus cu-p icsip chonnhans"></div>
                    <input type="submit" value="" class="quantams ttt" name="addcase">
                    <div class="fad fa-star cu-p icsip quantams"></div>
                </form>
                    <button class="fas fa-comment-alt-edit cu-p icsip binhluans"></button>
                    <div class="endpc">'.$sumcom2.'</div>
            </div>
            </div>');
        // echo $tustime0;
    }
}
//Đóng kết nối database tintuc
// $connect->close();  
?>
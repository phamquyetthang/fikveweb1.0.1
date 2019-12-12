<?php
session_start();
require_once ("../controller/connect.php");
$sexvar=0;
if(isset($_SESSION['sexvar'])){
    $sexvar=$_SESSION['sexvar'];
}
if($sexvar!=0){
    $sqlsptus2="SELECT status.idstatus, status.idacc,status.multitus,status.img,status.sumlike,
    status.sumcom, status.time,
    TIME_TO_SEC(TIMEDIFF(CURRENT_TIMESTAMP(), time)) AS now, 
    account.nicknam, account.avt, account.idsex,positionuser.valuekm AS far 
    FROM status 
    inner join account on status.idacc = account.idacc 
    inner join positionuser on account.idposition = positionuser.idpos 
    WHERE account.idsex=$sexvar ORDER BY (sumlike+sumcom) DESC";
    }else{
        $sqlsptus2="SELECT status.idstatus, status.idacc,status.multitus,status.img,status.sumlike,
        status.sumcom, status.time,
        TIME_TO_SEC(TIMEDIFF(CURRENT_TIMESTAMP(), time)) AS now, 
        account.nicknam, account.avt, account.idsex,positionuser.valuekm AS far 
        FROM status 
        inner join account on status.idacc = account.idacc 
        inner join positionuser on account.idposition = positionuser.idpos 
        WHERE 1 ORDER BY (sumlike+sumcom) DESC";
    }
$ket_qua_tus2 = $connect->query($sqlsptus2);
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
    $othername2= $rowtus2['nicknam'];
    $otheravt2= $rowtus2['avt'];
    $otherfar2= $rowtus2['far']+1;
    $idothe2r=$rowtus2['idacc'];
    $idtus=$rowtus2['idstatus'];
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
                <input type="hidden" name="thatid" class="thatid" value="'.$idtus.'">
                </form>
                <button class="fad fa-heart cu-p icsip thatims" value="'.$idtus.'" onclick="getTim(this)"></button>
                <div class="endpl">'.$sumlike2.'</div>
                <button class="fas fa-comment-plus cu-p icsip chonnhans" value="'.$idtus.'"></button>
                <button class="fad fa-star cu-p icsip quantams" value="'.$idtus.'"></button>
                <button class="fas fa-comment-alt-edit cu-p icsip binhluans" value="'.$idtus.'" onclick="getCmt(this)"></button>
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
                <input type="hidden" name="thatid" class="thatid" value="'.$idtus.'">
                </form>
                <button class="fad fa-heart cu-p icsip thatims" value="'.$idtus.'" onclick="getTim(this)"></button>
                <div class="endpl">'.$sumlike2.'</div>
                <button class="fas fa-comment-plus cu-p icsip chonnhans" value="'.$idtus.'></button>
                <button class="fad fa-star cu-p icsip quantams" value="'.$idtus.'"></button>
                <button class="fas fa-comment-alt-edit cu-p icsip binhluans" value="'.$idtus.'" onclick="getCmt(this)"></button>
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
            <input type="hidden" name="thatid" class="thatid" value="'.$idtus.'">
            </form>
            <button class="fad fa-heart cu-p icsip thatims" value="'.$idtus.'"onclick="getTim(this)"></button>
            <div class="endpl">'.$sumlike2.'</div>
            <button class="fas fa-comment-plus cu-p icsip chonnhans" value="'.$idtus.'"></button>
            <button class="fad fa-star cu-p icsip quantams" value="'.$idtus.'"></button>
            <button class="fas fa-comment-alt-edit cu-p icsip binhluans" value="'.$idtus.'" onclick="getCmt(this)"></button>
            <div class="endpc">'.$sumcom2.'</div>
            </div>
            </div>');
        // echo (int)$tushour.' h ago';
    }
    else if($tustime2>86400){
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
                <input type="hidden" name="thatid" class="thatid" value="'.$idtus.'">
                </form>
                    <button class="fad fa-heart cu-p icsip thatims" value="'.$idtus.'" onclick="getTim(this)"></button>
                    <div class="endpl">'.$sumlike2.'</div>
                    <button class="fas fa-comment-plus cu-p icsip chonnhans" value="'.$idtus.'"></button>
                    <button class="fad fa-star cu-p icsip quantams" value="'.$idtus.'"></button>
                    <button class="fas fa-comment-alt-edit cu-p icsip binhluans" value="'.$idtus.'" onclick="getCmt(this)"></button>
                    <div class="endpc">'.$sumcom2.'</div>
            </div>
            </div>');
        // echo (int)$tushour.' d ago';
    }
   
}
echo('	<script>
var v="";
function getCmt(btn){
    v= $(btn).val();
    
    console.log(v);
    $.ajax({
        url : "ajaxshow/showcmt.php",
        type : "post",
        data : { method: "showcmt",
            v:v,
            
        },
        success : function (result){
            $(".blcosan").html(result);
        }
    });
    
};
$(".binhluans").click(
    function openCmt(){
        document.getElementById("commenttus").style.display="block";
        manche.setAttribute("class", "manChanAll");
        console.log("3528");
    }
);
function getTim(btn){
    var tim=$(btn).val();
    ;
        $.ajax({
            url : "ajaxshow/thatim.php",
            type : "post",
            data : { method: "thatim",
                tim:tim,
                
            },
        });
};
</script>');
//Đóng kết nối database tintuc
// $connect->close();  
?>
// $(document).ready(function () { // Khi nào trang được load thì chạy
//     $('#upanh').live('change', function () { // Khi nào chọn file thì chạy
//         $("#imageform").ajaxForm({
//             success: showResponse // Xử lý trả về từ server bằng funtion showResponse
//         }).submit(); // Submit Form
//     });
// });
// function showResponse(response) { // Xử lý kết quả trả về với biến response là kết quả trả về từ server
//     console.log(response); // Đưa vào console những thông tin trả về
//     $("#preview").prepend(response); // Đổ vào preview kết quả trả về từ server
// }


var mytus = document.getElementById('mytus');
var realtus =document.getElementById('realtus');
var str_mytus=" ";
function clickButtontus(obj){
    var contus = obj.innerHTML;//lấy nội dung từ các button
    str_mytus = str_mytus + contus;
    mytus.innerHTML = str_mytus;
    realtus.value=mytus.innerHTML;
}
function clickDele(del){
    var contus = del.innerHTML;
    str_mytus = contus;
    mytus.innerHTML = str_mytus;
    realtus.value=mytus.innerHTML;
}

var mycmt = document.getElementById('mycmt');
var realmycmt =document.getElementById('mycmts');
var str_mycmt=" ";
function clickCmt(obj){
    var concmt = obj.innerHTML;//lấy nội dung từ các button
    str_mycmt = str_mycmt + concmt;
    mycmt.innerHTML = str_mycmt;
    realmycmt.value=mycmt.innerHTML;
}
function delecmt(del){
    var concmt = del.innerHTML;
    str_mycmt = concmt;
    mycmt.innerHTML = str_mycmt;
    realmycmt.value=mycmt.innerHTML;
}
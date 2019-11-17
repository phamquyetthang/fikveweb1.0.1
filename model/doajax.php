<?php
/* @Author: HoangVanQuy
 * @Url: 
 */
$path = "uploads/"; // Thư mục upload
$valid_formats = array("jpg", "png", "gif", "bmp","PNG",'JPG','GIF'); // Các đuôi file cho phép
$valid_type = array('image/gif','image/jpeg','image/png','image/bmp'); //Các định dạng cho phép
if (isset($_POST)) { // Kiểm tra tồn tại post request
    $name = $_FILES['upanh']['name']; // Lấy tên
    $size = $_FILES['upanh']['size']; // Lấy kích thước
    $type = $_FILES['upanh']['type']; // Lấy kiểu file
    if (strlen($name)) { // Kiểm tra xem đã có file nào được chọn
        list($txt, $ext) = explode(".", $name); // Lấy đuôi file sau dấu . vào biến $ext
        if (in_array($ext, $valid_formats)) { // Kiểm tra đúng với các đuôi file cho phép
            if(in_array($type, $valid_type)){ // Kiển tra định dạng (Content-Type) của file cho phép
                if ($size < (1024 * 1024)) { // Kiểm tra dung lượng file. Nếu nhỏ hơn 1 Mb = 1024 * 1024 thì tiếp tục
                    $actual_image_name = time() . substr(str_replace(" ", "_", $txt), 5) . "." . $ext; // Đổi tên file upload
                    $tmp = $_FILES['upanh']['tmp_name']; // Lấy thư mục lưu tạm upload file
                    if (move_uploaded_file($tmp, $path . $actual_image_name)) { // Di chuyển vào thư mục $path
                        echo "<img src='model/uploads/" . $actual_image_name . "'  class='preview'>"; // Nếu di chuyển thành công trả về html img để đẩy vào preview
                    } else
                        echo "Lỗi không xác đinh"; // Nếu di chuyển không thành công
                } else
                    echo "Tối đa upload 1 MB"; // Nếu file upload lớn hơn 1 MB
            } else
            echo "Không đúng định dạng"; // Nếu Content-Type không nằm trong danh sách cho phép
        } else
            echo "Không đúng định dạng"; // Nếu đuôi file không nằm trong danh sách cho phép
    } else
        echo "Hãy chọn một hình ảnh !"; // Nếu chưa có file gì được gửi đên
}


?>
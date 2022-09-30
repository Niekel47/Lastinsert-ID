<?php
/* Thông tin CSDL. Giả sử bạn đang chạy MySQL Server với thiết lập mặc định (user 'root' và không có mật khẩu) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test');
 
/* Cố gắng kết nối với cơ sở dữ liệu MySQL */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Kiểm tra kết nối
if($link === false){
    die("ERROR: Không thể kết nối. " . mysqli_connect_error());
}

// Cố gắng thực hiện câu lệnh INSERT
// $sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Ron', 'Weasley', 'ronweasley@mail.com')";
// if(mysqli_query($link, $sql)){
//     // Lấy ID đã chèn cuối cùng
//     $last_id = mysqli_insert_id($link);
//     echo "Chèn bản ghi thành công. ID đã chèn cuối cùng là: " . $last_id;
// } else{
//     echo "ERROR: Không thể thực thi câu lệnh $sql. " . mysqli_error($link);
// }
 
// Đóng kết nối
// mysqli_close($link);
?>
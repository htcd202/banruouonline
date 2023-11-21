


<?php
include('../../config/connect.php'); // Import file cấu hình kết nối CSDL

// Kiểm tra kết nối CSDL
if ($mysqli->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $mysqli->connect_error);
}
//sản phẩm
$tensp = $_POST['tensp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];
$loaisp = $_POST['loaisp'];
$hansudung = $_POST['hansudung'];
$ngaynhap = $_POST['ngaynhap'];
$trangthai = $_POST['trangthai'];
$nongdocon = $_POST['nongdocon'];
$mota = $_POST['mota'];
$namsanxuat = $_POST['namsanxuat'];
$hinhanh = $_POST['hinhanh'];


//User
$id = $_POST['id'];
$taikhoan = $_POST['taikhoan'];
$matkhau = $_POST['matkhau'];
$trangthai = $_POST['trangthai'];
$hoten = $_POST['hoten'];
$gioitinh = $_POST['gioitinh'];
$email = $_POST['email'];
$sodienthoai = $_POST['sodienthoai'];
$diachi = $_POST['diachi'];
$namsinh = $_POST['namsinh'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['themsp'])) {
        // Xử lý thêm sản phẩm
        $sql = "INSERT INTO sanpham (tensp, giasp, soluong, loaisp, hansudung, ngaynhap, trangthai, nongdocon, mota, namsanxuat, hinhanh) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("sssssssssss", $tensp, $giasp, $soluong, $loaisp, $hansudung, $ngaynhap, $trangthai, $nongdocon, $mota, $namsanxuat, $hinhanh);

        if ($stmt->execute()) {
            // Thành công, điều hướng người dùng
            header('Location: ../../index.php?action=quanlysanpham');
        } else {
            // Xử lý lỗi khi thêm sản phẩm
            echo "Lỗi: " . mysqli_error($mysqli);
        }
    }
} else {
    echo "Lỗi: Yêu cầu không hợp lệ.";
}
        if (isset($_POST['suasp'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql_update = "UPDATE sanpham SET 
                      tensp = '".$tensp."',
                      giasp = '".$giasp."',
                      soluong = '".$soluong."',
                      loaisp = '".$loaisp."',
                      hansudung = '".$hansudung."',
                      ngaynhap = '".$ngaynhap."',
                      trangthai = '".$trangthai."',
                      nongdocon = '".$nongdocon."',
                      mota = '".$mota."',
                      namsanxuat = '".$namsanxuat."'
                      WHERE id = '".$id."'";
        if (mysqli_query($mysqli, $sql_update)) {
            header('Location:../../index.php?action=quanlysanpham');
        } else {
            echo "Lỗi: " . mysqli_error($mysqli);
        }
    } else {
        // Xử lý lỗi khi không có tham số id
        echo "Lỗi: Tham số id không tồn tại.";
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['dangky'])) {
        // Xử lý thêm sản phẩm
        $sql = "INSERT INTO user (taikhoan, matkhau, trangthai, hoten, gioitinh, email, sodienthoai, diachi, namsinh) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("sssssssss", $taikhoan, $matkhau, $trangthai, $hoten, $gioitinh, $email, $sodienthoai, $namsinh, $diachi);

        if ($stmt->execute()) {
            header('Location: ../../http://localhost/btlweb/index.php?quanly=dangky');
        } else {
            // Xử lý lỗi khi thêm sản phẩm
            echo "Lỗi: " . mysqli_error($mysqli);
        }
    }
} else {
    echo "Lỗi: Yêu cầu không hợp lệ.";
}
// Đóng kết nối CSDL
    $mysqli->close();
    ?>

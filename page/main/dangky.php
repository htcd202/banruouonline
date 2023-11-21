
<div class="container red8b0000 p-5">
        <h2 class="text-center">Đăng Ký Thành Viên</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="Hoten">Họ Tên:</label>
                <input type="text" class="form-control" name="hoten" required>
            </div>

            <div class="form-group">
                <label for="Tendangnhap">Tên Đăng Nhập:</label>
                <input type="text" class="form-control" name="taikhoan" required>
            </div>

            <div class="form-group">
                <label for="Matkhau">Mật Khẩu:</label>
                <input type="password" class="form-control" name="matkhau" required>
            </div>

            <div class="form-group">
                <label for="confirm_password">Nhập Lại Mật Khẩu:</label>
                <input type="password" class="form-control" name="confirm_password" required>
            </div>

            <div class="form-group">
                <label for="Gioitinh">Giới Tính:</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gioitinh" value="Nam" id="nam">
                        <label class="form-check-label" for="nam">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gioitinh" value="Nữ" id="nu">
                        <label class="form-check-label" for="nu">Nữ</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="Ngaysinh">Ngày Sinh:</label>
                <input type="date" class="form-control" name="namsinh" required>
            </div>

            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="form-group">
                <label for="Sodienthoai">Số Điện Thoại:</label>
                <input type="text" class="form-control" name="sodienthoai" pattern="[0-9]{10}" required>
            </div>

            <div class="form-group">
                <label for="Diachi">Địa Chỉ:</label>
                <textarea class="form-control" name="diachi" required></textarea>
            </div>

            <button name="dangky" type="submit" class="btn btn-primary">Đăng Ký</button>
        </form>
    </div>
    
<?php

$mysqli = new mysqli("localhost", "root", "", "cuahangruou");

// Kiểm tra kết nối
if ($mysqli->connect_errno) {
    echo "Kết nối tới MySQL thất bại: " . $mysqli->connect_error;
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['dangky'])) {
        // Xử lý thêm người dùng
        $taikhoan = $_POST['taikhoan'];
        $matkhau = $_POST['matkhau'];
        $hoten = $_POST['hoten'];
        $gioitinh = $_POST['gioitinh'];
        $email = $_POST['email'];
        $sodienthoai = $_POST['sodienthoai'];
        $diachi = $_POST['diachi'];
        $namsinh = $_POST['namsinh'];

        $sql = "INSERT INTO user (taikhoan, matkhau, hoten, gioitinh, email, sodienthoai, diachi, namsinh) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ssssssss", $taikhoan, $matkhau, $hoten, $gioitinh, $email, $sodienthoai, $diachi, $namsinh);

        if ($stmt->execute()) {
            echo "Đăng ký thành công";
        } else {
            // Xử lý lỗi khi thêm người dùng
            echo "Lỗi: " . $stmt->error;
        }
    }
} else {
    
}

$mysqli->close();
?>
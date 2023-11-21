<?php
// Kiểm tra xem form đã được gửi đi hay chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $tendangnhap = $_POST["Tendangnhap"];
    $matkhau = $_POST["Matkhau"];

    $query = "SELECT * FROM user WHERE taikhoan='$tendangnhap' AND matkhau='$matkhau'";
    $result = $mysqli->query($query);

    if ($result === false) {
        die("Câu truy vấn SQL có lỗi: " . $mysqli->error);
    }

    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $taikhoan;
        $_SESSION['avatar'] = $row['avatar']; 
        header("Location: index.php");
        exit();
    } else {
        $error_message = "Tên đăng nhập hoặc mật khẩu không đúng.";
    }
}
?>

<!-- HTML Form -->
<div class="container red8b0000">
    <h2 class="text-center">Đăng Nhập</h2>
    <?php
    // Hiển thị thông báo lỗi nếu có
    if (isset($error_message)) {
        echo '<div class="alert alert-danger" role="alert">' . $error_message . '</div>';
    }
    ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="Tendangnhap">Tên Đăng Nhập:</label>
            <input type="text" class="form-control" name="Tendangnhap" required>
        </div>

        <div class="form-group">
            <label for="Matkhau">Mật Khẩu:</label>
            <input type="password" class="form-control" name="Matkhau" required>
        </div>

        <button type="submit" class="btn btn-primary">Đăng Nhập</button>
    </form>
</div>

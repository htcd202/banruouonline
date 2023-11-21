 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 <div class="lienhe" >
    <div class="container p-5">
        <div class="container p-5">
            <div class="row">
                <div class="col-6">
                    <div class="container red8b0000">
                        <p class=" text-center center red8b0000 h2 m-2">Thông tin liên hệ</p>
                        <p>Bài tập lớn Web cửa hàng bán rượu</p>

                        <p>Hotline: 0344 707 704</p>

                        <p> Email: info@winecellar.vn</p>

                        <p>HỆ THỐNG CỬA HÀNG  NHẮN TIN FACEBOOK</p>
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class=" btn btn-danger button secondary" style="border-radius:99px;">
                            Nhắn tin Facebook
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="container red8b0000">
                        <h2 class="text-center ">Liên hệ</h2>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="Hoten">Họ Tên:</label>
                                <input type="text" class="form-control" name="hoten" required>
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
                                <label for="noidung">Nội dung:</label>
                                <input type="text" class="form-control" name="noidung" required>
                            </div>
                            <button class="btn btn-danger mt-2" type="submit" name="gui">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <?php

    $mysqli = new mysqli("localhost", "root", "", "cuahangruou");

// Kiểm tra kết nối
    if ($mysqli->connect_errno) {
        echo "Kết nối tới MySQL thất bại: " . $mysqli->connect_error;
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['gui'])) {
        // Xử lý thêm người dùng
            $hoten = $_POST['hoten'];
            $email = $_POST['email'];
            $sodienthoai = $_POST['sodienthoai'];
            $noidung = $_POST['noidung'];

            $sql = "INSERT INTO lienhe ( Hoten, Email, SDT, Noidung) VALUES (?, ?, ?, ?)";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("ssss", $hoten, $email, $sodienthoai, $noidung);

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

<?php
include('../../config/connect.php');
$sql_sua = "SELECT * FROM sanpham WHERE id='" . $_GET['id'] . "'";
$result = $mysqli->query($sql_sua);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
    include("../menu.php");
    include("../header.php");
    include("../main.php");
    include("../footer.php");
    ?>

    <div class="container">
        <h2 class="mt-4">Sửa Sản Phẩm</h2>
        <form method="post" action="xuly.php">
            <?php
            if ($result) {
                $dong = mysqli_fetch_array($result);
                if ($dong) {
                    echo '<div class="form-group">';
                    echo '<label for="tensp">Tên Sản Phẩm:</label>';
                    echo '<input type="text" class="form-control" name="tensp" value="' . $dong['tensp'] . '" required>';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="giasp">Giá Sản Phẩm:</label>';
                    echo '<input type="number" class="form-control" name="giasp" value="' . $dong['giasp'] . '" required>';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="soluong">Số Lượng:</label>';
                    echo '<input type="number" class="form-control" name="soluong" value="' . $dong['soluong'] . '" required>';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="loaisp">Loại Sản Phẩm:</label>';
                    echo '<input type="text" class="form-control" name="loaisp" value="' . $dong['loaisp'] . '" required>';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="hansudung">Hạn Sử Dụng:</label>';
                    echo '<input type="date" class="form-control" name="hansudung" value="' . $dong['hansudung'] . '" required>';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="ngaynhap">Ngày Nhập:</label>';
                    echo '<input type="date" class="form-control" name="ngaynhap" value="' . $dong['ngaynhap'] . '" required>';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="trangthai">Trạng Thái:</label>';
                    echo '<input type="text" class="form-control" name="trangthai" value="' . $dong['trangthai'] . '" required>';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="nongdocon">Nồng Độ Cồn:</label>';
                    echo '<input type="number" class="form-control" name="nongdocon" value="' . $dong['nongdocon'] . '" required>';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="mota">Mô Tả:</label>';
                    echo '<textarea class="form-control" name="mota" required>' . $dong['mota'] . '</textarea>';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="namsanxuat">Năm Sản Xuất:</label>';
                    echo '<input type="date" class="form-control" name="namsanxuat" value="' . $dong['namsanxuat'] . '" required>';
                    echo '</div>';
                } else {
                    echo "Không tìm thấy sản phẩm có ID tương ứng.";
                }
            } else {
                echo "Lỗi truy vấn CSDL.";
            }
            ?>
            <button name="suasp" type="submit" class="btn btn-primary">Sửa Sản Phẩm</button>
        </form>
    </div>
</body>
</html>

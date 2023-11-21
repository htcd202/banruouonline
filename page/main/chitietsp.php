<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM sanpham WHERE id = $id";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $tenSP = $row['tensp'];
        $giaSP = $row['giasp'];
        $motaSP = $row['mota'];
        $hinhanhSP = $row['hinhanh'];
        $nongdocon = $row['nongdocon'];
        $namsanxuat = $row['namsanxuat'];
        $ngaynhap = $row['ngaynhap'];
        $hansudung = $row['hansudung'];
        $trangthai = $row['trangthai'];

        echo '<div class="container mt-5 mb-5">';
        echo '<form method="post" action="index.php?quanly=giohang">';
        echo '<div class="card bg8b0000">';
        echo '<div class="row">';
        echo '<div class="col-md-4">';
        echo "<img src='img/" . $hinhanhSP . "' alt='$tenSP' class='img-fluid'>";
        echo '</div>';
        echo '<div class="col-md-8 p-4">';
        echo "<h1 class='my-4'>Sản phẩm: $tenSP</h1>";
        echo "<p>Mô tả: $motaSP</p>";
        echo '<div class="container">';
        echo '<div class="row">';
        echo '<div class="col-sm-4">';
        echo "<p>Giá: $giaSP VNĐ</p>";
        echo "<p>Nồng độ cồn: $nongdocon</p>";
        echo "<p>Ngày sản xuất: $namsanxuat</p>";
        echo "</div>";
        echo '<div class="col-sm-6">';
        echo "<p>Ngày nhập: $ngaynhap</p>";
        echo "<p>Hạn sử dụng: $hansudung</p>";
        echo "<p>Trạng thái: $trangthai Hàng</p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo '<button name="themsp" type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</form>';
        echo '</div>';
    } else {
        echo "Không tìm thấy sản phẩm.";
    }
}
?>

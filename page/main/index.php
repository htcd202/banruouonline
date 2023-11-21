<div class="main">
    <div class="container-fluid p-5 text-center">
        <h3 class="red8b0000">Danh sách sản phẩm</h3>
    </div>
    <div class="container-fluid outer-border-top">
        <div class="row">
            <div class="col-3 outer-border-right">
                <div class="list-group">
                    <?php
                    $sql_danhmuc = "SELECT * FROM danhmuc";
                    $result_danhmuc = $mysqli->query($sql_danhmuc);
                    echo '<p class="list-group-item bg8b0000 h5 text-center">DANH MỤC SẢN PHẨM</p>';
                    if ($result_danhmuc->num_rows > 0) {
                        while ($row_danhmuc = $result_danhmuc->fetch_assoc()) {
                            echo '<a href="index.php?danhmuc_id=' . $row_danhmuc["id"] . '" class="list-group-item list-group-item-action red8b0000">' . $row_danhmuc["tendanhmuc"] . '</a>';
                        }
                    } else {
                        echo "Không có danh mục nào.";
                    }
                    ?>
                </div>
            </div>
            <?php
            if (isset($_GET['danhmuc_id'])) {
                ?>
                <div class="col-9">
                    <div class="row">
                        <?php
                        if (isset($_GET['danhmuc_id'])) {
                            $danhmuc_id = $_GET['danhmuc_id'];
                            $sql_sanpham = "SELECT * FROM sanpham WHERE loaisp = $danhmuc_id ORDER BY id DESC";
                            $result_sanpham = $mysqli->query($sql_sanpham);

                            if ($result_sanpham->num_rows > 0) {
                                while ($row = $result_sanpham->fetch_assoc()) {
                                    echo '<div class="col-3 mb-4 custom-card">';
                                    echo '<a href="index.php?quanly=chitietsp&id=' . $row["id"] . '">';
                                    echo '<div class="card">';
                                    echo '<img src="img/' . $row["hinhanh"] . '" class="card-img-top" alt="' . $row["tensp"] . '">';
                                    echo '<div class="card-body">';
                                    echo '<p class="card-text "> ' . $row["tensp"] . ' </p>';
                                    echo '<p class="card-text h5">Giá: ' . number_format($row["giasp"], 0, ",", ".") . ' VNĐ</p>';
                                    echo '</label>';
                                    echo '<input type="submit" class="form-control " name="loaisp" value="Mua Ngay" required>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                            } else {
                                echo "Không có sản phẩm nào trong danh mục này.";
                            }
                        } else {
                            // Hiển thị tất cả sản phẩm nếu không có tham số 'danhmuc_id' trên URL
                            $sql_sanpham = "SELECT * FROM sanpham ORDER BY id DESC";
                            $result_sanpham = $mysqli->query($sql_sanpham);

                            if ($result_sanpham->num_rows > 0) {
                                while ($row = $result_sanpham->fetch_assoc()) {
                                    echo '<div class="col-3 mb-4 custom-card">';
                                    echo '<a href="index.php?quanly=chitietsp&id=' . $row["id"] . '">';
                                    echo '<div class="card">';
                                    echo '<img src="img/' . $row["hinhanh"] . '" class="card-img-top" alt="' . $row["tensp"] . '">';
                                    echo '<div class="card-body">';
                                    echo '<p class="card-text "> ' . $row["tensp"] . ' </p>';
                                    echo '<p class="card-text h5">Giá: ' . number_format($row["giasp"], 0, ",", ".") . ' VNĐ</p>';
                                    echo '</label>';
                                    echo '<input type="submit" class="form-control " name="loaisp" value="Mua Ngay" required>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                            } else {
                                echo "Không có sản phẩm nào.";
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
            } else {
                ?>
                <div class="col-9">
                    <div class="row">
                        <?php
                        $totalItems = 100;

                        $itemsPerPage = 8;

                        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;

                        $start = ($page - 1) * $itemsPerPage;
                        $end = $start + $itemsPerPage;

                        $sql_sanpham = "SELECT * FROM sanpham LIMIT $start, $itemsPerPage";
                        $result_sanpham = $mysqli->query($sql_sanpham);

                        if ($result_sanpham->num_rows > 0) {
                            while ($row = $result_sanpham->fetch_assoc()) {
                                echo '<div class="col-3 mb-4 custom-card">';
                                echo '<a href="index.php?quanly=chitietsp&id=' . $row["id"] . '">';
                                echo '<div class="card">';
                                echo '<img src="img/' . $row["hinhanh"] . '" class="card-img-top" alt="' . $row["tensp"] . '">';
                                echo '<div class="card-body">';
                                echo '<p class="card-text "> ' . $row["tensp"] . ' </p>';
                                echo '<p class="card-text h5">Giá: ' . number_format($row["giasp"], 0, ",", ".") . ' VNĐ</p>';
                                echo '</label>';
                                echo '<input type="submit" class="form-control " name="loaisp" value="Mua Ngay" required>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                        } else {
                            echo "Không có sản phẩm nào trong danh mục này.";
                        }

                        // Tạo các liên kết phân trang
                        $totalPages = ceil($totalItems / $itemsPerPage);

                        echo '<div class="col-12">';
                        echo '<ul class="pagination">';
                        for ($i = 1; $i <= $totalPages; $i++) {
                            echo '<li class="page-item' . ($i == $page ? ' active' : '') . '">';
                            echo '<a class="page-link" href="index.php?page=' . $i . '">' . $i . '</a>';
                            echo '</li>';
                        }
                        echo '</ul>';
                        echo '</div>';
                        ?>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>

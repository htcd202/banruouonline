<div class="container mt-4">
    <h2>Danh Sách Sản Phẩm</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Loại</th>
                <th>Hạn Sử Dụng</th>
                <th>Ngày Nhập</th>
                <th>Trạng Thái</th>
                <th>Nồng Độ Cồn</th>
                <th>Mô Tả</th>
                <th>Năm Sản Xuất</th>
                <th>Sửa xóa</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
                // Truy vấn dữ liệu từ bảng sản phẩm
            $sql = "SELECT * FROM sanpham";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["tensp"] . "</td>";
                    echo "<td>" . $row["giasp"] . "</td>";
                    echo "<td>" . $row["soluong"] . "</td>";
                    echo "<td>" . $row["loaisp"] . "</td>";
                    echo "<td>" . $row["hansudung"] . "</td>";
                    echo "<td>" . $row["ngaynhap"] . "</td>";
                    echo "<td>" . $row["trangthai"] . "</td>";
                    echo "<td>" . $row["nongdocon"] . "</td>";
                    echo "<td>" . $row["mota"] . "</td>";
                    echo "<td>" . $row["namsanxuat"] . "</td>";
                    //echo "<td><a href='modules/quanlysanpham/xuly.php?id=" . $row["id"] . "'>Xóa</a> | <a href='action=quanlysanpham/query=sua&id=" . $row["id"] . "'>Sửa</a></td>";
                    //echo "<td><a href='modules/quanlysanpham/xuly.php?action=sua&id=" . $row["id"] . "'>Sửa</a> | <a href='action=quanlysanpham&action=xoa&id=" . $row["id"] . "'>Xóa</a></td>";
                    echo "<td><a href='modules/quanlysanpham/xuly.php?action=xoa&id=" . $row["id"] . "'>Xóa</a> | <a href='modules/quanlysanpham/xuly.php?action=sua&id=" . $row["id"] . "'>Sửa</a></td>";

                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='11'>Không có dữ liệu.</td></tr>";
            }

            $mysqli->close();
            ?>
        </tbody>
    </table>
</div>
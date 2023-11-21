 <div class="container">
        <h2 class="mt-4">Thêm Sản Phẩm</h2>
        <form method="post" action="modules/quanlysanpham/xuly.php">
            <div class="form-group">
                <label for="tensp">Tên Sản Phẩm:</label>
                <input type="text" class="form-control" name="tensp" required>
            </div>

            <div class="form-group">
                <label for="giasp">Giá Sản Phẩm:</label>
                <input type="number" class="form-control" name="giasp" required>
            </div>

            <div class="form-group">
                <label for="soluong">Số Lượng:</label>
                <input type="number" class="form-control" name="soluong" required>
            </div>

            <div class="form-group">
                <label for="loaisp">Loại Sản Phẩm:</label>
                <input type="text" class="form-control" name="loaisp" required>
            </div>

            <div class="form-group">
                <label for="hansudung">Hạn Sử Dụng:</label>
                <input type="date" class="form-control" name="hansudung" required>
            </div>

            <div class="form-group">
                <label for="ngaynhap">Ngày Nhập:</label>
                <input type="date" class="form-control" name="ngaynhap" required>
            </div>

            <div class="form-group">
                <label for="trangthai">Trạng Thái:</label>
                <input type="text" class="form-control" name="trangthai" required>
            </div>

            <div class="form-group">
                <label for="nongdocon">Nồng Độ Cồn:</label>
                <input type="number" class="form-control" name="nongdocon" required>
            </div>

            <div class="form-group">
                <label for="mota">Mô Tả:</label>
                <textarea class="form-control" name="mota" required></textarea>
            </div>

            <div class="form-group">
                <label for="namsanxuat">Năm Sản Xuất:</label>
                <input type="date" class="form-control" name="namsanxuat" required>
            </div>
            <div class="form-group">
                <label for="hinhanh">Năm Sản Xuất:</label>
                <input type="file" class="form-control" name="hinhanh" required>
            </div>

            <button name="themsp"type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
        </form>
    </div>

<div class="menu">
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Trang Chủ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <?php
                    session_start(); 
                    if (isset($_SESSION['user_id'] //&& $_SESSION['user_id'] !== 0
                )) {    
                        echo '<li class="nav-item">';
                        echo '<img src="img/avatar1.jpg" alt="Avatar" class="avatar">';
                        echo '<span class="nav-link">' . $_SESSION['username'] . '</span>';
                        echo '</li>';
                    } else {
                        
                        echo '<li class="nav-item">';
                        echo '<a class="nav-link" href="index.php?quanly=dangnhap">Đăng nhập</a>';
                        echo '</li>';
                    }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=dangky">Đăng ký</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=lienhe">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=giohang">Giỏ hàng</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
            </div>
        </div>
    </nav>
</div>

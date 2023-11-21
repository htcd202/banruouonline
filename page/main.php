<?php
if(isset($_GET['id'])){
    include('main/chitietsp.php');
} elseif(isset($_GET['quanly'])){
    $tam = $_GET['quanly'];
    if ($tam == 'dangnhap'){
        include('main/dangnhap.php');
    } elseif ($tam == 'dangky') { 
        include('main/dangky.php'); 
    } elseif ($tam == 'giohang') { 
        include('main/giohang.php');
    } elseif ($tam == 'lienhe') { 
        include('main/lienhe.php');
    }
    elseif ($tam == 'chitietsp') {
    include('page/main/chitietsp.php');
}  
    else {
        include('main/index.php');                                
    }
} else {
    include('main/index.php');
}
?>

<?php
if(isset($_GET['action'])){
    $tam = $_GET['action'];
} else {
    $tam = '';
}

if($tam == 'quanlysanpham'){
    include('modules/quanlysanpham/them.php');
    include('modules/quanlysanpham/lietke.php');
} elseif ($tam == 'sua') {
    include('modules/quanlysanpham/sua.php');
} 
?>


 <!--    elseif ($tam == 'quanlytaikhoan' && $query =='sua') { 
            include('modules/quanlysanpham/sua.php');
        } -->
<?php
    $action = 'dangnhap';
    if(isset($_GET['act'])) {
        $action = $_GET['act'];
    }
    switch ($action) {
        case 'dangnhap':
            include 'View/dangnhap.php';
            break;
        case 'dangnhap-action':
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user = $_POST['txtusername'];
                $pass = $_POST['txtpassword'];
                $dp = new dangNhap();
                $result = $dp->logAdmin($user, $pass);
                if($result!==false) {
                    $_SESSION['admin'] = $result[0];
                    echo '<script>alert("dang nhap thanh cong")</script>';
                    echo '<meta http-equiv="refresh" content="0;url=../index.php?action=hanghoa&act=hanghoa"/>';
                }
                else {
                    echo '<script>alert("dang nhap that bai")</script>';
                    include 'View/dangnhap.php';
                }
            } 
            break;
        case 'logout':
            unset($_SESSION['admin']);
            echo '<meta http-equiv="refresh" content="0;url=../index.php?action=dangnhap"/>';
            break;
    }
?>
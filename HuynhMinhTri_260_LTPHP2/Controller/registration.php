<?php
$action="registration";
if(isset($_GET['act']))
{
    $action=$_GET['act'];
}
switch($action)
{
    case "registration":
        include "View/registration.php";
        break;
    case "registration_action":
        // nhận những thông tin người dùng nhấn nút submit
        // lưu vào $_POST=array('txttenkh'='hai','txtdiachi'='hcm','txtsodt'='123456',...)
        $tenkh=$_POST['txttenkh'];//hai
        $username=$_POST['txtusername'];//hai
        $password=$_POST['txtpass'];
        $crypt=md5($password);
        $email=$_POST['txtemail'];
        $diachi=$_POST['txtdiachi'];
        $dthoai=$_POST['txtsodt'];
        $userkt=$_POST['txtusername'];
        $dt=new User();
        // $kt=$dt->ktUser($userkt);
        // $userdb=$kt[2];
        // if($username==$userkt)
        // {
        //     echo '<script> alert("Tên tài khoảng đã tồn tại");</script>';
        // }
        // // elseif($email==$emaildb) {
        // //     echo '<script> alert("Email đã tồn tại");</script>';
        // // }
        // else {
            $dt->insertUser1($tenkh,$username,$crypt,$email,$diachi,$dthoai);//(hai,hai,123,hai@gmail.com,hcm,123456)
            echo '<script> alert("Đăng Ký thành Công");</script>';
        // }
        
        // đăng ký thành công xong thì quay về trang chủ
        echo '<meta http-equiv="refresh" content="0;url=../index.php"/>';
        break;
}
?>
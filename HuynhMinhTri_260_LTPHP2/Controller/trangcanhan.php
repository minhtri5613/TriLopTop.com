<?php
$action="trangcanhan";
if(isset($_GET['act']))
{
    $action=$_GET['act'];
}
switch($action)
{
    case "trangcanhan":
        include "View/trangcanhan.php";
        break;
    case "khach":
        //$_POST['txtmahh'=18,'comment'="đen huyền bí",]
        
        
        $makh=$_SESSION['makh'];
        // đem toàn bộ cái mà lấy về insert vô đatabase
        $u=new User();
        $u->getListDetail($makh);
        echo '<meta http-equiv="refresh" content="0;url=../index.php?action=trangcanhan&act=trangcanhan"/>';
        break;
    // case "update":
    //     $makh=$_SESSION['makh'];
    //     $tenkh=$_POST['txtTenkh'];
    //     $diachi=$_POST['txtDiachi'];
    //     $sdt=$_POST['txtSdt'];
    //     $email=$_POST['txtEmail'];

    //     if(isset($_POST['submit']))
    //     {
    //         $u= new User();
    //         $u->updateTenkh($makh,$tenkh);
           
    //         echo'<script> alert("Đổi tên Khách hàng thành Công");</script>';
    //         echo '<meta http-equiv="refresh" content="0;url=../index.php?action=trangcanhan&act=trangcanhan"/>';        
    //     }
    //     elseif(isset($_POST['submit2']))
    //     {
    //         $u= new User();
    //         $u->updatediachi($makh,$diachi);
    //         echo'<script> alert("Đổi địa chỉ Khách hàng thành Công");</script>';
    //         echo '<meta http-equiv="refresh" content="0;url=../index.php?action=trangcanhan&act=trangcanhan"/>';
    //     }
    //     elseif(isset($_POST['submit3']))
    //     {
    //         $u= new User();
    //         $u->updateSdt($makh,$sdt);
    //         echo'<script> alert("Đổi số điện thoại Khách hàng thành Công");</script>';
    //         echo '<meta http-equiv="refresh" content="0;url=../index.php?action=trangcanhan&act=trangcanhan"/>';
    //     }
    //     elseif (isset($_POST['submit4'])) 
    //     {
            
    //         $u= new User();
    //         $u->updateEmailca_nha($makh,$email);
    //         echo'<script> alert("Đổi Email Khách hàng thành Công");</script>';
    //         echo '<meta http-equiv="refresh" content="0;url=../index.php?action=trangcanhan&act=trangcanhan"/>';
    //     }
    //     else {
    //         echo'<script> alert("Qúy khách chưa chọn chức năng");</script>';
    //     }
       
        break;
}


?>
<?php

$action="doimk";
if(isset($_GET['act']))
{
    $action=$_GET['act'];
}
switch($action)
{
    case"doimk":
        include "View/doimk.php";
        break; 
        
    case"doi_mk":
            if (isset($_GET['id']))
            {
                $makh=$_GET['id'];
                $kh = new User();
                $results = $kh->getListDetail($makh);
                // vì kết quả trả về chỉ có 1 row nên ko cần while
                // đây là thông tin của 1 sản phẩm mà người dùng chọn
                $pass=$results[3];
            }
            $matkhau=$_POST['txtpassword'];
            $matkhaumoi=$_POST['txtpasswordnew'];
            $nhaplaimk=$_POST['txtpasswordnewlai'];
            $crypt1=md5($matkhau);
            $crypt2=md5($matkhaumoi);
            $crypt3=md5($nhaplaimk);
            if($crypt2==$crypt3)
            {
                if($crypt1!=$pass)
                {
                echo'<script> alert("mật khẩu cũ đéo đúng");</script>';
                
                include "View/doimk.php";
                }  
                else
                {
                $dt=new User();
                $dt->update($makh,$crypt2); 
                echo'<script> alert("Đổi mật khẩu thành Công");</script>';
                include "View/doimk.php";
                }
            }
            
            else
            {
                echo'<script> alert("mật khẩu mới và mật khẩu nhập lại không giống nhau");</script>';
                include "View/doimk.php";
                
            }
            break;     
}

?>
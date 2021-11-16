<?php
$action="quenmk";
if(isset($_GET['act']))
{
    $action=$_GET['act'];
}
switch($action)
{
    case "quenmk":
        include "View/quenmk.php";
        break;

    case "quen_mk":
        $user=$_POST['txtusername'];
        $dt=new User();
        $u=$dt->quenmk($user);
        
         
        if($u == 'true')
        {
            echo'<script> alert("hãy check mail cảu bạn");</script>';
            echo '<meta http-equiv="refresh" content="0;url=../index.php?action=home&act=home"/>';
            // echo'<script> alert("tài khoảng ko tồn tại");</script>';
            // echo '<meta http-equiv="refresh" content="0;url=../index.php?action=home&act=home"/>';
        }
        else
        {
            echo'<script> alert("tài khoảng ko tồn tại");</script>';
            echo '<meta http-equiv="refresh" content="0;url=../index.php?action=home&act=home"/>';
            // echo'<script> alert("hãy check mail cảu bạn");</script>';
            // echo '<meta http-equiv="refresh" content="0;url=../index.php?action=home&act=home"/>';
        }
        break;
}


 
?>
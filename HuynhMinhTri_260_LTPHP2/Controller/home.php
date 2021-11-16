<?php
$action="home";
if(isset($_GET['act']))
{
    $action=$_GET['act'];//detail
}
switch($action){
    case "home":
        include "View/nav.php";
        include "View/project.php";
        include "View/home.php";
        break;
    case "sanpham":
        include "View/home.php";
        include "View/sanpham.php";
        break;
    case "khuyenmai":
        // tại sao phải gọi đến view/sản phẩm vì trang khuyến mà trang sản phẩm all thiết kế giống
        // template(mẫu)
        include "View/sanpham.php";
        break;
    case "detail":
        //$GET['id']=18
        include "View/sanphamchitiet.php";
        break;
    case "comment":
        //$_POST['txtmahh'=18,'comment'="đen huyền bí",]
        $mahh=$_POST['txtmahh'];
        $noidung=$_POST['comment'];
        $makh=$_SESSION['makh'];
        $avata=$_SESSION['avata'];
        $tenkh=$_SESSION['tenkh'];
        // đem toàn bộ cái mà lấy về insert vô đatabase
        $u=new User();
        $u->insertComment($mahh,$makh,$noidung,$avata,$tenkh);
        include "View/sanphamchitiet.php";
        break;

    case "luu":
        if(isset($_GET['id']) && $_SESSION['makh'] )
        {
        $makh=$_SESSION['makh'];
        $mahh=$_GET['id'];
        $hh= new HangHoa();
        $results = $hh->getListDetail($mahh);
        $tenhh=$results[1];
        $dongia=$results[2];
        $giamgia=$results[3];
        $hinh=$results[4];
        
        $hh->wishlish($makh,$mahh,$tenhh,$dongia,$giamgia,$hinh);
        echo '<script> alert("Đã thêm vào danh sách ước");</script>';
        echo '<meta http-equiv="refresh" content="0;url=../index.php?action=home&act=luu_act"/>';
        }
        else 
        {
            echo '<script> alert("Bạn chưa đăng nhập");</script>';
            echo '<meta http-equiv="refresh" content="0;url=../index.php?action=login&act=login"/>';
        }

        break;
    case "luu_act":
        if(isset($_SESSION['makh']))
        {
            $makh=$_SESSION['makh'];
            // đem toàn bộ cái mà lấy về insert vô đatabase
            $u=new HangHoa();
            $u->getyeuthich($makh);
            include "View/yeuthich.php";
            break;
        }
        else {
            echo '<script> alert("Bạn chưa đăng nhập");</script>';
            echo '<meta http-equiv="refresh" content="0;url=../index.php?action=login&act=login"/>';
        }
        break;
       
    case "xoaluu":
        if(isset($_GET['id']))
        {
            $makh=$_SESSION['makh'];
            $mahh=$_GET['id'];
            $db= new HangHoa();
            $db->xoaluu($makh,$mahh);
        }
       
        echo '<meta http-equiv="refresh" content="0;url=../index.php?action=home&act=luu_act"/>';
        break;
    case "timkiem":
        include "View/sanpham.php";
        break;
    case "sanphamlon":
        include "View/sanpham.php";
        break;
    case "sanphamnho":
        include "View/sanpham.php";
        break;
    case "sanpham10tr":
        include "View/sanpham.php";
        break;
    case "sanpham20tr":
        include "View/sanpham.php";
        break; 
}
?>
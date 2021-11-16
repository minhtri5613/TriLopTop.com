<?php
$action="loaisp";
if(isset($_GET['act']))
{
   $action=$_GET['act'];
}
switch($action){
   case "loaisp":
      include "View/editloaisanpham.php";
      break;
      case "editsp":
         $selectAll=false;
         include  "View/editloaisanpham.php";
         break;
   case "deletedloaisp":
      $loai=new LoaiSanPham();
      $tong=$_POST['xoa'];
      echo "Tổng: ".$tong;
      for($i=1;$i<$tong;$i++)
      {
         if(isset($_POST["chonX".$i.""]))
         {
            $idloai=$_POST["chonX".$i.""];
         echo "id : ".$idloai;
            $loai->deleteLoaiSP($idloai);
         }
      }
      include "View/editloaisanpham.php";
      $selectAll =false;
      break;

   case "xoa":
      if(isset($_GET['id']))
      {
         $maloai=$_GET['id'];
         $db= new LoaiSanPham();
         $db->deleteLoaiSP($maloai);
      }
      include "View/editloaisanpham.php";
      break;
   case "themloai":
      include "View/themloai.php";
      break;

   case "themloai-act":
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
         $maloai=$_POST['maloai'];
         $tenloai=$_POST['tenloai'];
         $idmenu=$_POST['idemnu'];
         $db= new LoaiSanPham();
         $db->themloai($maloai,$tenloai,$idmenu);
         echo '<script>alert("Them loai thanh cong")</script>';
         echo '<meta http-equiv="refresh" content="0;url=../index.php?action=loaisp"/>';
      }
      
      break;

}
?>
<?php
$action = 'hanghoa';
if(isset($_GET['act'])) {
    $action = $_GET['act'];
}
switch ($action) {
    case 'hanghoa':
        include 'View/hanghoa.php';
        break;
    
    case 'thongke':
        include 'View/thongke.php';
        break;
    case 'update':
        include 'View/edithanghoa.php';
        break;
    case 'updatehh':
            if(isset($_GET['id']))
            {
                $hinh=$_GET['id'];
            }
            $mahh=$_POST['mahh'];
            $giamgia=$_POST['giamgia'];
            $tenhh=$_POST['tenhh'];
            $dongia=$_POST['dongia'];
            $nhom=$_POST['nhom'];
            $maloai=$_POST['maloai'];
            $soluotxem=$_POST['soluotxem'];
            $mota=$_POST['mota'];
            $soluongton=$_POST['soluongton'];
            $mausac=$_POST['mausac'];
            $vixuly=$_POST['vixuly'];
            $manhinh=$_POST['manhinh'];
            $ram=$_POST['ram'];
            $carddohoa=$_POST['carddohoa'];
            $luutru=$_POST['luutru'];
            $pin=$_POST['pin'];
            $congketnoi=$_POST['congketnoi'];
            $cannang=$_POST['cannang'];
            $hedieuhanh=$_POST['hedieuhanh'];
            $nsx=$_POST['nsx'];
            
        $u= new HangHoa();
        $u->upload($mahh,$tenhh,$dongia,$giamgia,$hinh,$nhom,$maloai,$soluotxem,$mota,$soluongton,$mausac,$vixuly,$manhinh,$ram,$carddohoa,$luutru,$pin,$congketnoi,$cannang,$hedieuhanh,$nsx);
        echo '<script> alert("Cập nhật thành công");</script>';
        echo '<meta http-equiv="refresh" content="0;url=../index.php?action=hanghoa&act=hanghoa"/>';
        break;
   
    case 'inserthh':
        include 'View/themhh.php';
        break;

    case 'inserthh_act':
                    $mahh=$_POST['mahh'];
                    $tenhh=$_POST['tenhh'];
                    $dongia=$_POST['dongia'];
                    $giamgia=$_POST['giamgia'];
                    $hinh=$_POST['image'];
                    $nhom=$_POST['nhom'];
                    $maloai=$_POST['maloai'];
                    $dacbiet=$_POST['dacbiet'];
                    $soluotxem=$_POST['soluotxem'];
                    $mota=$_POST['mota'];
                    $soluongton=$_POST['soluongton'];
                    $mausac=$_POST['mausac'];
                    $vixuly=$_POST['vixuly'];
                    $manhinh=$_POST['manhinh'];
                    $ram=$_POST['ram'];
                    $carddohoa=$_POST['carddohoa'];
                    $luutru=$_POST['luutru'];
                    $pin=$_POST['pin'];
                    $congketnoi=$_POST['congketnoi'];
                    $cannang=$_POST['cannang'];
                    $hedieuhanh=$_POST['hedieuhanh'];
                    $nsx=$_POST['nsx'];
       
                    $dt = new HangHoa();
                    $dt->insert($mahh,$tenhh,$dongia,$giamgia,$hinh,$nhom,$maloai,$dacbiet,$soluotxem,$mota,$soluongton,$mausac,$vixuly,$manhinh,$ram,$carddohoa,$luutru,$pin,$congketnoi,$cannang,$hedieuhanh,$nsx);
                    echo '<script> alert("Them thành công");</script>';
                echo '<meta http-equiv="refresh" content="0;url=../index.php?action=hanghoa&act=hanghoa"/>';
        break;
        
    case 'xoa':
        if(isset($_GET['id']))
        {
            $mahh=$_GET['id'];
        }
        $db=new HangHoa();
        $db->xoa($mahh);
        echo '<script> alert("Xóa thành công");</script>';
        echo '<meta http-equiv="refresh" content="0;url=../index.php?action=hanghoa&act=hanghoa"/>';
        break;
        
    
        
}
?>
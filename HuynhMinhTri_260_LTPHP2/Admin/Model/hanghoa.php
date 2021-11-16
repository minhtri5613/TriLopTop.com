<?php
    class HangHoa {

        var $mahh = 0; // 0 là vì kiểu dữ liệu cho trong database là kiểu số
        var $tenhh = null; // vì kiểu trong database là chuỗi
        var $dongia = 0;
        var $giamgia = 0;
        var $hinh = null;
        var $nhom = 0;
        var $maloai = 0;
        var $dacbiet = 0;
        var $soluotxem = 0;
        var $ngaylap = null;
        var $mota = null;
        var $solt = 0;
        var $mausac = null;
        var $size = null;
        var $vixuly = null;
        var $manhinh = null;
        var $ram = null;
        var $carddohoa = null;
        var $luutru = null;
        var $pin = null;
        var $congketnoi = null;
        var $cannang = null;
        var $hedieuhanh = null;

        function __construct(){}
        function getThongKeHH() {
            $select = "select a.tenhh,sum(b.soluongmua) soluongban from hanghoa a, cthoadon b where a.mahh = b.mahh group by a.tenhh";
            $db = new connect();
            $result = $db->getList($select);
            return $result;
        }
        //lấy ra tất cả sản phẩm
        function getListHangHoa()
        {
            $select="select * from hanghoa ";
            $db=new connect();
            $result=$db->getList($select);
            return $result;
        }
        //phương thức đổ dữ liệu và mã loại vào bản update hàng hóa
        function getListMaLoaiSP()
        {
            $select ="select maloai,tenloai from loai";
            $db= new connect();
            $result=$db->getList($select);
            return $result;
        }
        //lấy thông tin của hàng hóa khi biết mã hàng hóa
        function getListID($id)
        {
            $select ="select * from hanghoa where mahh=$id";
            $db= new connect();
            $result=$db->getInstance($select);
            return $result;
        }
        function upload($mahh,$tenhh,$dongia,$giamgia,$hinh,$nhom,$maloai,$soluotxem,$mota,$soluongton,$mausac,$vixuly,$manhinh,$ram,$carddohoa,$luutru,$pin,$congketnoi,$cannang,$hedieuhanh,$nsx)
        {
        $query="UPDATE hanghoa SET tenhh=:tenhh,dongia=:dongia, giamgia=:giamgia,hinh=:hinh,nhom=:nhom,maloai=:maloai,soluotxem=:soluotxem,mota=:mota,soluongton=:soluongton,mausac=:mausac,vixuly=:vixuly,manhinh=:manhinh,ram=:ram,carddohoa=:carddohoa,luutru=:luutru,pin=:pin,congketnoi=:congketnoi,cannang=:cannang,hedieuhanh=:hedieuhanh,nsx=:nsx  WHERE mahh =:mahh";
        $db=new connect();
        $stm=$db->getListP($query);
        $stm->bindParam(':mahh',$mahh);
        $stm->bindParam(':giamgia',$giamgia);
        $stm->bindParam(':tenhh',$tenhh);
        $stm->bindParam(':dongia',$dongia);
        $stm->bindParam(':hinh',$hinh);
        $stm->bindParam(':nhom',$nhom);
        $stm->bindParam(':maloai',$maloai);
        $stm->bindParam(':soluotxem',$soluotxem);
        $stm->bindParam(':mota',$mota);
        $stm->bindParam(':soluongton',$soluongton);
        $stm->bindParam(':mausac',$mausac);
        $stm->bindParam(':vixuly',$vixuly);
        $stm->bindParam(':manhinh',$manhinh);
        $stm->bindParam(':ram',$ram);
        $stm->bindParam(':carddohoa',$carddohoa);
        $stm->bindParam(':luutru',$luutru);
        $stm->bindParam(':pin',$pin);
        $stm->bindParam(':congketnoi',$congketnoi);
        $stm->bindParam(':cannang',$cannang);
        $stm->bindParam(':hedieuhanh',$hedieuhanh);
        $stm->bindParam(':nsx',$nsx);
        $stm->execute();
        }

        public function insert($mahh,$tenhh,$dongia,$giamgia,$img,$nhom,$maloai,$dacbiet,$soluotxem,$mota,$soluongton,$mausac,$vixuly,$manhinh,$ram,$carddohoa,$luutru,$pin,$congketnoi,$cannang,$hedieuhanh,$nsx)
        {
            $date=new DateTime("now");
            $ngay=$date->format("Y-m-d");
            $query="insert into hanghoa(mahh,tenhh,dongia,giamgia,hinh,nhom,maloai,dacbiet,soluotxem,ngaylap,mota,soluongton,mausac,vixuly,manhinh,ram,carddohoa,luutru,pin,congketnoi,cannang,hedieuhanh,nsx)values(:mahh,:tenhh,:dongia,:giamgia,:hinh,:nhom,:maloai,:dacbiet,:soluotxem,:ngaylap,:mota,:soluongton,:mausac,:vixuly,:manhinh,:ram,:carddohoa,:luutru,:pin,:congketnoi,:cannang,:hedieuhanh,:nsx)";
            $db=new connect();
            $stm=$db->getListP($query);
            $stm->bindParam(':mahh',$mahh);
            $stm->bindParam(':giamgia',$giamgia);
            $stm->bindParam(':tenhh',$tenhh);
            $stm->bindParam(':dongia',$dongia);
            $stm->bindParam(':hinh',$img);
            $stm->bindParam(':dacbiet',$dacbiet);
            $stm->bindParam(':nhom',$nhom);
            $stm->bindParam(':maloai',$maloai);
            $stm->bindParam(':soluotxem',$soluotxem);
            $stm->bindParam(':mota',$mota);
            $stm->bindParam(':ngaylap',$ngay);
            $stm->bindParam(':soluongton',$soluongton);
            $stm->bindParam(':mausac',$mausac);
            $stm->bindParam(':vixuly',$vixuly);
            $stm->bindParam(':manhinh',$manhinh);
            $stm->bindParam(':ram',$ram);
            $stm->bindParam(':carddohoa',$carddohoa);
            $stm->bindParam(':luutru',$luutru);
            $stm->bindParam(':pin',$pin);
            $stm->bindParam(':congketnoi',$congketnoi);
            $stm->bindParam(':cannang',$cannang);
            $stm->bindParam(':hedieuhanh',$hedieuhanh);
            $stm->bindParam(':nsx',$nsx);
            $stm->execute();
        // $U= new connect();
        // $date=new DateTime("now");
        // $ngay=$date->format("Y-m-d");
        // // $query="insert into hanghoa(masohd,mahh,soluongmua,mausac,size,thanhtien,tinhtrang)values($sohd,$mah,$solm,'$mausac',$size,$thanhtien,0)";
        // // $query="insert into hanghoa(mahh,tenhh,dongia,giamgia,hinh,nhom,maloai,dacbiet,soluotxem,ngaylap,mota,soluongton,mausac,vixuly,manhinh,ram,carddohoa,luutru,pin,congketnoi,cannang,hedieuhanh,nsx)values($mahh,$tenhh,$dongia,$giamgia,$img,$nhom,$maloai,$dacbiet,$soluotxem,$ngay,$mota,$soluongton,$mausac,$vixuly,$manhinh,$ram,$carddohoa,$luutru,$pin,$congketnoi,$cannang,$hedieuhanh,$nsx)";
        // $query="INSERT INTO hanghoa (mahh, tenhh, dongia, giamgia, hinh, nhom, maloai, dacbiet, soluotxem, ngaylap, mota, soluongton, mausac, vixuly, manhinh, ram, carddohoa, luutru, pin, congketnoi, cannang, hedieuhanh, nsx) VALUES ('$mahh,$tenhh,$dongia,$giamgia,$img,$nhom,$maloai,$dacbiet,$soluotxem,$ngay,$mota,$soluongton,$mausac,$vixuly,$manhinh,$ram,$carddohoa,$luutru,$pin,$congketnoi,$cannang,$hedieuhanh,$nsx)";
        // $U->exec($query);
        }

        function xoa($mahh)
        {
            $select = "DELETE FROM hanghoa WHERE  mahh=$mahh";
            $db= new connect();
            $result=$db->getList($select);
            return $result;
        }
    }
?>
<?php
class HangHoa
{
    // thuộc tính
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

    //hàm tạo
    public function __construct()
    {
    }
    //phương thức đối với bản hàng hóa là các câu lệnh select, insert,update, delete,...
    // phương thức bên đây chủ yếu là các câu truy vấn yêu cầu lớp connect thực thi và trả về kết quả cho nó
    // các câu truy vấn là select thì query hoặc prepare sẽ thực thi
    // câu lệnh insert, update, delete... thì exec, prepare thực thi
    public function getListHangHoaNew()
    {
        // câu lệnh truy vấn
        $select = "select * from hanghoa order by mahh desc limit 12";
        // câu lệnh truy vấn này ai sẽ thực hiện? đó là phương thức query và prepare(execute)
        $db = new connect();
        $results = $db->getList($select); // 12 sản phẩm
        return $results;

    }
    // pt getListHangHoaNew chứa 12 sản phẩm đc lấy từ database về
    public function getListHangHoaSale()
    {
        // câu lệnh truy vấn
        $select = "select * from hanghoa where giamgia>0 limit 8";
        // câu lệnh truy vấn này ai sẽ thực hiện? đó là phương thức query và prepare(execute)
        $db = new connect();
        $results = $db->getList($select); // 8 sản phẩm
        return $results;

    }
    // phương thức lấy ra tất cả sản phẩm
    public function getListHangHoaNewAll()
    {
        // câu lệnh truy vấn
        $select = "select * from hanghoa";
        // câu lệnh truy vấn này ai sẽ thực hiện? đó là phương thức query và prepare(execute)
        $db = new connect();
        $results = $db->getList($select); // 8 sản phẩm
        return $results;

    }
    // getListHangHoaNewAll lấy đc tất cả sản phảm từ database đỗ về
    // phương thức hiển thị tất cả sản phẩm sale
    public function getListHangHoaSaleAll()
    {
        // câu lệnh truy vấn
        $select = "select * from hanghoa where giamgia>0";
        // câu lệnh truy vấn này ai sẽ thực hiện? đó là phương thức query và prepare(execute)
        $db = new connect();
        $results = $db->getList($select); // 8 sản phẩm
        return $results;

    }
    // dạng tiêu chuẩn dùng query
    public function getListDetail($mahh)
    {
        $select = "select * from hanghoa where mahh=$mahh";
        // ai thực hiện câu select=> query hoặc prepare
        $db = new connect();
        $results = $db->getInstance($select);
        return $results;
    }
    // getLisstDetail chứa thông tin của 1 sản phẩm lấy từ database về
    // dùng prepare
    public function getListDetailNhom($nhom)
    {
        $select = "select * from hanghoa where nhom=:nhom";
        // ai thực hiện câu truy vấn này query và preapre
        $db = new connect();
        $stm = $db->getListP($select);
        // muốn getListP = preapre đc thì phải
        $stm->bindParam(':nhom', $nhom);
        // $stm->bindValue(':nhom',$nhom);
        $stm->execute();
        return $stm;

    }
    public function getListDetailNhomSize($nhom)
    {
        $select = "select distinct(size) from hanghoa where nhom=:nhom order by size";
        // ai thực hiện câu truy vấn này query và preapre
        $db = new connect();
        $stm = $db->getListP($select);
        // muốn preapre đc thì phải
        $stm->bindParam(':nhom', $nhom);
        // $stm->bindValue(':nhom',$nhom);
        $stm->execute();
        return $stm;
    }
    public function getSearch($name)
    {
        $select="select * from hanghoa where tenhh like '%$name%'";
        $db=new connect();
        $results=$db->getList($select);
        return $results;
    }
    //cách 2 
    // public function getSearch($name)
    // {
    //     $select="select * from hanghoa where tenhh like :tenhh";
    //     $db=new connect();
    //     $stm= $db->getListP($select);
    //     //ràng buộc về giá trị (bindvalue) hoặc ràng buộc về tham số (bindparam)
    //     //$tr_name="%".$name."%";
    //     //$stm->bindParam(':tenhh',$str_name);
    //     $stm->bindValue(':tenhh',"%".$name."%");
    //     // để thực  thị prepare thì phải có execute
    //     $stm->execute();
    //     return $stm;

    // }
    public function getListHangHoaAllPage($start, $limit)
    {
        // đầu tiên phải có câu truy vấn
        $select="select * from hanghoa limit ".$start.",".$limit;
        // ai thực hiện câu truy vấn này? pt query,prepare(execute)
        $db=new connect();
        $results=$db->getList($select);
        return $results;
    }
    public function getListHangHoaAll()
    {
        // đầu tiên phải có câu truy vấn
        $select="select * from hanghoa";
        // ai thực hiện câu truy vấn này? pt query,prepare(execute)
        $db=new connect();
        $results=$db->getList($select);
        return $results;
    }
    public function xeplon()
    {
        $select="SELECT * FROM hanghoa ORDER BY hanghoa.dongia DESC";
        $db=new connect();
        $results=$db->getList($select);
        return $results;
    }
    public function xepnho()
    {
        $select="SELECT * FROM hanghoa ORDER BY hanghoa.dongia ASC";
        $db=new connect();
        $results=$db->getList($select);
        return $results;
    }
    public function sanpham10tr()
    {
        $select="SELECT * FROM hanghoa WHERE dongia > 10000000 && dongia < 20000000";
        $db=new connect();
        $results=$db->getList($select);
        return $results;
    }
    public function sanpham20tr()
    {
        $select="SELECT * FROM hanghoa WHERE  dongia > 20000000";
        $db=new connect();
        $results=$db->getList($select);
        return $results;
    }
    
    public function wishlish($makh,$mahh,$tenhh,$dongia,$giamgia,$hinh)
    {
        $date=new DateTime("now");
        $ngay=$date->format("Y-m-d");
        $query="insert into yeuthich(makh,mahh,tenhh,dongia,giamgia,hinh,ngayluu)values(:makh,:mahh,:tenhh,:dongia,:giamgia,:hinh,:ngayluu)";
        $db=new connect();
        $stm=$db->getListP($query);
        $stm->bindParam(':makh',$makh);
        $stm->bindParam(':mahh',$mahh);
        $stm->bindParam(':tenhh',$tenhh);
        $stm->bindParam(':dongia',$dongia);
        $stm->bindParam(':giamgia',$giamgia);
        $stm->bindParam(':hinh',$hinh);
        $stm->bindParam(':ngayluu',$ngay);
        $stm->execute();
    }
    public function getyeuthich($makh)
    {
        $select="SELECT * FROM yeuthich WHERE makh=$makh";
        $db = new connect();
        // $results = $db->getInstance($select);
        $results=$db->getListP($select);
        $results->execute();
        return $results;
    }
    public function xoaluu($makh,$mahh)
    {
        $query="DELETE FROM yeuthich WHERE makh=$makh AND mahh = $mahh ";
        $db = new connect();
        // $results = $db->getInstance($select);
        $results=$db->exec($query);
        return $results;
    }
}
?>

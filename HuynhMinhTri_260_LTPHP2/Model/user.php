<?php
class User{
    // thuộc tính
    var $makh=0;// vì kiểu dl là số nguyên
    var $tenkh=null;
    var $user=null;
    var $matkhau=null;
    var $email=null;
    var $diachi=null;
    var $dthoai=null;
    var $vaitro=0;
    // hàm tạo
    public function __construct(){}
    // phương thức inser thông tin vào trong database
    public function insertUser($tenkh,$user,$matkhau,$email,$dchi,$dthoai)//(hai,hai,123,hai@gmail.com,hcm,123456)
    {
        $query="insert into khachhang(makh,tenkh,username,matkhau,email,diachi,sodienthoai,vaitro)
        values(NULL,?,?,?,?,?,?,DEFAULT)";
        // ai sẽ thực thi câu truy vấn này? 1 là exec, 2 là prepare
        $db=new connect();
        $stm=$db->getListP($query);
        // muốn prepare đc thì phải execute
        $stm->execute([$tenkh,$user,$matkhau,$email,$dchi,$dthoai]);

    }
    // public function update($matkhau)
    
    // giá trị ràng buộc
    public function insertUser1($tenkh,$user,$matkhau,$email,$dchi,$dthoai)//(hai,hai,123,hai@gmail.com,hcm,123456)
    {
        $query="insert into khachhang(makh,tenkh,username,matkhau,email,diachi,sodienthoai,vaitro)
        values(NULL,:tenkh,:username,:matkhau,:email,:diachi,:sodienthoai,DEFAULT)";
        // ai sẽ thực thi câu truy vấn này? 1 là exec, 2 là prepare
        $db=new connect();
        $stm=$db->getListP($query);
        // ràng buộc về giá trị
        // $stm->bindValue(':tenkh',$tenkh);
        // $stm->bindValue(':username',$user);
        // $stm->bindValue(':matkhau',$matkhau);
        // $stm->bindValue(':email',$email);
        // $stm->bindValue(':diachi',$dchi);
        // $stm->bindValue(':sodienthoai',$dthoai);
        $stm->bindParam(':tenkh',$tenkh);
        $stm->bindParam(':username',$user);
        $stm->bindParam(':matkhau',$matkhau);
        $stm->bindParam(':email',$email);
        $stm->bindParam(':diachi',$dchi);
        $stm->bindParam(':sodienthoai',$dthoai);
        // muốn prepare đc thì phải execute
        $stm->execute();
    }
   
    // dạng tiêu chuẩn tức là lệnh exec
    public function insertUser2($tenkh,$user,$matkhau,$email,$dchi,$dthoai)//(hai,hai,123,hai@gmail.com,hcm,123456)
    {
        $query="insert into khachhang(makh,tenkh,username,matkhau,email,diachi,sodienthoai,vaitro)
        values(NULL,'$tenkh','$user','$matkhau','$email','$dchi','$dthoai',DEFAULT)";
        // ai sẽ thực thi câu truy vấn này? 1 là exec
        $db=new connect();
        $stm=$db->exec($query);
    }
    public function logUser($user,$matkhau)//hai,123
    {
        // câu truy vấn
        $select="select * from khachhang where username='$user' and matkhau='$matkhau' ";
        // ai thực thi câu lệnh select
        $db=new connect();
        $result=$db->getList($select);//$result[29,hai,hai,123,hcm....]
        // vì trả về 1 dòng user nên fetch
        $set= $result->fetch();//$set[29,hai,hai,123,hcm....]
        return $set;
    }
    public function quenmk($user)
    {
        $select="select * from khachhang where username='$user'";
        $db= new connect();
        $result=$db->getList($select);
        $set = $result -> fetch();
        return $set; 
    }
    // phương thức loguer trả về thông tin của 1 người đã đc đăng ký
    // pt insert comment
    public function insertComment($mahh,$makh,$noidung,$avata,$tenkh)
    {
        $date=new DateTime("now");
        $ngay=$date->format("Y-m-d");
        $query="insert into binhluan(mabl,mahh,makh,ngaybl,noidung,avata,tenkh)values(Null,:mahh,:makh,:ngaybl,:noidung,:avata,:tenkh)";
        $db=new connect();
        $stm=$db->getListP($query);
        // ràng buộc giá trị hoặc biến
        $stm->bindParam(':mahh',$mahh);
        $stm->bindParam(':makh',$makh);
        $stm->bindParam(':ngaybl',$ngay);
        $stm->bindParam(':noidung',$noidung);
        $stm->bindParam(':avata',$avata);
        $stm->bindParam(':tenkh',$tenkh);
        $stm->execute();
    }
    
    
    // hiển thị bình luận
    public function displayComment($mah)
    {
        // câu truy vấn
        // $select="select a.tenkh,b.noidung  FROM khachhang a INNER join binhluan b 
        // on a.makh=b.makh WHERE b.mahh=$mah";
        $select="select tenkh,noidung,avata from binhluan where mahh=$mah";
        // ai thực thi câu lệnh select
        $db=new connect();
        $result=$db->getList($select);
        return $result;
    }
    public function countComment($mah)
    {
        // câu truy vấn
        $select="select count(mabl) from binhluan where mahh=$mah";
        // ai thực thi câu lệnh select
        $db=new connect();
        $result=$db->getInstance($select);
        return $result;
    }
    public function getListDetail($makh)
    {
        $select = "select * from khachhang where makh=$makh";
        // ai thực hiện câu select=> query hoặc prepare
        $db = new connect();
        $results = $db->getInstance($select);
        return $results;
    }
 
    public function update($makh,$matkhau)
    {
        $query="UPDATE khachhang SET matkhau=:matkhau WHERE makh =:makh";
        $db=new connect();
        $stm=$db->getListP($query);
        $stm->bindParam(':matkhau',$matkhau);
        $stm->bindParam(':makh',$makh);
        $stm->execute();
    }

        
    public function updateTenkh($makh,$tenkh)
    {
        $query="UPDATE khachhang SET tenkh=:tenkh WHERE makh =:makh";
        $db=new connect();
        $stm=$db->getListP($query);
        $stm->bindParam(':tenkh',$tenkh);
        $stm->bindParam(':makh',$makh);
        $stm->execute();
    }
    public function updatediachi($makh,$diachi)
    {
        $query="UPDATE khachhang SET diachi=:diachi WHERE makh =:makh";
        $db=new connect();
        $stm=$db->getListP($query);
        $stm->bindParam(':diachi',$diachi);
        $stm->bindParam(':makh',$makh);
        $stm->execute();
    }
    public function updateEmailca_nha($makh,$email)
    {
        $query="UPDATE khachhang SET email=:email WHERE makh =:makh";
        $db=new connect();
        $stm=$db->getListP($query);
        $stm->bindParam(':email',$email);
        $stm->bindParam(':makh',$makh);
        $stm->execute();
    }
    public function updateSdt($makh,$sdt)
    {
        $query="UPDATE khachhang SET sodienthoai=:sodienthoai WHERE makh =:makh";
        $db=new connect();
        $stm=$db->getListP($query);
        $stm->bindParam(':sodienthoai',$sdt);
        $stm->bindParam(':makh',$makh);
        $stm->execute();
    }
    public function insertAnhdaidien($img,$makh)
    {
        $query="UPDATE khachhang SET avata=:avata WHERE makh =:makh";
        $db=new connect();
        $stm=$db->getListP($query);
        // ràng buộc giá trị hoặc biến
        $stm->bindParam(':avata',$img);
        $stm->bindParam(':makh',$makh);
        $stm->execute();
    }
    public function getAvata($makh)
    {
        $select="SELECT * FROM khachhang  WHERE makh=$makh";
        $db = new connect();
        $results = $db->getInstance($select);
        return $results;
    }
    // public function ktUser($username)
    // {
    //     $query="SELECT * FROM khachhang WHERE username =:username";
    //     $db=new connect();
    //     $stm=$db->getListP($query);
    //     $stm->bindParam(':username',$username);
    //     $stm->execute();
    // }
    public function ktUser($username)
    {
        $select="SELECT * FROM khachhang  WHERE username=$username";
        // ai thực hiện câu select=> query hoặc prepare
        $db = new connect();
        $results = $db->getInstance($select);
        return $results;
    }
    function getEmail($email)
    {
        $select ="select email,matkhau from khachhang where email='$email'";
        $db=new connect();
        $result= $db->getInstance($select);
        return $result;
    }
    // phương thức nó trả về email và  mat khảu khi nhận vào là email, mat khau mà khách hàng link tới
    function getPassEmail($email, $pass)
    {
        $select ="select email,matkhau from khachhang where md5(email)='$email' and md5(matkhau)='$pass'";
        // select email, matkhau from khachhang where md5(phptestly20@gmail.com)='405999d3a4fb8cddf893e238928c001'
        $db=new connect();
        $result= $db->getInstance($select);
        return $result;
    }
    //phuong thức update
    function updateEmail($emailold,$passnew)
    {
        $db=new connect();
        $query="update khachhang set matkhau='$passnew' where email='$emailold'";
        // echo $select;
       $db->exec($query);
    }
}
?>
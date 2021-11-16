<?php
class LoaiSanPham{
   var $maloai=null;
   var $tenloai=null;
   var $idmenu=0;
   function __construct()
   {

   }
   function getListLoaiSP()
   {
      $select="select * from loai";
      $db = new connect();
      $result=$db->getList($select);
      return $result;
   }
   //delete
   function deleteLoaiSP($id)
   {
      $query="delete from loai where maloai=$id";
      $db=new connect();
      $db->exec($query);
   }
   function themloai($maloai,$tenloai,$idmenu)
   {
      $query="INSERT INTO loai(maloai,tenloai,idmenu)VALUES(:maloai,:tenloai,:idmenu)";
      $db=new connect();
            $stm=$db->getListP($query);
            $stm->bindParam(':maloai',$maloai);
            $stm->bindParam(':tenloai',$tenloai);
            $stm->bindParam(':idmenu',$idmenu);
            $stm->execute();
           
   }

   function getListIdmenu()
   {
      $select="select *  from menu";
      $db = new connect();
      $result=$db->getList($select);
      return $result;
   }
}
?>
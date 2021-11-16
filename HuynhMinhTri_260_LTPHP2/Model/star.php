<?php
    class Star{
        var $productid=null;
        var $username=null;
        var $star=null;
        function __construct()
        {

        }
        // phương thức tính trung bình cộng
        function avg()
        {
            $db= new connect();
            $select="select productid,round(AVG(rating),2) avg from star_rating group by productid";
            $result= $db->getList($select);
            $average=[];
            while($row=$result->fetch())
            {
                $average[$row['productid']]=$row['avg'];
            }
            return $average;
        }

        function get($id,$name)
        {
            $select="select rating from star_rating where username='$name' and productid='$id'";
            $db= new connect();
            $result=$db->getInstance($select);
            return $result[0];  
        }
      
        function save($id,$name,$rating)
        {
            //"UPDATE start_rating set rating=$rating where username='$name'and productid=$id"
            $select="REPLACE INTO star_rating(productid,username,rating) values (?,?,?)";
            $db = new connect();
            $stm=$db->getListP($select);
            $stm->execute([$id,$name,$rating]);
        }
        
        
    }
?>
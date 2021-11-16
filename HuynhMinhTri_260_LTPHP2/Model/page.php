<?php
class Page
{
    // viết pt tính số trang
    function findPage($count,$limit)
    {
        // 21%8==0?21/8:floor(21/8)+1
        //24%8==0?24/8:floor(24/8)+1
        $page=(($count%$limit)==0)?$count/$limit:floor($count/$limit)+1;
        return $page;
    }
    // viết pt tính start
    function findStart($limit)
    {
        // current_page($_GET['page']) chính là URL, mà URL pt truyền đi là GET
        if(!isset($_GET['page'])||($_GET['page']==1))
        {
            // nếu ko tồn tại trang hoặc là người dùng click vào rang số 1
            $start=0;
            $_GET['page']=1;
        }
        else{
            // tức là current_page nó tồn tại 
            $start=($_GET['page']-1)*$limit;//16
        }
        return $start;
    }
}
?>
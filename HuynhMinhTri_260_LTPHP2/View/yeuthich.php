<div class="mt-5">
<form action="index.php?action=home&act=luu_act" style="margin-top:100px" method="post" >
<?php
    if(isset($_SESSION['makh']))
    {
            $makh=$_SESSION['makh'];
            $hh=new HangHoa();
            $results=$hh->getyeuthich($makh);     
    }
?>
    <table border=1 >
    
        <tr align="center">
            <th>
                mahh
            </th>
            <th>
               
            </th>
            <th>
                tenhh
            </th>

            <th>
                dongia
            </th>
            <th>
                giamgia
            </th>
            <th>
                ngayluu
            </th>
            <th>
                action
            </th>
        </tr>
      <?php
            while($set=$results->fetch()):
      ?>
        <tr align="center">
           
            <td>
                <?php echo $set['mahh']; ?>
            </td>
            <td>
            <img src="./Content/imagetourdien/<?php echo $set['hinh'];?>" width="200" alt="">
            </td>
            <td>
                <?php echo $set['tenhh']; ?>
            </td>
           
            <td>
                <?php echo $set['dongia']; ?>            
            </td>
            <td>
                <?php echo $set['giamgia'];?>
            </td>
            <td>
                <?php echo $set['ngayluu']; ?>
            </td>
            <td>
                <a href="index.php?action=home&act=xoaluu&id=<?php echo $set['mahh']?>">xóa</a>
            </td>
            <td>
                <a href="index.php?action=giohang&act=add_cart"> 
                    mua 
                </a>
           
            </td>
        </tr>
         <?php
         
          endwhile;
         ?>
    

    </table>
</form>
</div>

<div class="row col-md-4 col-md-offset-4" > <h3>THÊM DANH SÁCH SẢN</h3> </div>
  <div class="row col-md-4 col-md-offset-4" >  
<form action="index.php?action=loaisp&act=themloai&act=themloai-act" method="post">
  <table class="table" style="border: 0px;">

        <tr>
        <td>Mã Loai</td>
        <td> <input type="text" class="form-control" name="maloai" value=""/></td>
        </tr>
        <tr>
        <td>Tên loai</td>
        <td><input type="text" class="form-control" name="tenloai" value=""></td>
        </tr>
        <tr>
        <td>IDMENU</td>
        <td>
        <select name="idemnu" class="form-control" style="width:150px;">
         <?php 
            $db= new LoaiSanPham();
            $result=$db->getListIdmenu();
            while($set=$result->fetch()):
         ?>
         <option value="<?php echo $set['idmenu']?>"><?php echo $set['name']?></option>
         <?php 
            endwhile;
        ?>
        </select>
      </td>
        </tr>
        <tr>
        <td colspan="2">
        <input type="submit" value="submit">
        </td>
        </tr>
  
  </table> 
</form>
</div>
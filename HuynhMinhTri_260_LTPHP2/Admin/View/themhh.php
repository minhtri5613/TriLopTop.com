
<div class="row col-md-4 col-md-offset-4" > <h3>THÊM DANH SÁCH SẢN</h3> </div>
  <div class="row col-md-4 col-md-offset-4" >  
  <form action="index.php?action=hanghoa&act=inserthh_act" method="post">
  <table class="table" style="border: 0px;">

    <tr>
      <td>Mã hàng</td>
      <td> <input type="text" class="form-control" name="mahh" value=""/></td>
    </tr>
    <tr>
      <td>Tên hàng</td>
      <td><input type="text" class="form-control" name="tenhh" value=""></td>
    </tr>
    <tr>
      <td>Đơn giá</td>
      <td><input type="text" class="form-control" name="dongia" value="" ></td>
    </tr>
    <tr>
      <td>Giảm giá</td>
      <td><input type="text" class="form-control" name="giamgia" value="" ></td>
    </tr>
    <tr>
      <td>Hình</td>
      <td>
          Chọn file để upload:
          <input type="file" name="image" id="fileupload">
       
      </td>
    </tr>
    <tr>
      <td>Nhóm</td>

      <td>
        <input type="text" class="form-control" name="nhom" value="" >
      </td>
    </tr>
    <tr>
      <td>Mã loại</td>
      <td>
      <select name="maloai" class="form-control" style="width:150px;">
          <?php 
          
            $hh=new HangHoa();
            $result=$hh->getListMaLoaiSP();
            while($set=$result->fetch()):
          ?>
          <option value="<?php echo $set['maloai']?>"><?php echo $set['tenloai']?></option>
            <?php 
            endwhile;
            ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Đặc biệt</td>
      <td><input type="text" class="form-control" name="dacbiet" value="">
      </td>
    </tr>
    <tr>
      <td>Số lượt xem</td>
      <td><input type="text" class="form-control" name="soluotxem" value="">
      </td>
    </tr>
    <!-- <tr>
      <td>Ngày lập</td>
      <td><input type="text" class="form-control" name="ngaylap" value="">
      </td>
    </tr> -->
    <tr>
      <td>Mô tả</td>
      <td><input type="text" class="form-control" name="mota" value="">
      </td>
    </tr>
    <tr>
      <td>Số lượng tồn</td>
      <td><input type="text" class="form-control" name="soluongton" value="">
      </td>
    </tr>
    <tr>
      <td>Màu sắc</td>
      <td><input type="text" class="form-control" name="mausac" value="">
      </td>
    </tr>
    <tr>
    <td>Vi xử lý</td>
      <td><input type="text" class="form-control" name="vixuly" value="">
      </td>
    </tr>
    <tr>
    <td>Màn hình</td>
      <td><input type="text" class="form-control" name="manhinh" value="">
      </td>
    </tr>

    <tr>
    <td>Ram</td>
      <td><input type="text" class="form-control" name="ram" value="">
      </td>
    </tr>
    <tr>
    <td>Card đồ họa</td>
      <td><input type="text" class="form-control" name="carddohoa" value="">
      </td>
    </tr>

    <tr>
    <td>Lữu trữ</td>
      <td><input type="text" class="form-control" name="luutru" value="">
      </td>
    </tr>

    <tr>
    <td>Pin</td>
      <td><input type="text" class="form-control" name="pin" value="">
      </td>
    </tr>

    <tr>
    <td>Cổng kết nối</td>
      <td><input type="text" class="form-control" name="congketnoi" value="">
      </td>
    </tr>

    <tr>
    <td>Cân nặng</td>
      <td><input type="text" class="form-control" name="cannang" value="">
      </td>
    </tr>

    <tr>
    <td>Hệ điều hành</td>
      <td><input type="text" class="form-control" name="hedieuhanh" value="">
      </td>
    </tr>

    <tr>
    <td>Nhà sản xuất</td>
      <td><input type="text" class="form-control" name="nsx" value="">
      </td>
    </tr>

    

    <tr>
      <td colspan="2">
      <input type="submit" value="submit">
        <?php
          // if($ac==1)
          // {
          //   echo '<input type="submit" value="submit">';
          // }
          // else{
          //   echo '<input type="submit" value="Insert">';
          // }
        ?>
        

      </td>
    </tr>
    </div>
  </table>
      
</form>
</div>
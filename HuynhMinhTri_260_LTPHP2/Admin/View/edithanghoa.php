<?php
  // if(isset($_GET['act']))
  // {
  //   if($_GET['act']=="update")
  //   {
  //     $ac=1;
  //   }
  //   else
  //   {
  //     $ac=2;
  //   }
  // }
?>
<?php
  // if($ac==1)
  // {
  //   echo '<div class="row col-md-4 col-md-offset-4" > <h3>CẬP NHẬP SÁCH SẢN</h3> </div>';
  // }
  // else
  // {
  //   echo '<div class="row col-md-4 col-md-offset-4" > <h3>THÊM DANH SÁCH SẢN</h3> </div>';
  // }
?>
<div class="row col-md-4 col-md-offset-4" > <h3>CẬP NHẬP SÁCH SẢN</h3> </div>
  <div class="row col-md-4 col-md-offset-4" >
  <?php
    if(isset($_GET['id']))
    {
      $mahh=$_GET['id'];
      $hh=new HangHoa();
      $result=$hh->getListID($mahh);
      $tenhh=$result['tenhh'];
      $dongia=$result['dongia'];
      $giamgia=$result['giamgia'];
      $hinh=$result['hinh'];
      $nhom=$result['nhom'];
      $maloai=$result['maloai'];
      $dacbiet=$result['dacbiet'];
      $solx=$result['soluotxem'];
      $ngaylap=$result['ngaylap'];
      $mota=$result['mota'];
      $solt=$result['soluongton'];
      $mausac=$result['mausac'];
      $vixuly=$result['vixuly'];
      $manhinh=$result['manhinh'];
      $ram=$result['ram'];
      $carddohoa=$result['carddohoa'];
      $luutru=$result['luutru'];
      $pin=$result['pin'];
      $congketnoi=$result['congketnoi'];
      $cannang=$result['cannang'];
      $hedieuhanh=$result['hedieuhanh'];
      $nsx=$result['nsx'];
    }
  ?>

  <?php
    // if($ac==1)
    // {
    //   echo '  <form action="index.php?action=hanghoa&act=updatehh" method="post"> ';
    // }
    // else{
    //   echo '<form action="" method="post">';
    // }
  ?>
  
  <form action="index.php?action=hanghoa&act=updatehh&id=<?php echo $hinh?>" method="post">
  <table class="table" style="border: 0px;">

    <tr>
      <td>Mã hàng</td>
      <td> <input type="text" class="form-control" name="mahh" value="<?php if(isset($mahh)) echo $mahh ?>"  readonly/></td>
    </tr>
    <tr>
      <td>Tên hàng</td>
      <td><input type="text" class="form-control" name="tenhh" value="<?php if(isset($tenhh)) echo $tenhh ?>" maxlength="100px"></td>
    </tr>
    <tr>
      <td>Đơn giá</td>
      <td><input type="text" class="form-control" name="dongia" value="<?php if(isset($dongia)) echo $dongia ?>" ></td>
    </tr>
    <tr>
      <td>Giảm giá</td>
      <td><input type="text" class="form-control" name="giamgia" value="<?php if(isset($giamgia)) echo $giamgia ?>" ></td>
    </tr>
    <tr>
      <td>Hình</td>
      <td>
       <?php
          if(isset($hinh))
          {
            echo '<label><img width="50px" height="50px" src="Content/imagetourdien/'.$hinh.'"></label>';
          }
       ?>
          Chọn file để upload:
          <input type="file" name="image" id="fileupload">
       
      </td>
    </tr>
    <tr>
      <td>Nhóm</td>

      <td>
        <input type="text" class="form-control" name="nhom" value="<?php if(isset($nhom)) echo $nhom ?>" >
      </td>
    </tr>
    <tr>
      <td>Mã loại</td>
      <td>
        <select name="maloai" class="form-control" style="width:150px;">
          <?php 
          
            // $hh=new HangHoa();
            $selectloai=-1;
            if(isset($maloai) && $maloai!=-1)
            {
              $selectloai=$maloai;//3
            }
            $result=$hh->getListMaLoaiSP();
            while($set=$result->fetch()):
          ?>
          <option value="<?php echo $set['maloai']?>"<?php if($selectloai==$set['maloai']) echo'seleted="seleted"'; ?>><?php echo $set['tenloai']?></option>
            <?php 
            endwhile;
            ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Đặc biệt</td>
      <td><input type="text" class="form-control" name="dacbiet" value="<?php if(isset($dacbiet)) echo $dacbiet ?>">
      </td>
    </tr>
    <tr>
      <td>Số lượt xem</td>
      <td><input type="text" class="form-control" name="soluotxem" value="<?php if(isset($solx)) echo $solx ?>">
      </td>
    </tr>
    <tr>
      <td>Ngày lập</td>
      <td><input type="text" class="form-control" name="ngaylap" value="<?php if(isset($ngaylap)) echo $ngaylap ?>">
      </td>
    </tr>
    <tr>
      <td>Mô tả</td>
      <td><input type="text" class="form-control" name="mota" value="<?php if(isset($mota)) echo $mota ?>">
      </td>
    </tr>
    <tr>
      <td>Số lượng tồn</td>
      <td><input type="text" class="form-control" name="soluongton" value="<?php if(isset($solt)) echo $solt ?>">
      </td>
    </tr>
    <tr>
      <td>Màu sắc</td>
      <td><input type="text" class="form-control" name="mausac" value="<?php if(isset($mausac)) echo $mausac ?>">
      </td>
    </tr>
    <tr>
    <td>Vi xử lý</td>
      <td><input type="text" class="form-control" name="vixuly" value="<?php if(isset($vixuly)) echo $vixuly ?>">
      </td>
    </tr>
    <tr>
    <td>Màn hình</td>
      <td><input type="text" class="form-control" name="manhinh" value="<?php if(isset($manhinh)) echo $manhinh ?>">
      </td>
    </tr>

    <tr>
    <td>Ram</td>
      <td><input type="text" class="form-control" name="ram" value="<?php if(isset($ram)) echo $ram ?>">
      </td>
    </tr>
    <tr>
    <td>Card đồ họa</td>
      <td><input type="text" class="form-control" name="carddohoa" value="<?php if(isset($carddohoa)) echo $carddohoa ?>">
      </td>
    </tr>

    <tr>
    <td>Lữu trữ</td>
      <td><input type="text" class="form-control" name="luutru" value="<?php if(isset($luutru)) echo $luutru ?>">
      </td>
    </tr>

    <tr>
    <td>Pin</td>
      <td><input type="text" class="form-control" name="pin" value="<?php if(isset($pin)) echo $pin ?>">
      </td>
    </tr>

    <tr>
    <td>Cổng kết nối</td>
      <td><input type="text" class="form-control" name="congketnoi" value="<?php if(isset($congketnoi)) echo $congketnoi ?>">
      </td>
    </tr>

    <tr>
    <td>Cân nặng</td>
      <td><input type="text" class="form-control" name="cannang" value="<?php if(isset($cannang)) echo $cannang ?>">
      </td>
    </tr>

    <tr>
    <td>Hệ điều hành</td>
      <td><input type="text" class="form-control" name="hedieuhanh" value="<?php if(isset($hedieuhanh)) echo $hedieuhanh ?>">
      </td>
    </tr>

    <tr>
    <td>Nhà sản xuất</td>
      <td><input type="text" class="form-control" name="nsx" value="<?php if(isset($nsx)) echo $nsx ?>">
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
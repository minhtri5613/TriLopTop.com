<div  class="col-md-4 col-md-offset-4"><h3 ><b>DANH SÁCH HÀNG HÓA</b></h3></div>
<div class="row col-12">
<a href="index.php?action=hanghoa&act=inserthh"><h4>Thêm sản phẩm</h4></a>
</div>
<div class="row">
<table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã hàng</th>
        <th>Tên hàng</th>
        <th>Đơn giá</th>
        <th>Giảm giá</th>
        <th>Hình</th>
        <th>Nhóm</th>
        <th>Mã loại</th>
        <th>Đặc biệt</th>
        <th>Số lượt xem</th>
        <th>Ngày lập</th>
        <th>Mô tả</th>
        <th>Số lượng tồn</th>
        <th>Màu sắc</th>
        <th>Vi xử lý</th>
        <th>Màn hình</th>
        <th>Ram</th>
        <th>Card đồ họa</th>
        <th>Lưu trữ</th>
        <th>Pin</th>
        <th>Công kết nối</th>
        <th>Cân nặng</th>
        <th>Hệ điều hành</th>
        <th>Nhà sản xuất</th>

        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $hh= new HangHoa();
      $result = $hh ->getListHangHoa();
      while($set=$result->fetch()):
      ?>
      <tr>
        <td><?php echo $set['mahh'];?></td>
        <td><?php echo $set['tenhh'] ?></td>
        <td><?php echo $set['dongia'];?></td>
        <td><?php echo $set['giamgia'];?></td>
        <td><img width="50px" height="50px" src="Content/imagetourdien/<?php echo $set['hinh'];?>"/></td>
        <td><?php echo $set['nhom'];?></td>
        <td><?php echo $set['maloai'];?></td>
        <td><?php echo $set['dacbiet'];?></td>
        <td><?php echo $set['soluotxem'];?></td>
        <td><?php echo $set['ngaylap'];?></td>
        <td><?php echo $set['mota'];?></td>
        <td><?php echo $set['soluongton'];?></td>
        <td><?php echo $set['mausac'];?></td>
        <td><?php echo $set['vixuly'];?></td>
        <td><?php echo $set['manhinh'];?></td>
        <td><?php echo $set['ram'];?></td>
        <td><?php echo $set['carddohoa'];?></td>
        <td><?php echo $set['luutru'];?></td>
        <td><?php echo $set['pin'];?></td>
        <td><?php echo $set['congketnoi'];?></td>
        <td><?php echo $set['cannang'];?></td>
        <td><?php echo $set['hedieuhanh'];?></td>
        <td><?php echo $set['nsx'];?></td>
        <td><a href="index.php?action=hanghoa&act=update&id=<?php echo $set['mahh']?>">Cập nhật</a></td>
        <td><a href="index.php?action=hanghoa&act=xoa&id=<?php echo $set['mahh']?>">Xóa</a></td>
      </tr>
     <?php
        endwhile;
     ?>
    </tbody>
  </table>
</div>
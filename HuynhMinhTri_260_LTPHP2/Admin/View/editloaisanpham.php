<form name="frmloaihang" action="" method="post">
  <div class="card mt-3">
    <div class="card-header">
      QUẢN LÝ LOẠI HÀNG
    </div>
    <div class="card-body">
      <table class="table table-striped table">
        <thead>
          <tr class="bg-info">
            <th scope="col"></th>
            <th scope="col">Mã loại</th>
            <th scope="col">Tên loại</th>
            <th scope="col">idMenu</th>
            <th scope="col"></th>

          </tr>
        </thead>
        <tbody>
          <?php
          $selectAll=false;
          $loai=new LoaiSanPham();
          $result=$loai->getListLoaiSP();
          $i=1;
          while($set=$result->fetch()):
          ?>
                    <tr>
                      <th scope="row"><input type="checkbox" id="chonX" name="chonX<?php echo $i?>" value="<?php echo $set['maloai'];?>" ></th>
                      <td><?php echo $set['maloai'];?></td>
                      <td><?php echo $set['tenloai'];?> </td>
                      <td><?php echo $set['idmenu'];?></td>
                      <td>
                        <a href="index.php?action=loaisp&act=xoa&id=<?php echo $set['maloai']; ?>" class="btn btn-warning">Xoá</a>
                        <a href="" class="btn btn-info">Sửa</a>
                      </td>
                    </tr>
					<?php
          $i++;
          endwhile;
          ?>
          <!-- để chứa vị trí khi xóa -->
          <input type="hidden" name="xoa" value="<?php echo $i;?>" />
        </tbody>
      </table>
    </div>
    <div class="card-footer">
      <button class="btn btn-info" onclick="return selectAll();">Chọn tất cả(javascript)</button>
      <a href="index.php?action=loaisp&act=editsp" class="btn btn-info">Bỏ chọn</a>
      <!-- <a href="index.php?action=loaisp&act=deletedloaisp" class="btn btn-info">Xóa danh mục đã chọn</a> -->
      <button class="btn btn-info" onclick="return xoachon()">Xóa danh mục đã chọn </button>
      <!-- <button type="submit" class="btn btn-info">Xoá danh mục đã chọn</button> -->
      <a href="index.php?action=loaisp&act=themloai" class="btn btn-info">Thêm mới</a>
    </div>
  </div>
</form>
<script>
  function selectAll()
  {
    var allcheckbox=document.querySelectorAll('#chonX');
    allcheckbox.forEach(checkbox=>{
      checkbox.checked=true;
    });
    return false;
  }
  function xoachon()
  {
    document.forms.frmloaihang.action="index.php?action=loaisp&act=deletedloaisp"
    document.forms.frmloaihang.submit();
  }
</script>

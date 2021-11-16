
<section class="page-section " id="about">
           <!--Section: Examples-->
  <section id="examples" class="text-center">
      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
              <h3 class="mb-5 font-weight-bold" style="color: red;">SẢN PHẨM MỚI NHẤT</h3>
          </div>
          <div class="col-lg-4 text-right mt-4">
              <a href="index.php?action=home&act=sanpham">
                  <span style="color: gray;">Xem chi tiết</span></div>
          </a>


      </div>
      <!--Grid row-->
      <div class="row">
         <?php
         $hh=new HangHoa();
         $results=$hh->getListHangHoaNew();// $result chứa 12 sản phẩm, lấy từng sản phẩm đỗ lên view
         while($set=$results->fetch()):
            // $set[24,giày cao gót-vàng,600000,0,24.jpg....]
         ?>

              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                  <div class="view overlay z-depth-1-half">
                      <img src="<?php echo 'Content/imagetourdien/'.$set['hinh'];?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>
                    <!-- hiển thị tiền -->
                  <h5 class="my-4 font-weight-bold" style="color: red;"><?php echo number_format($set['dongia']);?><sup><u>đ</u></sup></br>
                  </h5>
                  <a href="index.php?action=home&act=detail&id=<?php echo $set['mahh'];?>">
                      <!-- hiển thị tên và màu -->
                      <span><?php echo $set['tenhh'].'-'.$set['mausac'];?></span></br></a>
                  <button class="btn btn-danger" id="may4" value="lap 4">New</button>
                  <h5>Số lượt xem:<?php echo $set['soluotxem'];?></h5>

              </div>
        <?php
        endwhile;
        ?> 
      </div>

      <!--Grid row-->

  </section>
  <!-- end sản phẩm mới nhất -->
  <!-- sản phẩm khuyến mãi -->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
              <h3 class="mb-5 font-weight-bold" style="color: red;">SẢN PHẨM KHUYẾN MÃI</h3>
          </div>
          <div class="col-lg-4 text-right mt-4">
              <a href="index.php?action=home&act=khuyenmai">
                  <span style="color: gray;">Xem chi tiết</span></div>
          </a>

      </div>
      <!--Grid row-->
      <div class="row">
         
      <?php
         $hh=new HangHoa();
         $results=$hh->getListHangHoaSale();// $result chứa 8 sản phẩm, lấy từng sản phẩm đỗ lên view
         while($set=$results->fetch()):
            // $set[24,giày cao gót-vàng,600000,0,24.jpg....]
         ?>
              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                  <div class="view overlay z-depth-1-half">
                  <img src="<?php echo 'Content/imagetourdien/'.$set['hinh'];?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>
                    <!-- hiển thị tiền -->
                  <h5 class="my-4 font-weight-bold">
                      <font color="red"><?php echo $set['giamgia'];?><sup><u>đ</u></sup></font>
                      <strike><?php echo $set['dongia'];?></strike><sup><u>đ</u></sup>
                  </h5>

                  <a href="index.php?action=home&act=detail&id=<?php echo $set['mahh'];?>">
                      <span><?php echo $set['tenhh'].'-'.$set['mausac'];?></span></br></a>
                  <button class="btn btn-danger" id="may4" value="lap 4">New</button>
                  <h5>Số lượt xem:<?php echo $set['soluotxem'];?></h5>

              </div>
         <?php
         endwhile;
         ?>
      </div>

      <!--Grid row-->

  </section>
  <!-- end sản phẩm khuyến mãi -->
        </section>
  
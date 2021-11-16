
<!-- quảng cáo -->
  <?php
  include "quangcao.php";
  ?>
  <!-- end quảng cáo -->
  <?php
  // tìm tổng số record(số sản phẩm hoặc số dòng trong bảng hàng hóa)
  $hh=new HangHoa();
  $results=$hh->getListHangHoaAll();
//   $count=$hh->getCount();
  $count=$results->rowCount();// $count=21
  // cho giới hạn, người dùng tự cho
  $limit=8;
  // tính số page
  $p=new Page();
  $page=$p->findPage($count,$limit);//findPage(21,8)//3
  // tính start
  $start=$p->findStart($limit);//=16
  // trang hiện tại
  $current_page=isset($_GET['page'])?$_GET['page']:1;
  ?>
  
  <!-- end số lượt xem san phẩm -->
  <!-- sản phẩm-->
 <?php
 if(isset($_GET['act']))
 {
     if($_GET['act']=="sanpham")
     {
         $ac=1;
     }
     elseif($_GET['act']=="khuyenmai")
     {
         $ac=2;
     }
     elseif($_GET['act']=="timkiem")
     {
         $ac=3;
     }
     elseif($_GET['act']=="sanphamlon")
     {
         $ac=4;
     }
     elseif($_GET['act']=="sanphamnho")
     {
         $ac=5;
     }
     elseif($_GET['act']=="sanpham1tr")
     {
         $ac=6;
     }
     elseif($_GET['act']=="sanpham10tr")
     {
         $ac=7;
     }
     else
     {
         $ac=0;
     }
 }
 ?>

  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
             <?php
             if($ac==1)
             {
                echo '<h3 class="mb-5 font-weight-bold">SẢN PHẨM</h3>';
             }
             elseif($ac==2)
             {
                 echo '<h3 class="mb-5 font-weight-bold">SẢN PHẨM KHUYẾN MÃI</h3>';
             }
             elseif($ac==3)
             {
                 echo '<h3 class="mb-5 font-weight-bold">SẢN PHẨM TÌM KIẾM</h3>';
             }
             elseif($ac==4)
             {
                echo '<h3 class="mb-5 font-weight-bold">SẢN PHẨM XẾP THEO GIÁ LỚN</h3>';
             }
             elseif($ac==5)
             {
                echo '<h3 class="mb-5 font-weight-bold">SẢN PHẨM XẾP THEO GIÁ BÉ</h3>';
             }
             elseif($ac==6)
             {
                echo '<h3 class="mb-5 font-weight-bold">SẢN PHẨM TỪ 10 TRIỆU ĐẾN 20 TRIỆU</h3>';
             }
             elseif ($ac==7)
             {
                echo '<h3 class="mb-5 font-weight-bold">SẢN PHẢM TỪ 20 TRIỆU TRỞ LÊN</h3>';
             }
             else{
                 echo '<h3 class="mb-5 font-weight-bold">KHÔNG CÓ SẢN PHẨM</h3>';
             }
             
             ?>
          </div>

      </div>
      <!--Grid row-->
      <div class="row">
         <?php
         $hh=new HangHoa();
         if($ac==1)
         {
            // $results=$hh->getListHangHoaAll();
            $results=$hh->getListHangHoaAllPage($start, $limit);//16,8
         }
         elseif($ac==2){
            $results=$hh->getListHangHoaSaleAll();
         }
         elseif($ac==3)
         {
             // kiểm tra thử phương thức mà người dùng nhấn tìm kiếm có phải là pt POST
             if($_SERVER['REQUEST_METHOD']=='POST')// if(isset($_POST['submit']))
             {
                 $name=$_POST['txtsearch'];//dép
                 $results=$hh->getSearch($name);//getSearch(dép)
             }
         }
         elseif($ac==4)
         {
            $results=$hh->xeplon();
         }
         elseif($ac==5)
         {
            $results=$hh->xepnho();
         }
         elseif ($ac==6) 
         {
             $results=$hh->sanpham10tr();
         }
         elseif ($ac==7) 
         {
             $results=$hh->sanpham20tr();
         }
         $j=1;
         while($set=$results->fetch()):
         ?>
              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                  <div class="view overlay z-depth-1-half">
                  <img src="<?php echo 'Content/imagetourdien/'.$set['hinh'];?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>
                 <!-- hiển thì tiền tệ -->
                 <?php
                 if($ac==2)
                 {
                     echo '<h5 class="my-4 font-weight-bold">
                   
                     <font color="red">'.number_format($set['giamgia']).'<sup><u>đ</u></sup></font>
                  
                     <strike>'.number_format($set['dongia']).'</strike><sup><u>đ</u></sup>';
                 }
                 else{
                    echo '<h5 class="my-4 font-weight-bold" style="color: red;">'.number_format($set['dongia']).'<sup><u>đ</u></sup></br>';
                 }
                 ?>
                  </h5>
                  <!-- phải lấy đc mã hh khi mà người dùng click và gửi đi -->
                  <a href="index.php?action=home&act=detail&id=<?php echo $set['mahh'];?>">
                      <!-- lấy ra tên và mau -->
                      <span><?php echo $set['tenhh'].'-'.$set['mausac'];?></span></br></a>
                  <button class="btn btn-danger" id="may4" value="lap 4">New</button>
                  <h5>Số lượt xem:<?php echo $set['soluotxem'];?></h5>

              </div>
          <?php
          if($j%4==0)
          {
              echo '</div><div class="row">';
          }
          $j++;
          endwhile;
          ?>
      </div>

      <!--Grid row-->

  </section>
 
  
  <!-- end sản phẩm mới nhất -->
  
 
  <div class="col-md-6 div col-md-offset-3">
      
				<ul class="pagination">
					<?php
                    if($ac==2 && $ac==1 )
                    {
                        if($current_page>1 && $page>1)
                    {
                        echo ' <li ><a href="index.php?action=home&act=sanpham&page='.($current_page-1).'">Prev</a></li>';
                    }
                    for($i=1;$i<=$page;$i++)
                    {
                    ?>
				    <li ><a href="index.php?action=home&act=sanpham&page=<?php echo $i;?>">
                    <?php
                        echo $i;
                    ?>
                    </a></li>
				    <?php
                    }
                    // nút next
                    if($current_page<$page && $page>1)//1<3
                    {
                        echo ' <li ><a href="index.php?action=home&act=sanpham&page='.($current_page+1).'">Next</a></li>';
                    }

                    }
                    ?>
				</ul>
</div>
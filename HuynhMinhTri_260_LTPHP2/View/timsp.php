<!--Section: Examples-->
<section id="examples" class="text-center">

<!-- Heading -->
<div class="row">
    <div class="col-lg-8 text-right">
    <h3 class="mb-5 font-weight-bold">SẢN PHẨM TÌM KIẾM</h3>
    </div>

</div>
<!--Grid row-->
<div class="row">
   <?php
$hh = new HangHoa();
// gữi chữ mà người dùng nhấn từ submit $_post=['seach'=rog]
// if($_SERVER['REQUEST_METHOD']=='POST')
if(isset($_POST['submit']))
{
  $namesearch=$_POST['txtsearch'];
  $results=$hh->getSearch($namesearch);
}

while ($set = $results->fetch()):
?>
        <!--Grid column-->
        <div class="col-lg-3 col-md-4 mb-3 text-left">

            <div class="view overlay z-depth-1-half">
            <img src="<?php echo 'Content/imagetourdien/' . $set['hinh']; ?>" class="img-fluid" alt="">
                <div class="mask rgba-white-slight"></div>
            </div>            
            <a href="index.php?action=home&act=detail&id=<?php echo $set['mahh']; ?>">
            <span><?php echo $set['tenhh'] . '-' . $set['mausac']; ?></span></br></a>
            <button class="btn btn-danger" id="may4" value="lap 4">New</button>
            <h5>Số lượt xem:<?php echo $set['soluotxem'] ?></h5>

        </div>
  <?php
endwhile;
?>
</div>

<!--Grid row-->

</section>


<!-- end sản phẩm mới nhất -->


<div class="col-md-6 div col-md-offset-3">
          <ul class="pagination">
              
              <li ><a href=""></a></li>
             
          </ul>
</div>

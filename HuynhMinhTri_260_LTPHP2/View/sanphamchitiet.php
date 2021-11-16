<!-- <script type="text/javascript">
    function chonsize(a) {
        document.getElementById("size").value = a;

    }
</script> -->
<section >
    <div class="row mt-5" >
        <div class="col-lg-12 text-center ">
            <h3 class="mb-5 font-weight-bold">CHI TIẾT SẢN PHẨM</h3>
        </div>

    </div>
    <article class="col-12">
        <!-- <div class="card"> -->
        <div class="container-fliud">
            <div class="wrapper row">
                <form action="index.php?action=giohang&act=add_cart" method="post">
                    <!-- <input type="hidden" name="action" value="giohang&add_cart"/> -->

                    <div class="preview col-md-6">
                        <div class="tab-content">
                           <!-- lấy thông tin của 1 sản phẩm để hiển thị lên cho người dùng thấy -->
                           <?php
if (isset($_GET['id']))
{
    $id = $_GET['id']; //18
    $hh = new HangHoa();
    $results = $hh->getListDetail($id);
    // vì kết quả trả về chỉ có 1 row nên ko cần while
    // đây là thông tin của 1 sản phẩm mà người dùng chọn
    $mahh = $results[0];
    $tenhh = $results[1];
    $dongia = $results[2];
    $giamgia = $results[3];
    $hinh = $results[4];
    $mota = $results[10];
    $vixuly = $results[13];
    $manhinh = $results[14];
    $ram = $results[15];
    $carddohoa = $results[16];
    $luutru = $results[17];
    $pin = $results[18];
    $congketnoi = $results[19];
    $cannang = $results[20];
    $hedieuhanh = $results[21];
    $nhom = $results[5];
}
?>

                            <div class="tab-pane active" id=""><img src="<?php echo 'Content/imagetourdien/' . $hinh; ?>" alt="" width="200px" height="350px">
                            </div>
                           
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                         <?php
$results = $hh->getListDetailNhom($nhom);
while ($set = $results->fetch()):
?>
                        <li class="active"><a href="#" data-toggle="tab">
                        <img src="<?php echo 'Content/imagetourdien/' . $set['hinh']; ?>" alt="">
                        </a>

                        </li>
                        <?php
endwhile;
?>
                        </ul>
                    </div>
                    <div class="details col-md-6">
                        <input type="hidden" name="mahh" value="<?php echo $mahh; ?>" />
                        <!-- hiển thị tên sp -->
                        <h3 class="product-title mt-5"><?php echo $tenhh; ?> </h3>
                        <!-- Đánh giá sao -->
                        <?php
                            $_STARS=new Star();
                            if(isset($_SESSION['username']))
                            {
                                $name=$_SESSION['username'];
                            }
                            if(isset($_GET['id']) && isset($_POST['stars']))
                            {
                                
                                $_STARS->save($_GET['id'],$name,$_POST['stars']);
                            }
                            $average=$_STARS->avg();
                            $rating=$_STARS->get($id,$name);
                        ?>
                        <p style="color:gray">Rating: <?php echo $average[$id];?></p>
                        <div class="rating">
                            <div class="pstar" data-pid="<?php $id ?>">
                            your Rating:
                            <?php
                                for($i=1;$i<=5;$i++)
                                {
                                    $img=$i<=$rating?"sao":"star-blank";
                                    echo "<img src='Content/imagetourdien/$img.png' style='width:30px;cursor:pointer;'data-set='$i'>";
                                }
                            ?>
                            </div>
                        </div>
                        <!-- kết thúc đánh giá sao -->
                        <!-- mô tả -->
                        <p class="product-description">
                            <?php echo $mota; ?>
                        </p>
                        <!-- chi tiết sản phẩm -->
                        <p class="product-description">
                            <table>
                                <ul >
                                   <p align='center'>Chi tiết sản phẩm</p>
                                    <li>
                                        <?php echo $vixuly ?>
                                    </li>
                                    <li>
                                    Màng hình:      <?php echo $manhinh ?>
                                    </li>
                                    <li>
                                    RAM:    <?php echo $ram ?>
                                    </li>
                                    <li>
                                    Card đồ họa:    <?php echo $carddohoa ?>
                                    </li>
                                    <li>
                                    Bộ nhớ:    <?php echo $luutru ?>
                                    </li>
                                    <li>
                                    Pin:    <?php echo $pin ?>
                                    </li>
                                    <li>
                                    Cổng kết nối :   <?php echo $congketnoi ?>
                                    </li>
                                    <li>
                                    Trọng lượng  :  <?php echo $cannang ?>
                                    </li>
                                    <li>
                                    Hệ điều hành :   <?php echo $hedieuhanh ?>
                                    </li> 
                                </ul>
                            </table>
                        </p>
                        <h4 class="price">Giá bán: <?php echo number_format($dongia, 0, ",", "."); ?> đ</h4>
                        
                        <h5 class="colors">Màu:
                            <select name="mymausac" class="form-control" style="width:150px;">
                               <?php
$results = $hh->getListDetailNhom($nhom);
// trả ra nhiều row
while ($set = $results->fetch()):
?>
                               <option value="<?php echo $set['mausac']; ?>">
                               <?php echo $set['mausac']; ?>
                                </option>
                               <?php
endwhile;
?>
                            </select><br>
                           
                            <input type="hidden" name="size" id="size" value="0" />
                            
                            </br></br>
                            Số Lượng:

                            <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />


                        </h5>
                        
                        <div class="action" class="midle">

                            <button  class="nut btn1" type="submit" data-toggle="modal" data-target="#myModal">MUA NGAY
                            </button>

                            <a href="index.php?action=home&act=luu&id=<?php echo $_GET['id']?>" target="_self"> <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- </div> -->
    </article>
    <form  id="ninForm_2" class="mt-5" method="post" target="_self">
        <!-- <input type="text" name="pid" id="ninPdt"> -->
        <input type="hidden" name="stars" id="ninStar">
    </form>
</section>
<?php
if (isset($_SESSION['makh'])):
?>
<section>
    <div class="col-12">
        <div class="row">
            <!-- kiểm tra thử là phải bình luận của id sản phẩm hay ko -->
            <?php
    if (isset($_GET['id']))
    {
        $id = $_GET['id'];

        $dt = new User();
        $results = $dt->countComment($id); //$results[9]
        $tong = $results[0];
    }
?>
                <p class="float-left"><b>BÌnh luận: <?php echo $tong; ?></b></p>
                <hr>
            </div>
            <form action="index.php?action=home&act=comment&id=<?php echo $_GET['id']; ?>" method="post">
            <div class="row">
              
                    <input type="hidden" name="txtmahh" value="<?php echo $_GET['id']; ?>" />
                    <img src="Content/imagetourdien/avata/<?php echo $_SESSION['avata']?>" width="50px" height="50px"; />
                    <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
                    <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />
                                
            </div>
            
            </form>
            <div class="row">
                <p class="float-left"><b>Các bình luận</b></p>
                <hr>
            </div>
            <div class="row">
                <?php
    $results = $dt->displayComment($_GET['id']);
    
    while ($set = $results->fetch()):
        
?>
                <div class="col-12">
                    <div class="row">
                        <img src="Content/imagetourdien/avata/<?php echo $set['avata']?>" alt="" width="50px" height="50px">
                        <p><?php echo '<b>' . $set['tenkh'] . ':</b>' . $set['noidung']; ?></p><br>
                        <br>
                        
                    </div>
                   
                </div>
                &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
                 <a href="#">trả lời</a>&emsp; &emsp; &emsp; &emsp;  <a href=""><p style="color:red">báo cáo</p></a>
                <?php
    endwhile;
?>
               <br/>
            </div>

        </div>
    </section>
<?php
endif;
?>
<script>
    var stars={
        init:function(){
            
            for(let docket of document.getElementsByClassName("pstar"))
            {
                // console.log(document.getElementsByClassName("pstar"));
                for(let star of docket.getElementsByTagName("img"))
                {
                    // console.log(docket.getElementsByTagName("img"))
                    star.addEventListener("click",stars.click);
                }
            }
        },
        click:function()
        {
            //lấy ra 5 ngôi sao
            let all= this.parentElement.getElementsByTagName("img"),
            // chọn mấy sao thì set ở đó vd 3 sao thi set ở 3 sao
                set=this.dataset.set,
                i=1;
            for(let star of all)
            {
                star.src=i<=set?"./Content/imagetourdien/sao.png":"./Content/imagetourdien/star-blank.png";
                i++;
            }
        // document.getElementById("ninPdt").value=this.parentElement.dataset.pid;
        document.getElementById("ninStar").value=this.dataset.set;
        document.getElementById("ninForm_2").submit();
        }
    };
    window.addEventListener("DOMContentLoaded",stars.init);
</script>
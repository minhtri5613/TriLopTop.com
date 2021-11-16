<!-- <style>
    .anh{
        border: 1px solid brown;
        border-radius: 50%;
    }
</style> -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">TriLaptop</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Trang chủ</a></li>

                        <li class="nav-item dropdown"> 
                            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                Sản phẩm
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
                           
                                    <div class="input-group">
                                        <a class="dropdown-item" href="index.php?action=home&act=sanphamlon">tìm sản phẩm theo giá lớn</a>
                                        <hr>
                                        <a class="dropdown-item" href="index.php?action=home&act=sanphamnho">tìm sản phẩm theo giá nhỏ</a>
                                        <a class="dropdown-item" href="index.php?action=home&act=sanpham10tr">tìm sản phẩm từ 10 triệu đến 20 triệu</a>
                                        <a class="dropdown-item" href="index.php?action=home&act=sanpham20tr">tìm sản phẩm từ 20 triệu trở lên</a>
                                    </div>


                            </div> 
                        </li>
                        <?php
                            if(isset($_SESSION['makh']))
                            {
                                
                            }
                        ?>
                        <li class="nav-item"><a class="nav-link" href="index.php?action=home&act=luu_act">Yêu thích</a></li>
                        <li class="nav-item dropdown"> 
                            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <i class="fa fa-search"> </i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
                            <form class="form-inline" action="index.php?action=home&act=timkiem" method="post">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <!-- <a href="Trangchu.php?trang=tk"> -->
                                            <input class="input-group-text btn-info" style="height: 35px;" name="submit" type="submit" id="btsearch" value="Tìm Kiếm"/>
                                        <!-- </a> -->
                                            <!-- <span class="input-group-text">@</span> -->
                                            <input type="text" name="txtsearch" class="form-control" placeholder="Tìm Kiếm"/>
                                        </div>

                                </form>
                            </div> 
                            
						</li>


                        <?php
if (isset($_SESSION['makh']) && isset($_SESSION['tenkh'])):
    $makh = $_SESSION['makh'];
    $name = $_SESSION['tenkh'];
   
    
?>
                            <li class="nav-item dropdown">
                            <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                
                                <?php 
                                if(isset($_SESSION['makh']))
                                {
                                    $makh=$_SESSION['makh'];
                                    $db= new User();
                                    $results = $db ->getAvata($makh);
                                    if($results['avata'] != null)
                                    {
                                        $hinh=$results['avata'];
                                        echo "<img  src='Content/imagetourdien/avata/$hinh'  width= 50px, height= 50px;/>";
                                    }
                                    else {
                                        echo "<img  src='Content/imagetourdien/people.png'  width= 50px, height= 50px;/>";
                                    }
                                }
                                ?>
                            </a> 						
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php  if(isset($_SESSION['makh']))
                                {
                                    $makh=$_SESSION['makh'];
                                    $db= new User();
                                    $results = $db ->getAvata($makh);
                                    if($results['avata'] != null)
                                    {
                                        $hinh=$results['avata'];
                                        echo "<img  src='Content/imagetourdien/avata/$hinh'  width= 50px, height= 50px;/>";
                                    }
                                    else {
                                        echo "<img  src='Content/imagetourdien/people.png'  width= 50px, height= 50px;/>";
                                    }
                                }?>
                                <?php echo $name ?>
                                <a class="dropdown-item" href="index.php?action=doianh&act=doianh">đổi ảnh</a>
                                <a class="dropdown-item" href="index.php?action=trangcanhan&id=<?php echo $makh; ?>">Trang cá nhân</a>
                                <a class="dropdown-item" href="index.php?action=doimk&id=<?php echo $makh?>">Đổi mật khẩu</a>
                                <a class="dropdown-item" href="index.php?action=login&act=log_out">Đăng xuất</a>
							</div>
                            <?php
else:
?>
                            <li class="nav-item dropdown"> 
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                	             Tài  khoản
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
                                <a class="dropdown-item" href="index.php?action=login">Đăng Nhập</a>
								<a class="dropdown-item" href="index.php?action=registration">Đăng Ký </a>
                                
                                
								<div class="dropdown-divider"></div> <a class="dropdown-item" href="index.php?action=forgetps">Quên Mật Khẩu</a>
							</div> 
                            <?php
endif;
?>
                            
                            <!-- <a class="dropdown-item" href="index.php?action=login">Đăng Nhập</a>
							<a class="dropdown-item" href="index.php?action=registration">Đăng Ký </a>
                            <div class="dropdown-divider"></div> <a class="dropdown-item" href="#">Quên Mật Khẩu</a> -->

                            <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
                                <a class="dropdown-item" href="index.php?action=login">Đăng Nhập</a>
								<a class="dropdown-item" href="index.php?action=registration">Đăng Ký </a>
                                <a class="dropdown-item" href="index.php?action=login&act=log_out">Đăng xuất</a>
                                
								<div class="dropdown-divider"></div> <a class="dropdown-item" href="#">Quên Mật Khẩu</a>
							</div> -->
						</li>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->

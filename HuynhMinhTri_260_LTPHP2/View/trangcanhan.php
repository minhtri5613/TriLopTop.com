<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    
<div class="container  " style='margin-top:100px'> 
 
                     

 <div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-5 well well-sm col-md-offset-4"> 
   <legend><a href="#"><i class="glyphicon glyphicon-globe"></i></a> Thông tin cá nhân!
   </legend> 
   
   <form  action="index.php?action=trangcanhan&act=khach" method="post" class="form" role="form"> 

                        <?php
if (isset($_GET['id']))
{
    $id = $_GET['id']; //18
    $kh = new User();
    $results = $kh->getListDetail($id);
    // vì kết quả trả về chỉ có 1 row nên ko cần while
    // đây là thông tin của 1 sản phẩm mà người dùng chọn
    $makh = $results[0];
    $tenkh = $results[1];
    $email = $results[4];
    $diachi = $results[5];
    $sdt = $results[6];
}
?>
    <div class="row"> 
    <div class="col-xs-4 col-md-4">
        <label for="email">Tên Khách Hàng:</label>
    </div>
    
    <div class="col-xs-6 col-md-6">
        <input type="text" name="txtTenkh" value="<?php echo $tenkh ?>">
    </div>
    <div class="col-xs-2 col-md-2">
         <a href="#"><!--"index.php?action=trangcanhan&act=update" -->
            <!-- <input type="submit" name="submit1" value="sửa"> -->sửa
        </a>
    </div>
    
    <!------------------------------------->
    <div class="col-xs-4 col-md-4">
        <label for="email">Địa chỉ:</label>
    </div>        
    <div class="col-xs-6 col-md-6">
    <input type="text" name="txtDiachi" value="<?php echo $diachi ?>">
    </div>
    <div class="col-xs-2 col-md-2">
        <a href="#">
            <!-- <input type="submit" name="submit2" value="sửa"> -->sửa
        </a>
    </div>
    <!------------------------------------->
    <div class="col-xs-4 col-md-4">
        <label for="email">Số Điện Thoại:</label>
    </div>           
    <div class="col-xs-6 col-md-6">
    <input type="text" name="txtSdt" value="<?php echo $sdt ?>">
    </div>
    <div class="col-xs-2 col-md-2">
        <a href="#">
            <!-- <input type="submit" name="submit3" value="sửa"> -->sửa
        </a>
    </div>
    <!------------------------------------->
    <div class="col-xs-4 col-md-4">
        <label for="email">Email:</label>
    </div>            
    <div class="col-xs-6 col-md-6">
    <input type="text" name="txtEmail" value="<?php echo $email ?>">
    </div>
    <div class="col-xs-2 col-md-2">
        <a href="#">
            <!-- <input type="submit" name="submit4" value="sửa"> -->sửa
        </a>
    </div>

     
      
   
    <!-- <button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng ký</button>  -->
   </form> 
  </div> 
 </div>
</div>
</body>
</html>

<style>
  body{
    background-repeat: no-repeat;
    background-size:1920px 500px;
    color: #FF0040;
  }
  
  .error {
    color: #FF0000;
  }
  
</style>
<body background="Content/imagetourdien/nen.jpg" style="margin-top:100px">

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
    $pass=$results[3];
    $email = $results[4];
    $diachi = $results[5];
    $sdt = $results[6];
    
    
}
?>
    <div class="row">
        <div class="col-md-4 login-sec">
            <form  action="index.php?action=doimk&act=doi_mk&id=<?=$_GET['id']?>" class="login-form mt-5 " method="post">
                        <div class="form-group">
                            <H2>Đổi mật khẩu</H2>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Mật khẩu củ</label>
                            <input type="password" class="form-control" name="txtpassword" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Mật khẩu mới</label>
                            <input type="password" class="form-control" name="txtpasswordnew" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" name="txtpasswordnewlai" placeholder="">
                        </div>

                        <div class="form-check">
                            <button class="btn btn-primary float-right" type="submit"> Đổi mật khẩu</button> 
                        </div>
            </form>
        </div>
        <div class="col-md-8 banner-sec">
        <img class="d-block img-fluid" src="Content/imagetourdien/bg.jpg"  >
        </div>
    </div>
    

</body>

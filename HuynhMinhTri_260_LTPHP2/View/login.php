<style>
  body{
    background-repeat: no-repeat;
    background-size:1920px 500px;
  }
  
  .error {
    color: #FF0000;
  }
  
</style>
<body background="Content/imagetourdien/nen.jpg">

<section class="login-block mt-5">
    <div class="container">  
      <div class="row">
        <div class="col-md-4 login-sec " style="margin-top:80px" >   
          <form  action="index.php?action=login&act=login_action" class="login-form" method="post">
            <div class="form-group">
                <H2>Đăng nhập</H2>
        
                <label for="exampleInputEmail1" class="text-uppercase" >Tài khoảng </label>
                <input type="text" class="form-control" name="txtusername" placeholder="">
          
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                <input type="password" class="form-control" name="txtpassword" placeholder="">
              </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1"> &ensp; &nbsp; nhớ mật khẩu</label>
            </div>

            <a href="index.php?action=forgetps">quên mật khẩu</a>

            <div class="form-check">
                <button class="btn btn-primary float-right" type="submit"> Đăng Nhập</button> 
              </div>
          </form>
        </div>
        <div class="col-md-8 banner-sec">
        <img class="d-block img-fluid" src="Content/imagetourdien/bg.jpg"  >
        </div>

      </div> 
    </div>
</section>
</body>

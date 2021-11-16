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
<body background="Content/imagetourdien/nen.jpg">
<section class="login-block">
  <div class="container">
    <div class="row ">
      <div class="col-md-4 login-sec">
        <!-- <h3 class="text-center"><b>Login Now</b></h3> -->
        <form  action="index.php?action=forgetps&act=forgetps_action" class="login-form" method="post" style="margin-top:100px;">
        
          <div class="form-group">
            <label for="exampleInputEmail1" class="text-uppercase">Enter Email Address To Send Password Link</label>
            <input type="text" class="form-control" name="email" placeholder="">

          </div>
         


          <div class="form-check" style="margin-top:100px;">
            <input type="submit" name="submit_email">
            
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
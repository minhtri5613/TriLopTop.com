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

<?php

  const REQUIRED_MSG = "is required";
  $name = $email = $sdt = $tk = $mk = "";
  $nameErr=$emailErr=$sdtErr=$tkErr=$mkErr="";
  if($_SERVER["REQUEST_METHOD"]=="post")
    {
      if(empty($_POST['txttenkh']))
    {
        $nameErr="Tên không được trống";
    }else{
        $name=test_input($_POST['name']);//$name=4ly
        if(!preg_match("/^[a-zA-Z-]*$/",$name))
        {
            $nameErr="Tên phải là các ký tự";
        }
    }
    // kiểm tra email
    if(empty($_POST['txtemail']))
    {
        $emailErr="Email không được trống";
    }else{
        $email=test_input($_POST['email']);//$email=ly@gmail.com
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $emailErr="Email chưa đúng định dạng";
        }
    }

    if(empty($_POST['txtsodt']))
    {
        $phoneErr="Phone không được trống";
    }else{
        $phone=test_input($_POST['phone']);//$name=4ly
        if(!preg_match("/^[0]{1}[\d]{9,10}$/",$phone))
        {
            $phoneErr="Số điện thoại chưa đúng";
        }
    }
    // kiểm tra pass
    if(empty($_POST['pass']))
    {
        $passErr="Pass không được trống";
    }else{
        $pass=test_input($_POST['pass']);//$name=4ly
        if(!preg_match("/^[A-Z]([\w\.!@#$%^&*()]+){8}$/",$pass))
        {
            $passErr="Pass chưa đúng";
        }
    }

    }
    function test_input($data)
{
    $data=trim($data);
    $date=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>


<div class="container" style='margin-top:100px'> 
 
<div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-5 well well-sm col-md-offset-4"> 
   <legend><i class="glyphicon glyphicon-globe"></i> Đăng ký thành viên!
   </legend> 
   <form  action="index.php?action=registration&act=registration_action" method="post" class="form" role="form"> 
       <?php //echo htmlspecialchars($_SERVER["PHP_SELF"])?>
    <div class="row" > 

     <div class="col-xs-4 col-md-4"> <label for="email">Tên Khách Hàng:</label>
     </div>
     <!-- <div class="col-xs-8 col-md-8"><input class="form-control" name="txttenkh" placeholder="Tên khách hàng" required="" autofocus="" type="text"> </div>  -->
     <input type="text" name="txttenkh" id="" value="<?php if(isset($name)) echo $name?>">
    <span class="error">*<?php if(isset($nameErr)) echo $nameErr?></span>
     <div class="col-xs-4 col-md-4"> <label for="email">Địa chỉ:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txtdiachi" placeholder="Địa chỉ khách hàng"  type="text"> </div> 
     <div class="col-xs-4 col-md-4"> <label for="email">Số Điện Thoại:</label>
     </div>
     <!-- <div class="col-xs-8 col-md-8"><input class="form-control" name="txtsodt" placeholder="Số điện thoại khách hàng" required="" autofocus="" type="text"> </div>  -->
     <input type="text" name="txtsodt" id="" value="<?php if(isset($phone)) echo $phone?>">
    <span class="error">*<?php if(isset($phoneErr)) echo $phoneErr?></span>
     <div class="col-xs-4 col-md-4"><label for="email">Tên Đăng Nhập:</label>
     </div> 
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txtusername" placeholder="Tên đăng nhập"  type="text"> 
     </div> 
    </div><label for="email">Email:</label>  <input type="text" name="txtemail" id="" value="<?php if(isset($email)) echo $email?>">
    <span class="error">*<?php if(isset($emailErr)) echo $emailErr?></span>
<!-- <input class="form-control" name="txtemail" placeholder="Email" type="email"> -->

 
    <!-- <input type="password" name="txtpass" id=""value="<?php //if(isset($pass)) echo $pass?>">
    <span class="error">*<?php //if(isset($passErr)) echo $passErr?></span> -->
     <input class="form-control" name="txtpass" placeholder="Mật khẩu" type="password">
      <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password">
      
   
    <button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng ký</button> 
   </form> 
  </div> 
 </div>

</div>
</body>

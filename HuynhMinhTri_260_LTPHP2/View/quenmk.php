<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="mt-5">

    <h1>mời nhận tên tài khoảng</h1>
   <!--  <input type="text" class="form-control" name="txtusername" placeholder=""> -->

    <form  action="index.php?action=quenmk&act=quen_mk"  method="post">
            <div class="form-group">
                <H2>   Quên mật khẩu</H2>
        
                <label for="exampleInputEmail1" class="text-uppercase" >Tài khoảng </label>
                <input type="text" class="form-control" name="txtusername" placeholder="">
            </div>
           
            <div class="form-check">
                <button class="btn btn-primary float-right" type="submit"> tìm lại mật khẩu</button> 
            </div>
          </form>
</body>
</html>
<?php
$action="doianh";
if(isset($_GET['act']))
{
    $action=$_GET['act'];
}
switch($action)
{
    case "doianh":
        
        include "View/anhdaidien.php";
        break;
    case "upload":
        // khi người dùng nhấn nút submit thì nó sẽ upload hình
        // lên server và lưu trong $_Files: là biến siêu toàn cục
        // là mảng kết hợp các mục được tải lên thông qua phương thức POST
        // trong đó các file tải lên sẽ là 1 phần tử trong mảng có key:
        // name: tên file, tmp_name: nơi lưu tạm file, nằm bất cứ ở đâu trong server
        // và tùy thuộc là thiết lập của chúng ta, error: lỗi, size: kích thước của file, đơn vị tính là bye
        // để upload file thì dùng phương thức move_upload_file($ten_file,$diachiluufile)
        // $ten_file: tên "tmp_name" của file đc tải lên server
        //$diachiluufile: nơi lưu trữ file upload mà bạn muốn
        //B1: chúng ta cần phải xác định file cần lưu ở đâu
        $target_dir="content/imagetourdien/avata/";
        $target_file=$target_dir.basename($_FILES['fileToUpload']["name"]);
        //$target_file=upload/juno1.jpg
        //B2: đánh dấu cờ để kiểm tra các ràng về file
        $upload=1;
        //B3: lấy phần mở rộng của file ra và đổi về cùng chung 1 định là chữ thường
        $imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        //B4: kiểm tra image có thật sự trên server hay không khi người dùng nhấn nút submit
        if(isset($_POST['submit']))
        {
            $check=getimagesize($_FILES['fileToUpload']["tmp_name"]);
            if($check!==false)
            {
                // hình có lưu trên server
                $upload=1;
            }
            else{
                echo "File hình ko có";
                $upload=0;
            }
        }
        // B5:kiểm tra thử trong thư mục mà mình cần đưa hình vào nó có tồn tại hình đó chưa
        if(file_exists($target_file))
        {
            echo "File hình đã tồn tại";
            $upload=0;
        }
        // B6: kiểm tra kích thước của file hình có vượt quá 500KB
        if($_FILES['fileToUpload']["size"]>500000)
        {
            echo " Hình có dung lượng vượt quá 500KB";
            $upload=0;
        }
        // B7:kiểm tra hình đưa vào phải là đuôi jpg, jpeg, png, gif
        if($imageFileType!="jpg"&&$imageFileType!="png"
        &&$imageFileType!="jpeg"&&$imageFileType!="gif")
        {
            echo "Hình phải là định dạng jpg...";
            $upload=0;
        }
        // B8: tiến hành di chuyển vào trong thư mục tên là upload(tên này là thư mục tự cho)
        if($upload==0)
        {
            echo "File này ko up load dc";
        }
        else{
                if(move_uploaded_file($_FILES['fileToUpload']["tmp_name"],$target_file))
                {
                    $img = basename($_FILES['fileToUpload']["name"]);
                    $makh= $_SESSION['makh'];
                    $dt = new User();
                    $dt->insertAnhdaidien($img,$makh);
                    echo '<meta http-equiv="refresh" content="0;url=../index.php"/>';
                }
                else{
                    echo "error";
                }
            }
        break;
}
?>
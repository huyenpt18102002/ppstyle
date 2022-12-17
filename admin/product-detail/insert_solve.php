<?php
    $product_id = $_POST['product_id'];
    $color_id = $_POST['color_id'];
    $size_id = $_POST['size_id'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $product_img = $_FILES['product_img']['name'];
    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];
    $product_desc = $_POST['product_desc'];
    $filetarget = basename($_FILES['product_img']['name']);
        move_uploaded_file( $_FILES['product_img']['tmp_name'],"../uploads/".$_FILES['product_img']['name']);

 /* if ($_SERVER['REQUEST_METHOD'] !== 'POST')
  {
      // Dữ liệu gửi lên server không bằng phương thức post
      echo "Phải Post dữ liệu";
      die;
  }

  // Kiểm tra có dữ liệu fileupload trong $_FILES không
  // Nếu không có thì dừng
  if (!isset($_FILES["product_img"]))
  {
      echo "Dữ liệu không đúng cấu trúc";
      die;
  }

  // Kiểm tra dữ liệu có bị lỗi không
  if ($_FILES["product_img"]['error'] != 0)
  {
    echo "Dữ liệu upload bị lỗi";
    die;
  }

  // Đã có dữ liệu upload, thực hiện xử lý file upload

  //Thư mục bạn sẽ lưu file upload
  $target_dir    = "../uploads";
  //Vị trí file lưu tạm trong server (file sẽ lưu trong uploads, với tên giống tên ban đầu)
  $target_file   = $target_dir . basename($_FILES["product_img"]["name"]);

  $allowUpload   = true;

  //Lấy phần mở rộng của file (jpg, png, ...)
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

  // Cỡ lớn nhất được upload (bytes)
  $maxfilesize   = 800000;

  ////Những loại file được phép upload
  $allowtypes    = array('jpg', 'png', 'jpeg', 'gif', 'jfif');


  if(isset($_POST["submit"])) {
      //Kiểm tra xem có phải là ảnh bằng hàm getimagesize
      $check = getimagesize($_FILES["product_img"]["tmp_name"]);
      if($check !== false)
      {
          echo "Đây là file ảnh - " . $check["mime"] . ".";
          $allowUpload = true;
      }
      else
      {
          echo "Không phải file ảnh.";
          $allowUpload = false;
      }
  }

  // Kiểm tra nếu file đã tồn tại thì không cho phép ghi đè
  // Bạn có thể phát triển code để lưu thành một tên file khác
  if (file_exists($target_file))
  {
      echo "Tên file đã tồn tại trên server, không được ghi đè";
      $allowUpload = false;
  }
  // Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
  if ($_FILES["product_img"]["size"] > $maxfilesize)
  {
      echo "Không được upload ảnh lớn hơn $maxfilesize (bytes).";
      $allowUpload = false;
  }


  // Kiểm tra kiểu file
  if (!in_array($imageFileType,$allowtypes ))
  {
      echo "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
      $allowUpload = false;
  }


  if ($allowUpload)
  {
      // Xử lý di chuyển file tạm ra thư mục cần lưu trữ, dùng hàm move_uploaded_file
      if (move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file))
      {
          echo "File ". basename( $_FILES["product_img"]["name"]).
          " Đã upload thành công.";

          echo "File lưu tại " . $target_file;
          

      }
      else
      {
          echo "Có lỗi xảy ra khi upload file.";
      }
  }
  else
  {
      echo "Không upload được file, có thể do file lớn, kiểu file không đúng ...";
  }*/
        move_uploaded_file( $_FILES['product_img1']['tmp_name'],"../uploads/".$_FILES['product_img1']['name']);
        move_uploaded_file( $_FILES['product_img2']['tmp_name'],"../uploads/".$_FILES['product_img2']['name']);
        move_uploaded_file( $_FILES['product_img3']['tmp_name'],"../uploads/".$_FILES['product_img3']['name']);
   include_once "../connect/open-connect.php";
    $sql = "INSERT INTO product_detail(product_id, color_id, size_id, price, quantity, product_img, product_img1, product_img2, product_img3, product_desc)
            VALUES ('$product_id', '$color_id', '$size_id', '$price', '$quantity', '$product_img', '$product_img1', '$product_img2', '$product_img3', '$product_desc')";
    $result = mysqli_query($connect, $sql);
    include_once "../connect/close-connect.php";
    header("location:product_detail_list.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Về chúng tôi</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/17d0ccc118.js" crossorigin="anonymous"></script>
</head>
<style>
.introduce{
    padding: 100px 15px;
}
.container-img img{
    width: 100%;
    height: 600px;
}
.container-slogan{
    text-align: center;
    padding: 30px 0;
    font-size: 30px;
}
.container-content-top{
    display: flex;
    flex-wrap: wrap;
}
.container-content-top-left{
    flex:3;
}
.container-content-top-right{
    flex:3;
    padding-top: 50px;
}
.container-content-bottom{
    display: flex;
    flex-wrap: wrap;
}
.container-content-bottom-left-content{
    padding-top:200px 0;
    flex:4;
}
.container-content-bottom-right-img{
    flex:2;
}
.container-content-bottom-right-img img{
    width:100%;
}
.container-content{
    padding: 30px 0;
}
</style>
<body>
<?php include_once "header.php"; ?>
    <section class="introduce">
       <div class="container">
           <div class="container-img">
               <img src="image/logo-intro.jpg" alt="">
           </div>
           <div class="container-slogan">
               <h1>PPStyle - Nâng tầm giá trị thời trang</h1>
           </div>
       </div>
       <div class="container-row">
           <div class="container-content-top">
               <div class="container-content-top-left">
                   <img src="image/lg.jpg" alt="">
               </div>
               <div class="container-content-top-right">
               <h2>Tầm nhìn và sứ mệnh</h2><br>
               <p>Mang đến niềm vui cho hàng triệu gia đình Việt</p> <br>
                <p>PPStyle hướng đến mục tiêu mang lại niềm vui mặc mới mỗi ngày cho hàng triệu người tiêu dùng Việt. Chúng tôi tin rằng người dân Việt Nam cũng đang hướng đến một cuộc sống năng động, tích cực hơn.</p>
               </div>
           </div>
           <div class="container-content-bottom">
               <div class="container-content-bottom-left-content">
                <p>PPStyle 20 năm - Khoác lên niềm vui gia đình Việt</p>

                <p>Năm 1997, Công ty Cổ phần Thương mại và Dịch vụ Hoàng Dương được thành lập với mục đích chính ban đầu là hoạt động trong lĩnh vực sản xuất hàng thời trang xuất khẩu với các sản phẩm chủ yếu làm từ len và sợi. <br>
                
                Năm 2001 thương hiệu thời trang PPStyle ra đời, tự hào trở thành một cột mốc đáng nhớ của doanh nghiệp Việt trong ngành thời trang.</p>
               </div>
               <div class="container-content-bottom-right-img">
                   <img src="image/style.jpg" alt="">
               </div>
           </div>
           <div class="container-content">
             <h2>Giá trị cốt lõi của PPStyle</h2><br>
             <p>20 năm phát triển - Chúng tôi luôn tuân thủ những giá trị cốt lõi của mình.</p><br>
            
             <h2>Kinh doanh dựa trên giá trị thật:</h2><br>
             <p>PPStyle thiết lập hệ thống tiêu chuẩn chất lượng quốc tế áp dụng trên tất cả quy trình quản lý và kiểm soát chất lượng từ khâu chọn lọc nguyên phụ liệu cho đến khâu thiết kế và sản xuất (Oeko-tex, Cotton USA, Woolmark,...).</p><br>
            
             PPStyle cam kết phát triển xanh cùng người Việt bằng suy nghĩ và hành động:</p>
            </div>
       </div>
    </section>
    <!--------------------footer------------------------>
    <?php include_once "footer.php"; ?>
</body>
</html>
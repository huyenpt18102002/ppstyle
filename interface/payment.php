<?php
    session_start();
?>
<title>Thông tin mua hàng</title>
    <link rel="stylesheet" href="css/style.css" class="css">
    <script src="https://kit.fontawesome.com/17d0ccc118.js" crossorigin="anonymous"></script>
    <header>
       <div class="logo">
           <a href="index.php"><img src="image/logo1.png" alt="logo"></a>
       </div>
       <div class="menu">
           <li><a href="index.php">Trang chủ</a></li>
           <li><a href="catergory-nu.php">Nữ</a>
            <ul class="sub-menu">
                <li><a href="">Áo </a>
                     <ul>
                     <?php 
                     include '../admin/connect/open-connect.php';
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%áo%nữ'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }
                    ?>   
                     </ul>
                </li>
                <li><a href="">Quần</a>
                     <ul>
                     <?php 
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%quần%nữ'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }
                    ?>   
                     </ul>
                </li>
                <?php 
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%váy%nữ'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }
                    ?>   
            </ul></li>
           <li><a href="catergory-nam.php">Nam</a>
            <ul class="sub-menu">
                <li><a href="">Áo </a>
                     <ul>
                     <?php 
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%áo%nam'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }
                    ?>   
                     </ul>
                </li>
                <li><a href="">Quần</a>
                     <ul>
                     <?php 
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%quần%nam'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }
                    ?>   
                     </ul>
                </li>
            </ul></li>
           <li><a href="catergory-tre.php">Trẻ em</a>
            <ul class="sub-menu">
                <li><a href="">Bé gái </a>
                     <ul>
                     <?php 
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%gái'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }
                    ?>   
                     </ul>
                </li>
                <li><a href="">Bé trai</a>
                     <ul>
                     <?php 
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%trai'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }

                    ?>   
                     </ul>
                </li>
            </ul></li>
           <li><a href="introduction.php">Về chúng tôi</a></li>
       </div>
       <div class="other">
            <li> <form method="get" action="search-list.php">
            <?php
            $search = "";
            if(isset($_GET['search'])){
            $search = $_GET['search'];
            }
            ?>
                <input placeholder="Tìm kiếm" type="text"name="search" value="<?php echo $search;?>"> 
                <button style="cursor: pointer; background-color: white; border: none"><i style="left:180px;" class="fas fa-search"></i></button>
                </form>
            </li>
           <li><a class="fa fa-shopping-bag" href="cart.php" style=" position: relative;"></a>
           <div style=" position: absolute; 
                height: 18px;
                width :17px;
               border-radius: 50%;
               background-color: rgb(241, 14, 14);
               margin-top: -30px;
               margin-left: 10px;
               padding-left: 4px;
               font-size: 15px;
               color: white;"><?php if(isset($_SESSION['gio_hang'])){echo COUNT($_SESSION['gio_hang']);} else{echo "0";}?></div></li>
           <li><a class="fa fa-user" href="isset-user.php" style=" position: relative;"></a>
           <?php 
    $sql = "SELECT user.*
    FROM user";
    $result = mysqli_query($connect, $sql);
    foreach ($result as $each_u){?>
   <p style=" position: absolute;font-size: 10px; margin-left: -10px; "><?php
if(isset($_SESSION['user_id'])){
if($_SESSION['user_id'] == $each_u['user_id']){
echo $each_u['username'];
}
}
}
?></p>
        </li>
       </div>
</header>
<section class="payment">
    <div class="container">
        <div class="payment-top-wrap">
            <div class="payment-top">
               <div class="payment-top-cart payment-top-item">
                 <i class="fas fa-shopping-cart"></i>
               </div>
               <div class="payment-top-address payment-top-item">
                 <i class="fas fa-map-marker-alt"></i>
               </div>
               <div class="payment-top-payment payment-top-item">
                 <i class="fas fa-money-check-alt"></i>
               </div>
             </div>
         </div>
    </div>
    <div class="container">
        <div class="payment-content row" style="margin-left:40px;">
            <div class="payment-content-left">
                <div class="payment-content-left-method-delivery">
                    <p style="font-weight: bold;">Phương thức giao hàng</p>
                    <div class="payment-content-left-method-delivery-item">
                        <input checked type="radio">
                        <label for="">Giao hàng chuyển phát nhanh</label>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="payment-content-left-method-payment">
                    <p style="font-weight: bold;">Phương thức thanh toán</p>
                    <p>Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.</p>
                    <br>
                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label for="">Thanh toán bằng thẻ tín dụng(OnePay)</label>
                    </div>
                    <div class="payment-content-left-method-payment-item-img">
                        <img src="image/visa.png" alt="">
                    </div>
                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label for="">Thanh toán bằng thẻ ATM(OnePay)</label>
                    </div>
                    <div class="payment-content-left-method-payment-item-img">
                    </div>
                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label for="">Thanh toán Momo</label>
                    </div>
                    <div class="payment-content-left-method-payment-item-img">
                        <img src="image/momo.png" alt="">
                    </div>
                    <div class="payment-content-left-method-payment-item">
                        <input checked name="method-payment" type="radio">
                        <label for="">Thu tiền tận nơi</label>
                    </div>
                </div>
            </div>
<?php 
                include_once "../admin/connect/open-connect.php";
                if(isset($_SESSION['gio_hang'])){?>
                           <div class="payment-content-right">
                <div class="payment-content-right-thanhtoan">
                    <table>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        <?php

                $tong_tien = 0;
                $gio_hang = $_SESSION['gio_hang'];
                foreach ($gio_hang as $product_detail_id => $so_luong){
                    $sql = "SELECT product_detail.*, product.product_name, color.color_name, size.size_name
                    FROM product_detail
                    INNER JOIN product
                    ON product_detail.product_id = product.product_id  
                    INNER JOIN color
                    ON product_detail.color_id = color.color_id
                    INNER JOIN size
                    ON product_detail.size_id = size.size_id
                    WHERE product_detail_id = $product_detail_id";
                    $query = mysqli_query($connect, $sql);
                    foreach ($query as $each_tt){
        ?>               

                        <?php
                        $thanh_tien = $each_tt['price'] * $so_luong;
                        $tong_tien += $thanh_tien+25;
                    ?>
                        <tr>
                            <td><?php echo $each_tt['product_name'];?><br>
                            <?php echo $each_tt['size_name'];?>/
                            <?php echo $each_tt['color_name'];?><br>
                            <?php echo $each_tt['price'];?><sup>đ</sup>
                        </td>
                            <td style="padding-left: 70px;"><?php echo $so_luong;?></td>
                            <td><?php echo $thanh_tien; echo ".000";?><sup>đ</sup></td>
                        </tr>
                    <?php } ?>
                        

                        <?php
                    
                }
            }

        ?>               
                        <tr>
                            <td colspan="3">Tổng tiền hàng<p style="font-weight: bold;">(<?php echo $tong_tien; echo ".000";?><sup>đ</sup>)</p></td>
                        </tr>
                        <tr>
                            <td colspan="2">Tạm tính</td>
                            <td><?php echo $tong_tien; echo ".000";?><sup>đ</sup></td>
                        </tr>  
                        <tr>
                            <td colspan="2">Giao hàng chuyển phát nhanh-Chuyển phát nhanh</td>
                            <td>&nbsp;&nbsp;&nbsp;<?php echo COUNT($gio_hang)*25;echo ".000";?><sup>đ</sup></td>
                        </tr> 
                        <tr>
                            <td colspan="2" style="font-weight: bold;">Tiền thanh toán</td>
                            <td style="font-weight: bold;"><?php echo $tong_tien; echo ".000";?><sup>đ</sup></td>
                        </tr>  
                    </table>
<?php
            include_once "../admin/connect/close-connect.php";?>
                           </div>
            </div>
        </div>
        <div class="payment-content-right-payment">
            <a href="order-detail.php"><button>TIẾP TỤC THANH TOÁN</button></a>
        </div>
    </div>
</section>
   <!--------------------Footer----------------------->
   <footer>
    <div class="footer-top">
        <li><a href=""><img src="image/img-congthuong.png" alt=""></a></li>
        <li><a href="">Liên hệ</a></li>
        <li><a href="">Tuyển dụng</a></li>
        <li><a href="">Giới thiệu</a></li>
        <li>
            <a href="" class="fab fa-facebook"></a>
            <a href="" class="fab fa-twitter"></a>
            <a href="" class="fab fa-youtube"></a>
        </li>
    </div>
        <div class="footer-center">
            <p>Công ty Cổ phần Dự Kim với số đăng ký kinh doanh: 0105777650 <br>
            <b> Địa chỉ đăng ký:</b> Tổ dân phố Tháp, P.Đại Mỗ, Q.Nam Từ Liêm, TP.Hà Nội, Việt Nam <br>
             <b>Số điện thoại:</b> 0243 205 2222
            </p>   
        </div>
    <div class="footer-bottom">
        ©PPStyle All rights reserved
    </div>
    </footer>
</body>
<link rel="stylesheet" href="js/script.js" class="js">
</html>
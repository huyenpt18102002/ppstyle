<?php
    session_start();
?>
 <link rel="stylesheet" href="css/style.css">
 <title>Giỏ hàng</title>
    <style>
.other li{
    margin-top: 20px;
    padding: 0 12px;
    position: relative;
}
.other{
    flex:1;
    display:flex;
}
.other li{
    margin-top: 20px;
    padding: 0 12px;
    position: relative;
}
.other li:first-child input{
    width: 100%;
    border: none;
    border-bottom: 1px solid #333;
    background: transparent;
    outline: none;
}
.other li i {
    right: 40px;
    top:5px;
    z-index: 1;
    position: absolute;
}
.other li::after{
    content:"";
    display: block;
    width: 1px;
    height: 50%;
    background: #dddddd;
    position: absolute;
    right: 0px;
    top: 30%;
    transform: translateY(-50%);  
}
.other li:last-child::after{
    display: none;
}
.other li:first-child::after{
    display:block ;
}
    </style>
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
<?php if(isset($_SESSION['gio_hang'])){
    ?>
<section class="cart">
        <div class="container">
           <div class="cart-top-wrap">
               <div class="cart-top">
                  <div class="cart-top-cart cart-top-item">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                  <div class="cart-top-address cart-top-item">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <div class="cart-top-payment cart-top-item">
                    <i class="fas fa-money-check-alt"></i>
                  </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="cart-content row">
                <div class="cart-content-left">
                <form method="post" action="update-cart.php">
                    <table>
                         <tr>
                            <th>Sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Màu</th>
                            <th>Size</th>
                            <th>SL</th>
                            <th>Thành tiền</th>
                            <th>Xóa</th>
                        </tr>
        <?php

            $tong_tien = 0;

                $gio_hang = $_SESSION['gio_hang'];
                foreach ($gio_hang as $product_detail_id => $so_luong){
                    $sql = "SELECT product_detail.*, MAX(quantity) as quantity_max, product.product_name, color.color_name, size.size_name
                    FROM product_detail
                    INNER JOIN product
                    ON product_detail.product_id = product.product_id
                    INNER JOIN color
                    ON product_detail.color_id = color.color_id
                    INNER JOIN size
                    ON product_detail.size_id = size.size_id  
                    WHERE product_detail_id = $product_detail_id";
                    $query = mysqli_query($connect, $sql);
                    foreach ($query as $each){
        ?>
            <tr>
                            <td><a href="product.php?product_detail_id=<?php echo $each['product_detail_id']?>"><img src="../admin/uploads/<?php echo $each['product_img']?>"></a></td>
                            <td><a href="product.php?product_detail_id=<?php echo $each['product_detail_id']?>"><p><?php echo $each['product_name'];?></p></a></td>
                            <td><p><?php echo $each['color_name'];?></p></td>
                            <td><p><?php echo $each['size_name'];?></p></td>
                            <?php
                            if($so_luong>$each['quantity']){
                                $so_luong = $each['quantity_max'];
                            }
                            ?>
                            <td><input style="width:42px; height:30px;"type="number" value="<?php echo $so_luong;?>" name="gio_hang[<?php echo $product_detail_id?>]" min="1"></td>
                            <?php
                        $thanh_tien = $each['price'] * $so_luong;
                        $tong_tien += $thanh_tien+25;
                    ?>
                            <td><p><?php echo $thanh_tien; echo ".000";?><sup>đ</sup></p></td>
                            <td> <a href="delete-cart.php?product_detail_id=<?php echo $product_detail_id;?>"><span>X</span></a></td>
                        </tr>

        <?php
                    }
                }
            
        ?>
        <tr>
        <td colspan="7">
                <button>Cập nhật giỏ hàng</button>
         </td>
        </tr>
    </table>
    </forrm>
    <?php
            include "../admin/connect/close-connect.php";
?> 
</form>
</div>
                <div class="cart-content-right">
                    <table>
                        <tr>
                            <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                        </tr>
                        <tr>
                            <td>Tổng loại sản phẩm</td>
                            <td><?php echo COUNT($_SESSION['gio_hang']);?></td>
                        </tr>
                        <tr>
                            <td>Tông tiền hàng</td>
                            <td><p> <?php echo $thanh_tien; echo ".000";?><sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td>Phí giao hàng(1 loại SP)</td>
                            <td><p> 25.000<sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td>Tạm tính</td>
                            <td><p style="color:black; font-weight: bold;"> <?php echo $tong_tien; echo ".000";?><sup>đ</sup></p></td>
                        </tr>
                    </table>
                   
                    <div class="cart-content-right-button">
                       <a href="catergory-new.php" class="back"> <button>Khám phá gian hàng</button></a>
                        <a href="login-muahang.php" class="buy"><button>Mua ngay</button></a>
                    </div>
                    <div class="cart-content-right-dangnhap">
                        <p>TÀI KHOẢN PPSTYLE</p><br>
                        <P>Hãy <a href="login.php">đăng nhập</a> tài khoản của bạn để dễ dàng mua sắm hơn.</P>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
else{
    echo '<script>alert("Hiện không có sản phẩm nào trong giỏ hàng của bạn!")</script>';
}
?>
<?php
     include_once "footer.php";
?>
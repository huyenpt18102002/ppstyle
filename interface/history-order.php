
    <link rel="stylesheet" href="css/style.css" class="css">
    <script src="https://kit.fontawesome.com/17d0ccc118.js" crossorigin="anonymous"></script>
    <title>Lịch sử mua hàng</title>
    <style>
.history-content-left-item:last-child a button {
     display: block;
    margin-top: 10px;
    height: 50px;
    width: 200px;
    cursor: pointer;
    background-color: black;
    border: none;
    color:white;
    transition: all 0.3s ease;
}
.history-content-left-item:last-child a button:hover{
    color: black;
    background-color: transparent;
    border: 1px solid black;
}
    </style>
<?php 
include_once "header.php";
?>
    
    <section class="history">
        <div class="container">
            <div class="history-content row">
                <div class="history-content-left">
                    <div class="history-content-left-item row">
                        <i class="fa fa-user"></i>
                        <?php 
  include "../admin/connect/open-connect.php";
  $sql = "SELECT user.*
                FROM user";
                $result = mysqli_query($connect, $sql);
                foreach ($result as $each_u){?>
               <p style=" position: absolute;font-size: 10px; font-weight: lighter;margin-left: -10px; "><?php
    if(isset($_SESSION['user_id'])){
        if($_SESSION['user_id'] == $each_u['user_id']){?>
            <p>User: <span style="font-weight:bold"> <?php echo $each_u['username'];?></span></p>
            <?php
        }
    }
}?>
                    </div>
                    <?php 
                     $user_id = $_SESSION['user_id'];
                    $sql_u = "SELECT user.*
                    FROM user
                    WHERE user_id = '$user_id'";
                     $result_u = mysqli_query($connect,$sql_u);
                     $each_u = mysqli_fetch_array($result_u);
                        ?>
                    <div class="history-content-left-item row">
                        <p><span style="font-weight:bold">Họ và tên:</span><?php echo $each_u['name'];?></p>
                    </div>
                    <div class="history-content-left-item row">
                        <p><span style="font-weight:bold">Ngày sinh:</span> <?php echo $each_u['birthday'];?></p>
                    </div>
                    <div class="history-content-left-item row">
                        <p><span style="font-weight:bold">Số điện thoại:</span> <?php echo $each_u['phonenumber'];?></p>
                    </div>
                    <div class="history-content-left-item row">
                        <p><span style="font-weight:bold">Email:</span> <?php echo $each_u['email'];?></p>
                    </div>
                    <?php 
                    $sql_o = "SELECT orders.*
                 FROM orders 
                WHERE user_id = '$user_id'";
                $result_o = mysqli_query($connect, $sql_o);
                $each_o = mysqli_fetch_array($result_o);?>
                    <div class="history-content-left-item row">
                        <p><span style="font-weight:bold">Địa chỉ:</span> <?php echo $each_o['local'];?></p>
                    </div>
                    <div class="history-content-left-item row">
                    <a href="logout.php" class="signup-login-link"> <button>Đăng xuất</button></a>
                    </div>                 
                </div>
                <div class="history-content-right">
                    <h2>Đơn hàng đã mua</h2>

                    <table>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Chi tiết sản phẩm</th>
                            <th>SL</th>
                            <th>Thành tiền</th>
                            <th>Ngày đặt hàng</th>
                            <th>trạng thái ĐH</th>
                        </tr>
                        <tr>
                       <?php  
                       $sql_t = "SELECT order_detail .*
                FROM order_detail
            INNER JOIN product_detail
            ON product_detail.product_detail_id = order_detail.product_detail_id 
            INNER JOIN orders
            ON orders.order_id = order_detail.order_id   
            WHERE user_id = '$user_id'
            ORDER BY order_detail.order_detail_id DESC";
                 $result_t = mysqli_query($connect, $sql_t);
                 foreach($result_t as $each_t){?>
                  <?php  $sql_ct = "SELECT product_detail.*, product.product_name, color.color_name, size.size_name
                 FROM product_detail 
                INNER JOIN product
                ON product_detail.product_id = product.product_id
                INNER JOIN color
                ON product_detail.color_id = color.color_id
                INNER JOIN size
                ON product_detail.size_id = size.size_id
                WHERE product_detail_id = $each_t[product_detail_id]  ";
                $result_ct = mysqli_query($connect, $sql_ct);
                foreach($result_ct as $each_ct){
                ?>
                            <td>
                            <a href="product.php?product_detail_id=<?php echo $each_ct['product_detail_id']?>"><img src="../admin/uploads/<?php echo $each_ct['product_img']?>"></a></td>
                            <td><a href="product.php?product_detail_id=<?php echo $each_ctct['product_detail_id']?>"><p style="font-weight:bold;"><?php echo $each_ct['product_name']?></a><br></p>
                                   <p> <?php echo $each_ct['color_name']?>/
                                    <?php echo $each_ct['size_name']?></p>
                               
                           </td>
                <?php } ?>      
                            <td><p><?php echo $each_t['quantity']?></p></td>
                            <td><p><?php echo $each_t['money'];echo ".000";?><sup>đ</sup></p></td>
                            <?php  $sql_o = "SELECT orders.*, user.username
                 FROM orders 
                INNER JOIN user
                ON orders.user_id = user.user_id
                WHERE order_id = $each_t[order_id] ";
                $result_o = mysqli_query($connect, $sql_o);
                foreach($result_o as $each_o){
                ?>
                            <td><p><?php echo $each_o['order_date']?></p></td>
                            <td><p> <?php
                     if($each_o['status'] == 0){
                         echo "Chờ xác nhận";
                     }
                     elseif ($each_o['status'] == 1){
                         echo "Đã xác nhận";
                     }
                     elseif ($each_o['status'] == 2){
                         echo "Đang giao hàng";
                     }
                     elseif ($each_o['status'] == 3){
                         echo "Đã nhận hàng";
                     }
                     elseif ($each_o['status'] == 4){
                        echo "Đã hủy";
                    }
                ?></p></td>
                        </tr>
                        <?php }}?>
                    </table>
                    <a href="catergory-new.php"><button>Quay lại mua tiếp</button></a> 
                </div>
            </div>
        </div>
    </section>

    <?php 
include_once "footer.php";
?>
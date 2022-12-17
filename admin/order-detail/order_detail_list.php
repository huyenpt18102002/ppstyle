<?php
include_once '../layout/header.php';
include_once '../layout/slider.php';
?>
<div class="admin-content-right">
    <div class="admin-content-right-catergory-list">
        <div class="title">
            <li><h1>Danh sách chi tiết đơn hàng</h1></li>
            <li> <form method="get" action="">
            <?php
            $search = "";
            if(isset($_GET['search'])){
            $search = $_GET['search'];
            }
            ?>
                <input placeholder="Tìm kiếm" type="text"name="search" value="<?php echo $search;?>"> 
                <button style="cursor: pointer; background-color: white; border: none"><i class="fas fa-search"></i></button>
                </form>
            </li>
        </div> 
<table width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
        <td>Mã CTĐH</td>
        <td>Ảnh mô tả</td>
        <td>Chi tiết sản phẩm</td>
        <td>Số lượng</td>
        <td>Thành tiền</td>
        <td>Tổng tiền</td>
        <td>Tài khoản đặt hàng</td>
        <td>Tác vụ</td>
    </tr>
    <?php 
        include_once "../connect/open-connect.php";
        $so_ban_ghi_1_trang = 4;
        if(isset($_GET['p'])){
            $p = $_GET['p'];
        }
        else {
            $p = 1;
        }
        $start = ($p - 1) * $so_ban_ghi_1_trang;
        $sql_tong_ban_ghi = "SELECT COUNT(order_detail_id)
                AS tong_so_ban_ghi
                FROM order_detail
            INNER JOIN product_detail
            ON product_detail.product_detail_id = order_detail.product_detail_id  
            INNER JOIN orders
            ON orders.order_id = order_detail.order_id    
";
        $result_tong_ban_ghi = mysqli_query($connect, $sql_tong_ban_ghi);
        foreach ($result_tong_ban_ghi as $each_tong_ban_ghi){
            $tong_so_ban_ghi = $each_tong_ban_ghi['tong_so_ban_ghi'];
        }
        $so_trang = ceil($tong_so_ban_ghi/$so_ban_ghi_1_trang);
        $sql = "SELECT order_detail .*
                FROM order_detail
            INNER JOIN product_detail
            ON product_detail.product_detail_id = order_detail.product_detail_id 
            INNER JOIN orders
            ON orders.order_id = order_detail.order_id   
                ORDER BY order_detail.order_id DESC
                LIMIT $start, $so_ban_ghi_1_trang";
        $result = mysqli_query($connect, $sql);
        foreach($result as $each){
    ?>
        <tr>
            <td>
                <?php echo $each['order_id']?>
            </td>
            <?php  $sql_i = "SELECT product_detail.*, product.product_name, color.color_name, size.size_name
                 FROM product_detail 
                INNER JOIN product
                ON product_detail.product_id = product.product_id
                INNER JOIN color
                ON product_detail.color_id = color.color_id
                INNER JOIN size
                ON product_detail.size_id = size.size_id
                WHERE product_detail_id = $each[product_detail_id] ";
                $result_i = mysqli_query($connect, $sql_i);
                foreach($result_i as $each_i){?>
            <td>
            <img width="150px" height="220px" src="../uploads/<?php echo $each_i['product_img']?>">
            </td>
            <td>
            <p style="font-weight:bold;"><?php echo $each_i['product_name']?></p>
            <p><?php echo $each_i['color_name']?>/
               <?php echo $each_i['size_name']?>
            </p>
            </td>
            <?php }?>
            <td>
                <?php echo $each['quantity']?>
            </td>
            <td>
            <?php echo $each['money'];echo ".000";?>
            </td>
            <?php
                 $tong_tien = 0;
                 $tong_tien+= $each['money']+25;
                ?>
            <td>
               <?php echo $tong_tien;echo ".000";?>
            </td>
            <?php  $sql_o = "SELECT orders.*, user.username
                 FROM orders 
                INNER JOIN user
                ON orders.user_id = user.user_id
                WHERE order_id = $each[order_id] ";
                $result_o = mysqli_query($connect, $sql_o);
                foreach($result_o as $each_o){
                ?>
            <td><?php echo $each_o['username']?></td>
            <?php }?>
            <td>
                <a href="delete.php?order_detail_id=<?php echo $each['order_detail_id'];?>"><i class="material-icons" style="color:blue;" >&#xe872;</i></a>
            </td>
        </tr>
    <?php
        }
        include_once "../connect/close-connect.php";
    ?>
</table>
<div class="page">
<?php
    for($i = 1; $i <= $so_trang; $i++){
?>
    <button> <a  href="?p=<?php echo $i;?>&search=<?php echo $search;?>">
        <?php echo $i;?>
        </a>
    </button>
    <?php
    }
?>             
</div>
</div>
        </div>
    </section>
</body>
</html>
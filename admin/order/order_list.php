<?php
include_once '../layout/header.php';
include_once '../layout/slider.php';
?>
<div class="admin-content-right" >
    <div class="admin-content-right-catergory-list">
        <div class="title">
            <li><h1>Danh sách đơn hàng</h1></li>
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
        <td>Mã đơn hàng</td>
        <td>Tên tài khoản</td>
        <td colspan="2">Trạng thái</td>
        <td>Ngày đặt</td>
        <td>Người nhận</td>
        <td>Địa chỉ</td>
        <td>Điện thoại</td>
        <td colspan="2">Tác vụ</td>
    </tr>
    <?php
        //Kết nối DB
        include '../connect/open-connect.php';
        $so_ban_ghi_1_trang = 15;
        if(isset($_GET['p'])){
            $p = $_GET['p'];
        }
        else {
            $p = 1;
        }
        $start = ($p - 1) * $so_ban_ghi_1_trang;
        $sql_tong_ban_ghi = "SELECT COUNT(order_id)
                AS tong_so_ban_ghi
                FROM orders 
                INNER JOIN user
                ON orders.user_id = user.user_id
                WHERE user.username LIKE '%$search%'";
        $result_tong_ban_ghi = mysqli_query($connect, $sql_tong_ban_ghi);
        foreach ($result_tong_ban_ghi as $each_tong_ban_ghi){
            $tong_so_ban_ghi = $each_tong_ban_ghi['tong_so_ban_ghi'];
        }
        $so_trang = ceil($tong_so_ban_ghi/$so_ban_ghi_1_trang);
        $sql = "SELECT orders.*, user.username
                FROM orders 
                INNER JOIN user
                ON orders.user_id = user.user_id
                WHERE user.username LIKE '%$search%'
                ORDER BY orders.order_id DESC 
                LIMIT $start, $so_ban_ghi_1_trang";
        $result = mysqli_query($connect,$sql);
        foreach ($result as $each){
    ?>
            <tr>
                <td><?php echo $each['order_id'];?></td>
                <td><?php echo $each['username'];?></td>
                <td>
                    <?php
                        if($each['status'] == 0){
                    ?>
                            Chờ xác nhận
                    <?php
                        } if($each['status'] == 1){
                    ?>
                            Đã xác nhận
                    <?php
                        } if($each['status'] == 2){
                    ?>
                           Đang giao hàng
                    <?php
                        } if($each['status'] == 3){
                    ?>
                           Đã nhận hàng
                           <?php
                        } if($each['status'] == 4){
                    ?>
                           Đã hủy
                    <?php
                        }
                    ?>
                </td>
                <td><a href="update.php?order_id=<?php echo $each['order_id'];?>"><i class="fas fa-edit" style="color:blue;"></i></a></td>
                <td><?php echo $each['order_date'];?></td>
                <td><?php echo $each['recipient_name'];?></td>
                <td><?php echo $each['local'];?></td>
                <td><?php echo $each['phonenumber'];?></td>
                <td>
                    <a href="delete.php?order_id=<?php echo $each['order_id'];?>"><i class="material-icons" style="color:blue;" >&#xe872;</i></a>
                </td>
            </tr>
    <?php
        }
        include '../connect/close-connect.php';
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
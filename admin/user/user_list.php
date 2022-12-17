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
<table border="1" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td>ID</td>
        <td>Tên tài khoản</td>
        <td>Mật khẩu</td>
        <td>Họ tên</td>
        <td>Số điện thoại</td>
        <td>Ngày sinh</td>
        <td>Email</td>
        <td colspan="2">Tác vụ</td>
    </tr>
    <?php
        //Kết nối DB
        include '../connect/open-connect.php';
        //Lấy dữ liệu từ DB ra
        $so_ban_ghi_1_trang = 8;
        if(isset($_GET['p'])){
            $p = $_GET['p'];
        }
        else {
            $p = 1;
        }
        $start = ($p - 1) * $so_ban_ghi_1_trang;
        $sql_tong_ban_ghi = "SELECT COUNT(user_id)
                AS tong_so_ban_ghi
                FROM user 
                WHERE user.username LIKE '%$search%'";
        $result_tong_ban_ghi = mysqli_query($connect, $sql_tong_ban_ghi);
        foreach ($result_tong_ban_ghi as $each_tong_ban_ghi){
            $tong_so_ban_ghi = $each_tong_ban_ghi['tong_so_ban_ghi'];
        }
        $so_trang = ceil($tong_so_ban_ghi/$so_ban_ghi_1_trang);
        $sql = "SELECT user.*
                FROM user 
                WHERE user.username LIKE '%$search%'
                ORDER BY user.user_id DESC 
                LIMIT $start, $so_ban_ghi_1_trang";
        $result = mysqli_query($connect,$sql);
        foreach ($result as $each){
    ?>
            <tr>
                <td><?php echo $each['user_id'];?></td>
                <td><?php echo $each['username'];?></td>
                <td><?php echo $each['password'];?></td>
                <td><?php echo $each['name'];?></td>
                <td><?php echo $each['phonenumber'];?></td>
                <td><?php echo $each['birthday'];?></td>
                <td><?php echo $each['email'];?></td>
                <td>
                    <a href="delete.php?user_id=<?php echo $each['user_id'];?>"><i class="material-icons" style="color:blue;" >&#xe872;</i></a>
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
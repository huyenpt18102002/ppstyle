<?php
include_once '../layout/header.php';
include_once '../layout/slider.php';
?>
<div class="admin-content-right">
    <div class="admin-content-right-catergory-list">
        <div class="title">
            <li><h1>Danh sách màu sắc</h1></li>
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
        <td>Tên màu sắc</td>
        <td colspan="2">Tác vụ</td>
    </tr>
    <?php
        //Kết nối DB
        include '../connect/open-connect.php';
        $so_ban_ghi_1_trang = 3;
        if(isset($_GET['p'])){
            $p = $_GET['p'];
        }
        else {
            $p = 1;
        }
        $start = ($p - 1) * $so_ban_ghi_1_trang;
        $sql_tong_ban_ghi = "SELECT COUNT(color_id)
                AS tong_so_ban_ghi
                FROM color
                WHERE color.color_name LIKE '%$search%'";
        $result_tong_ban_ghi = mysqli_query($connect, $sql_tong_ban_ghi);
        foreach ($result_tong_ban_ghi as $each_tong_ban_ghi){
            $tong_so_ban_ghi = $each_tong_ban_ghi['tong_so_ban_ghi'];
        }
        $so_trang = ceil($tong_so_ban_ghi/$so_ban_ghi_1_trang);
        $sql = "SELECT color.*
                FROM color 
                WHERE color.color_name LIKE '%$search%'
                ORDER BY color_id DESC 
                LIMIT $start, $so_ban_ghi_1_trang";
        $result = mysqli_query($connect,$sql);
        foreach ($result as $each){
    ?>
            <tr>
                <td><?php echo $each['color_id'];?></td>
                <td><?php echo $each['color_name'];?></td>
                <td>
                    <a href="update.php?color_id=<?php echo $each['color_id'];?>"><i class="fas fa-edit" style="color:blue;"></i></a>
                </td>
                <td>
                    <a href="delete.php?color_id=<?php echo $each['color_id'];?>"><i class="material-icons" style="color:blue;" >&#xe872;</i></a>
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
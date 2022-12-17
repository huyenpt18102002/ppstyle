<?php
include_once '../layout/header.php';
include_once '../layout/slider.php';
?>
<div class="admin-content-right">
    <div class="admin-content-right-catergory-list">
        <div class="title">
            <li><h1>Danh sách loại sản phẩm</h1></li>
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
        <td>Tên loại sản phẩm</td>
        <td colspan="2">Tác vụ</td>
        
    </tr>
    <?php
        include '../connect/open-connect.php';
        $so_ban_ghi_1_trang = 3;
        if(isset($_GET['p'])){
            $p = $_GET['p'];
        }
        else {
            $p = 1;
        }
        $start = ($p - 1) * $so_ban_ghi_1_trang;
        $sql_tong_ban_ghi = "SELECT COUNT(catergory_id)
                AS tong_so_ban_ghi
                FROM catergory
                WHERE catergory.catergory_name LIKE '%$search%'";
        $result_tong_ban_ghi = mysqli_query($connect, $sql_tong_ban_ghi);
        foreach ($result_tong_ban_ghi as $each_tong_ban_ghi){
            $tong_so_ban_ghi = $each_tong_ban_ghi['tong_so_ban_ghi'];
        }
        $so_trang = ceil($tong_so_ban_ghi/$so_ban_ghi_1_trang);
        $sql = "SELECT catergory.*
                FROM catergory 
                WHERE catergory.catergory_name LIKE '%$search%'
                ORDER BY catergory_id DESC 
                LIMIT $start, $so_ban_ghi_1_trang";
        $result = mysqli_query($connect,$sql);
        foreach ($result as $each){
    ?>
            <tr>
                <td><?php echo $each['catergory_id'];?></td>
                <td><?php echo $each['catergory_name'];?></td>
                <td>
                    <a href="update.php?catergory_id=<?php echo $each['catergory_id'];?>"><i class="fas fa-edit" style="color:blue;"></i></a>
                </td>
                <td>
                    <a href="delete.php?catergory_id=<?php echo $each['catergory_id'];?>"><i class="material-icons" style="color:blue;" >&#xe872;</i></a>
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
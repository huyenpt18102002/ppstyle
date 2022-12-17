<?php
    session_start();
?>
<?php
include_once '../layout/header.php';
include_once '../layout/slider.php';
?>
<div class="admin-content-right">
    <div class="admin-content-right-catergory-list">
        <div class="title">
            <li><h1>Danh sách chi tiết sản phẩm</h1></li>
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
        <td>Mã CTSP</td>
        <td>Tên sản phẩm</td>
        <td>Màu sắc</td>
        <td>Kích cỡ</td>
        <td>Giá</td>
        <td>Số lượng</td>
        <td>Ảnh mô tả</td>
        <td colspan="2">Tác vụ</td>
    </tr>
    <?php 
        include_once "../connect/open-connect.php";
        $so_ban_ghi_1_trang = 6;
        if(isset($_GET['p'])){
            $p = $_GET['p'];
        }
        else {
            $p = 1;
        }
        $start = ($p - 1) * $so_ban_ghi_1_trang;
        $sql_tong_ban_ghi = "SELECT COUNT(product_detail_id)
                AS tong_so_ban_ghi
                FROM product_detail 
                INNER JOIN product
                ON product_detail.product_id = product.product_id
                INNER JOIN color
                ON product_detail.color_id = color.color_id
                INNER JOIN size
                ON product_detail.size_id = size.size_id
                WHERE product.product_name LIKE '%$search%'";
        $result_tong_ban_ghi = mysqli_query($connect, $sql_tong_ban_ghi);
        foreach ($result_tong_ban_ghi as $each_tong_ban_ghi){
            $tong_so_ban_ghi = $each_tong_ban_ghi['tong_so_ban_ghi'];
        }
        $so_trang = ceil($tong_so_ban_ghi/$so_ban_ghi_1_trang);
        $sql = "SELECT product_detail.*, product.product_name, color.color_name, size.size_name
                 FROM product_detail 
                INNER JOIN product
                ON product_detail.product_id = product.product_id
                INNER JOIN color
                ON product_detail.color_id = color.color_id
                INNER JOIN size
                ON product_detail.size_id = size.size_id
                WHERE product.product_name LIKE '%$search%'
                ORDER BY product_detail.product_detail_id DESC
                LIMIT $start, $so_ban_ghi_1_trang";
        $result = mysqli_query($connect, $sql);
        foreach($result as $each){
    ?>
        <tr>
            <td>
                <?php echo $each['product_detail_id']?>
            </td>
            <td>
                <?php echo $each['product_name']?>
            </td>
            <td>
                <?php echo $each['color_name']?>
            </td>
            <td>
                <?php echo $each['size_name']?>
            </td>
            <td>
                <?php echo $each['price']?>
            </td>
            <td>
                <?php echo $each['quantity']?>
            </td>
            <td>
            <img width="150px" height="220px" src="../uploads/<?php echo $each['product_img']?>">
            </td>
            <td>
                <a href="update.php?product_detail_id=<?php echo $each['product_detail_id'];?>"><i class="fas fa-edit" style="color:blue;"></i></a>
            </td>
            <td>
                <a href="delete.php?product_detail_id=<?php echo $each['product_detail_id'];?>"><i class="material-icons" style="color:blue;" >&#xe872;</i></a>
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
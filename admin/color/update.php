<?php
include_once '../layout/header.php';
include_once '../layout/slider.php';
    $color_id = $_GET['color_id'];
    //Kết nối DB
    include '../connect/open-connect.php';
    //Lấy dữ liệu từ DB ra
    $sql = "SELECT * FROM color WHERE color_id = $color_id";
    $result = mysqli_query($connect,$sql);
    foreach ($result as $each){
?>
<div class="admin-content-right">
            <div class="admin-content-right-catergory-add">
            <h1>Màu sắc</h1>
            <form action="update_solve.php" method="post">
                <input type="hidden" name="color_id" value="<?php echo $each['color_id'];?>">
                <input required type="text" name="color_name" value="<?php echo $each['color_name'];?>"><br>
                <button>Sửa</button>
            </form>
           </div>
        </div>
    </section>
</body>
</html>
<?php
    }
    include '../connect/close-connect.php';
?>
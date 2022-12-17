<?php
include_once '../layout/header.php';
include_once '../layout/slider.php';
    $size_id = $_GET['size_id'];
    //Kết nối DB
    include '../connect/open-connect.php';
    //Lấy dữ liệu từ DB ra
    $sql = "SELECT * FROM size WHERE size_id = $size_id";
    $result = mysqli_query($connect,$sql);
    foreach ($result as $each){
?>
<div class="admin-content-right">
            <div class="admin-content-right-catergory-add">
            <h1>Size</h1>
            <form action="update_solve.php" method="post">
                <input type="hidden" name="size_id" value="<?php echo $each['size_id'];?>">
                <input required type="text" name="size_name" value="<?php echo $each['size_name'];?>"><br>
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
<?php
include_once '../layout/header.php';
include_once '../layout/slider.php';
?>
<?php
     $catergory_id = $_GET['catergory_id'];
    //Kết nối DB
    include '../connect/open-connect.php';
    //Lấy dữ liệu từ DB ra
    $sql = "SELECT * FROM catergory WHERE catergory_id = $catergory_id";
    $result = mysqli_query($connect,$sql);
    foreach ($result as $each){
?>
<div class="admin-content-right">
            <div class="admin-content-right-catergory-add">
            <h1>Loại sản phẩm</h1>
            <form action="update_solve.php" method="post">
                <input type="hidden" name="catergory_id" value="<?php echo $each['catergory_id'];?>">
                <input required type="text" name="catergory_name" value="<?php echo $each['catergory_name'];?>"><br>
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

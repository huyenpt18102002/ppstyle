<?php
include_once '../layout/header.php';
include_once '../layout/slider.php';
     $order_id = $_GET['order_id'];
    //Kết nối DB
    include '../connect/open-connect.php';
    //Lấy dữ liệu từ DB ra
    $sql = "SELECT * FROM orders WHERE order_id = $order_id";
    $result = mysqli_query($connect,$sql);
    foreach ($result as $each){
?>
<div class="admin-content-right">
            <div class="admin-content-right-product-add">
                <h1>Đơn hàng</h1>
<form action="update_solve.php" method="post">
    <input type="hidden" name="order_id" value="<?php echo $each['order_id'];?>">
    <label for=""><p>Xác nhận đơn hàng <span style="color:red">*</span></p></label><br>
    <input required type="hidden" name="status"value="<?php echo $each['status']+1;?>"><br>
    <button>Thay đổi</button>
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


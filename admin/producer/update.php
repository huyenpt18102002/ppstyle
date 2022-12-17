<?php
include_once '../layout/header.php';
include_once '../layout/slider.php';
    $producer_id = $_GET['producer_id'];
    //Kết nối DB
    include '../connect/open-connect.php';
    //Lấy dữ liệu từ DB ra
    $sql = "SELECT * FROM producer WHERE producer_id = $producer_id";
    $result = mysqli_query($connect,$sql);
    foreach ($result as $each){
?>
<div class="admin-content-right">
            <div class="admin-content-right-catergory-add">
            <h1>Nhà sản xuất</h1>
            <form action="update_solve.php" method="post">
                <input type="hidden" name="producer_id" value="<?php echo $each['producer_id'];?>">
                <input required type="text" name="producer_name" value="<?php echo $each['producer_name'];?>"><br>
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
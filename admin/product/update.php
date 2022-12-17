<?php
include_once '../layout/header.php';
include_once '../layout/slider.php';
     $product_id = $_GET['product_id'];
    //Kết nối DB
    include '../connect/open-connect.php';
    //Lấy dữ liệu từ DB ra
    $sql = "SELECT * FROM product WHERE product_id = $product_id";
    $result = mysqli_query($connect,$sql);
    foreach ($result as $each){
?>
<div class="admin-content-right">
            <div class="admin-content-right-product-add">
                <h1>Sản phẩm</h1>
<form action="update_solve.php" method="post">
    <input type="hidden" name="product_id" value="<?php echo $each['product_id'];?>">
    <label for=""><p>Nhập tên sản phẩm <span style="color:red">*</span></p></label><br>
                    <input required type="text" name="product_name"value="<?php echo $each['product_name'];?>"><br>
                    <label for=""><p> Nhập chất liệu<span style="color:red">*</span></p></label><br>
                    <input required type="text" name="material"value="<?php echo $each['material'];?>"><br>
                    <label for=""><p>Chọn loại sản phẩm <span style="color:red">*</span></p></label><br>
                    <select name="catergory_id">
        <option value>- Chọn -</option>
    <?php 
        $sql = "SELECT * FROM catergory";
        $result = mysqli_query($connect, $sql);
        foreach($result as $each_catergory){
    ?>
         <option value="<?php echo $each_catergory['catergory_id']?>"
                    <?php
                        if($each['catergory_id'] == $each_catergory['catergory_id']){
                    ?>
                            selected
                    <?php
                        }
                    ?>
                >
                    <?php
                        echo $each_catergory['catergory_name'];
                    ?>
        </option> 
    <?php
        }
    ?>
    </select><br>   
    <label for=""><p>Chọn nơi sản xuất <span style="color:red">*</span></p></label><br>
    <select name="producer_id">
        <option value>- Chọn -</option>
    <?php 
        $sql = "SELECT * FROM producer";
        $result = mysqli_query($connect, $sql);
        foreach($result as $each_producer){
    ?>
        <option value="<?php echo $each_producer['producer_id']?>"
        <?php
                        if($each['producer_id'] == $each_producer['producer_id']){
                    ?>
                            selected
                    <?php
                        }
                    ?>
                >
            <?php 
                echo $each_producer['producer_name'];
            ?>
        </option> 
    <?php
        }
    ?>
    </select><br>      
    <button>Sửa</button>
    <?php
    }
    include '../connect/close-connect.php';
?>
</form>
</div>
        </div>
    </section>
</body>
</html>


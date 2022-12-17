<?php
include_once '../layout/header.php';
include_once '../layout/slider.php';
     $product_detail_id = $_GET['product_detail_id'];
    //Kết nối DB
    include '../connect/open-connect.php';
    //Lấy dữ liệu từ DB ra
    $sql = "SELECT * FROM product_detail WHERE product_detail_id = $product_detail_id";
    $result = mysqli_query($connect,$sql);
    foreach ($result as $each){
?>
<div class="admin-content-right">
            <div class="admin-content-right-product-add">
                <h1>Chi tiết sản phẩm</h1>
<form action="update_solve.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="product_detail_id" value="<?php echo $each['product_detail_id'];?>">
    <label for=""><p>Chọn sản phẩm <span style="color:red">*</span></p></label><br>
                    <select name="product_id">
        <option value>- Chọn -</option>
    <?php 
        $sql = "SELECT * FROM product";
        $result = mysqli_query($connect, $sql);
        foreach($result as $each_product){
    ?>
         <option value="<?php echo $each_product['product_id']?>"
                    <?php
                        if($each['product_id'] == $each_product['product_id']){
                    ?>
                            selected
                    <?php
                        }
                    ?>
                >
                    <?php
                        echo $each_product['product_name'];
                    ?>
        </option> 
    <?php
        }
    ?>
    </select><br> 
    <label for=""><p>Chọn màu sắc <span style="color:red">*</span></p></label><br>
                    <select name="color_id">
        <option value>- Chọn -</option>
    <?php 
        $sql = "SELECT * FROM color";
        $result = mysqli_query($connect, $sql);
        foreach($result as $each_color){
    ?>
         <option value="<?php echo $each_color['color_id']?>"
                    <?php
                        if($each['color_id'] == $each_color['color_id']){
                    ?>
                            selected
                    <?php
                        }
                    ?>
                >
                    <?php
                        echo $each_color['color_name'];
                    ?>
        </option> 
    <?php
        }
    ?>
    </select><br>   
    <label for=""><p>Chọn kích cỡ <span style="color:red">*</span></p></label><br>
                    <select name="size_id">
        <option value>- Chọn -</option>
    <?php 
        $sql = "SELECT * FROM size";
        $result = mysqli_query($connect, $sql);
        foreach($result as $each_size){
    ?>
         <option value="<?php echo $each_size['size_id']?>"
                    <?php
                        if($each['size_id'] == $each_size['size_id']){
                    ?>
                            selected
                    <?php
                        }
                    ?>
                >
                    <?php
                        echo $each_size['size_name'];
                    ?>
        </option> 
    <?php
        }
    ?>
    </select><br>   
                    <label for=""><p>Giá<span style="color:red">*</span></p></label><br>
                    <input required type="number" name="price" value="<?php echo $each['price'];?>"><br>
                    <label for=""><p> Số lượng<span style="color:red">*</span></p></label><br>
                    <input required type="number" name="quantity" value="<?php echo $each['quantity'];?>"><br>
                    <label for=""><p> Ảnh minh họa<span style="color:red">*</span></p></label><br>
                    <input required type="file" name="product_img" value="../uploads/<?php echo $each['product_img'];?>"><br>
                    <label for=""><p> Ảnh sản phẩm 1<span style="color:red">*</span></p></label><br>
                    <input  type="file" name="product_img1" value="../uploads/<?php echo $each['product_img1'];?>"><br>
                    <label for=""><p> Ảnh sản phẩm 2<span style="color:red">*</span></p></label><br>
                    <input  type="file" name="product_img2" value="../uploads/<?php echo $each['product_img2'];?>"><br>
                    <label for=""><p> Ảnh sản phẩm 3<span style="color:red">*</span></p></label><br>
                    <input  type="file" name="product_img3" value="../uploads/<?php echo $each['product_img3'];?>"><br>
                    <label for=""><p> Mô tả sản phẩm<span style="color:red">*</span></p></label><br>
                    <textarea required name="product_desc" id="editor1" cols="30" rows="10" style="width:500px; height:200px"></textarea>
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
<script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
</html>


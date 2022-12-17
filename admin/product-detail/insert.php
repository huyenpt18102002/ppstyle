<?php
include_once '../layout/header.php';
include_once '../layout/slider.php';
?>
        <div class="admin-content-right">
            <div class="admin-content-right-product-add">
                <h1>Thêm chi tiết sản phẩm</h1><br>
                <form method="post" action="insert_solve.php" enctype="multipart/form-data">
                <label for=""><p>Chọn sản phẩm <span style="color:red">*</span></p></label><br>
                    <select name="product_id">
                        <option value>- Chọn -</option>
                    <?php 
                        include "../connect/open-connect.php";
                        $sql = "SELECT * FROM product";
                        $result = mysqli_query($connect, $sql);
                        foreach($result as $each){
                    ?>
                        <option value="<?php echo $each['product_id']?>">
                            <?php 
                                echo $each['product_name'];
                            ?>
                        </option> 
                    <?php
                        }
                        include "../connect/close-connect.php";
                    ?>
                    </select><br>  
                    <label for=""><p>Chọn màu sắc <span style="color:red">*</span></p></label><br>
                    <select name="color_id">
                        <option value>- Chọn -</option>
                    <?php 
                        include "../connect/open-connect.php";
                        $sql = "SELECT * FROM color";
                        $result = mysqli_query($connect, $sql);
                        foreach($result as $each){
                    ?>
                        <option value="<?php echo $each['color_id']?>">
                            <?php 
                                echo $each['color_name'];
                            ?>
                        </option> 
                    <?php
                        }
                        include "../connect/close-connect.php";
                    ?>
                    </select><br>   
                    <label for=""><p>Chọn kích cỡ <span style="color:red">*</span></p></label><br>
                    <select name="size_id">
                        <option value>- Chọn -</option>
                    <?php 
                        include "../connect/open-connect.php";
                        $sql = "SELECT * FROM size";
                        $result = mysqli_query($connect, $sql);
                        foreach($result as $each){
                    ?>
                        <option value="<?php echo $each['size_id']?>">
                            <?php 
                                echo $each['size_name'];
                            ?>
                        </option> 
                    <?php
                        }
                        include "../connect/close-connect.php";
                    ?>
                    </select><br>   
                    <label for=""><p>Giá <span style="color:red">*</span></p></label><br>
                    <input required type="number" name="price"><br>
                    <label for=""><p> Số lượng<span style="color:red">*</span></p></label><br>
                    <input required type="number" name="quantity"><br>
                    <label for=""><p> Ảnh mô tả<span style="color:red">*</span></p></label><br>
                    <input required type="file" name="product_img"><br>  
                    <label for=""><p> Ảnh sản phẩm 1<span style="color:red">*</span></p></label><br>
                    <input required type="file" name="product_img1"><br>  
                    <label for=""><p> Ảnh sản phẩm 2<span style="color:red">*</span></p></label><br>
                    <input required type="file" name="product_img2"><br>  
                    <label for=""><p> Ảnh sản phẩm 3<span style="color:red">*</span></p></label><br>
                    <input required type="file" name="product_img3"><br>    
                    <label for=""><p> Mô tả sản phẩm<span style="color:red">*</span></p></label><br>
                    <textarea required name="product_desc" id="editor1" cols="30" rows="10" style="width:500px; height:200px"></textarea>
                    <button>Thêm</button>
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
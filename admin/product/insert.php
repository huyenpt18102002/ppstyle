<?php
include_once '../layout/header.php';
include_once '../layout/slider.php';
?>
        <div class="admin-content-right">
            <div class="admin-content-right-product-add">
                <h1>Thêm sản phẩm</h1><br>
                <form method="post" action="insert_solve.php">
                    <label for=""><p>Nhập tên sản phẩm <span style="color:red">*</span></p></label><br>
                    <input required type="text" name="product_name"><br>
                    <label for=""><p> Nhập chất liệu<span style="color:red">*</span></p></label><br>
                    <input required type="text" name="material"><br>
                    <label for=""><p>Chọn loại sản phẩm <span style="color:red">*</span></p></label><br>
                    <select name="catergory_id">
                        <option value>- Chọn -</option>
                    <?php 
                        include "../connect/open-connect.php";
                        $sql = "SELECT * FROM catergory";
                        $result = mysqli_query($connect, $sql);
                        foreach($result as $each){
                    ?>
                        <option value="<?php echo $each['catergory_id']?>">
                            <?php 
                                echo $each['catergory_name'];
                            ?>
                        </option> 
                    <?php
                        }
                        include "../connect/close-connect.php";
                    ?>
                    </select><br>   
                    <label for=""><p>Chọn nơi sản xuất <span style="color:red">*</span></p></label><br>
                    <select name="producer_id">
                        <option value>- Chọn -</option>
                    <?php 
                        include "../connect/open-connect.php";
                        $sql = "SELECT * FROM producer";
                        $result = mysqli_query($connect, $sql);
                        foreach($result as $each){
                    ?>
                        <option value="<?php echo $each['producer_id']?>">
                            <?php 
                                echo $each['producer_name'];
                            ?>
                        </option> 
                    <?php
                        }
                        include "../connect/close-connect.php";
                    ?>
                    </select><br>      
                    <button>Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
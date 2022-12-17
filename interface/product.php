
 <link rel="stylesheet" href="css/style.css">
<title>Chi tiết sản phẩm</title>
</head>
<body>
<?php 
include_once "header.php";
?>
   <!-----------------------------------PRODUCT----------------------------->
                   <?php
include '../admin/connect/open-connect.php';
                if(isset($_GET['product_detail_id'])){
                $product_detail_id = $_GET['product_detail_id'];
                $sql_ctsp = "SELECT product_detail.*, product.product_name, color.color_name, size.size_name
                FROM product_detail
                INNER JOIN product
                ON product_detail.product_id = product.product_id
                INNER JOIN color
                ON product_detail.color_id = color.color_id
                INNER JOIN size
                ON product_detail.size_id = size.size_id 
                WHERE product_detail_id = $product_detail_id";
                $result = mysqli_query($connect, $sql_ctsp);
                $each = mysqli_fetch_array($result);
            ?>
    <section class="product">
        <div class="container">
            <div class="product-top">
               <p><a href="index.php">Trang chủ</a></p><span>&#10230;</span> 
                <?php             
                if(isset($_GET['catergory_id'])){
                $catergory_id = $_GET['catergory_id'];
                $sql_dm = "SELECT catergory.*
                FROM catergory 
                WHERE catergory_id = $catergory_id";
                $result = mysqli_query($connect, $sql_dm);
                $each = mysqli_fetch_array($result);
            ?>
                <p><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></p>
                <?php }else{
                    ?>
                    <a href="catergory-new.php"> <?php echo 'Hàng mới về'; ?></a>
                    <?php
                }

                ?>
                <span>&#10230;</span> 

                <p><?php echo $each['product_name'];?></p>
                <?php } else{
                        echo "OK";
                    }
                        ?>
    
            </div>
            <div class="product-content">
                <div class="product-content-left row">
                    <div class="product-content-left-big-img">
                    <img src="../admin/uploads/<?php echo $each['product_img']?>"id="big-img">
                    </div>
                    <div class="product-content-left-small-img">
                        <img src="../admin/uploads/<?php echo $each['product_img']?>" onclick="my_function(this)">
                        <img src="../admin/uploads/<?php echo $each['product_img1']?>" onclick="my_function(this)">
                        <img src="../admin/uploads/<?php echo $each['product_img2']?>" onclick="my_function(this)">
                        <img src="../admin/uploads/<?php echo $each['product_img3']?>" onclick="my_function(this)">
                    </div>
                </div>
                <?php
                if($each['quantity']<1){
                    echo "Sản phẩm đã hết hàng";
                }
                else{
                ?>
                <div class="product-content-right">
                    <div class="product-content-right-product-name">
                    <h1 ><?php echo $each['product_name'];?></h1>
                    </div>
                    <div class="product-content-right-product-price">
                        <p><?php echo $each['price'];?><sup>đ</sup></p>
                    </div>
                    <div class="product-content-right-product">
                        <p style="font-weight: bold;">Màu sắc:</p>
                        <div class="size">
                            
                            <span><?php echo $each['color_name'];?></span>

                        </div>
                    <div class="product-content-right-product">
                        <p style="font-weight: bold;">Size:</p>
                        <div class="size">
                        <span><?php echo $each['size_name'];?></span>

                        </div>
                    </div>
                    <div class="quantity">
                        <p style="font-weight: bold;">Số lượng:</p>&nbsp;&nbsp;&nbsp;
                        <input type="number" min="1" value="1" name="so_luong">
                    </div>
                    <div class="product-content-right-product-button">
                        <a href="add-cart.php?product_detail_id=<?php echo $each['product_detail_id']?>" class="cart"><button><i class="fas fa-shopping-cart"></i> <p>Thêm vào giỏ hàng</p></button></a>
                        <a href="add-muahang.php?product_detail_id=<?php echo $each['product_detail_id']?>" class="buy"><button><p>MUA HÀNG</p></button></a>
                    </div>

                    <div class="product-content-right-bottom">
                        <div class="product-content-right-bottom-top">
                            &#8744;
                        </div>
                        <div class="product-content-right-bottom-content-big">
                            <div class="product-content-right-bottom-content-title">
                                <div class="product-content-right-bottom-content-title-item chitiet" >
                                    <h3>Chi tiết sản phẩm</h3>
                                </div>
                            </div>
                            <div class="product-content-right-bottom-content">
                                <div class="product-content-right-bottom-content-chitiet">
                               <p style="font-size: 18px;"> <?php echo $each['product_desc'];?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
                
                include '../admin/connect/close-connect.php';}
               ?>
    <?php include_once "footer.php";?>
    <script>
//-------------------Ảnh-----------------------------
        function my_function(smallImg){
            var fullImg = document.getElementById("big-img");
            fullImg.src = smallImg.src;
        }
    </script>
    <link rel="stylesheet" href="js/script.js" class="js">
    </html>
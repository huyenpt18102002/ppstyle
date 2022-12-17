<?php 
include_once "header.php";
?>
 <link rel="stylesheet" href="css/style.css">
<script src="https://kit.fontawesome.com/6c91a38875.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Danh mục sản phẩm</title>
<?php 
include_once "catergory-slider.php";
?>
                   <div class="catergory-right">
                        <div class="catergory-right-top-item">  
                                                   
                            <p>HÀNG MỚI VỀ</p>
                        </div>
                        <div class="catergory-right-content">
                        <?php 
                         include '../admin/connect/open-connect.php';
                     $so_ban_ghi_1_trang = 8;
                     if(isset($_GET['p'])){
                         $p = $_GET['p'];
                     }
                     else {
                         $p = 1;
                     }
                     $start = ($p - 1) * $so_ban_ghi_1_trang;
                     $sql_tong_ban_ghi = "SELECT COUNT(product_detail_id)
                                 AS tong_so_ban_ghi
                                 FROM product_detail INNER JOIN product
                                 ON product_detail.product_id = product.product_id ";
                     $result_tong_ban_ghi = mysqli_query($connect, $sql_tong_ban_ghi);
                     foreach ($result_tong_ban_ghi as $each_tong_ban_ghi){
                         $tong_so_ban_ghi = $each_tong_ban_ghi['tong_so_ban_ghi'];
                     }
                     $so_trang = ceil($tong_so_ban_ghi/$so_ban_ghi_1_trang);
                     $sql = "SELECT product_detail.*, product.product_name, price, product_img
                    FROM product_detail INNER JOIN product
                    ON product_detail.product_id = product.product_id
                    ORDER BY product_detail.product_detail_id DESC
                    LIMIT $start, $so_ban_ghi_1_trang";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <div class="catergory-right-content-item">
                         <a href="product.php?product_detail_id=<?php echo $each['product_detail_id']?>"><img src="../admin/uploads/<?php echo $each['product_img']?>"></a>
                         <a href="product.php?product_detail_id=<?php echo $each['product_detail_id'];?>"><h1><?php echo $each['product_name']?></h1></a>
                                <p><?php echo number_format($each['price'],3,",",".");?><sup>đ</sup></p>
                            </div>
                      <?php
                     }
                     include '../admin/connect/close-connect.php';?>   
                        <div class="catergory-right-bottom">
                            <div class="catergory-right-bottom-item">
                                <p></p>
                            </div>
                            <div class="catergory-right-bottom-item">
                                <p> <?php
                                 for($i = 1; $i <= $so_trang; $i++){
                                    ?>
                                        <button> <a  href="?p=<?php echo $i;?>&search=<?php echo $search;?>">
                                            <?php echo $i;?>
                                            </a>
                                        </button>
                                        <?php
                                        }
                                    ?>   
                                </p>
                            </div>
                        </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <?php include_once "footer.php";?>
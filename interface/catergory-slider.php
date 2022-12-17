
<?php 
include_once "header.php";
?>
<link rel="stylesheet" href="css/style.css">
<script src="https://kit.fontawesome.com/6c91a38875.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<section class="catergory">
       <div class="container">
           <div class="catergory-top">
               <p><a href="index.php">Trang chủ</a></p><span>&#10230;</span> 

               <?php
                include '../admin/connect/open-connect.php';
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
                 include '../admin/connect/close-connect.php';
                ?>
           </div>
           <div class="container">
               <div class="row">
                   <div class="catergory-left">
                       <ul>
                           <li class="catergory-left-li"><a href="catergory-new.php">Hàng mới về</a></li>
                           <li class="catergory-left-li"><a href="catergory-nu.php">Nữ</a>
                              
                            </li>
                           <li class="catergory-left-li"><a href="catergory-nam.php">Nam</a>
                            
                            </li> 
                           <li class="catergory-left-li"><a href="catergory-tre.php">Trẻ em</a>
                            
                           </li>
                       </ul>
                   </div>
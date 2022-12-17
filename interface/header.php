<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/6c91a38875.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
.other li{
    margin-top: 20px;
    padding: 0 12px;
    position: relative;
}
.other{
    flex:1;
    display:flex;
}
.other li{
    margin-top: 20px;
    padding: 0 12px;
    position: relative;
}
.other li:first-child input{
    width: 100%;
    border: none;
    border-bottom: 1px solid #333;
    background: transparent;
    outline: none;
}
.other li i {
    right: 40px;
    top:5px;
    z-index: 1;
    position: absolute;
}
.other li::after{
    content:"";
    display: block;
    width: 1px;
    height: 50%;
    background: #dddddd;
    position: absolute;
    right: 0px;
    top: 30%;
    transform: translateY(-50%);  
}
.other li:last-child::after{
    display: none;
}
.other li:first-child::after{
    display:block ;
}
    </style>
</head>
<body>
   <header>
       <div class="logo">
       <a href="index.php"><img src="image/logo1.png" alt="logo"></a>
       </div>
       <div class="menu">
           <li><a href="index.php">Trang chủ</a></li>
           <li><a href="catergory-nu.php">Nữ</a>
            <ul class="sub-menu">
                <li><a href="">Áo </a>
                     <ul>
                     <?php 
                     include '../admin/connect/open-connect.php';
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%áo%nữ'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }
                    ?>   
                     </ul>
                </li>
                <li><a href="">Quần</a>
                     <ul>
                     <?php 
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%quần%nữ'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }
                    ?>   
                     </ul>
                </li>
                <?php 
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%váy%nữ'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }
                    ?>   
            </ul></li>
           <li><a href="catergory-nam.php">Nam</a>
            <ul class="sub-menu">
                <li><a href="">Áo </a>
                     <ul>
                     <?php 
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%áo%nam'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }
                    ?>   
                     </ul>
                </li>
                <li><a href="">Quần</a>
                     <ul>
                     <?php 
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%quần%nam'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }
                    ?>   
                     </ul>
                </li>
            </ul></li>
           <li><a href="catergory-tre.php">Trẻ em</a>
            <ul class="sub-menu">
                <li><a href="">Bé gái </a>
                     <ul>
                     <?php 
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%gái'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }
                    ?>   
                     </ul>
                </li>
                <li><a href="">Bé trai</a>
                     <ul>
                     <?php 
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%trai'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }
                     include '../admin/connect/close-connect.php';
                    ?>   
                     </ul>
                </li>
            </ul></li>
           <li><a href="introduction.php">Về chúng tôi</a></li>
       </div>
       <div class="other">
            <li> <form method="get" action="search-list.php">
            <?php
            $search = "";
            if(isset($_GET['search'])){
            $search = $_GET['search'];
            }
            ?>
                <input placeholder="Tìm kiếm" type="text"name="search" value="<?php echo $search;?>"> 
                <button style="cursor: pointer; background-color: white; border: none"><i style="left:180px;" class="fas fa-search"></i></button>
                </form>
            </li>
           <li><a class="fa fa-shopping-bag" href="cart.php" style=" position: relative;"></a>
           <div style=" position: absolute; 
                height: 18px;
                width :17px;
               border-radius: 50%;
               background-color: rgb(241, 14, 14);
               margin-top: -30px;
               margin-left: 10px;
               padding-left: 4px;
               font-size: 15px;
               color: white;"><?php if(isset($_SESSION['gio_hang'])){echo COUNT($_SESSION['gio_hang']);} else{echo "0";}?></div></li>
           <li>
           <a class="fa fa-user" href="isset-user.php" style=" position: relative;">
           
           <?php 
  include "../admin/connect/open-connect.php";
  $sql = "SELECT user.*
                FROM user";
                $result = mysqli_query($connect, $sql);
                foreach ($result as $each_u){?>
               <p style=" position: absolute;font-size: 10px; font-weight: lighter;margin-left: -10px; "><?php
    if(isset($_SESSION['user_id'])){
        if($_SESSION['user_id'] == $each_u['user_id']){
        echo $each_u['username'];
        }
    }
}
    include "../admin/connect/close-connect.php";?></p>
           </a>
        </li>
       </div>
   </header> 
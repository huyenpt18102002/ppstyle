<?php
    session_start();
    if(!isset($_SESSION['admin_id'])){
        header('location:login-logout/login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" class="css">
    <title>Giao diện admin</title>
    <script src="https://kit.fontawesome.com/6c91a38875.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <h1>PPSTYLE</h1>
        <button><a href="login-logout/logout.php">Đăng xuất</a></button>
    </header>
    <section class="admin-content">
        <div class="admin-content-left">
            <ul>
                <li><a href="">Loại sản phẩm</a>
                    <ul>
                        <li><a href="catergory/insert.php">Thêm loại sản phẩm</a></li>
                        <li><a href="catergory/catergory_list.php">Danh sách loại sản phẩm</a></li>
                    </ul>
                </li>
                <li><a href="">Sản phẩm</a>
                    <ul>
                        <li><a href="product/insert.php">Thêm sản phẩm</a></li>
                        <li><a href="product/product_list.php">Danh sách sản phẩm</a></li>
                    </ul>
                </li>
                <li><a href="">Chi tiết sản phẩm</a>
                    <ul>
                        <li><a href="product-detail/insert.php">Thêm chi tiết sản phẩm</a></li>
                        <li><a href="product-detail/product_detail_list.php">Danh sách chi tiết sản phẩm</a></li>
                    </ul>
                </li>
                <li><a href="">Màu sắc</a>
                    <ul>
                        <li><a href="color/insert.php">Thêm màu sắc</a></li>
                        <li><a href="color/color_list.php">Danh sách màu sắc</a></li>
                    </ul>
                </li>
                <li><a href="">Size</a>
                    <ul>
                        <li><a href="size/insert.php">Thêm size</a></li>
                        <li><a href="size/size_list.php">Danh sách size</a></li>
                    </ul>
                </li>
                <li><a href="">Nhà sản xuất</a>
                    <ul>
                        <li><a href="producer/insert.php">Thêm nhà sản xuất</a></li>
                        <li><a href="producer/producer_list.php">Danh sách nhà sản xuất</a></li>
                    </ul>
                </li>
                <li><a href="">Đơn hàng</a>
                    <ul>
                        <li><a href="order/order_list.php">Danh sách đơn hàng</a></li>
                    </ul>
                </li>
                <li><a href="">Chi tiết đơn hàng</a>
                    <ul>
                        <li><a href="order-detail/order_detail_list.php">Danh sách chi tiết đơn hàng</a></li>
                    </ul>
                </li>
                <li><a href="">Khách hàng</a>
                    <ul>
                        <li><a href="user/user_list.php">Danh sách khách hàng</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="admin-content-right">
            <div class="admin-content-right-catergory-add">
                <h1>Thêm loại sản phẩm</h1>
                <form action="catergory/insert_solve.php" method="post">
                    <input type="hidden" name="catergory_id"><br>
                    <input required type="text" name="catergory_name" placeholder="Nhập tên loại sản phẩm"><br>
                    <button tyle="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>

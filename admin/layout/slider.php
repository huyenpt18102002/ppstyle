<script src="https://kit.fontawesome.com/6c91a38875.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../style.css" class="css">
<style>
    /*-----phân trang-------*/
.page {
    margin-top: 5px;
    padding: 5px;
    margin-left: 1100px;
}
.page button{
    cursor: pointer;
    background-color: rgb(203, 57, 57);
    border: none;
    color: white;
    height: 20px;
    width: 15px;
}
.page button:hover {
    background-color: transparent;
    border: 1px solid brown;
    color: brown;
}
.page button >a{
    font-size:14px;
    color: white;
}
.page button:hover >a {
    color: black;
}
.admin-content-right-catergory-list table td >a{
    color:blue;
}
</style>
<section class="admin-content">
        <div class="admin-content-left">
            <ul>
                <li><a href="">Loại sản phẩm</a>
                    <ul>
                        <li><a href="../catergory/insert.php">Thêm loại sản phẩm</a></li>
                        <li><a href="../catergory/catergory_list.php">Danh sách loại sản phẩm</a></li>
                    </ul>
                </li>
                <li><a href="">Sản phẩm</a>
                    <ul>
                        <li><a href="../product/insert.php">Thêm sản phẩm</a></li>
                        <li><a href="../product/product_list.php">Danh sách sản phẩm</a></li>
                    </ul>
                </li>
                <li><a href="">Chi tiết sản phẩm</a>
                    <ul>
                        <li><a href="../product-detail/insert.php">Thêm chi tiết sản phẩm</a></li>
                        <li><a href="../product-detail/product_detail_list.php">Danh sách chi tiết sản phẩm</a></li>
                    </ul>
                </li>
                <li><a href="">Màu sắc</a>
                    <ul>
                        <li><a href="../color/insert.php">Thêm màu sắc</a></li>
                        <li><a href="../color/color_list.php">Danh sách màu sắc</a></li>
                    </ul>
                </li>
                <li><a href="">Size</a>
                    <ul>
                        <li><a href="../size/insert.php">Thêm size</a></li>
                        <li><a href="../size/size_list.php">Danh sách size</a></li>
                    </ul>
                </li>
                <li><a href="">Nhà sản xuất</a>
                    <ul>
                        <li><a href="../producer/insert.php">Thêm nhà sản xuất</a></li>
                        <li><a href="../producer/producer_list.php">Danh sách nhà sản xuất</a></li>
                    </ul>
                </li>
                <li><a href="">Đơn hàng</a>
                    <ul>
                        <li><a href="../order/order_list.php">Danh sách đơn hàng</a></li>
                    </ul>
                </li>
                <li><a href="">Chi tiết đơn hàng</a>
                    <ul>
                        <li><a href="../order-detail/order_detail_list.php">Danh sách chi tiết đơn hàng</a></li>
                    </ul>
                </li>
                <li><a href="">Khách hàng</a>
                    <ul>
                        <li><a href="../user/user_list.php">Danh sách khách hàng</a></li>
                    </ul>
                </li>
            </ul>
        </div>
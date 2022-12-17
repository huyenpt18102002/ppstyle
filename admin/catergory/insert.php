<?php
include_once '../layout/header.php';
include_once '../layout/slider.php';
?>
<div class="admin-content-right">
            <div class="admin-content-right-catergory-add">
                <h1>Thêm loại sản phẩm</h1>
                <form action="insert_solve.php" method="post">
                    <input type="hidden" name="catergory_id"><br>
                    <input required type="text" name="catergory_name" placeholder="Nhập tên loại sản phẩm"><br>
                    <button tyle="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
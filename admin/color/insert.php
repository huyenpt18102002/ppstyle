<?php
include_once '../layout/header.php';
include_once '../layout/slider.php';
?>
<div class="admin-content-right">
            <div class="admin-content-right-catergory-add">
                <h1>Thêm màu sắc</h1>
                <form action="insert_solve.php" method="post">
                    <input type="hidden" name="color_id"><br>
                    <input required type="text" name="color_name" placeholder="Nhập tên màu sắc"><br>
                    <button tyle="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
<?php
include_once '../layout/header.php';
include_once '../layout/slider.php';
?>
<div class="admin-content-right">
            <div class="admin-content-right-catergory-add">
                <h1>Thêm nhà sản xuất</h1>
                <form action="insert_solve.php" method="post">
                    <input type="hidden" name="producer_id"><br>
                    <input required type="text" name="producer_name" placeholder="Nhập tên nhà sản xuất"><br>
                    <button tyle="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
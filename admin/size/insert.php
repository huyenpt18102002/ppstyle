<?php
include_once '../layout/header.php';
include_once '../layout/slider.php';
?>
<div class="admin-content-right">
            <div class="admin-content-right-catergory-add">
                <h1>Thêm size</h1>
                <form action="insert_solve.php" method="post">
                    <input type="hidden" name="size_id"><br>
                    <input type="text" name="size_name" placeholder="Nhập tên size"><br>
                    <button tyle="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
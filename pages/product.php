<?php
    $sql_product = "SELECT * FROM tbl_category, tbl_product WHERE tbl_product.id_danhmuc = tbl_category.id_danhmuc AND tbl_product.id_danhmuc = '$_GET[id]'  ORDER BY tbl_product.id_sanpham";
    $query_product = mysqli_query($conn, $sql_danhmuc);
?>

<h3>Sản phẩm mới nhất</h3>
                <ul class="content-list">
                    <?php
                    while($row_product =mysqli_fetch_array($query_product)){
                    ?>
                    <li class="content-item">
                        <img class="content-img" src="images/iphone-xs-max.jpg" alt="">
                        <p>Tên sản phẩm: Iphone Xs Max 64GB</p>
                        <p>Giá: 12.000.000 VNĐ</p>
                    </li>
                    <?php
                    }?>
                    
                </ul>
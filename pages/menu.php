<?php
    $sql_danhmuc = "SELECT * FROM tbl_category ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
?>
<div class="menu">
            <ul class="menu-list">
                <li class="list-item"><a href="index.php">Trang chủ </a></li>
                <?php
                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                ?>
                <li class="list-item"><a href="index.php?quanli=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['category'] ?></a></li>
                <?php
                }
                ?>
                <li class="list-item"><a href="index.php?quanli=tintuc">Tin tức </a></li>
                <li class="list-item"><a href="index.php?quanli=lienhe">Liên hệ</a></li>
            </ul>
        </div>
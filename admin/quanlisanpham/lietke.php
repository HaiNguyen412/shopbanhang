<?php
    $sql_lietke = "SELECT * FROM tbl_product,tbl_category WHERE tbl_product.id_danhmuc = tbl_category.id_danhmuc  ORDER BY id DESC";
    $row_lietke = mysqli_query($conn, $sql_lietke);
?>
<table>
  <tr>
    <th>Số thứ tự</th>
    <th>Tên sản phẩm</th>
    <th>Mã sản phẩm</th>
    <th>Giá sản phẩm </th>
    <th>Số lượng</th>
    <th style = "width:30%">Hình ảnh </th>
    <th style = "width:10%">Danh mục</th>
    <th style = "width:30%">Nội dung </th>
    <!-- <th>Tình trạng</th> -->
    <th style = "width:8%">Quản lí</th>
  </tr>
  <?php
    $i = 0;
    while($row = mysqli_fetch_array($row_lietke)){
      $i++;
  ?>
  <tr>
    <td><?php echo $i?></td>
    <td><?php echo $row['tensanpham']?></td>
    <td><?php echo $row['masanpham']?></td>
    <td><?php echo $row['giasanpham']?></td>
    <td><?php echo $row['soluong']?></td>
    <td><img src="./uploads/<?php echo $row['hinhanh']?>" width="40%"></td>
    <td><?php echo $row['category']?></td>
    <td><?php echo $row['noidung']?></td>
    <!-- <th><?php echo $row['tinhtrang']?></th> -->
    <td>
      <a href="quanlisanpham/xuli.php?idsanpham=<?php echo $row['id']?>">Xóa</a> |
       <a href="?action=quanlisanpham&query=sua&idsanpham=<?php echo $row['id']?>">Sửa</a>
    </td>
  </tr>
  <?php
  }
  ?>
</table>
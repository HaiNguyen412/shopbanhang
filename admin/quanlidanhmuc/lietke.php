<?php
    $sql_lietke = "SELECT * FROM tbl_category ORDER BY thutu DESC";
    $row_lietke = mysqli_query($conn, $sql_lietke);
?>
<table style="width: 60%" border="1" style="border-collapse:collapse">
  <tr>
    <th>Tên danh mục</th>
    <th>Thứ tự</th>
    <th>Quản lí</th>
  </tr>
  <?php
    $i = 0;
    while($row = mysqli_fetch_array($row_lietke)){
      $i++;
  ?>
  <tr>
    <td><?php echo $i?></td>
    <td><?php echo $row['category']?></td>
    <td>
      <a href="quanlidanhmuc/xuli.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a> |
       <a href="?action=danhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>">Sửa</a>
    </td>
  </tr>
  <?php
  }
  ?>
</table>
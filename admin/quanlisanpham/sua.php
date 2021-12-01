<h1>Sửa sản phẩm </h1>
<?php
    $sql_sua = "SELECT * FROM tbl_product WHERE id='$_GET[idsanpham]' LIMIT 1";
    $row_sua = mysqli_query($conn, $sql_sua);
?>
<table >
    <form method="POST" action="./quanlisanpham/xuli.php?idsanpham=<?php echo $_GET['idsanpham']?>" enctype="multipart/form-data">
        <?php
        while($row = mysqli_fetch_array($row_sua)){
        ?>
        <tr>
          <td>Tên sản phẩm</td>
          <td><input type="text" value="<?php echo $row['tensanpham']?>" name="tensanpham"></td>
        </tr>
        <tr>
          <td>Mã sản phẩm </td>
          <td><input type="text" value="<?php echo $row['masanpham']?>" name="masanpham"></td>
        </tr>
        <tr>
          <td>Giá sản phẩm</td>
          <td><input type="text" value="<?php echo $row['giasanpham']?>" name="giasanpham"></td>
        </tr>
        <tr>
          <td>Số lượng</td>
          <td><input type="text" value="<?php echo $row['soluong']?>" name="soluong"></td>
        </tr>
        <tr>
          <td>Hình ảnh </td>
          <td>
            <input type="file" name="hinhanh">
            <img src="./uploads/<?php echo $row['hinhanh']?>" width="20%">
          </td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea rows="8" cols="40%"name="noidung"><?php echo $row['noidung']?></textarea></td>
        </tr>
        <tr>
          <td><input type="submit" name="suasanpham" value=" Sửa sản phẩm"></td>
        </tr>
    </form>
    <?php }?>
 
</table>
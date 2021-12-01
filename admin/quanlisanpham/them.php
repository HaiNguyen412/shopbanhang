<h1>Thêm sản phẩm </h1>
<table >
    <form method="POST" action="./quanlisanpham/xuli.php" enctype="multipart/form-data">
      <tr>
        <td>Mã sản phẩm</td>
        <td><input type="text" name="masanpham"></td>
      </tr>    
      <tr>
        <td>Tên sản phẩm </td>
        <td><input type="text" name="tensanpham"></td>
      </tr>
      <tr>
        <td>Hình ảnh</td>
        <td><input type="file" name="hinhanh"></td>
      </tr>
      <tr>
        <td>Giá sản phẩm </td>
        <td><input type="text" name="giasanpham"></td>
      </tr>
      <tr>
        <td>Số lượng </td>
        <td><input type="text" name="soluong"></td>
      </tr>
      <tr>
        <td>Nội dung</td>
        <td><textarea rows="8" cols="40%" name="noidung"> </textarea></td>
      </tr>
      <tr>
        <td>Danh mục</td>
        <td name="danhmuc">
          <select >
            <?php
            $sql_danhmuc = "SELECT * FROM tbl_category ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
            ?>
            <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['category']?></option>
          <?php  
          }
          ?>
          </select>
        </td>
      </tr>

      <tr>
        <td>Tình trạng</td>
        <td><select name="tinhtrang">
          <option value="">Kích hoạt</option>
          <option value="">Ẩn</option>
        </select></td>
      </tr>
      <tr>
        <td><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
      </tr>
    </form>
 
</table>
<?php
    $sql_sua = "SELECT * FROM tbl_category WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $row_sua = mysqli_query($conn, $sql_sua);
?>
<table >
    <form method="POST" action="./quanlidanhmuc/xuli.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">
        <?php
        while($row = mysqli_fetch_array($row_sua)){
        ?>
        <tr>
          <td>Tên danh muc</td>
          <td><input type="text" value="<?php echo $row['category']?>" name="tendanhmuc"></td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="text" value="<?php echo $row['thutu']?>" name="thutu"></td>
        </tr>
        <tr>
          <td><input type="submit" name="suadanhmuc" value=" Sửa danh mục"></td>
        </tr>
    </form>
    <?php }?>
 
</table>
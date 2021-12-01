<?php
require('../config/config.php');
$tensanpham = $_POST['tensanpham'];
$masanpham = $_POST['masanpham'];
$giasanpham = $_POST['giasanpham'];
$soluong =$_POST['soluong']; 
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_temp = $_FILES['hinhanh']['tmp_name'];
$noidung= $_POST['noidung'];
$danhmuc = $_POST['danhmuc'];



if(isset($_POST['themsanpham'])){
    $sql_them = "INSERT INTO tbl_product(tensanpham, masanpham, giasanpham, soluong, hinhanh, noidung, id_danhmuc) VALUES('".$tensanpham."','".$masanpham."','".$giasanpham."','".$soluong."','".$hinhanh."','".$noidung."','".$danhmuc."')";
    mysqli_query($conn, $sql_them);
    move_uploaded_file($hinhanh_temp,'../uploads/'.$hinhanh);
    header("Location:../index.php?action=quanlisanpham&query=them");
}
else if(isset($_POST['suasanpham'])){
    if($hinhanh != ''){
        move_uploaded_file($hinhanh_temp,'../uploads/'.$hinhanh);
        $id = $_GET['idsanpham'];
        $sql = "SELECT * FROM tbl_product WHERE id= '$id' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($query)){
        unlink('../uploads/'.$row['hinhanh']);
         }
        $sql_sua = "UPDATE tbl_product SET tensanpham='".$tensanpham."', masanpham='".$masanpham."', giasanpham='".$giasanpham."' , soluong='".$soluong."' , hinhanh='".$hinhanh."' , noidung='".$noidung."'  WHERE id = $_GET[idsanpham]";
        $id = $_GET['idsanpham'];
        
    } else {
        $sql_sua = "UPDATE tbl_product SET tensanpham='".$tensanpham."', masanpham='".$masanpham."', giasanpham='".$giasanpham."' , soluong='".$soluong."', noidung='".$noidung."'  WHERE id = $_GET[idsanpham]";
    }
    mysqli_query($conn, $sql_sua);
    header("Location:../index.php?action=quanlisanpham&query=them");

}
else{
    $id = $_GET['idsanpham'];
    $sql = "SELECT * FROM tbl_product WHERE id= '$id' LIMIT 1";
    $query = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($query)){
        unlink('../uploads/'.$row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM tbl_product WHERE id = '".$id."'";
    mysqli_query($conn, $sql_xoa );
    header("Location:../index.php?action=quanlisanpham&query=them");
}
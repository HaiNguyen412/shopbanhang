<?php
require('../config/config.php');
$tendanhmuc = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
if(isset($_POST['themdanhmuc'])){
    $sql_them = "INSERT INTO tbl_category(category, thutu) VALUES('".$tendanhmuc."','".$thutu."')";
    // mysqli_query($conn, $sql_them);
    mysqli_query($conn, $sql_them);
    header("Location:../index.php?action=danhmucsanpham ");
}
elseif(isset($_POST['suadanhmuc'])){
    $sql_sua = "UPDATE tbl_category SET category='".$tendanhmuc."', thutu='".$thutu."' WHERE id_danhmuc = $_GET[iddanhmuc]";
    // mysqli_query($conn, $sql_them);
    mysqli_query($conn, $sql_sua);
    header("Location:../index.php?action=danhmucsanpham ");
}
else{
    $id = $_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM tbl_category WHERE id_danhmuc = '".$id."'";
    mysqli_query($conn, $sql_xoa );
    header("Location:../index.php?action=danhmucsanpham ");
}
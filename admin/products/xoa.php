<?php
    //kết nối đến csdl
    require_once "../../config/dbConnection.php";
    $id_sp = $_GET["id_sp"];
    
    //SQL delete
    $sql = "DELETE FROM sanpham WHERE id_sp = '$id_sp'";
    if (mysqli_query($conn, $sql)) // Nếu thành công thì chuyển sang trang chủ
    {
        header('location: danhsach.php');
    }
    else
    {
        $result = "Xóa không thành công!" . mysqli_error($conn);
        echo "<script type='text/javascript'>alert('$result');</script>";
    }
    mysqli_close($conn);
?>
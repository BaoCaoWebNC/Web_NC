<?php
    //kết nối đến csdl
    require_once "../../config/dbConnection.php";
    $id_dm = $_GET["id_dm"];
    
    //SQL delete
    $sql = "DELETE FROM dmsanpham WHERE id_dm = '$id_dm'";
    if (mysqli_query($conn, $sql)) // Nếu thành công thì chuyển sang trang chủ
    {
        header('location: danhsach.php');
    }
    else
    {
        $result = "Xóa không thành công!" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
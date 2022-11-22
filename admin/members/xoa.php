<?php
    //kết nối đến csdl
    require_once "../../config/dbConnection.php";
    $id_thanhvien = $_GET["id_thanhvien"];
    //SQL get quyen
    $sql = "SELECT * FROM thanhvien WHERE id_thanhvien = '$id_thanhvien'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    if($row['quyen_truy_cap'] == 2)
    {
        echo "<script type='text/javascript'>alert('Bạn không thể xóa tài khoản này!');</script>";
    }
    else
    {
        //SQL delete
        $sql1 = "DELETE FROM thanhvien WHERE id_thanhvien = '$id_thanhvien'";
        if (mysqli_query($conn, $sql1)) // Nếu thành công thì chuyển sang trang chủ
        {
            header('location: danhsach.php');
        }
        else
        {
            $result = "Xóa không thành công!" . mysqli_error($conn);
            echo "<script type='text/javascript'>alert('$result');</script>";
        }
    }
    
    mysqli_close($conn);
?>
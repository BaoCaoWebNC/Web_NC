<?php
    // Kểt nối đến cơ sở dừ Liệu
    require_once "../../config/dbConnection.php";

    //Kỉểm tra khỉ ngườỉ dùng submit form
    if (isset($_POST["btnSave"]))
    {
        //Lăy dữ Liệu trên form => Lưu vào bỉển
        $id_dm = $_POST["txt_id_dm"];
        $ten_dm = $_POST["txt_ten_dm"];
    }

    // Truy vân dữ Liệu
    $sql = "UPDATE dmsanpham
                SET ten_dm='$ten_dm'
                    WHERE id_dm='$id_dm'";
    
    if (mysqli_query($conn, $sql)) //Nểu thành công thỉ chuyển đển trang chủ index.php
    {
        header('location:danhsach.php');
    }
    else 
    {//Lỗỉ
        $result = "Cập nhật không thành công!" . mysqli_error($conn);
        echo "<script type='text/javascript'>alert('$result');</script>";
    }
    mysqli_close($conn);
?>
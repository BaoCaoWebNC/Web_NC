<?php
    require_once "../../config/dbConnection.php";

    if(isset($_POST['sbm'])){
        $ten_dm = $_POST['ten_dm'];
    }
    $sql = "INSERT INTO dmsanpham (ten_dm)
        VALUES ('$ten_dm')";
    if (mysqli_query($conn, $sql)) //Nểu thành công thỉ chuyển đển trang chủ index.php
    {
        header('location:danhsach.php');
    }
    else {//Lỗỉ
        $result = "Lỗi thêm mới" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
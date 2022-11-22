<?php
    session_start();
    unset($_SESSION["tai_khoan"]);
    unset($_SESSION["name"]);
    unset($_SESSION["quyen_truy_cap"]);
    header("Location:index.php");
?>
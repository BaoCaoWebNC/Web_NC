<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <title>Admin | Sửa thông tin tin tức</title>
</head>
<body>
    <?php
    if(isset($_SESSION["name"])) {
    ?>
    <?php
        require "../../config/dbConnection.php";
        $id_tintuc = $_GET['id_tintuc'];
        $sql_up = "SELECT * FROM news where id_tintuc = $id_tintuc";
        $query_up = mysqli_query($conn, $sql_up);
        $row_up = mysqli_fetch_assoc($query_up);
        if (isset($_POST["sbm"]))
        {
            //Lăy dữ Liệu trên form => Lưu vào bỉển
            $ten_tintuc = $_POST["ten_tintuc"];
            $noidung_tintuc = $_POST["noidung_tintuc"];
            $image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
        
            $sql = "UPDATE news
            SET ten_tintuc='$ten_tintuc', noidung_tintuc='$noidung_tintuc', anh_tintuc ='$image'
                WHERE id_tintuc='$id_tintuc'";
            if (mysqli_query($conn, $sql))
            {
                move_uploaded_file($image_tmp, "../../kno/$image");
                header('location:danhsach.php');
            }
            else {//Lỗỉ
                $result = "Lỗi cập nhật" . mysqli_error($conn);
                echo "<script type='text/javascript'>alert('$result');</script>";
            }
        }
        mysqli_close($conn);
    ?>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="../dashboard.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-3 d-none d-sm-inline">Admin</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-2 mt-3 align-middle text-white">
                                <i class="fs-5 fa-solid fa-user"></i> <span class="ms-1 d-none d-sm-inline fw-bold">Thành Viên</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="../members/danhsach.php" class="nav-link px-4 text-white"> <span class="d-none d-sm-inline">Danh sách</span></a>
                                </li>
                                <li class="w-100">
                                    <a href="../members/" class="nav-link px-4 text-white"> <span class="d-none d-sm-inline">Thêm mới</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../categories/danhsach.php" class="nav-link px-2 mt-3 align-middle text-white">
                                <i class="fs-5 fa-solid fa-rectangle-list"></i> <span class="ms-1 d-none d-sm-inline fw-bold">Danh mục</span> </a>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-2 mt-3 align-middle text-white">
                                <i class="fs-5 fab fa-product-hunt"></i> <span class="ms-1 d-none d-sm-inline fw-bold">Sản Phẩm</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="../products/danhsach.php" class="nav-link px-4 text-white"> <span class="d-none d-sm-inline">Danh sách</span></a>
                                </li>
                                <li class="w-100">
                                    <a href="../products/them.php" class="nav-link px-4 text-white"> <span class="d-none d-sm-inline">Thêm mới</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-2 mt-3 align-middle text-white">
                                <i class="fs-5 fa-solid fa-newspaper"></i> <span class="ms-1 d-none d-sm-inline fw-bold">Tin tức</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="danhsach.php" class="nav-link px-4 text-white"> <span class="d-none d-sm-inline">Danh sách</span></a>
                                </li>
                                <li class="w-100">
                                    <a href="them.php" class="nav-link px-4 text-white"> <span class="d-none d-sm-inline">Thêm mới</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://scr.vn/wp-content/uploads/2020/07/Avatar-Facebook-tr%E1%BA%AFng.jpg" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1"><?php echo $_SESSION["name"]; ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow bg-dark">
                            <li><a class="dropdown-item" href="#">Cài đặt</a></li>
                            <li><a class="dropdown-item" href="#">Hồ sơ</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="../logout.php">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-3">
                <div>
                    <h3>SỬA THÔNG TIN TIN TỨC</h3>
                </div>
                <div class="card-body">
                    <form method="POST" autocomplete="off" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">ID:</label>
                            <input type="text" name="id" class="form-control" readonly="readonly" value ="<?php echo $row_up['id_tintuc']; ?>" require>
                        </div>

                        <div class="form-group">
                            <label for="">Tên tin tức</label>
                            <input type="text" name="ten_tintuc" class="form-control" value ="<?php echo $row_up['ten_tintuc']; ?>" require>
                        </div>

                        <div class="form-group">
                            <label for="">Nội dung tin tức</label> <br>
                            <textarea cols="50" rows="5" name="noidung_tintuc" class="form-control" require><?php echo $row_up['noidung_tintuc']; ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Ảnh tin tức</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                <label class="custom-file-label" for="customFile">Chọn file...</label>
                            </div>
                        </div>

                        <button name="sbm" class="btn btn-primary" type="submit" onclick="return confirm('Bạn có muốn sửa thông tin này không?');">Sửa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    }else echo "<h1>Hãy đăng nhập trước!</h1>";
    ?>
    <script>
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            if(fileName == ""){
                fileName = "Chọn file...";
            }
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
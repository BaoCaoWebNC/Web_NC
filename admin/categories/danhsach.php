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
    <title>Admin | Danh mục</title>
</head>
<body>
    <?php
    if(isset($_SESSION["name"])) {
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
                                    <a href="../members/them.php" class="nav-link px-4 text-white"> <span class="d-none d-sm-inline">Thêm mới</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="danhsach.php" class="nav-link px-2 mt-3 align-middle text-white">
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
                                    <a href="../newrs/danhsach.php" class="nav-link px-4 text-white"> <span class="d-none d-sm-inline">Danh sách</span></a>
                                </li>
                                <li class="w-100">
                                    <a href="../news/them.php" class="nav-link px-4 text-white"> <span class="d-none d-sm-inline">Thêm mới</span></a>
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
                    <h3>DANH MỤC SẢN PHẨM</h3>
                    <div class="card-body">
                        <form action ="them.php" method="POST" autocomplete="off">
                            <label for="tendm">Tên danh mục:</label>
                            <input type="text" name="ten_dm" class="form-control" id="tendm" require>
                            <button name="sbm" class="btn btn-primary my-2" type="submit">Thêm</button>
                        </form>
                    </div>
                </div>
                <?php
                    require "../../config/dbConnection.php";
                    $sql = "SELECT * FROM dmsanpham";
                    $query = mysqli_query($conn, $sql);
                ?>
                <table class="table table-striped table-bordered" id="sortTable">       
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_assoc($query)){ 
                        ?>
                        <tr>
                            <td><?php echo $row['id_dm']; ?></td>
                            <td><?php echo $row['ten_dm']; ?></td>
                            <td>
                                <button href="" class = "btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal" data-whatever="<?php echo $row['id_dm']; ?>">Sửa</button>
                                <a href="xoa.php?id_dm=<?php echo $row['id_dm']; ?>" onclick="return confirm('Bạn có muốn xóa thông tin này không?');" class = "btn btn-primary">Xóa</a>
                            </td>
                        </tr>
                        <?php 
                            }
                            mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
                <script>
                $('#sortTable').DataTable();
                </script>
            </div>
        </div>
    </div>
    <div class="modal fade" id="updateModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sửa danh mục</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action ="sua.php" method="POST" autocomplete="off">
                    <div class="mb-3">
                        <label for="txt_id_dm" class="col-form-label">ID:</label>
                        <input type="text" name="txt_id_dm" class="form-control id-input" id="txt_id_dm" readonly = "readonly">
                    </div>
                    <div class="mb-3">
                        <label for="txt_ten_dm" class="col-form-label">Tên danh mục mới:</label>
                        <input type="text" name="txt_ten_dm" id="txt_ten_dm" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input onclick="return confirm('Bạn có muốn sửa thông tin này không?');" class = "btn btn-primary" type = "submit" name = "btnSave" value = "Lưu">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    }else echo "<h1>Hãy đăng nhập trước!</h1>";
    ?>
    <script>
        $(document).ready(function(){
            $('#updateModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var id = button.data('whatever');
            $('#txt_id_dm').val(id);
            })
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
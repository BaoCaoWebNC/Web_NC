<?php
    require "../config/dbConnection.php";
    session_start();
    $message="";
    if(count($_POST)>0) {
        $query = "SELECT * FROM thanhvien WHERE tai_khoan='" . $_POST["user_name"] . "' and mat_khau = '". $_POST["password"]."'";
        $result = mysqli_query($conn,$query);
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
            if($row['quyen_truy_cap'] == 2){
                $_SESSION["id"] = $row['id_thanhvien'];
                $_SESSION["name"] = $row['ten'];
            }else {
                $message = "Bạn không đủ quyền để đăng nhập!";
            }
        } else {
         $message = "Tài khoản hoặc mẩu khẩu không tồn tại!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:dashboard.php");
    }
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Admin | Login</title>
</head>
<body class="bg-secondary">
    <section class="w-50 d-flex p-4 justify-content-center pb-4 bg-light m-auto mt-5">
        <form style="width: 22rem;" name="frmUser" method="post" action="">         
            <h3 class="text-center py-3">ADMIN LOGIN</h3>
            <!-- Email input --> 
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1" style="margin-left: 0px;">Tài khoản</label>
                <input type="text" id="form2Example1" class="form-control" name="user_name">
                <div class="form-notch">
                    <div class="form-notch-leading" style="width: 9px;"></div>
                    <div class="form-notch-middle" style="width: 88.8px;"></div>
                    <div class="form-notch-trailing"></div>
                </div>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example2" style="margin-left: 0px;">Mật khẩu</label>
                <input type="password" id="form2Example2" class="form-control" name="password">
                <div class="form-notch">
                    <div class="form-notch-leading" style="width: 9px;"></div>
                    <div class="form-notch-middle" style="width: 64.8px;"></div>
                    <div class="form-notch-trailing"></div>
                </div>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked="">
                        <label class="form-check-label" for="form2Example31"> Nhớ tài khoản </label>
                    </div>
                </div>

                <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Quên mật khẩu?</a>
                </div>
            </div>

            <!-- Submit button -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-around">
                    <input type="submit" class="btn btn-primary btn-block mb-4" name="submit" value="Đăng nhập">
                    <input type="reset" class="btn btn-primary btn-block mb-4">
                </div>
            </div>
        </form>
        <div class="message"><?php if($message!="") { echo $message; } ?></div>
    </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
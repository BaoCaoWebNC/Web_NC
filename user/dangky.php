<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/dangky.css">
	<link rel="stylesheet" href="./themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./fontawesome-free-6.0.0-web/fontawesome-free-6.0.0-web/css/all.min.css">
	<title>Đăng ký</title>
</head>
<body>
	<div class="container">
		<div class="top">
			<img src="../pictures/banner/1200-44-1200x44-9.png" alt="">
		</div>
		<div class="top-down">
			<div class="content-top-down">
				<ul>
					<li><a href="../user/index.php"><img style="width: 75px; " src="../pictures/icon/logo_1.png" alt=""></a></li>
					<li id="address-form"><a href="#">Hà Nội<i class="fas fa-sort-down"></i></a></li>
					<li><input type="text" placeholder="Bạn tìm gì..."><i class="fas fa-search"></i></li>
					<li><a href=""></a><button><i class="fas fa-shopping-cart"></i>Giỏ hàng</button></li>
					<li><a href="">Lịch sử <br>đơn hàng</a></li>
					<li><a href="">Mua thẻ nạp ngay!</a></li>
					<li><a href="../user/hoidap24h.php">24h công nghệ</a></li>
					<li><a href="../user/hoidap.php">Hỏi đáp</a></li>
					<li><a href="">Game App</a></li>
				</ul>
			</div>
		</div>
	<!--menu bar-->
		<div class="menu-bar">
			<div class="menu-bar-content">
				<ul class="main-menu">
					<li>
						<a href="../user/iphone.php">
							<i><img src="../pictures/icon/icon-phone-96x96-2.png"></i>
							<span>Điện thoại<span>
						</a>
					</li>
					<li>
						<a href="">
							<i><img src="../pictures/icon/icon-laptop-96x96-1.png"></i>
							<span>Laptop<span>
						</a>
					</li>
					<li>
						<a href="">
							<i><img src="../pictures/icon/icon-tablet-96x96-1.png"></i>
							<span>Tablet<span>
						</a>
					</li>
					<li>
						<a href="">
							<i><img src="../pictures/icon/icon-phu-kien-96x96-1.png"></i>
							<span>Phụ kiện<span>
						</a>
					</li>
					<li>
						<a href="">
							<i><img src="../pictures/icon/icon-smartwatch-96x96-1.png"></i>
							<span>Smartwatch<span>
						</a>
					</li>
					<li>
						<a href="">
							<i><img src="../pictures/icon/icon-avaji-96x96-1.png"></i>
							<span>AVAJi<span>
						</a>
					</li>
					<li>
						<a href="">
							<i><img src="../pictures/icon/icon-pc-96x96.png"></i>
							<span>PC, Máy in<span>
						</a>
					</li>
					<li>
						<a href="../user/contact.php">
							<span>Contact<span>
						</a>
					</li>
					<li>
						<a href="../user/login.php" alt="">
							<span>Đăng nhập<span>
						</a>
					</li>
					<li>
						<a href="../user/dangky.php" alt="">
							<span>Đăng ký<span>
						</a>
					</li>
				</ul>
			</div>
		</div>



	<div class="main-wrapper">
		<div class="wrapper">
			<script language="javascript" src="../user/dangky.js"></script>
			<form action=""method="POST" onsubmit="return validate()" id="form-login">
				<h1 class="form-heading">TẠO TÀI KHOẢN</h1>
				<div class="form-group">
					<i class="fa-solid fa-user"></i>
					<input type="text" name="username" id="username" class="form-input" placeholder="Nhập tên đăng nhập">
				</div>
				<div class="form-group">
					<i class="fas fa-key"></i>
					<input type="password" name="password" id="password" class="form-input" placeholder="Nhập mật khẩu">
					<div id="eye">
						<i class="far fa-eye" onclick="daoTT()"></i>
						<script>
							function daoTT() {
								var mk = document.getElementById("password");
								mk.type = (mk.type === "password")? "text":"password";
							}  
							</script>
					</div>
				
				</div>
				<div class="form-group">
					<i class="fas fa-lock"></i>
					<input type="password" name="password-repeat" id="password-repeat" class="form-input" placeholder="Nhập lại mật khẩu">
					<div id="eye">
						<i class="far fa-eye"onclick="daoTT()"></i>
						<script>
							function daoTT() {
								var mk = document.getElementById("password-repeat");
								mk.type = (mk.type === "password-repeat")? "text":"password-repeat";
							}  
							</script>
					</div>
				
				</div>
				<div class="form-group">
					<i class="fa-solid fa-phone"></i>
					<input type="number" name="number" id="number" class="form-input" placeholder="Nhập số điện thoại">
				</div>
				<input type="submit" value="Đăng ký" class="form-submit">
			</form>
		</div>
	</div>
	<footer>
		<div id="footer">
			<div class="inner clearfix">
				<div class="about-us">
				  <h3>ĐỊA CHỈ CỬA HÀNG</h3>
				  <p>Số 235 Hoàng Quốc Việt - Cổ Nhuế<br>
					Bắc Từ Liêm, Hà Nội<br>
					Hotline: 0988988988</p>
				</div>
		  
				<div class="info-link">
				  <h3>Quick Links</h3>
				  <nav>
					<ul>
					  <li><a href="../user/index.php">Home</a></li>
					  <li><a href="../user/iphone.php">Điện thoại</a></li>
					  <li><a href="../user/hoidap24h.php">Tin tức</a></li>
					</ul>
				  </nav>
				</div>
		  
				<div class="follow-us">
				  <h3>Follow Us</h3>
				  <ul>
					<li class="facebook"><a href=""><i class="fab fa-facebook-f"></i></a></li>
					<li class="google-plus"><a href=""><i class="fab fa-google-plus-g"></i></a></li>
					<li class="twitter"><a href=""><i class="fab fa-twitter"></i></a></li>
					<li class="linkedin"><a href=""><i class="fab fa-linkedin-in"></i></a></li>
				  </ul>
				</div>
			</div>
			<p class="copyright">Shop T Mobile</p>
		</div>
	</footer>
</div>
</body>
</html>
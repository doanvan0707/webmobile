<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Đăng ký tài khoản</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<form action="../../Controllers/MobileController.php?action=register" method="post">
				<div class="row"> 
					<div class="col-md-6">
						<h2>THÔNG TIN TÀI KHOẢN</h2>
						<div class="form-group">
							<label>Tên tài khoản</label>
							<input type="text" name="username" class="form-control">
						</div>
						<div class="form-group">
							<label>Mật khẩu</label>
							<input type="password" name="password" class="form-control">
						</div>
						<div class="form-group">
							<label>Nhập lại mật khẩu</label>
							<input type="password" name="repassword" class="form-control">
						</div>
						<div class="form-group">
							<label>Địa chỉ email</label>
							<input type="email" name="email" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<h2>THÔNG TIN LIÊN HỆ</h2>
						<div class="form-group">
							<label>Họ và tên của bạn</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label>Số điện thoại</label>
							<input type="text" name="phone" class="form-control">
						</div>
						<div class="form-group">
							<label>Skype (nếu có)</label>
							<input type="text" name="skype" class="form-control">
						</div>
						<div class="form-group">
							<label>Yahoo (nếu có)</label>
							<input type="text" name="yahoo" class="form-control">
						</div>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" value="ĐĂNG KÝ TÀI KHOẢN" class="btn btn-success ">
				</div>
			</form>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>
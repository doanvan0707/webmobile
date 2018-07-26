<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trang đăng nhập</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../styles/style.css">
</head>
<body>
	<div class="container">
		<div class="box-login">
			<div class="row">
				<div class="col-md-6">
					<h2 class="title-login">Thông tin đăng nhập</h2>
					<form action="../../Controllers/MobileController.php?action=checklogin" method="post">
						<div class="form-group">
							<label>Tên tài khoản</label>
							<input type="text" name="username" class="form-control">
						</div>
						<div class="form-group">
							<label>Mật khẩu</label>
							<input type="password" name="password" class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" value="ĐĂNG NHẬP" class="btn btn-success text-center">
						</div>
					</form>
				</div>
				<div class="col-md-6">

				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
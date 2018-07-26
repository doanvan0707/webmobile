<?php  
require_once '../../Models/Mobile.php';
$id = filter_input(INPUT_GET, 'id');
$mobile = Mobile::show($id);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	<div class="container">
		<h1>Thông tin</h1>
		<ol>
			<li><?php echo 'Tên đăng nhập: ' . $mobile['username'] ?></li>
			<li><?php echo 'Mật khẩu:' . $mobile['password'] ?></li>
			<li><?php echo 'Địa chỉ email: ' . $mobile['email'] ?></li>
			<li><?php echo 'Họ tên của bạn: ' . $mobile['name'] ?></li>
			<li><?php echo 'Số điện thoại: ' . $mobile['phone'] ?></li>
			<li><?php echo 'Skype (nếu có): ' . $mobile['skype'] ?></li>
			<li><?php echo 'Yahoo (nếu có): ' . $mobile['yahoo'] ?></li>
		</ol>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
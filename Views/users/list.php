<?php  
require_once '../../Models/Mobile.php';
$mobiles = Mobile::list();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Thông tin người dùng</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<?php if (!empty($mobiles)): ?>
				<table class="table table-dark">
				<tr>
					<th>Tên tài khoản</th>
					<th>Địa chỉ email</th>
					<th>Họ tên của bạn</th>
					<th>Số điện thoại</th>
					<th>View</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php foreach ($mobiles as $key => $mobile): ?>
					<tr>
						<td><?php echo $mobile['username'] ?></td>
						<td><?php echo $mobile['email'] ?></td>
						<td><?php echo $mobile['name'] ?></td>
						<td><?php echo $mobile['phone'] ?></td>
						<td><a href="../../Controllers/MobileController.php?action=view&id=<?php echo $mobile['id'] ?>" class="btn btn-info">View</a></td>
						<td><a href="../../Controllers/MobileController.php?action=edit&id=<?php echo $mobile['id'] ?>" class="btn btn-warning">Edit</a></td>
						<td><a href="../../Controllers/MobileController.php?action=delete&id=<?php echo $mobile['id'] ?>" class="btn btn-danger">Delete</a></td>
					</tr>
				<?php endforeach ?>
			</table>
			<?php endif ?>
			
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>
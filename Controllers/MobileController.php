<?php  
require_once '../Models/Mobile.php';
require_once '../Models/Login.php';
$action = filter_input(INPUT_GET, 'action');

switch ($action) {
		case 'index': {
				header('Location: ../index.php');
				break;
		}
		case 'registration': {
				header('Location: ../Views/users/registration.php');
				break;
		}
		case 'user': {
				header('Location: ../Views/users/list.php');
				break;
		}
		case 'register': {
				$userName = filter_input(INPUT_POST, 'username');
				$password = filter_input(INPUT_POST, 'password');
				$email = filter_input(INPUT_POST, 'email');
				$name = filter_input(INPUT_POST, 'name');
				$phone = filter_input(INPUT_POST, 'phone');
				$skype = filter_input(INPUT_POST, 'skype');
				$yahoo = filter_input(INPUT_POST, 'yahoo');
				$mobile = new Mobile($userName, $password, $email, $name, $phone, $skype, $yahoo);
				$mobile->insert();
				header('Location: ../Views/users/list.php');
				break;
		}
		case 'cart': {
				header('Location: ../Views/users/cart.php');
				break;
		}
		case 'delete': {
				$id = filter_input(INPUT_GET, 'id');
				$mobile = Mobile::delete($id);
				header('Location: ../Views/users/list.php');
				break;
		}
		case 'view': {
				$id = filter_input(INPUT_GET, 'id');
				header('Location: ../Views/users/view.php?id=' . $id);
				break;
		}
		case 'login': {
				header('Location: ../Views/users/login.php');
				break;
		}
		case 'checklogin': {
				$userName = filter_input(INPUT_POST, 'username');
				$password = filter_input(INPUT_POST, 'password');
				$save = new Login($userName, $password);
				$check = Mobile::checkLogin($userName, $password);
				
				if ($check) {
						header('Location: ../Views/users/list.php');
						break;
				} else {
						header('Location: ../Views/users/login.php');
						break;
				}
		}
		default:
			header('Location: ../Views/users/list.php');
			exit();
}
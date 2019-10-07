<?php
/**
 * Created by PhpStorm.
 * User: vvthg
 * Date: 2/19/2019
 * Time: 2:55 PM
 */
$action = 'list';
if (isset($_GET['action']))
    $action = $_GET['action'];
else if (isset($_POST['action']))
    $action = $_POST['action'];

$controller = AppConstats::USER_CONTROLLER;

$userDao = new UserDao();
switch ($action) {
    case 'view':
        $id = filter_input(INPUT_GET, 'id');
        $user = $userDao->FindOne($id);

        include('./Views/Users/view.php');
        break;
    case 'add':
        include('./Views/Users/add.php');
        break;
    case 'add_save':
        $user = new User();
        $user->RetrieveRequestParam();

        $userDao->Insert($user);
        $userDao->upload();
        $message = "Thêm thành viên thành công !!!";
        include('./Views/Users/add.php');
        break;
    case 'edit':
        $id = filter_input(INPUT_GET, 'id');
        $user = $userDao->FindOne($id);

        include('./Views/Users/edit.php');
        break;
    case 'edit_save':
        $user = new User();
        $user->RetrieveRequestParam();

        $userDao->upload();
        $userDao->Update($user);

        $message = "Cập nhập thành công!";
        include('./Views/Users/edit.php');
        break;
    case 'delete':
        $id = filter_input(INPUT_GET, 'id');
        $userDao->Delete($id);

        $message = "The User $id has been delete!";

        $users = $userDao->Find();
        include('./Views/Users/list.php');
        break;
    case 'find':
        $name = filter_input(INPUT_GET, 'name');
        if ($name != null) {
            $users = $userDao->FindByName($name);

            // if (isset($users['name']))
            //     $users = array($users);
        } else
            $users = array();

        include('./Views/Users/find.php');
        break;
    case 'register':
        include './Views/register.php';
        break;
    case 'register_save':

        $username = $_POST['username'];
        $full_name = $_POST['fullname'];
        $mail = $_POST['email'];
        $pass_1 = $_POST['password'];
        $pass_2 = $_POST['password_1'];

        $valid_email = $userDao->is_valid_email($mail);
        $valid_user = $userDao->is_valid_user($username);


        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $error_email = 'Email sai, vui lòng nhập lại email.';
        } elseif ( $valid_email != null) {
            $error_email = 'Email đã được sử dụng.';
        }
        elseif ($valid_user != null){
            $error_user = 'Usernam đã tồn tại.';
        }
        elseif (empty($full_name)) {
            $error_name = 'Usernam đã tồn tại.';
        }
        elseif (empty($pass_1) || empty($pass_2)) {
            $error_pass = 'Vui lòng nhập password';
        } elseif ($pass_1 !== $pass_2) {
            $error_pass_1 = 'Password không khớp.';
        } elseif (strlen($pass_1) < 6) {
            $error_pass = 'Password phải có 6 ký tự trở lên.';
        } else{
            $_FILES['file']['name'] = null;
            $user = new User();
            $user->RetrieveRequestParam();

            $userDao->Insert($user);
            $userDao->upload();
            echo "<script type='text/javascript'>alert('Đăng ký thành công.');</script>";
            include('./Views/login.php');
        }

        break;
    case 'login':
        //Auto login
        if (isset($_COOKIE['username'])) {
            $_SESSION['username'] = $_COOKIE['username'];
            header("location: ./");
        }

        include('./Views/login.php');
        break;
    case 'login_process':
        $username = filter_input(INPUT_POST, 'username');
        $user = filter_input(INPUT_POST, 'username');
        $pass = filter_input(INPUT_POST, 'password');
        $password = sha1(strtoupper($user).':'.strtoupper($pass));
        $remember = filter_input(INPUT_POST, 'remember');

        $user = $userDao->CheckLogin($username, $password);

        if ($user) {
            $_SESSION["user"] = $userDao->is_valid_user($username);
            if ($remember != null) {
                setcookie('username', $username, 60 * 60 * 60 + time());
            }
            session_write_close();
            header("location: ./");
        } else {
//            $user = $userDao->FindOne($id);

            echo "<script type='text/javascript'>alert('Sai user hoac password.');</script>";
            include('./Views/login.php');
        }
        break;
    case 'logout':
        unset($_SESSION['user']);
        unset ($_SESSION['cart']);
        setcookie('username', '', time() - 60);
        header("location: ./");
        break;
    default:
        $users = $userDao->Find();

        include('./Views/Users/list.php');
        break;
}
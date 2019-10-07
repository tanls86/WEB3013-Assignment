<?php
/**
 * Created by PhpStorm.
 * User: vvthg
 * Date: 2/11/2019
 * Time: 3:18 PM
 */
$action = 'index';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} elseif (isset($_POST['action'])) {
    $action = $_POST['action'];
}
switch ($action) {
    case 'cate':
        $controller = AppConstats::Category_CONTROLLER;
        include "./Views/index.php";
        break;
    case 'prod':
        $controller = AppConstats::PRODUCT_CONTROLLER;
        include "./Views/index.php";
        break;
    case 'user':
        $controller = AppConstats::USER_CONTROLLER;
        include "./Views/index.php";
        break;
    case 'order':
        $controller = AppConstats::ORDER_CONTROLLER;
        include "./Views/index.php";
        break;
    case 'contact':
        include "./Views/contact.php";
        break;
    case 'send_mail':
        $subject = $_POST['subject'];
        $message = 'Tên: ' . $_POST['name'] . 'Email: ' . $_POST['email'] . 'Nội dung: ' . $_POST['message'];
        try {
            $send = new SendMail();
            $s = $send->send_Mail($subject, $message);
            echo "<script type='text/javascript'>alert('Gửi thành công.');</script>";
            include './Views/contact.php';
        } catch (Exception $e) {
            echo "<script type='text/javascript'>alert('Gửi thất bại.');</script>";
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            include './Views/contact.php';
        }
        break;
    case 'admin':
        header('location: Admin');
        break;
    default:
        $prodDao = new ProductDao();
        $products = $prodDao->Find();
        $cateDao = new CategoryDao();
        $categories = $cateDao->Find();
        include "./Views/index.php";
        break;
}
<?php
/**
 * Created by PhpStorm.
 * User: vvthg
 * Date: 2/28/2019
 * Time: 10:09 PM
 */
$action = 'list';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} elseif (isset($_POST['action'])) {
    $action = $_POST['action'];
}

$controller = AppConstats::ORDER_CONTROLLER;
$orderDao = new OrderDao();
switch ($action) {
    case 'list':
        $orders = $orderDao->Find();
        include './Views/Orders/list.php';
        break;

    case 'view':
        $order_id = filter_input(INPUT_GET, 'id');

        $details = $orderDao->FindId($order_id);

        include './Views/Orders/view.php';
        break;
    case 'delete':
        $id = filter_input(INPUT_GET, 'id');
        $orderDao->Delete($id);

        $message = "Xoá thành công";

        $orders = $orderDao->Find();
        include('./Views/Orders/list.php');
        break;

    case 'update':
        $id = filter_input(INPUT_GET, 'id');
//        $status = '0';

//        $order = new Order();
//        $order->RetrieveRequestParam();
//
//        $orderDao->updateStatus($order);
        $orderDao->updateStatus($id);

        $orders = $orderDao->Find();
        include('./Views/Orders/list.php');
        break;

}
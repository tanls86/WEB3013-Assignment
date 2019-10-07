<?php
/**
 * Created by PhpStorm.
 * User: vvthg
 * Date: 2/28/2019
 * Time: 2:24 PM
 */
$action = 'view';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} elseif (isset($_POST['action'])) {
    $action = $_POST['action'];
}

$controller = AppConstats::CART_CONTROLLER;
$cartDao = new CartDao();
$orderDao = new OrderDao();
switch ($action) {
    case 'add':
        $product_id = $_GET['product_id'];
        $quantity = $_GET['quantity'];

        $cartDao->addCart($product_id, $quantity);

        $cart = $cartDao->cartItems();
//echo $product_id;
        header("location: ./");
//        include './Views/Cart/view.php';
        break;
    case 'view':
        $cart = $cartDao->cartItems();

        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }
        include './Views/Cart/view.php';
        break;
    case 'update':
        $items = $_POST['items'];
        foreach ( $items as $product_id => $quantity ) {
            if ($quantity == 0) {
                $cartDao->deleteItems($product_id);
            } else {
                $cartDao->updateCart($product_id, $quantity);
            }
        }
        $cart = $cartDao->cartItems();
        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }
        include './Views/Cart/view.php';
        break;
    case 'check_out':
        $status = '0';
        $order = new Order();
        $order->RetrieveRequestParam();

        $order_id = $orderDao->addOrder($order);
        $cart = $cartDao->cartItems();
        foreach ($cart as $product_id => $item){
            $price = $item['price'];
            $amount = $item['quantity'];
            $add = $orderDao->addOrderDetails($order_id, $product_id, $price, $amount);

        }
        $cartDao->clearCart();

        header("location: ./");

        break;




}
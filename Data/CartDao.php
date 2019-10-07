<?php
/**
 * Created by PhpStorm.
 * User: vvthg
 * Date: 2/28/2019
 * Time: 2:37 PM
 */

class CartDao
{

    public function __construct()
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
    }

    public function addCart($product_id, $quantity)
    {
        $_SESSION['cart'][$product_id] = round($quantity, 0);
    }

    public function cartItems() {
        $items = array();
        foreach ($_SESSION['cart'] as $product_id => $quantity ) {
            // Get product data from db
            $prodDao = new ProductDao();
            $product = $prodDao->FindOne($product_id);
            $price = $product['price'];
            $quantity = intval($quantity);

            // Calculate discount
            $total = round($price * $quantity, 0);

            // Store data in items array
            $items[$product_id]['name'] = $product['name'];
            $items[$product_id]['image'] = $product['image'];
            $items[$product_id]['price'] = $price;
            $items[$product_id]['quantity'] = $quantity;
            $items[$product_id]['total'] = $total;
        }
        return $items;
    }

    public function updateCart($product_id, $quantity)
    {
        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id] = round($quantity, 0);
        }
    }

    public function deleteItems($product_id)
    {
        if (isset($_SESSION['cart'][$product_id])) {
            unset($_SESSION['cart'][$product_id]);
        }
    }

    public function cartCount()
    {
        return count($_SESSION['cart']);
    }

    public function clearCart()
    {
        $_SESSION['cart'] = array();
    }

}
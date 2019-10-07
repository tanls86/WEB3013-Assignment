<?php
/**
 * Created by PhpStorm.
 * User: vvthg
 * Date: 2/28/2019
 * Time: 7:26 PM
 */

class OrderDao
{
    var $dbu;

    public function __construct()
    {
        $this->dbu = new DatabaseUtil();
        $this->dbu->Open();
    }

    public function addOrder(Order $order)
    {
        $sql = "INSERT INTO orders(name, telephone, address, status, total, date) VALUES (:name, :telephone, :address, :status, :total, :date)";

        $args = array(
            'name' => $order->Name,
            'telephone' => $order->Telephone,
            'address' => $order->Address,
            'status' => $order->Status,
            'total' => $order->Total,
            'date' => $order->Date
        );

        $this->dbu->Execute($sql, $args);

        $order_id = $this->dbu->GetLastInsertedId();
//        $order_id = "SELECT id FROM orders ORDER BY ma_dh DESC LIMIT 1";
        return $order_id;
    }

    public function addOrderDetails($order_id, $product_id, $price, $amount)
    {
        $sql = "INSERT INTO order_details(order_id, product_id, price, amount) VALUES (:order_id, :product_id, :price,:amount)";

        $stmt = $this->dbu->Exe($sql);
        $stmt->bindValue(':order_id', $order_id);
        $stmt->bindValue(':product_id', $product_id);
        $stmt->bindValue(':price', $price);
        $stmt->bindValue(':amount', $amount);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function Find()
    {
        $sql = "SELECT * FROM orders";

        $orders = $this->dbu->Query($sql, array());

        return $orders;
    }

    public function FindId($order_id)
    {
        $sql = "SELECT * FROM order_details WHERE order_id = :order_id";

        $args = array(
            'order_id' => $order_id
        );

        $order_details = $this->dbu->Query($sql, $args, false);

        return $order_details;
    }

    public function Delete($id)
    {
        $sql = "DELETE FROM orders WHERE id = :id";

        $args = array(
            'id' => $id
        );

        $result = $this->dbu->Execute($sql, $args);

        return $result;
    }

    public function updateStatus($id)
    {
        $sql = "UPDATE orders SET status=0 WHERE orders.id =:id";

        $stmt = $this->dbu->Exe($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $stmt->closeCursor();
    }
}


<?php
/**
 * Created by PhpStorm.
 * User: vvthg
 * Date: 2/12/2019
 * Time: 3:12 PM
 */

class ProductDao
{
    var $dbu;

    public function __construct() {
        $this->dbu = new DatabaseUtil();
        $this->dbu->Open();
    }

    public function Insert(Product $product)
    {
        $sql = "INSERT INTO product(category_id, name, price, sale, image, date, description, amount, view) VALUES (:category_id, :name, :price, :sale, :image, :date, :description, :amount, :view)";

        $args = array(
            "category_id" => $product->CategoryId,
            "name" => $product->Name,
            "price" => $product->Price,
            "sale" => $product->Sale,
            "image" => $product->Image,
            "date" => $product->Date,
            "description" => $product->Description,
            "amount" => $product->Amount,
            "view" => $product->View
        );

        $this->dbu->Execute($sql, $args);

        $product->Id = $this->dbu->GetLastInsertedId();

        return $product;
    }

    public function Delete($id)
    {
        $sql = "DELETE FROM product WHERE id = :id";

        $args = array(
            'id' => $id
        );

        $result = $this->dbu->Execute($sql, $args);

        return $result;
    }

    public function Update(Product $product)
    {
        $sql = "UPDATE product SET category_id = :category_id, name = :name, price = :price, sale = :sale, image = :image, date = :date, description = :description, amount = :amount, view = :view  WHERE id =:id";

        $args = array(
            'id' => $product->Id,
            "category_id" => $product->CategoryId,
            "name" => $product->Name,
            "price" => $product->Price,
            "sale" => $product->Sale,
            "image" => $product->Image,
            "date" => $product->Date,
            "description" => $product->Description,
            "amount" => $product->Amount,
            "view" => $product->View
        );

        $result = $this->dbu->Execute($sql, $args);

        return $result;
    }

    public function Find()
    {
        $sql = "SELECT * FROM product ORDER BY id DESC";

        $products = $this->dbu->Query($sql, array());

        return $products;
    }

    public function FindOne($id)
    {
        $sql = "SELECT * FROM product WHERE id = :id";

        $args = array(
            'id' => $id
        );

        $product = $this->dbu->Query($sql, $args, true);

        return $product;
    }

    public function FindIdCategory($category_id)
    {
        $sql = "SELECT * FROM product WHERE category_id = :category_id";

        $args = array(
            'category_id' => $category_id
        );

        $products = $this->dbu->Query($sql, $args, false);

        return $products;
    }

    public function FindByName($name)
    {
        $sql = "SELECT * FROM product WHERE name LIKE :name";

        $args = array(
            'name' => "%$name%"
        );

        $products = $this->dbu->Query($sql, $args);

        return $products;
    }

    public function upload()
    {
        if (isset($_POST["ok"])) //kiem tra xem nguoi xu dung da bam vao nut "tai len" hay chua
        {

            if ($_FILES["file"]["name"] != NULL) {

                if ($_FILES["file"]["type"] == "image/jpeg"
                    || $_FILES["file"]["type"] == "image/png"
                    || $_FILES["file"]["type"] == "image/gif"
                ) {
                    $path = "Assets/img/products/"; // file luu vào thu muc chua file upload
                    $tmp_name = $_FILES['file']['tmp_name'];
                    $name = $_FILES['file']['name'];
// Upload file
                    move_uploaded_file($tmp_name, $path . $name);
                }
            }
        }
        }


}
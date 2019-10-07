<?php
/**
 * Created by PhpStorm.
 * User: vvthg
 * Date: 2/12/2019
 * Time: 3:41 PM
 */
$action = 'list';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} elseif (isset($_POST['action'])) {
    $action = $_POST['action'];
}

$controller = AppConstats::PRODUCT_CONTROLLER;

$prodDao = new ProductDao();
$cateDao = new CategoryDao();
switch ($action) {
    case 'view':
        $id = filter_input(INPUT_GET, 'id');
        $product = $prodDao->FindOne($id);
        $category = $cateDao->FindOne($product['category_id']);

        include "./Views/Product/view.php";
        break;
    case 'add':
        $categories = $cateDao->Find();
        include "./Views/Product/add.php";
        break;
    case 'add_save':
        $product = new Product();
        $product->RetrieveRequestParam();


        $prodDao->Insert($product);
        $prodDao->upload();
        $message = 'Thêm sản phẩm thành công.!';
        include "./Views/Product/add.php";
        break;
    case 'edit':
        $id = filter_input(INPUT_GET, 'id');
        $product = $prodDao->FindOne($id);
        $cateDao = new CategoryDao();
        $categories = $cateDao->Find();

        include "./Views/Product/edit.php";
        break;

    case 'edit_save':
        $product = new Product();
        $product->RetrieveRequestParam();

        $r = $prodDao->Update($product);
        $prodDao->upload();
        if (isset($r)) {
            $message = 'Cập nhập thành công.!';
        }
        include "./Views/Product/edit.php";
        break;
    case 'delete':
        $id = filter_input(INPUT_GET, 'id');
        $prodDao->Delete($id);

        $message = "";

        $products = $prodDao->Find();

        include "./Views/Product/list.php";
        break;
    case 'find':
        $name = filter_input(INPUT_GET, 'name');
        $categories = $cateDao->Find();
        if ($name != null) {
            $products = $prodDao->FindByName($name);
        } else
            $products = array();
        include "./Views/Product/find.php";
        break;
    case 'list_cate':
        $category_id = filter_input(INPUT_GET, 'category_id');
        $products = $prodDao->FindIdCategory($category_id);
        $categories = $cateDao->Find();
        $cate = $cateDao->FindOne($category_id);
        include "./Views/Product/list_category.php";
        break;
    default:
        $products = $prodDao->Find();

        include('./Views/Product/list.php');
        break;
}
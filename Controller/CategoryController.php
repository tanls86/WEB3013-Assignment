<?php
/**
 * Created by PhpStorm.
 * User: vvthg
 * Date: 2/10/2019
 * Time: 7:31 PM
 */
$action = 'list';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} elseif (isset($_POST['action'])) {
    $action = $_POST['action'];
}

$controller = AppConstats::Category_CONTROLLER;

$cateDao = new CategoryDao();
switch ($action) {
    case 'view':
        $id = filter_input(INPUT_GET, 'id');
        $cate = $cateDao->FindOne($id);

        include "./Views/Categories/view.php";
        break;
    case 'add':
        include "./Views/Categories/add.php";
        break;
    case 'add_save':
        $cate = new Category();
        $cate->RetrieveRequestParam();

        $cateDao->Insert($cate);
        $message = "Thêm loại hàng thành công.!";
        include "./Views/Categories/add.php";
        break;
    case 'edit':
        $id = filter_input(INPUT_GET, 'id');
        $category = $cateDao->FindOne($id);

        include "./Views/Categories/edit.php";
        break;
    case 'edit_save':
        $category = new Category();
        $category->RetrieveRequestParam();

        $cateDao->Update($category);
        $message = "Cập nhập loại hàng thành công.!";
        include "./Views/Categories/edit.php";
        break;

    case 'delete':
        $id = filter_input(INPUT_GET, 'id');
        $cateDao->Delete($id);

        $message = "The Category $id has been delete!";

        $categories = $cateDao->Find();

        include "./Views/Categories/list.php";
        break;
    case 'find':
        $name = filter_input(INPUT_GET, 'name');
        if ($name != null) {
            $categories = $cateDao->FindByName($name);
        } else
            $users = array();
        include "../Views/Categories/find.php";
        break;
    default:
        $categories = $cateDao->Find();

        include('./Views/Categories/list.php');
        break;
}
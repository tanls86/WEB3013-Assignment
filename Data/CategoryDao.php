<?php
/**
 * Created by PhpStorm.
 * User: vvthg
 * Date: 1/30/2019
 * Time: 8:24 AM
 */

class CategoryDao
{
    var $dbu;

    public function __construct()
    {
        $this->dbu = new DatabaseUtil();
        $this->dbu->Open();
    }

    public function Insert(Category $category)
    {
        $sql = "INSERT INTO category(name_category) VALUES (:name_category)";

        $args = array(
            "name_category" => $category->NameCategory
        );

        $this->dbu->Execute($sql, $args);

        $category->Id = $this->dbu->GetLastInsertedId();

        return $category;
    }

    public function Delete($id)
    {
        $sql = "DELETE FROM category WHERE id = :id";

        $args = array(
            'id' => $id
        );

        $result = $this->dbu->Execute($sql, $args);

        return $result;
    }

    public function Update(Category $category)
    {
        $sql = "UPDATE category SET name_category = :name_category WHERE id =:id";

        $args = array(
            "id"=>$category->Id,
            "name_category" => $category->NameCategory
        );

        $result = $this->dbu->Execute($sql, $args);

        return $result;
    }

    public function Find()
    {
        $sql = "SELECT * FROM category";

        $categories = $this->dbu->Query($sql, array());

        return $categories;
    }

    public function FindOne($id)
    {
        $sql = "SELECT * FROM category WHERE id = :id";

        $args = array(
            'id' => $id
        );

        $category = $this->dbu->Query($sql, $args, true);

        return $category;
    }

    public function FindByName($name)
    {
        $sql = "SELECT * FROM category WHERE name_category LIKE :name_category";

        $args = array(
            'name_category' => "%$name%"
        );

        $category = $this->dbu->Query($sql, $args);

        return $category;
    }
}
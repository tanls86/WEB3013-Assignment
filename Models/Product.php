<?php
/**
 * Created by PhpStorm.
 * User: vvthg
 * Date: 2/12/2019
 * Time: 3:26 PM
 */

class Product
{
    public $Id;
    public $CategoryId;
    public $Name;
    public $Price;
    public $Sale;
    public $Image;
    public $Date;
    public $Description;
    public $Amount;
    public $View;

    public function RetrieveRequestParam()
    {
        $this->CategoryId = filter_input(INPUT_POST, 'category_id');
        $this->Name = filter_input(INPUT_POST, 'name');
        $this->Price = filter_input(INPUT_POST, 'price');
        $this->Sale = filter_input(INPUT_POST, 'sale');
        if( $_FILES['file']['name'] != null){
            $this->Image = $_FILES['file']['name'];
        }else{
            $this->Image = filter_input(INPUT_POST, 'image');
        }
        $this->Date = filter_input(INPUT_POST, 'date');
        $this->Description = filter_input(INPUT_POST, 'description');
        $this->Amount = filter_input(INPUT_POST, 'amount');
        $this->View = filter_input(INPUT_POST, 'view');

        $id =  filter_input(INPUT_POST, 'id');

        if ($id != null) $this->Id = $id;
    }
}
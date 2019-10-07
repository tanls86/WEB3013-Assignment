<?php
/**
 * Created by PhpStorm.
 * User: vvthg
 * Date: 2/28/2019
 * Time: 7:25 PM
 */

class Order
{
    public $Id;
    public $Name;
    public $Telephone;
    public $Address;
    public $Status;
    public $Total;
    public $Date;

    public function RetrieveRequestParam()
    {
        $this->Name = filter_input(INPUT_POST, 'name');
        $this->Telephone = filter_input(INPUT_POST, 'telephone');
        $this->Address = filter_input(INPUT_POST, 'address');
        $this->Status = filter_input(INPUT_POST, 'status');

        $this->Total = filter_input(INPUT_POST, 'total');
        $this->Date = date("Y-m-d");
        $id =  filter_input(INPUT_POST, 'id');

        if ($id != null) $this->Id = $id;
    }
}
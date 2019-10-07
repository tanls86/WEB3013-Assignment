<?php

class DatabaseUtil
{
    var $db = null;
    var $server = null;
    var $databaseName = null;
    var $username = null;
    var $password = null;

    public function __construct($server="localhost", $databaseName = "demoshop",
                                $username = "root", $password= "") {
        $this->databaseName = $databaseName;
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
    }

    public function Open()
    {
        $dns = "mysql:host=$this->server;dbname=$this->databaseName;charset=utf8";
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

        $this->db = new PDO($dns, $this->username, $this->password, $options);

        return $this->db;
    }

    public function Query($query, $args, $queryOne = false)
    {
        $statement = $this->db->prepare($query);

        if (sizeof($args) >0)
        {
            foreach ($args as $key => $value) {
                $statement->bindValue($key, $value);
            }
        }
        $statement->execute();

        if ($queryOne)
            $results = $statement->fetch();
        else
            $results = $statement->fetchAll();
        $statement->closeCursor();

        return $results;
    }

    public function Execute($query, $args)
    {
        $statement = $this->db->prepare($query);

        if (sizeof($args)  >0)
        {
            foreach ($args as $key => $value) {
                $statement->bindValue($key, $value);
            }
        }
        $results = $statement->execute();


        return $results;
    }

    public function Exe($query)
    {
        $statement = $this->db->prepare($query);


        return $statement;
    }

    public function GetLastInsertedId()
    {
        return $this->db->lastInsertId();
    }
}


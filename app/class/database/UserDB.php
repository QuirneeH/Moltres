<?php
//Nome da Class
namespace App\Class\DataBase;

use APP\Core\Connection;

class UserDB
{
    //Atributos
    private $stmtDB;

    //Métodos
    public function __construct()
    {
        $this->stmtDB = Connection::connect();
    }

    public function select()
    {

    }

    public function insert()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
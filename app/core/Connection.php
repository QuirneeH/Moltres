<?php
//Nome da Class
namespace APP\Core;
//uso
use mysqli;

abstract class Connection 
{
    static $link;

    public static function connect()
    {                           //Ambiente, Usuario, Senha, Nome do Banco
        self::$link = new mysqli("localhost", "root", "", "");
        return self::$link;
    }
}
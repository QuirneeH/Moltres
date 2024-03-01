<?php
//Nome da Class
namespace APP\Core;
//usos
use mysqli;

abstract class Connection 
{
    //Atributos
    static $connect;

    //Métodos
    /**
     * Efetua uma conexão com o banco de dados
     * @return $connect
     */
    public static function connect(): mysqli
    {                           //Servidor, Usuário, Senha, Nome do Banco
        self::$connect = new mysqli("localhost", "root", "", "");
        return self::$connect;
    }
}
<?php
//Nome da Class
namespace APP\Core;
//usos
use mysqli;

abstract class Connection 
{
    //Atributos
    static $link;

    //Métodos
    /**
     * Conexão com o Banco de Dados
     */
    public static function connect()
    {   //                        Ambiente, Usuario, Senha, Nome do Banco
        self::$link = new mysqli("localhost", "root", "", "");
        return self::$link;
    }
}
<?php
//Nome da Class
namespace App\Web;

class Error
{
    /**
     * Impressao da View de Erro
     * @param $data
     */
    public static function error($data): void
    {
        require_once("views/error/error.php");
    }
}
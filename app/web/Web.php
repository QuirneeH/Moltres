<?php
//Nome da Class
namespace App\Web;

class Web
{
    /**
     * Impressão da View de Bem Vindo
     */
    public static function welcome($info)
    {
        require_once("resource/welcome/layout/welcome.html");
    }

    /**
     * Impressao da View de Erro
     */
    public static function error($info)
    {
        require_once("resource/error/layout/error.php");
    }
}
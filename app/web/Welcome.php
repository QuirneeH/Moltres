<?php
//Nome da Class
namespace App\Web;

class Welcome
{
    /**
     * Impressão da View de Bem Vindo
     * @param $data
     */
    public static function welcome($data)
    {
        require_once("views/welcome/welcome.html");
    }
}

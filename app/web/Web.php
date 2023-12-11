<?php
//Nome da Class
namespace App\Web;

class Web
{
    public static function welcome($info)
    {
        require_once("resource/welcome/layout/welcome.html");
    }

    public static function error($info)
    {
        require_once("resource/error/layout/error.php");
    }
}
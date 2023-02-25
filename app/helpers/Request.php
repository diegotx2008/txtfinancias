<?php
namespace app\helpers;

class Request{

    public static function get():string
    {   //pegando o método e convertendo para minusculo
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
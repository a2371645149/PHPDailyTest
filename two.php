<?php

class Two
{
    public static function ceshi()
    {
        echo '这是一个简单的单例模式';
    }
}

$res = Two::ceshi();
echo $res;

<?php
 class  One{
    public static function ceshi(){
        echo '这是一个简单的单例模式';
    }
}
$res = One::ceshi();
echo $res;

<?php 
class Three {
    public static $a="a";
    public static function b(){
        return "b";
        
    }
    public static function c(){
        return self::$a .self::b();
    }
}
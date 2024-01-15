<?php
trait A
{
    public $a = "a";
    public function aa(){
        return "this is aa";
    }
}
trait B
{
    public $b = "b";
    public function bb(){
        return "this is bb";
    }
}
trait C
{
    public $c = "c";
    public function cc(){
        return "this is cc";
    }
}
class TestRun{
    use A,B,C;
}
$run=new TestRun;
print_r($run);

<?php
abstract class A
{
    public $a = 'a';
    public function aa()
    {
        return "a";
    }
    abstract function bb();
};
class B extends A
{
    function bb()
    {
        return "aa";
    }
};
$t = new B;
print_r($t);
///In heritance mhr multiple parent ko extend lo ma ya dl atwt trait ko use dl ko lo chin dr ko trait htl su yay p trait ko khw chin dl class htl use nk khw yay lo ya 
///abstraction mhr ll extend ka abstract class twy amyr g ka ny extend lo m aya ae do =t abstract class lo myo overview pl yya p pyn khw tone lo ya dr ka interface thi ko dot implent keyword nk use 
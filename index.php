<?php 
// require_once "./classes/Fruit.php";
// print_r(Fruit::$x);
// print_r(Fruit::x());
// $fruit1=new Fruit("apple","red");
// $fruit1->name="apple";
// $fruit1->color="red";

// var_dump($fruit1);
// echo $fruit1->detail();
require_once "./autoload.php";

// $student1=new Students("Thurein zaw","male","2003");
// echo $student1->introduction();
// print_r($student1);
$user=new Db("testing");

$user->create(["sname"=>"Thurein Zaw","money"=>5000]);
var_dump($user->read());
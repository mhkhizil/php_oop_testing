<?php 
class Students {
    public $name,$gender,$birthYear,$namePrefix,$age;
    
    function __construct($name,$gender,$birthYear)
    {
        $this->name=$name;
      
        $this->gender=$gender;
        $this->birthYear=$birthYear;
        $this->namePrefix=$this->gender==="male"?"Mr.":"Ms.";
        $this->age=date("Y")-$this->birthYear;
       
        
    }
    public function showFullName(){
        return $this->namePrefix .$this->name;
    }
    public function introduction(){
        return "I am ".$this->showFullName()."and i am $this->age year".($this->age>1?'s':'')." old ";
    }
}
<?php 
class QuerBuilder5{
    public $tableName,$where,$orWhere,$order;
     function __construct($tableName ) {
        $this->tableName = $tableName;
        $this->where=[];
        $this->orWhere=[];
        $this->order=[];
    }
    public function orderBy ($columnName,$sort="ASC"){
        $this->order []="$columnName $sort";
     return $this;   
    }
    public function where ($columnName,$operator,$value){
        $this->where []="$columnName $operator '$value'";
     return $this;   
    }
    public function orWhere ($columnName,$operator,$value){
        $this->orWhere []="$columnName $operator '$value'";
     return $this;   
    }
    public function sql(){
        $sql="SELECT * FROM ".$this->tableName;
        if (!empty($this->where)) {
            $sql.=" WHERE ".join(" AND ",$this->where);
        };
        if (!empty($this->orWhere)) {
            $sql.=" OR " .join(" OR ",$this->orWhere);
        };
        if (!empty($this->order)) {
            $sql.=" WHERE BY " .join(",",$this->order);
        };
        
        $sql.=";";
       
        return $sql;
    }
}
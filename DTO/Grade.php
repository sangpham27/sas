<?php
namespace DTO;

class Grade {
    private $grade_id;
    private $grade_name;

    public function __construct(){
        $this->grade_id = 0;
        $this->grade_name = "";
    }

    public function __set($name, $value){
        if(isset($this->$name))
            $this->$name = $value;
    }

    public function __get($name){
        return isset($this->$name) ? $this->$name : null;
    }
}
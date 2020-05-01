<?php
namespace DTO;

class teacher {
    private $teacher_id;
    private $teacher_name;
    private $teacher_address;
    private $teacher_doj;
    private $teacher_grade_id;

    public function __construct(){
        $this->teacher_id = 0;
        $this->teacher_name = "";
        $this->teacher_address = "";
        $this->teacher_doj = "";
        $this->teacher_grade_id = 0;
    }

    public function __set($name, $value){
        if(isset($this->$name))
            $this->$name = $value;
    }

    public function __get($name){
        return isset($this->$name) ? $this->$name : null;
    }

}

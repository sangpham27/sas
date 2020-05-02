<?php
namespace DTO;

class Student {
    private $student_id;
    private $student_name;
    private $student_roll_number;
    private $student_dob;
    private $student_grade_id;

    public function __construct(){
        $this->student_id = 0;
        $this->student_name = "";
        $this->student_roll_number = "";
        $this->student_dob = "";
        $this->student_grade_id = 0;
    }

    public function __set($name, $value){
        if(isset($this->$name))
            $this->$name = $value;
    }

    public function __get($name){
        return isset($this->$name) ? $this->$name : null;
    }
}
<?php
namespace DTO;

class attendance {
    private $attendance_id;
    private $student_id;
    private $attendance_status;
    private $attendance_date;
    private $teacher_id;

    public function __construct(){
        $this->student_id = 0;
        $this->attendance_id = 0;
        $this->attendance_status = 0;
        $this->attendance_date = 0;
        $this->teacher_id = 0;
    }

    public function __set($name, $value){
        if(isset($this->$name))
            $this->$name = $value;
    }

    public function __get($name){
        return isset($this->$name) ? $this->$name : null;
    }
}
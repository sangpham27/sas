<?php 
namespace DAO;
use Helpers\Database;
use DTO\Student;


class StudentDAO extends Database {
    public function __construct(){
        parent::__construct();
    }

    public function __destruct(){
        parent::__destruct();
    }

    public function getAll(){
        $query = "SELECT student_id,student_name,student_roll_number,student_dob,student_grade_id FROM tbl_student";
        $this->query($query);
        $objects = $this->resultObjects();

        if($objects == null || $this->rowCount() === 0)
            return null;
        
        $lstStudent = [];
        foreach ($objects as $obj)
        {
            $student = new Student();
            $student->student_id = $obj->student_id;
            $student->student_name = $obj->student_name;
            $student->student_roll_number = $obj->student_roll_number;
            $student->student_dob = $obj->student_dob;
            $student->student_grade_id = $obj->student_grade_id;

            $lstStudent[] = $student;
        }
        return $lstStudent;
    }

    public function getByID($id){
        $query = "SELECT student_id,student_name,student_roll_number,student_dob,student_grade_id FROM tbl_student WHERE student_id = :student_id";
        $this->query($query);
        $this->bind("student_id",$id);
        $objects = $this->single();

        if($objects == null || $this->rowCount() === 0)
        return null;

        $student = new Student();
        $student->student_id = $objects->student_id;
        $student->student_name = $objects->student_name;
        $student->student_roll_number = $objects->student_roll_number;
        $student->student_dob = $objects->student_dob;
        $student->student_grade_id = $objects->student_grade_id;
    
        return $student;
    }

    public function Insert($student)
    {
        $query = "INSERT INTO `tbl_student`(`student_name`,`student_roll_number`,`student_dob`,`student_grade_id`) VALUES (:student_name,:student_roll_number,:student_dob,:student_grade_id)";
        $this->query($query);
        $this->bind("student_name",$student->student_name);
        $this->bind("student_roll_number",$student->student_roll_number);
        $this->bind("student_dob",$student->student_dob);
        $this->bind("student_grade_id",$student->student_grade_id);

        return $this->execute();
    }

    public function Update($student){
        $query = "UPDATE `tbl_student` SET `student_name`= :student_name, `student_roll_number`= :student_roll_number,`student_dob`= :student_dob,`student_grade_id`= :student_grade_id ";
        $this->query($query);
        $this->bind("student_name",$student->student_name);
        $this->bind("student_roll_number",$student->student_roll_number);
        $this->bind("student_dob",$student->student_dob);
        $this->bind("student_grade_id",$student->student_grade_id);
        return $this->execute();

    }

    public function Delete($student)
    {
        $query = "DELETE FROM `tbl_student` WHERE student_id= :student_id";
        $this->query($query);
        $this->bind("student_id",$student->student_id);
        return $this->execute();
    }


}
<?php 
namespace DAO;
use Helpers\Database;
use DTO\Teacher;


class TeacherDAO extends Database {
    public function __construct(){
        parent::__construct();
    }

    public function __destruct(){
        parent::__destruct();
    }

    public function getAll(){
        $query = "SELECT teacher_id,teacher_name,teacher_address,teacher_doj,teacher_grade_id FROM tbl_teacher";
        $this->query($query);
        $objects = $this->resultObjects();

        if($objects == null || $this->rowCount() === 0)
            return null;
        
        $lstTeacher = [];
        foreach ($objects as $obj)
        {
            $teacher = new Teacher();
            $teacher->teacher_id = $obj->teacher_id;
            $teacher->teacher_name = $obj->teacher_name;
            $teacher->teacher_address = $obj->teacher_address;
            $teacher->teacher_doj = $obj->teacher_doj;
            $teacher->teacher_grade_id = $obj->teacher_grade_id;

            $lstTeacher[] = $teacher;
        }
        return $lstTeacher;
    }

    public function getByID($id){
        $query = "SELECT teacher_id,teacher_name,teacher_address,teacher_doj,teacher_grade_id FROM tbl_teacher WHERE teacher_id = :teacher_id";
        $this->query($query);
        $this->bind("teacher_id",$id);
        $objects = $this->single();

        if($objects == null || $this->rowCount() === 0)
        return null;

        $teacher = new Teacher();
        $teacher->teacher_id = $obj->teacher_id;
        $teacher->teacher_name = $obj->teacher_name;
        $teacher->teacher_address = $obj->teacher_address;
        $teacher->teacher_doj = $obj->teacher_doj;
        $teacher->teacher_grade_id = $obj->teacher_grade_id;
    
        return $teacher;
    }

    public function Insert($teacher)
    {
        $query = "INSERT INTO `tbl_teacher`(`teacher_name`,`teacher_address`,`teacher_doj`,`teacher_grade_id`) VALUES (:teacher_name,:teacher_address,:teacher_doj,:teacher_grade_id)";
        $this->query($query);
        $this->bind("teacher_name",$teacher->teacher_name);
        $this->bind("teacher_address",$teacher->teacher_address);
        $this->bind("teacher_doj",$teacher->teacher_doj);
        $this->bind("teacher_grade_id",$teacher->teacher_grade_id);

        return $this->execute();
    }

    public function Update($teacher){
        $query = "UPDATE `tbl_teacher` SET `teacher_name`= :teacher_name, `teacher_address`= :teacher_address,`teacher_doj`= :teacher_doj,`teacher_grade_id`= :teacher_grade_id ";
        $this->query($query);
        $this->bind("teacher_name",$teacher->teacher_name);
        $this->bind("teacher_address",$teacher->teacher_address);
        $this->bind("teacher_doj",$teacher->teacher_doj);
        $this->bind("teacher_grade_id",$teacher->teacher_grade_id);
        return $this->execute();

    }

    public function Delete($teacher)
    {
        $query = "DELETE FROM `tbl_teacher` WHERE teacher_id= :teacher_id";
        $this->query($query);
        $this->bind("teacher_id",$teacher->teacher_id);
        return $this->execute();
    }


}
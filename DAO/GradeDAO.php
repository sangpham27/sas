<?php 
namespace DAO;
use Helpers\Database;
use DTO\Grade;


class GradeDAO extends Database {
    public function __construct(){
        parent::__construct();
    }

    public function __destruct(){
        parent::__destruct();
    }

    public function getAll(){
        $query = "SELECT grade_id,grade_name FROM tbl_grade";
        $this->query($query);
        $objects = $this->resultObjects();

        if($objects == null || $this->rowCount() === 0)
            return null;
        
        $lstGrade = [];
        foreach ($objects as $obj)
        {
            $grade = new Grade();
            $grade->grade_id = $obj->grade_id;
            $grade->grade_name = $obj->grade_name;

            $lstGrade[] = $grade;
        }
        return $lstGrade;
    }

    public function getByID($id){
        $query = "SELECT grade_id,grade_name FROM tbl_grade WHERE grade_id = :grade_id";
        $this->query($query);
        $this->bind("grade_id",$id);
        $objects = $this->single();

        if($objects == null || $this->rowCount() === 0)
        return null;

        $grade = new Grade();
        $grade->grade_id = $objects->grade_id;
        $grade->grade_name = $objects->grade_name;
    
        return $grade;
    }

    public function Insert($grade)
    {
        $query = "INSERT INTO `tbl_grade`(`grade_name`) VALUES (:grade_name)";
        $this->query($query);
        $this->bind("grade_name",$grade->grade_name);

        return $this->execute();
    }

    public function Update($grade){
        $query = "UPDATE `tbl_grade` SET `grade_name`= :grade_name";
        $this->query($query);
        $this->bind("grade_name",$grade->grade_name);
        return $this->execute();

    }

    public function Delete($grade)
    {
        $query = "DELETE FROM `tbl_grade` WHERE grade_id= :grade_id";
        $this->query($query);
        $this->bind("grade_id",$grade->grade_id);
        return $this->execute();
    }


}
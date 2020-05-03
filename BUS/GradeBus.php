<?php 
namespace BUS;

use DAO\GradeDAO;

class GradeBus {
    private $gradeDAO;
    
    public function __construct(){
        $this->gradeDAO = new GradeDAO();
    }

    public function __destruct(){
        unset($this->GradeDAO);
    }

    public function getAll(){
        return $this->GradeDAO->getAll();
    }

    public function getByID($id) {
        return $this->GradeDAO->getByID($id);
    }

    public function Insert($grade) {
        return $this->GradeDAO->Insert($grade);
    }

    public function Update($grade) {
        return $this->GradeDAO->Update($grade);
    }

    public function Delete($grade) {
        return $this->GradeDAO->Delete($grade);
    }

}
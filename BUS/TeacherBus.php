<?php 
namespace BUS;

use DAO\TeacherDAO;

class TeacherBus {
    private $teacherDAO;
    
    public function __construct(){
        $this->teacherDAO = new TeacherDAO();
    }

    public function __destruct(){
        unset($this->teacherDAO);
    }

    public function getAll(){
        return $this->teacherDAO->getAll();
    }

    public function getByID($id) {
        return $this->teacherDAO->getByID($id);
    }

    public function Insert($teacher) {
        return $this->teacherDAO->Insert($teacher);
    }

    public function Update($teacher) {
        return $this->teacherDAO->Update($teacher);
    }

    public function Delete($teacher) {
        return $this->teacherDAO->Delete($teacher);
    }

}
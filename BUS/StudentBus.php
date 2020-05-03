<?php 
namespace BUS;

use DAO\StudentDAO;

class StudentBus {
    private $studentDAO;
    
    public function __construct(){
        $this->studentDAO = new StudentDAO();
    }

    public function __destruct(){
        unset($this->studentDAO);
    }

    public function getAll(){
        return $this->studentDAO->getAll();
    }

    public function getByID($id) {
        return $this->studentDAO->getByID($id);
    }

    public function Insert($student) {
        return $this->studentDAO->Insert($student);
    }

    public function Update($student) {
        return $this->studentDAO->Update($student);
    }

    public function Delete($student) {
        return $this->studentDAO->Delete($student);
    }

}
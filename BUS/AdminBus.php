<?php 
namespace BUS;

use DAO\AdminDAO;
use DAO\GradeDAO;
use DAO\StudentDAO;
use DAO\TeacherDAO;
use DAO\AttendanceDAO;

class AdminBus {
    private $adminDAO;
    
    public function __construct(){
        $this->adminDAO = new AdminDAO();
    }

    public function __destruct(){
        unset($this->adminDAO);
    }

    public function getAll(){
        return $this->adminDAO->getAll();
    }

    public function getByID($id) {
        return $this->adminDAO->getByID($id);
    }

    public function Insert($admin) {
        return $this->adminDAO->Insert($admin);
    }

    public function Update($admin) {
        return $this->adminDAO->Update($admin);
    }

    public function Delete($admin) {
        return $this->adminDAO->Delete($admin);
    }

}
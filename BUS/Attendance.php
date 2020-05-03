<?php 
namespace BUS;

use DAO\AttendanceDAO;

class AttendanceBus {
    private $attendanceDAO;
    
    public function __construct(){
        $this->attendanceDAO = new AttendanceDAO();
    }

    public function __destruct(){
        unset($this->attendanceDAO);
    }

    public function getAll(){
        return $this->attendanceDAO->getAll();
    }

    public function getByID($id) {
        return $this->attendanceDAO->getByID($id);
    }

    public function Insert($attendance) {
        return $this->attendanceDAO->Insert($attendance);
    }

    public function Update($attendance) {
        return $this->attendanceDAO->Update($attendance);
    }

    public function Delete($attendance) {
        return $this->attendanceDAO->Delete($attendance);
    }

}
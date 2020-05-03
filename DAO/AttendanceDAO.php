<?php 
namespace DAO;
use Helpers\Database;
use DTO\Attendance;


class AttendanceDAO extends Database {
    public function __construct(){
        parent::__construct();
    }

    public function __destruct(){
        parent::__destruct();
    }

    public function getAll(){
        $query = "SELECT attendance_id,student_id,attendance_status,attendance_date,teacher_id FROM tbl_attendance";
        $this->query($query);
        $objects = $this->resultObjects();

        if($objects == null || $this->rowCount() === 0)
            return null;
        
        $lstAttendance = [];
        foreach ($objects as $obj)
        {
            $attendance = new Attendance();
            $attendance->attendance_id = $obj->attendance_id;
            $attendance->student_id = $obj->student_id;
            $attendance->attendance_status = $obj->attendance_status;
            $attendance->attendance_date = $obj->attendance_date;
            $attendance->teacher_id = $obj->teacher_id;

            $lstAttendance[] = $attendance;
        }
        return $lstAttendance;
    }

    public function getByID($id){
        $query = "SELECT attendance_id,student_id,attendance_status,attendance_date,teacher_id FROM tbl_attendance WHERE attendance_id = :attendance_id";
        $this->query($query);
        $this->bind("attendance_id",$id);
        $objects = $this->single();

        if($objects == null || $this->rowCount() === 0)
        return null;

        $attendance = new Attendance();
        $attendance->attendance_id = $obj->attendance_id;
        $attendance->student_id = $obj->student_id;
        $attendance->attendance_status = $obj->attendance_status;
        $attendance->attendance_date = $obj->attendance_date;
        $attendance->teacher_id = $obj->teacher_id;
    
        return $attendance;
    }

    public function Insert($attendance)
    {
        $query = "INSERT INTO `tbl_attendance`(`student_id`,`attendance_status`,`attendance_date`,`teacher_id`) VALUES (:student_id,:attendance_status,:attendance_date,:teacher_id)";
        $this->query($query);
        $this->bind("student_id",$attendance->student_id);
        $this->bind("attendance_status",$attendance->attendance_status);
        $this->bind("attendance_date",$attendance->attendance_date);
        $this->bind("teacher_id",$attendance->teacher_id);

        return $this->execute();
    }

    public function Update($attendance){
        $query = "UPDATE `tbl_attendance` SET `student_id`= :student_id, `attendance_status`= :attendance_status,`attendance_date`= :attendance_date,`teacher_id`= :teacher_id ";
        $this->query($query);
        $this->bind("student_id",$attendance->student_id);
        $this->bind("attendance_status",$attendance->attendance_status);
        $this->bind("attendance_date",$attendance->attendance_date);
        $this->bind("teacher_id",$attendance->teacher_id);
        return $this->execute();

    }

    public function Delete($attendance)
    {
        $query = "DELETE FROM `tbl_attendance` WHERE attendance_id= :attendance_id";
        $this->query($query);
        $this->bind("attendance_id",$attendance->attendance_id);
        return $this->execute();
    }


}
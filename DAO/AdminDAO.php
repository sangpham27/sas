<?php 
namespace DAO;
use Helpers\Database;
use DTO\Admin;


class AdminDAO extends Database {
    public function __construct(){
        parent::__construct();
    }

    public function __destruct(){
        parent::__destruct();
    }

    public function getAll(){
        $query = "SELECT admin_id,admin_user_name,admin_password FROM tbl_admin";
        $this->query($query);
        $objects = $this->resultObjects();

        if($objects == null || $this->rowCount() === 0)
            return null;
        
        $lstAcc = [];
        foreach ($objects as $obj)
        {
            $acc = new Admin();
            $acc->admin_id = $obj->admin_id;
            $acc->admin_user_name = $obj->admin_user_name;
            $acc->admin_password = $obj->admin_password;

            $lstAcc[] = $acc;
        }
        return $lstAcc;
    }

    public function getByID($id){
        $query = "SELECT admin_id,admin_user_name,admin_password FROM tbl_admin WHERE admin_id = :admin_id";
        $this->query($query);
        $this->bind("admin_id",$id);
        $objects = $this->single();

        if($objects == null || $this->rowCount() === 0)
        return null;

        $acc = new Admin();
        $acc->admin_id = $obj->admin_id;
        $acc->admin_user_name = $obj->admin_user_name;
        $acc->admin_password = $obj->admin_password;
    
        return $acc;
    }

    public function Insert($admin)
    {
        $query = "INSERT INTO `tbl_admin`(`admin_user_name`,`admin_password`) VALUES (:admin_user_name,:admin_password)";
        $this->query($query);
        $this->bind("admin_user_name",$admin->admin_user_name);
        $this->bind("admin_password",$admin->admin_password);

        return $this->execute();
    }

    public function Update($admin){
        $query = "UPDATE `tbl_admin` SET `admin_user_name`= :admin_user_name, `admin_password`= :admin_password ";
        $this->query($query);
        $this->bind("admin_user_name",$admin->admin_user_name);
        $this->bind("admin_password",$admin->admin_password);
        return $this->execute();

    }

    public function Delete($admin)
    {
        $query = "DELETE FROM `tbl_admin` WHERE admin_id= :admin_id";
        $this->query($query);
        $this->bind("admin_id",$admin_id);
        return $this->execute();
    }


}
<?php
namespace DTO;

class admin {
    private $admin_id;
    private $admin_user_name;
    private $admin_password;

    public function __construct(){
        $this->admin_id = 0;
        $this->admin_user_name ="";
        $this->admin_password = "";
    }

    public function __set($name, $value){
        if(isset($this->$name))
            $this->$name = $value;
    }

    public function __get($name){
        return isset($this->$name) ? $this->$name : null;
    }

}
?>

